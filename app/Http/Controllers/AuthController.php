<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Throwable;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function processLogin(Request $request): \Illuminate\Http\RedirectResponse
    {
        try {

            $user = User::query()
                ->where('email', $request->get('email'))
                ->where('password', $request->get('password'))
                ->firstOrFail();
            session()->put('id', $user->id);
            session()->put('name', $user->name);

            return redirect()->route('restaurants.index')->with('toast_success', 'Đăng nhập thành công !!!');
        } catch (Throwable $e) {
            return redirect()->route('login')->with('toast_error', 'Tài khoản/ Mật khẩu không chính xác !!!');
        }
    }

    public function logout()
    {
        session()->flush();

        return redirect()->route('login');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function processSignup(StoreUserRequest $request)
    {
        $confirm_password = $request->get('confirm_password');
        $password = $request->get('password');


        if($confirm_password !== $password)
        {
            return redirect()->back()->with('toast_error', 'Mật khẩu không trùng khớp !!!');
        }
        User::create($request->validated());

        return redirect()->route('login')->with('toast_success', 'Tạo tài khoản thành công !!!');
    }
}
