<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Mail\ActivationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
// use Str;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('clients.pages.register');
    }
    public function register(Request $request)
    {
        //Validate backend
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:users',
            'password' => 'required|string|min:6',
            // 'privacy_policy' => 'required|boolean',
        ],  [
            'name.required' => 'Tên người dùng là bắt buộc',
            'name.string' => 'Tên người dùng phải là một chuỗi',
            'name.max' => 'Tên người dùng không được vượt quá 255 ký tự',
            'email.required' => 'Email là bắt buộc',
            'email.string' => 'Email phải là một chuỗi',
            'email.max' => 'Email không được vượt quá 255 ký tự',
            'email.email' => 'Email không hợp lệ',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu là bắt buộc',
            'password.string' => 'Mật khẩu phải là một chuỗi',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'confirm_password.required' => 'Xác nhận mật khẩu là bắt buộc',
            'confirm_password.string' => 'Xác nhận mật khẩu phải là một chuỗi',
            'confirm_password.min' => 'Xác nhận mật khẩu phải có ít nhất 6 ký tự',
            // 'confirm_password.same' => 'Xác nhận mật khẩu không khớp',
            'privacy_policy.required' => 'Bạn phải đồng ý với điều khoản và điều kiện sử dụng',
            'privacy_policy.boolean' => 'Bạn phải đồng ý với điều khoản và điều kiện sử dụng',
        ]);
        
        //Check if user already exists
        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            if($existingUser->isPending()) {
                toastr()->error('Email đang đợi kích hoạt');
                return redirect()->route('register');
            }
            return redirect()->route('register');
        }
        // Create activation token
        $activationToken = Str::random(60);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 'pending',
            'role_id' => 3,
            'activation_token' => $activationToken,
        ]);
        Mail::to($user->email)->send(new ActivationMail($activationToken, $user));
        toastr()->success('Đăng ký thành công');
        return redirect()->back();
        //Create user
        // $user = User::create($request->all());
        // return redirect()->route('login');
        // return redirect()->route('login');
    }
    public function activate($activationToken)
    {
        $user = User::where('activation_token', $activationToken)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'Token không hợp lệ!');
        }
        $user->update(['status' => 'active']);
        $user->activation_token = null;
        $user->save();
        toastr()->success('Tài khoản đã được kích hoạt thành công');
        return redirect()->back();
    }
}
