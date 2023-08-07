<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index()
    {
        return view('pages/blog/blog-pages');
    }
    function detailsBlog($id)
    {
        return view('pages/blog/blog-single');
    }
}
