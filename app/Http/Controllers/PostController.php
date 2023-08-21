<?php

namespace App\Http\Controllers;

use App\Models\DetailPost;
use App\Models\post;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    function index()
    {
        return view('pages/blog/blog-pages');
    }
    function showTablet()
    {
        $tablet = ['hinh', 'tomtac', 'luot xem', 'ngày tạo'];
        $postList = post::paginate(25);

        return View('pages/table/tablePostList', ['dataTablet' => $postList, 'tablet' => $tablet, 'pages' => $postList]);
    }
    function create(Request $req)
    {
        try {
            $post = post::create(
                [
                    'heading' => $req->input('heading'),
                    'slug' => Str::slug($req->input('heading')),
                    'view_count' => 0
                ]
            );
            if ($post) {
                DetailPost::create([
                    'content' => $req->input('content'),
                    'id_post' => $post->id_post
                ]);
            }
            return response()->json($post);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
    function showForm()
    {
        return View('pages/blog/form');
    }
    function detailPost($slug, $id)
    {
        try {
            $post = post::where('post.slug', $slug)->where('post.id_post', $id)->join('detail_post', 'post.id_post', '=', 'detail_post.id_post')->first();
            return View('pages/blog/blog-single', ['post' => $post]);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
