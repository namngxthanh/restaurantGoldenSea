@extends('layouts.client')

@section('title', 'Tài khoản')

@section('breadcrumb', 'Tài khoản')
@section('content')
    <div class="liton__wishlist-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__product-tab-area">
                        <div class="container">
                            <div class="row">
                                {{-- <div class="col-lg-4">
                                    <div class="ltn__tab-menu-list mb-50">
                                        <div class="nav">
                                            <a class="active show" data-bs-toggle="tab" href="#liton_tab_dashboard">Bảng
                                                điều
                                                khiển <i class="fas fa-home"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_tab_orders">Đơn hàng<i
                                                    class="fas fa-file-alt"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_tab_address">Địa chỉ<i
                                                    class="fas fa-map-marker-alt"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_tab_account">Chi tiết tài khoản<i
                                                    class="fas fa-user"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_tab_password">Đổi mật khẩu<i
                                                    class="fas fa-key"></i></a>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-4">
                                    <div class="ltn__tab-menu-list mb-50">
                                        <div class="nav nav-pills flex-column">

                                            <a class="nav-link active show d-flex justify-content-between align-items-center"
                                                data-bs-toggle="tab" href="#liton_tab_dashboard">
                                                <span>Bảng điều khiển</span>
                                                <i class="fas fa-home"></i>
                                            </a>

                                            <a class="nav-link d-flex justify-content-between align-items-center"
                                                data-bs-toggle="tab" href="#liton_tab_orders">
                                                <span>Đơn hàng</span>
                                                <i class="fas fa-file-alt"></i>
                                            </a>

                                            <a class="nav-link d-flex justify-content-between align-items-center"
                                                data-bs-toggle="tab" href="#liton_tab_address">
                                                <span>Địa chỉ</span>
                                                <i class="fas fa-map-marker-alt"></i>
                                            </a>

                                            <a class="nav-link d-flex justify-content-between align-items-center"
                                                data-bs-toggle="tab" href="#liton_tab_account">
                                                <span>Chi tiết tài khoản</span>
                                                <i class="fas fa-user"></i>
                                            </a>

                                            <a class="nav-link d-flex justify-content-between align-items-center"
                                                data-bs-toggle="tab" href="#liton_tab_password">
                                                <span>Đổi mật khẩu</span>
                                                <i class="fas fa-key"></i>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="liton_tab_dashboard">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>Xin chào <strong>{{ $user->email }}</strong> (nếu không phải
                                                    <strong>{{ $user->email }}</strong>? Vui lòng
                                                    <small><a href="{{ route('logout') }}">Đăng xuất</a></small> )
                                                </p>
                                                <p>Từ bảng điều khiển của bạn, bạn có thể xem <span>đơn hàng gần đây</span>,
                                                    quản lý <span>địa chỉ giao hàng và thanh toán</span>, và <span>chỉnh sửa
                                                        mật khẩu và chi tiết tài khoản</span>.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_orders">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Mã đơn hàng</th>
                                                                <th>Ngày đặt hàng</th>
                                                                <th>Trạng thái</th>
                                                                <th>Tổng tiền</th>
                                                                <th>Hành động</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Jun 22, 2019</td>
                                                                <td>Pending</td>
                                                                <td>$3000</td>
                                                                <td><a href="cart.html">View</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_account">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="ltn__form-box">
                                                    <form action="{{ route('account.update') }}" method="POST"
                                                        id="update-account" enctype="multipart/form-data">
                                                        @method('PUT')
                                                        <div class="row mb-50">
                                                            <div class="col-md-12 text-center mb-3">
                                                                <div class="profile-pic-container">
                                                                    <img src="{{ asset('storage/' . $user->avatar) }}"
                                                                        alt="{{ $user->name }}" id="preview-image"
                                                                        class="profile-pic">
                                                                    <input type="file" name="avatar" id="avatar"
                                                                        accept="image/*" class="d-none">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="ltn__name">Họ & tên:</label>
                                                                <input type="text" name="ltn__name" id="ltn__name"
                                                                    value="{{ $user->name }}" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="ltn__phone_number">Số điện thoại:</label>
                                                                <input type="number" name="ltn__phone_number"
                                                                    id="ltn__phone_number" value="{{ $user->phone_number }}"
                                                                    required pattern="[0-9]+">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="ltn__email">Email (không thể thay đổi):</label>
                                                                <input type="email" name="ltn__email" id="ltn__email"
                                                                    value="{{ $user->email }}" disabled="disabled">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="ltn__address">Địa chỉ:</label>
                                                                <input type="text" name="ltn__address" id="ltn__address"
                                                                    value="{{ $user->address }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="btn-wrapper">
                                                            <button type="submit"
                                                                class="btn theme-btn-1 btn-effect-1 text-uppercase">Lưu
                                                                thay đổi</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_address">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>Địa chỉ giao hàng và thanh toán sẽ được sử dụng trên trang thanh toán mặc
                                                    định.
                                                </p>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Họ và tên người nhận</th>
                                                                <th>Địa chỉ</th>
                                                                <th>Thành phố</th>
                                                                <th>Số điện thoại</th>
                                                                <th>Mặc định</th>
                                                                <th>Hành động</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Jun 22, 2025</td>
                                                                <td>Pending</td>
                                                                <td>$3000</td>
                                                                <td>Yes</td>
                                                                <td><a href="javascript:void(0)"
                                                                        class="btn theme-btn-1 btn-effect-1 btn-danger"
                                                                        onclick="return confirm('Bạn có chắc chắn muốn xóa địa chỉ này không?')">Xóa</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <a href="javascript:void(0)" type="submit"
                                                    class="btn theme-btn-1 btn-primary btn-effect-1 mt-3">Thêm
                                                    địa chỉ</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_password">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="ltn__form-box">
                                                    <form action="#" method="POST" id="change-password-form">
                                                        <fieldset>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label>Mật khẩu hiện tại:</label>
                                                                    <input type="password" name="current_password" required>
                                                                    <label>Mật khẩu mới:</label>
                                                                    <input type="password" name="new_password" required>
                                                                    <label>Xác nhận lại:</label>
                                                                    <input type="password" name="confirm_password" required>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="btn-wrapper">
                                                            <button type="submit"
                                                                class="btn theme-btn-1 btn-effect-1 text-uppercase">Lưu thay
                                                                đổi</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection