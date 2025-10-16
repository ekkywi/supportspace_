@extends("layouts.portal")

@section("title")
    SupportSpace &mdash; {{ config("app.name") }}
@endsection

@section("styles")
    <link href="{{ asset("images/brand-logos/favicon.ico") }}" rel="icon" type="image/x-icon">
    <link href="{{ asset("libs/bootstrap/css/bootstrap.min.css") }}" id="style" rel="stylesheet">
    <link href="{{ asset("css/styles.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/icons.css") }}" rel="stylesheet">
    <link href="{{ asset("libs/node-waves/waves.min.css") }}" rel="stylesheet">
    <link href="{{ asset("libs/simplebar/simplebar.min.css") }}" rel="stylesheet">
    <link href="{{ asset("libs/flatpickr/flatpickr.min.css") }}" rel="stylesheet">
    <link href="{{ asset("libs/@simonwep/pickr/themes/nano.min.css") }}" rel="stylesheet">
    <link href="{{ asset("libs/choices.js/public/assets/styles/choices.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/application-page.css") }}" rel="stylesheet">
@endsection

@section("scripts")
    <script src="{{ asset("libs/@popperjs/core/umd/popper.min.js") }}"></script>
    <script src="{{ asset("libs/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("js/defaultmenu.min.js") }}"></script>
    <script src="{{ asset("libs/node-waves/waves.min.js") }}"></script>
    <script src="{{ asset("js/sticky.js") }}"></script>
    <script src="{{ asset("libs/simplebar/simplebar.min.js") }}"></script>
    <script src="{{ asset("js/simplebar.js") }}"></script>
    <script src="{{ asset("libs/@simonwep/pickr/pickr.es5.min.js") }}"></script>
    <script src="{{ asset("js/custom-switcher.min.js") }}"></script>
    <script src="{{ asset("libs/choices.js/public/assets/scripts/choices.min.js") }}"></script>
    <script src="{{ asset("js/main.js") }}"></script>
@endsection

@section("content")
    <div class="container-fluid">

        <div class="card mt-4 border-0 mb-4 overflow-hidden header-gradient shadow rounded-4 animate-fade-in-down">
            <div class="card-body p-2 p-md-3 text-white position-relative">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1 class="page-title fw-bold fs-24 mb-2 text-white">Daftar Aplikasi</h1>
                        <p class="mb-0 opacity-75">Semua yang Anda butuhkan ada di sini. Pilih aplikasi untuk memulai.</p>
                    </div>
                    <div class="col-md-4 text-center text-md-end mt-3 mt-md-0">
                        <i class="bi bi-grid-3x3-gap-fill header-icon"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                <div class="animate-fade-in-up" style="animation-delay: 0.1s;">
                    <div class="card text-center shadow-sm card-hover rounded-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bi bi-gear fs-1 text-info"></i>
                            </div>
                            <h5 class="card-title">Pengaturan Aplikasi</h5>
                            <p class="card-text text-muted">Sistem pengaturan aplikasi.</p>
                            <a class="btn btn-primary" href="{{ route("settings.dashboard") }}">Buka Aplikasi <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                <div class="animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="card text-center shadow-sm card-hover rounded-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bi bi-pc-display fs-1 text-danger"></i>
                            </div>
                            <h5 class="card-title">Pengelolaan Aset</h5>
                            <p class="card-text text-muted">Sistem pengelolaan aset perusahaan.</p>
                            <a class="btn btn-primary" href="#">Buka Aplikasi <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
@endsection
