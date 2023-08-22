<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateFormCreateProduct;
use App\Models\Loaisanpham;
use App\Models\Sanpham;
use App\Models\Sanphamchitiet;
use Exception;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Symfony\Component\Console\Input\Input;

class ProductsController extends Controller
{
   function index($text = '')
   {
      $tabletList = array(
         'tên', '	hình ảnh', '	giá', 'giá khuyến mãi', 'số lượt xem', 'ngày đăng'
      );
      $dataProduct = DB::table('sanpham')->select('*')->join('loai', 'sanpham.id_loai', '=', 'loai.id_loai')->limit(25)->orderBy('sanpham.created_at', 'DESC');
      if ($text) {
         $dataProduct->where('ten_loai', '=', $text);
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
      $dataProduct = '';
      if ($id) {
         $dataProduct = DB::table('sanpham')->select('*')->where('id_sp', '=', $id)->first();
      }
      $tagList =  Loaisanpham::all();
      return View('pages.products.form', ['product' => $dataProduct, 'tagList' => $tagList]);
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
            'hinh' => Session()->get('url_image') ?? $sp->hinh,
            'gia' =>  intval(str_replace(',', '', $_POST['gia']))  ?? $sp->gia,
            'mota' => $_POST['mota'] ?? $sp->mota,
         ]);
         return back()->with('successfully', 'update thành công id :' . $sp->id_loai);
      } catch (Exception $e) {
         return back()->with('error', $e);
      }
   }
   function shopDetails($id)
   {
      $hotListProduct = DB::table('sanpham')->where('hot', '=', 1)->orderBy('ngay', 'asc')->limit('8')->get();

      $productDetails = DB::table('sanpham')->select('*')->where('id_sp', '=', $id)->join('loai', 'sanpham.id_loai', '=', 'loai.id_loai')->first();
      $productParameter = DB::table('sanphamchitiet')->select('RAM', 'CPU', 'Cannang')->where('id_sp', '=', $id)->first();
      $productDetails->sli_images = [
         $productDetails->hinh,
         'https://cdn.tgdd.vn/Products/Images/44/292397/Slider/vi-vn-dell-vostro-5620-i5-v6i5001w1-slider-1.jpg',
         'https://cdn.tgdd.vn/Products/Images/44/292397/Slider/vi-vn-dell-vostro-5620-i5-v6i5001w1-slider-1.jpg',
         'https://cdn.tgdd.vn/Products/Images/44/292397/Slider/vi-vn-dell-vostro-5620-i5-v6i5001w1-slider-1.jpg',
      ];
      return view('pages.products.details', ['productDetails' => $productDetails, 'productParameter' => $productParameter, 'hotListProduct' => $hotListProduct,]);
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
            $sp->id_loai = $_POST['loai'] ?? 0;
            $sp->ten_sp = $_POST['ten_sp'] ?? 'http://127.0.0.1:8000/assets-web/images/products/defau.jpeg';
            $sp->hinh = Session()->get('url_image');
            // https://www.w3schools.com/php/func_var_intval.asp => chả về giá trị nguyên của môt biến
            // https://www.w3schools.com/PHP/func_string_str_replace.asp => tìm kiếm và thấy thế các ký tự
            $sp->gia =  intval(str_replace(',', '', $_POST['gia'])) ?? '';
            $sp->gia_km = intval(str_replace(',', '', $_POST['gia_km'])) ?? '';
            $sp->ngay = date('Y-m-d H:i:s');
            $sp->mota = $_POST['mota'] ?? '';
            $sp->save();
            if ($sp->id_sp) {
               $sp['chi_chiet'] = Sanphamchitiet::create([
                  'id_sp' => $sp->id_sp,
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
      $product =  Sanpham::join('sanphamchitiet', 'sanphamchitiet.id_sp', '=', 'sanpham.id_sp');
      if ($request->checkboxId) {
         $product->whereIn('sanpham.id_sp', $request->checkboxId);
      } else if ($id) {
         $product->where('sanpham.id_sp',  $id);
      }
      $rl = $product->delete();
      return $rl ? back()->with('message_successfully', 'đã xóa thành công') : back()->with('message', 'đã xóa thất bại');
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
