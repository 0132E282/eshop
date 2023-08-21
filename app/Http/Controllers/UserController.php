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
        $administrationList = [
            [
                'id' => 0,
                'title' => 'thường',
            ],
            [
                'id' => 1,
                'title' => 'quản trị viên',
            ]
        ];
        $currentRoute = Route::current();
        $quantity = 25;
        $userList = $currentRoute->getName() === 'trash-user' ? User::onlyTrashed()->paginate($quantity) :  $userList = User::paginate($quantity);
        return view('pages/table/tabletUser', ['dataTablet' => $userList, 'pages' => $userList, 'administrationList' => $administrationList]);
    }


    function showForm($id = '')
    {
        $administrationList = [
            [
                'id' => 0,
                'title' => 'thường',
            ],
            [
                'id' => 1,
                'title' => 'quản trị viên',
            ]
        ];
        $user = [];
        try {
            if ($id) $user = User::find($id);
            return view('pages/user/form', ['user' => $user, 'administrationList' => $administrationList]);
        } catch (\Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
