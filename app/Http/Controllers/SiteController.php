<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Sanpham;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    function index()
    {
        $banner = [];
        $title_product = $_GET['title-product'] ?? 1;
        $treadingProduct = DB::table('sanpham')->where('id_loai', '=', $title_product)->select('*')->limit('8')->orderby('soluotxem', 'asc')->get();
        $titleListProduct = DB::table('loai')->limit('5')->get();
        $hotListProduct = DB::table('sanpham')->where('hot', '=', 1)->orderBy('ngay', 'asc')->limit('8')->get();
        $categories = DB::table('loai')->get();

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
                'slider' => $slider,
                'bannerList' => $banner,
            ]
        );
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
}
