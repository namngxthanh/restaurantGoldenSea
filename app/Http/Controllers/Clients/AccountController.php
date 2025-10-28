<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\ShippingAddress;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AccountController extends Controller
{
    public function index()
    {
        // /** @var User $user */
         $user = Auth::user();
        // $user->load(['shippingAddresses', 'orders']);
        return view('clients.pages.account', compact('user'));
    }

    public function update(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();
        
        $request->validate([
            'ltn__name' => 'required|string|max:255',
            'ltn__phone_number' => 'nullable|string|max:20|regex:/^[0-9+\-\s()]+$/',
            'ltn__address' => 'required|string|max:500',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],);


        // * Handle avatar upload
        if ($request->hasFile('avatar')) {
            // Delete old avatar if exists
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }

            $avatar = $request->file('avatar');
            // * Create new name with timestamp and original extension
            $avatarName = 'avatars/' . time() . '.' . $avatar->getClientOriginalExtension();

            // * Save image to folder storage/app/public/uploads/users/tenfile.jpg
            $avatarPath = $avatar->storeAs('uploads/users', $avatarName, 'public');
            $user->avatar = $avatarPath;
        }

        $user->name = $request->input('ltn__name');
        $user->phone_number = $request->input('ltn__phone_number');
        $user->address = $request->input('ltn__address');
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Cập nhật thông tin thành công!',
            'avatar' => asset('storage/' . $user->avatar),
            'user' => $user,
        ]);

      
        // Handle avatar upload
        // if ($request->hasFile('avatar')) {
        //     // Delete old avatar if exists
        //     if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
        //         Storage::disk('public')->delete($user->avatar);
        //     }

        //     $avatar = $request->file('avatar');
        //     $avatarName = 'avatars/' . Str::uuid() . '.' . $avatar->getClientOriginalExtension();
        //     $avatar->storeAs('public', $avatarName);
        //     $data['avatar'] = $avatarName;
        // }

        // $user->update($data);

        // toastr()->success('Cập nhật thông tin thành công!');
        // return redirect()->back();
    }

    public function updateContact(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();
        
        $request->validate([
            'phone_number' => 'nullable|string|max:20|regex:/^[0-9+\-\s()]+$/',
        ], [
            'phone_number.string' => 'Số điện thoại phải là một chuỗi',
            'phone_number.max' => 'Số điện thoại không được vượt quá 20 ký tự',
            'phone_number.regex' => 'Số điện thoại không hợp lệ',
        ]);

        $user->update([
            'phone_number' => $request->phone_number,
        ]);

        toastr()->success('Cập nhật thông tin liên hệ thành công!');
        return redirect()->back();
    }

    public function changePassword(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();
        
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ], [
            'current_password.required' => 'Mật khẩu hiện tại là bắt buộc',
            'new_password.required' => 'Mật khẩu mới là bắt buộc',
            'new_password.string' => 'Mật khẩu mới phải là một chuỗi',
            'new_password.min' => 'Mật khẩu mới phải có ít nhất 6 ký tự',
            'new_password.confirmed' => 'Xác nhận mật khẩu không khớp',
        ]);

        // Check current password
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Mật khẩu hiện tại không đúng']);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        toastr()->success('Đổi mật khẩu thành công!');
        return redirect()->back();
    }

    public function addAddress(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();
        
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20|regex:/^[0-9+\-\s()]+$/',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'default' => 'boolean',
        ], [
            'full_name.required' => 'Họ và tên là bắt buộc',
            'full_name.string' => 'Họ và tên phải là một chuỗi',
            'full_name.max' => 'Họ và tên không được vượt quá 255 ký tự',
            'phone.required' => 'Số điện thoại là bắt buộc',
            'phone.string' => 'Số điện thoại phải là một chuỗi',
            'phone.max' => 'Số điện thoại không được vượt quá 20 ký tự',
            'phone.regex' => 'Số điện thoại không hợp lệ',
            'city.required' => 'Thành phố là bắt buộc',
            'city.string' => 'Thành phố phải là một chuỗi',
            'city.max' => 'Thành phố không được vượt quá 255 ký tự',
            'address.required' => 'Địa chỉ là bắt buộc',
            'address.string' => 'Địa chỉ phải là một chuỗi',
            'address.max' => 'Địa chỉ không được vượt quá 500 ký tự',
        ]);

        // If this is set as default, remove default from other addresses
        if ($request->default) {
            $user->shippingAddresses()->update(['default' => false]);
        }

        $user->shippingAddresses()->create([
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'city' => $request->city,
            'address' => $request->address,
            'default' => $request->default ?? false,
        ]);

        toastr()->success('Thêm địa chỉ thành công!');
        return redirect()->back();
    }

    public function updateAddress(Request $request, $id)
    {
        /** @var User $user */
        $user = Auth::user();
        $address = $user->shippingAddresses()->findOrFail($id);
        
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20|regex:/^[0-9+\-\s()]+$/',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'default' => 'boolean',
        ], [
            'full_name.required' => 'Họ và tên là bắt buộc',
            'full_name.string' => 'Họ và tên phải là một chuỗi',
            'full_name.max' => 'Họ và tên không được vượt quá 255 ký tự',
            'phone.required' => 'Số điện thoại là bắt buộc',
            'phone.string' => 'Số điện thoại phải là một chuỗi',
            'phone.max' => 'Số điện thoại không được vượt quá 20 ký tự',
            'phone.regex' => 'Số điện thoại không hợp lệ',
            'city.required' => 'Thành phố là bắt buộc',
            'city.string' => 'Thành phố phải là một chuỗi',
            'city.max' => 'Thành phố không được vượt quá 255 ký tự',
            'address.required' => 'Địa chỉ là bắt buộc',
            'address.string' => 'Địa chỉ phải là một chuỗi',
            'address.max' => 'Địa chỉ không được vượt quá 500 ký tự',
        ]);

        // If this is set as default, remove default from other addresses
        if ($request->default) {
            $user->shippingAddresses()->where('id', '!=', $id)->update(['default' => false]);
        }

        $address->update([
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'city' => $request->city,
            'address' => $request->address,
            'default' => $request->default ?? false,
        ]);

        toastr()->success('Cập nhật địa chỉ thành công!');
        return redirect()->back();
    }

    public function deleteAddress($id)
    {
        /** @var User $user */
        $user = Auth::user();
        $address = $user->shippingAddresses()->findOrFail($id);
        
        $address->delete();

        toastr()->success('Xóa địa chỉ thành công!');
        return redirect()->back();
    }

    public function setDefaultAddress($id)
    {
        /** @var User $user */
        $user = Auth::user();
        $address = $user->shippingAddresses()->findOrFail($id);
        
        // Remove default from all addresses
        $user->shippingAddresses()->update(['default' => false]);
        
        // Set this address as default
        $address->update(['default' => true]);

        toastr()->success('Đặt địa chỉ mặc định thành công!');
        return redirect()->back();
    }
}
