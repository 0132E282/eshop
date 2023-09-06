<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Loaisanpham;
use App\Models\post;
use App\Models\Sanpham;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class SiteController extends Controller
{
    protected $modelProduct;
    protected $modelBanner;
    protected $modelTypeProduct;
    function __construct()
    {
        $this->modelProduct = new Sanpham();
        $this->modelBanner = new Banner();
        $this->modelTypeProduct = new Loaisanpham();
    }
    function index()
    {
        try {
            $banner = [];
            $title_product = $_GET['title-product'] ?? 1;

            $treadingProduct = $this->modelProduct->limit('8')->where('soluongbanhang', '>', 0)->orderby('soluongbanhang', 'asc')->get();

            $titleListProduct = DB::table('loai')->limit('5')->get();
            $hotListProduct = $this->modelProduct->orderBy('soluotxem', 'asc')->limit('8')->get();

            $categories = DB::table('loai')->get();
            $postList = post::all();
            $slider = Banner::where('location', '=', 'slider')->get();
            $banner['small-banner'] = Banner::where('location', '=', 'small-banner')->limit(3)->get();
            $banner['medium-banner'] = Banner::where('location', '=', 'medium-banner')->limit(2)->get();
            $isShowCategories = true;
            return View(
                'pages.site.home.homeWeb',
                [
                    'treadingProduct' => $treadingProduct,
                    'titleListProduct' => $titleListProduct,
                    'hotListProduct' => $hotListProduct,
                    'categories' => $categories,
                    'isShowCategories' => $isShowCategories,
                    'postList' => $postList,
                    'slider' => $slider,
                    'bannerList' => $banner,
                ]
            );
        } catch (\Exception $e) {
        }
    }
    function showContactPage()
    {
        return View('pages.site.contact-us.form-contact-us');
    }
    function search($type, $text)
    {
        $product = DB::table($type)->where('ten_sp', 'like', '%' . $text . '%')->get();
        return response()->json($product);
    }
    function adminPage()
    {
        $earnings = DB::table('donhangchitiet')->selectRaw("SUM(gia * soluong) as total, DATE_FORMAT(created_at, '%d-%b-%Y') as date")->groupBy('date')->get();
        // $order = Donhangchitiet::all();
        // return response()->json($earn);
        return View('pages.site.home.homeAdmin', ['earnings' => $earnings]);
    }
    function uploadImages(Request $req)
    {
        try {
            $urlArray = [];
            if ($req->hasFile('files-images')) {
                $fileList = $req->file('files-images');
                foreach ($fileList as $file) {
                    $input['imagename'] = 'images';
                    $imageName = time() . '.' . $file->getClientOriginalExtension();
                    $img = Image::make($file->path())->resize(550, 750);
                    $img->save($input['imagename'] . '/' . $imageName);
                    $url =  URL::to($input['imagename'] . '/' . $imageName);
                    array_push($urlArray, $url);
                }
                return back()->with('success', 'thành cong');
            }
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
