<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Route;

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
                'link' => ['update-user', 'id'],
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
            if ($id) $user = User::find($id);
            return view('pages/user/form', ['user' => $user]);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
