<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    public function showResetPasswordForm($token)
    {
        return view('clients.auth.reset-password', ['token' => $token]);
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|confirmed',
            'token' => 'required',
        ]
    , [
        'email.required' => 'Email là bắt buộc',
        'email.email' => 'Email không hợp lệ',
        'email.exists' => 'Email không tồn tại',
        'password.required' => 'Mật khẩu là bắt buộc',
        'password.confirmed' => 'Mật khẩu xác nhận không khớp',
        'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
        'token.required' => 'Token không hợp lệ hoặc đã hết hạn',
        ]);
        $status = Password::reset(
            $request->only( 'email','password', 'password_confirmation', 'token'), 
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->save();
           }
        );
        if ($status === Password::PASSWORD_RESET) {
            toastr()->success('Mật khẩu đã được đặt lại thành công');
            return redirect()->route('login');
        }
        toastr()->error("Không thể đặt lại mật khẩu, có lỗi xảy ra");
        return back()->withErrors(['password' => __($status)]);
    }
}
