<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function register()
    {
        return view('logins.register');
    }
    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        return back()->with('Success', 'Register Successfully');
    }

    public function login()
    {

        return view('logins.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            alert()->success('Logged in successfully');
            return redirect('/products')->with('success', 'Login successful Wizym');
        }
        return back()->with('error', 'Email or Password is incorrect');
    }

    public function logout(Request $request)
    {
        $user = $request->user();

        // Xóa token của người dùng hiện tại
        $user->tokens()->where('name', $user->name)->delete();

        // Đặt remember_token thành null
        $user->update(['remember_token' => null]);

        // Đăng xuất phiên làm việc
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect()->route('login');
    }
}
