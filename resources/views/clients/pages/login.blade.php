@extends('layouts.client')

@section('title', 'Đăng nhập')

@section('breadcrumb', 'Đăng nhập')

@section('content')
    <div id="content" class="site-content">
        <div class="peacefulthemes-contain-area">

            <div id="primary" class="content-area">

                <main id="main" class="site-main">

                    <div class="container">


                        <article id="post-12" class="post-12 page type-page status-publish hentry">

                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="woocommerce-notices-wrapper">

                                    </div>

                                    <div class="u-columns col2-set" id="customer_login">

                                        <div class="u-column2 col-lg-6 col-md-8 mx-auto mt-2 p-3">


                                            <h2>Đăng nhập</h2>

                                            <form action="{{ route('post-login') }}" method="POST" id="login"
                                                class="woocommerce-form woocommerce-form-login login" novalidate>
                                                @csrf

                                                <p
                                                    class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="email">Email&nbsp;<span class="required"
                                                            aria-hidden="true">*</span><span class="screen-reader-text">Bắt
                                                            buộc</span></label>
                                                    <input type="email"
                                                        class="woocommerce-Input woocommerce-Input--text input-text"
                                                        name="email" id="email" autocomplete="email" value="" required
                                                        aria-required="true" placeholder="Nhập email của bạn" />
                                                    @error('email')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </p>
                                                <p
                                                    class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="password">Mật khẩu&nbsp;<span class="required"
                                                            aria-hidden="true">*</span><span class="screen-reader-text">Bắt
                                                            buộc</span></label>
                                                    <input class="woocommerce-Input woocommerce-Input--text input-text"
                                                        type="password" name="password" id="password"
                                                        autocomplete="current-password" required aria-required="true" />
                                                    @error('password')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </p>


                                                <p class="form-row">
                                                    <label
                                                        class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                                        <input
                                                            class="woocommerce-form__input woocommerce-form__input-checkbox"
                                                            name="rememberme" type="checkbox" id="rememberme"
                                                            value="forever" /> <span>Nhớ cho lần sau</span>
                                                    </label>
                                                    <input type="hidden" id="woocommerce-login-nonce"
                                                        name="woocommerce-login-nonce" value="5388ecf7dc" /><input
                                                        type="hidden" name="_wp_http_referer" value="/my-account/" />
                                                    <button type="submit"
                                                        class="woocommerce-button button woocommerce-form-login__submit"
                                                        name="login" value="Log in">Đăng nhập</button>
                                                </p>
                                                <p class="woocommerce-LostPassword lost_password"
                                                    style="margin-bottom:0px;">
                                                    <a href="{{ route('password.request') }}">Quên mật khẩu?</a>
                                                </p>
                                                <p class="create-account">
                                                    <a href="{{ route('register') }}">Chưa có tài khoản? Đăng ký ngay!</a>
                                                </p>


                                            </form>


                                        </div>

                                        {{-- <div class="u-column2 col-2">

                                            <h2>Đăng ký</h2>

                                            <form action="{{ route('post-register') }}" method="POST" id="register"
                                                class="woocommerce-form woocommerce-form-register register">
                                                Using for validation submit form in laravel --}}
                                                {{-- @csrf --}}
                                                {{--
                                                <p
                                                    class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="reg_email">Địa chỉ email&nbsp;<span class="required"
                                                            aria-hidden="true">*</span><span class="screen-reader-text">Bắt
                                                            buộc</span></label>
                                                    <input type="email"
                                                        class="woocommerce-Input woocommerce-Input--text input-text"
                                                        name="email" id="reg_email" autocomplete="email"
                                                        value="{{ old('email') }}" required aria-required="true" />
                                                    @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                {{-- <label for="name">Tên người dùng&nbsp;<span class="required"
                                                        aria-hidden="true">*</span><span class="screen-reader-text">Bắt
                                                        buộc</span></label> --}}
                                                {{-- <input type="text"
                                                    class="woocommerce-Input woocommerce-Input--text input-text"
                                                    placeholder="Tên người dùng" name="name" id="name" autocomplete="name"
                                                    value="{{ old('name') }}" required aria-required="true" />
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <label for="password">Mật khẩu&nbsp;<span class="required"
                                                        aria-hidden="true">*</span><span class="screen-reader-text">Bắt
                                                        buộc</span></label>
                                                <input type="password"
                                                    class="woocommerce-Input woocommerce-Input--text input-text"
                                                    name="password" id="password" autocomplete="password" value="" required
                                                    aria-required="true" />
                                                @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <label for="confirm_password">Xác nhận mật khẩu&nbsp;<span class="required"
                                                        aria-hidden="true">*</span><span class="screen-reader-text">Bắt
                                                        buộc</span></label>
                                                <input type="password"
                                                    class="woocommerce-Input woocommerce-Input--text input-text"
                                                    name="confirm_password" id="confirm_password"
                                                    autocomplete="confirm_password" value="" required
                                                    aria-required="true" />
                                                @error('confirm_password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                </p>

                                                --}}
                                                {{-- <p>Một liên kết để xác thực tài khoản sẽ được gửi đến địa chỉ email của
                                                    bạn.
                                                </p> --}}

                                                {{--
                                                <wc-order-attribution-inputs></wc-order-attribution-inputs>
                                                <div class="woocommerce-privacy-policy-text">
                                                    <input type="checkbox" name="privacy_policy" value="1" required
                                                        aria-required="true"> Tôi đồng ý với tất cả <a href="#"
                                                        class="woocommerce-privacy-policy-link" target="_blank">điều khoản
                                                        và điều kiện sử dụng</a>.</>
                                                    @error('privacy_policy')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <p class="woocommerce-form-row form-row">
                                                    <input type="hidden" id="woocommerce-register-nonce"
                                                        name="woocommerce-register-nonce" value="21ea9ed1a9" /><input
                                                        type="hidden" name="_wp_http_referer" value="/my-account/" />
                                                    <button type="submit"
                                                        class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit">Đăng
                                                        ký</button>
                                                </p>


                                            </form> --}}

                                            {{--
                                        </div>
                                        --}}
                                    </div>

                                </div>
                            </div><!-- .entry-content -->
                        </article><!-- #post-12 -->

                    </div><!-- .container -->

                </main><!-- #main -->

            </div><!-- #primary -->

        </div>

    </div><!-- #content -->
@endsection