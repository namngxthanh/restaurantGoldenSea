<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('clients.auth.forgot-password');
    }
    public function sendResetPasswordEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'Email là bắt buộc',
            'email.email' => 'Email không hợp lệ',
            'email.exists' => 'Email không tồn tại',
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user && $user->status === 'pending') { 
            toastr()->error('Tài khoản của bạn chưa được kích hoạt. Vui lòng kích hoạt tài khoản trước khi đổi mật khẩu.');
            return back();
        }
        if ($user && $user->status === 'blocked') {
            toastr()->error('Tài khoản của bạn đã bị khóa. Vui lòng liên hệ admin để được hỗ trợ.');
            return back();
        }
        $status = Password::sendResetLink($request->only('email'));

        if ($status === Password::RESET_LINK_SENT) {
            toastr()->success('Liên kết đặt lại mật khẩu đã được gửi đến email của bạn');
            return back();
        } 
        toastr()->error("Không thể gửi email đặt lại mật khẩu");
        return back()->withErrors(['email' => __($status)]);
     }
}
