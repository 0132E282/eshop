<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateLogin;
use App\Http\Requests\ValidateRegister;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class authController extends Controller
{
    function index()
    {
        return view('pages/site/auth/login');
    }
    function showFormRegister()
    {
        return view('pages/site/auth/register');
    }
    function logout()
    {
        Auth::logout();
        return redirect(route('login-page'));
    }
    function loginAdmin(ValidateLogin $validated)
    {
        if ($validated) {
            $checkValue = [
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            ];
            if (Auth::attempt($checkValue)) {
                return redirect('/admin');
            }
        }
        return redirect('/admin/login')->with('errors_login', 'tài khoản hoặt mật khẩu không đúng');
    }

    function createAccount(ValidateRegister $validated)
    {
        try {
            if ($validated) {
                $user = new User();
                $result =  $user->create([
                    'name' => $_POST['name'],
                    'password' => Hash::make($_POST['password']),
                    'email' => $_POST['email'],
                    'isAdmin' => $_POST['isAdmin'] ?? 0,
                    'avatar' => $_POST['thumbnail_images']
                ]);
                if (Route::current()->getName() === 'add-user') return back()->with('result', 'account created successfully');
                return $result ? redirect('/admin/login') : throw ('không thành công');
            }
        } catch (Exception $e) {
            return back()->error($e->getMessage(), 'email');
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
                'avatar' => $req->input('thumbnail_images') ?? $user->avatar,
            ]);
            return back()->with('success', 'thây đổi thành công');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    function restore($id)
    {
        try {
            $user = User::where('id', $id)->withTrashed();
            if (!$user) throw new Exception('user not found');
            $user->restore();
            return  back()->with('success', 'user restored successfully');
        } catch (Exception $e) {
            back()->with('error', $e->getMessage());
        }
    }
    // soft deletes a user 
    function softDelete($id)
    {
        try {
            $user =  User::find($id);
            if (!$user) throw new Exception('User not found');
            $user->delete();
            return back()->with('success', 'User deleted successfully');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
