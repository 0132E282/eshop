<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function showTablet()
    {
        $tablet = ['tiêu đề', 'tom tắc', 'ngày tạo'];

        return View('pages/table/tablePostList', ['dataTablet' => [], 'tablet' => $tablet]);
    }
}
