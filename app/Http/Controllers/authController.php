<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateLogin;
use App\Http\Requests\ValidateRegister;
use App\Models\User;
use Exception;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
                ]);

                return $result ? redirect('/admin/login') : throw ('không thành công');
            }
        } catch (Exception $e) {
            return back()->error($e->getMessage(), 'email');
        }
    }
}
