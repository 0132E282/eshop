<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateFormCreateProduct;
use App\Models\Loaisanpham;
use App\Models\Sanpham;
use App\Models\Sanphamchitiet;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{

   protected $ModelProduct;
   protected $modelProductDetail;
   function __construct()
   {
      $this->ModelProduct = new Sanpham();
      $this->modelProductDetail = new Sanphamchitiet();
   }

   function index(Request $request, $text = '')
   {

      $tabletList = array(
         [
            'title' =>  'tên',
            'value' => 'ten_sp'
         ],
         [
            'title' => 'hình ảnh',
            'value' => 'hinh'
         ],
         [
            'title' => 'giá',
            'value' => 'gia'
         ],
         [
            'title' =>  'giá khuyến mãi',
            'value' => 'gia_km'
         ],
         [
            'title' =>  'số lượt xem',
            'value' => 'soluotxem'
         ],
         [
            'title' => 'ngày đăng',
            'value' => 'created_at'
         ]
      );

      $dataProduct = DB::table('sanpham')->select('*')->join('loai', 'sanpham.id_loai', '=', 'loai.id_loai')->limit(25);
      if ($text) {
         $dataProduct->where('ten_loai', '=', $text);
      }
      if (Session::has('sort') && isset($_GET['_sort'])) {
         $sortValue = Session::get('sort');
         $dataProduct->orderBy('sanpham.' . $sortValue['columns'], $sortValue['type']);
      }
      $dataProduct =  $dataProduct->paginate(25);
      $tagList =  Loaisanpham::all();
      return View(
         'pages.table.tableProduct',
         [
            'dataTablet' => $dataProduct,
            'tablet' => $tabletList,
            'tagList' => $tagList,
            'pages' => $dataProduct
         ]
      );
   }
   function showForm($id = '',)
   {

      $publicPath = public_path('/images');
      $files = File::allFiles($publicPath);
      $images = [];
      foreach ($files as $key => $file) {
         $fixedFilePath = $file->getPathname();
         $relativePath = str_replace(public_path() . "\/", '', $fixedFilePath);
         $images[$key] = asset($relativePath);
      }
      $dataProduct = '';
      if ($id) {
         $dataProduct = DB::table('sanpham')->select('*')->where('id_sp', '=', $id)->first();
      }
      $tagList =  Loaisanpham::all();
      return View('pages.products.form', ['product' => $dataProduct, 'tagList' => $tagList, 'listImages' => $images]);
   }
   function showShop()
   {
      $productList = [];
      $sortName = isset($_GET['sort-name']) ? $_GET['sort-name'] : 'ngay';
      $sortKey = isset($_GET['sort-key']) ? $_GET['crate_at'] : 'asc';
      // get categories
      $categories = DB::table('loai')->select('*')->get();
      // get text search 
      $textSearch = isset($_GET['text-search']) ? "%" . $_GET['text-search'] . "%" : '';


      // default , take out all the product with stack ngay=asc
      $productListQuery = DB::table('sanpham')->select('*')->limit('25')->orderBy($sortName, $sortKey)->join('loai', 'loai.id_loai', '=', 'sanpham.id_loai');
      // if have textSearch get all with where like
      if ($textSearch) {
         $productListQuery =  $productListQuery->where('sanpham.ten_sp', 'like', $textSearch)->orWhere('loai.ten_loai', 'like', $textSearch);
      }

      $productList =  $productListQuery->paginate(25);
      Paginator::useBootstrap();
      return View('pages.products.shop', ['productList' => $productList, 'categories' => $categories]);
   }
   function update(Request $request, $id)
   { // upload image file
      try {
         $sp = Sanpham::find($id);
         $sp->update([
            'id_loai' => $request->input('id_loai') ?? $sp->id_loai,
            'ten_sp' => $_POST['ten_sp'] ?? $sp->ten_sp,
            'hinh' => $request->input('thumbnail_images') ?? $sp->hinh,
            'gia' =>  intval(str_replace(',', '', $_POST['gia']))  ?? $sp->gia,
            'mota' => $_POST['mota'] ?? $sp->mota,
         ]);
         Sanphamchitiet::where('id_sp', $id)->update([
            'anh_mo_ta' => json_encode($request->description_images),
         ]);
         return back()->with('successfully', 'update thành công id :' . $sp->id_sp);
      } catch (Exception $e) {
         return back()->with('error', $e);
      }
   }
   function shopDetails($id)
   {
      try {
         $product =  $this->ModelProduct->find($id);

         $product->update(['soluotxem' => $product->soluotxem + 1]);
         $hotListProduct = $this->ModelProduct->where('id_loai', $product->id_loai)->where('id_sp', '!=', $product->id_sp)->orderBy('soluotxem', 'asc')->limit(10)->get();
         $productDescription = $this->modelProductDetail->where('id_sp', '=', $id);
         $productDetails = $product->join('loai', 'sanpham.id_loai', '=', 'loai.id_loai')->first();
         $productDetails->description_images = json_decode($productDescription->value('anh_mo_ta'));
         $productDetails->config = $productDescription->select('RAM', 'Dia', 'Mausac as mầu sắc', 'Cannang as cân nặng')->first();

         return view('pages.products.details', ['productDetails' => $productDetails, 'hotListProduct' => $hotListProduct,]);
      } catch (Exception $e) {
         return response()->json($e->getMessage());
      }
   }
   function category()
   {
      return view('pages.products.category');
   }
   function create(ValidateFormCreateProduct $validate)
   {
      try {
         if ($validate) {
            $sp = new Sanpham();
            $sp->id_loai = $validate->loai  ?? 0;
            $sp->ten_sp = $validate->ten_sp;
            // https://www.w3schools.com/php/func_var_intval.asp => chả về giá trị nguyên của môt biến
            // https://www.w3schools.com/PHP/func_string_str_replace.asp => tìm kiếm và thấy thế các ký tự
            $sp->gia =  intval(str_replace(',', '', $_POST['gia'])) ?? '';
            $sp->hinh = $validate->input('thumbnail_images');
            $sp->gia_km = intval(str_replace(',', '', $_POST['gia_km'])) ?? '';
            $sp->ngay = date('Y-m-d H:i:s');
            $sp->mota = $_POST['mota'] ?? '';
            $sp->save();
            if ($sp->id_sp) {
               $sp['chi_chiet'] = Sanphamchitiet::create([
                  'id_sp' => $sp->id_sp,
                  'anh_mo_ta' => json_encode($validate->description_images),
               ]);
            }
            return back()->with('successfully', 'tạo thành công sản phẩm : ' . $sp->id_sp);
         }
      } catch (Exception $e) {
         return back()->with('errors', 'thất phại : ' .  $e->getMessage());
      }
   }
   function deleteProduct(Request $request, $id = 0)
   {
      try {
         $product =  Sanpham::join('sanphamchitiet', 'sanphamchitiet.id_sp', '=', 'sanpham.id_sp');
         if ($request->input('checkboxId')) {
            $product->whereIn('sanpham.id_sp', $request->input('checkboxId'));
         } else if ($id) {
            $product->where('sanpham.id_sp', '=', $id);
         } else {
            throw new Exception('Product not found');
         }
         $rl = $product->delete();
         return  response()->json($rl);
      } catch (\Exception $e) {
         return response()->json($e->getMessage());
      }
   }
   function createTagList()
   {
      try {
         Loaisanpham::create([
            'ten_loai' => $_POST['ten_loai'],
         ]);
         return back()->with('message_successfully', 'tạo danh mục thành  công');
      } catch (Exception $e) {
         return back()->with('message_error', $e->getMessage());
      }
   }
}
