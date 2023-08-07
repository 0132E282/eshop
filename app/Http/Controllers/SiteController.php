<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    function index()
    {
        $title_product = $_GET['title-product'] ?? 1;
        $treadingProduct = DB::table('sanpham')->where('id_loai', '=', $title_product)->select('*')->limit('8')->orderby('soluotxem', 'asc')->get();
        $titleListProduct = DB::table('loai')->limit('5')->get();
        $hotListProduct = DB::table('sanpham')->where('hot', '=', 1)->orderBy('ngay', 'asc')->limit('8')->get();
        $categories = DB::table('loai')->get();
        $slider = Banner::where('is_slider', '=', 1)->get();
        $banner = Banner::where('is_slider', '=', 0)->limit(3)->get();
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
}
