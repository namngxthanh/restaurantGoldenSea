@extends('layouts.client')

@section('title', 'Giỏ hàng')

@section('breadcrumb', 'Giỏ hàng')
@section('content')

    <div id="content" class="site-content">
        <div class="peacefulthemes-contain-area">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="container">
                        <article id="post-10" class="post-10 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <div class="wc-empty-cart-message">
                                        <div class="cart-empty woocommerce-info">
                                            Your cart is
                                            currently empty.
                                        </div>
                                    </div>
                                    <p class="return-to-shop">
                                        <a class="button wc-backward" href="../shop/index.html">
                                            Return to shop
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <!-- .entry-content -->
                        </article>
                        <!-- #post-10 -->
                    </div>
                    <!-- .container -->
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
    </div>
    <!-- #content -->
@endsection