<!DOCTYPE html>
<html data-header-styles="light" data-menu-styles="light" data-nav-layout="vertical" data-theme-mode="light" data-toggled="close" data-vertical-style="overlay" dir="ltr" lang="en">

<head>

    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title> Halaman Tidak Ditemukan &mdash; {{ config("app.name") }} </title>

    <link href="{{ asset("images/brand-logos/favicon.ico") }}" rel="icon" type="image/x-icon">
    <link href="{{ asset("libs/bootstrap/css/bootstrap.min.css") }}" id="style" rel="stylesheet">
    <link href="{{ asset("css/styles.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/icons.min.css") }}" rel="stylesheet">

</head>

<body>
    <div class="page error-bg" id="particles-js">
        <div class="error-page">
            <div class="container">
                <div class="text-center p-5 my-auto">
                    <div class="row align-items-center justify-content-center h-100">
                        <div class="col-xl-7">
                            <p class="error-text mb-sm-0 mb-2">404</p>
                            <p class="fs-18 fw-semibold mb-3">Oops 😭, halaman yang Anda cari tidak tersedia.</p>
                            <div class="row justify-content-center mb-5">
                                <div class="col-xl-6">
                                    <p class="mb-0 op-7">Kami mohon maaf atas ketidaknyamanan ini, halaman yang Anda coba akses telah dihapus atau tidak pernah ada.</p>
                                </div>
                            </div>
                            <a class="btn btn-primary" href="{{ route("portal") }}"><i class="ri-arrow-left-line align-middle me-1 d-inline-block"></i>Kembali ke Portal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset("js/authentication-main.js") }}"></script>
    <script src="{{ asset("libs/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("libs/particles.js/particles.js") }}"></script>
    <script src="{{ asset("js/error.js") }}"></script>

</body>

</html>
