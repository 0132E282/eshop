<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{

    // show list accounts for all users
    function showTable()
    {
        $table = [
            'avatar' =>  [
                'type' => 'images',
                'name' => 'hình nền',
            ],
            'name' =>  [
                'type' => 'text',
                'name' => 'tên',
                'action' => ['update-user', 'id'],
            ],
            'email' => [
                'type' => 'email',
                'name' => 'email'
            ],
            'created_at' => [
                'type' => 'text',
                'name' => 'ngày tạo'
            ],
            'id' => [
                'type' => 'select',
                'name' => 'phân quyền'
            ]
        ];
        try {
            $currentRoute = Route::current();
            $quantity = 25;
            $userList = $currentRoute->getName() === 'trash-user' ? User::onlyTrashed()->paginate($quantity) :  $userList = User::paginate($quantity);
            return view('pages/table/tabletUser', ['dataTablet' => $userList, 'pages' => $userList, 'tablet' => $table]);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }


    function showForm($id = '')
    {

        $user = [];
        try {
            $publicPath = public_path('/images');
            $files = File::allFiles($publicPath);
            $images = [];
            foreach ($files as $key => $file) {
                $fixedFilePath = $file->getPathname();
                $relativePath = str_replace(public_path() . "\/", '', $fixedFilePath);
                $images[$key] = asset($relativePath);
            }
            if ($id) $user = User::find($id);
            return view('pages/user/form', ['user' => $user, 'listImages' => $images]);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
