@extends('layouts.client')

@section('title', 'Đặt lại mật khẩu')

@section('breadcrumb', 'Đặt lại mật khẩu')

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


                                            <h2>Đặt lại mật khẩu</h2>

                                            <form action="{{ route('password.update', $token) }}" method="POST"
                                                id="reset-password-form"
                                                class="woocommerce-form woocommerce-form-login login" novalidate>
                                                @csrf
                                                <input type="hidden" name="token" value="{{ $token }}">

                                                <p
                                                    class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="email">Nhập email của bạn&nbsp;<span class="required"
                                                            aria-hidden="true">*</span><span class="screen-reader-text">Bắt
                                                            buộc</span></label>
                                                    <input type="email"
                                                        class="woocommerce-Input woocommerce-Input--text input-text"
                                                        name="email" id="email" autocomplete="email" value="" required
                                                        aria-required="true" placeholder="Nhập email của bạn vào đây" />
                                                    @error('email')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </p>
                                                <p
                                                    class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="password">Mật khẩu mới&nbsp;<span class="required"
                                                            aria-hidden="true">*</span><span class="screen-reader-text">Bắt
                                                            buộc</span></label>
                                                    <input type="password"
                                                        class="woocommerce-Input woocommerce-Input--text input-text"
                                                        name="password" id="password" autocomplete="password" value=""
                                                        required aria-required="true"
                                                        placeholder="Nhập mật khẩu mới của bạn" />
                                                    @error('password')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </p>
                                                <p
                                                    class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="password_confirmation">Xác nhận lại mật khẩu&nbsp;<span
                                                            class="required" aria-hidden="true">*</span><span
                                                            class="screen-reader-text">Bắt
                                                            buộc</span></label>
                                                    <input class="woocommerce-Input woocommerce-Input--text input-text"
                                                        type="password" name="password_confirmation"
                                                        id="password_confirmation" autocomplete="password_confirmation"
                                                        required aria-required="true" />
                                                    @error('password_confirmation')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </p>


                                                <p class="form-row">

                                                    <button type="submit"
                                                        class="woocommerce-button button woocommerce-form-login__submit"
                                                        name="reset-password" value="Reset password">Đặt lại mật
                                                        khẩu</button>
                                                </p>

                                            </form>


                                        </div>


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