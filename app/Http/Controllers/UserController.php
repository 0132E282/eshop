<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
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
    function update(Request $req, $id)
    {

        try {
            $user = User::find($id);
            if (!$user) throw new Exception('không tìm thấy người dùng này');
            $user->update([
                'name' => $req->input('name') ?? $user->name,
                'isAdmin' => $req->input('isAdmin') ?? $user->isAdmin,
                'avatar' => $req->input('avatar') ?? $user->avatar,
            ]);
            return back()->with('success', 'thây đổi thành công');
        } catch (Exception $e) {
            return response()->json($e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }
    function create()
    {
    }
}
