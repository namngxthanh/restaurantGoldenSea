@extends('layouts.client')

@section('title', 'Quên mật khẩu')

@section('breadcrumb', 'Quên mật khẩu')

@section('content')
    <div id="content" class="site-content">
        <div class="peacefulthemes-contain-area">

            <div id="primary" class="content-area">

                <main id="main" class="site-main">

                    <div class="container">


                        <article id="post-12" class="post-12 page type-page status-publish hentry">

                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="u-column2 col-lg-6 col-md-8 mx-auto mt-2 p-3">
                                        <div class="woocommerce-notices-wrapper"></div>
                                        <form method="post" class="woocommerce-ResetPassword lost_reset_password">
                                            @csrf
                                            <p>Bạn đã quên mật khẩu? Vui lòng nhập email của bạn. Bạn sẽ nhận được một liên
                                                kết để tạo mật khẩu mới qua email.</p>
                                            <p
                                                class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                                <label for="user_login">Nhập Email của bạn&nbsp;<span class="required"
                                                        aria-hidden="true">*</span><span
                                                        class="screen-reader-text">Required</span></label>
                                                <input class="woocommerce-Input woocommerce-Input--text input-text"
                                                    type="email" name="email" id="email" autocomplete="email" required
                                                    aria-required="true" />

                                            </p>

                                            <div class="clear"></div>


                                            <p class="woocommerce-form-row form-row">
                                                <input type="hidden" name="wc_reset_password" value="true" />
                                                <button type="submit" class="woocommerce-Button button"
                                                    value="Reset password">Reset password</button>
                                            </p>

                                            <input type="hidden" id="woocommerce-lost-password-nonce"
                                                name="woocommerce-lost-password-nonce" value="d9b90fe517" /><input
                                                type="hidden" name="_wp_http_referer" value="/my-account/lost-password/" />
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </form>
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