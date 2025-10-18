<div class="pt-breadcrumb-style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="pt-breadcrumb-title">
                        <h1>@yield('breadcrumb')</h1>
                    </div>
                    <div class="pt-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}"><i class="fas fa-home mr-2"></i> Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item active">
                                @yield('breadcrumb')
                            </li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>