<!DOCTYPE html>
<html data-header-styles="light" data-menu-styles="light" data-nav-layout="vertical" data-theme-mode="light" data-toggled="close" data-vertical-style="overlay" dir="ltr" lang="en">

<head>

    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>Login &mdash; SupportSpace</title>

    <link href="{{ asset("images/brand-logos/favicon.ico") }}" rel="icon" type="image/x-icon">
    <link href="{{ asset("libs/bootstrap/css/bootstrap.min.css") }}" id="style" rel="stylesheet">
    <link href="{{ asset("css/styles.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/icons.min.css") }}" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="my-5 d-flex justify-content-center">
                    <a href="{{ route("login") }}">
                        <img alt="logo" class="desktop-logo" src="{{ asset("images/brand-logos/logo.png") }}">
                    </a>
                </div>
                <div class="card custom-card">
                    <div class="card-body p-5">
                        <p class="h5 fw-bold mb-2 text-center">Masuk</p>
                        <p class="mb-4 text-muted op-7 fw-normal text-center">Selamat datang kembali!</p>
                        <form action="{{ route("login") }}" id="login-form" method="POST">
                            @csrf
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label class="form-label text-default fw-semibold" for="username">Nama Pengguna</label>
                                    <input autocomplete="username" class="form-control form-control-lg" id="username" name="username" placeholder="Masukan nama pengguna" type="text">
                                </div>
                                <div class="col-xl-12 mb-2">
                                    <label class="form-label text-default fw-semibold" for="password">Kata Sandi</label>
                                    <input autocomplete="current-password" class="form-control form-control-lg" id="password" name="password" placeholder="********" type="password">
                                </div>
                                <div class="col-xl-12 d-grid mt-4">
                                    <button class="btn btn-lg btn-primary" type="submit">Masuk</button>
                                </div>
                                <div class="col-xl-12 text-center">
                                    <p class="mb-0">Lupa kata sandi ? Atur ulang<a class="text-primary" href="{{ route("forgot-password") }}"> di sini</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset("libs/jquery/jquery-3.6.1.min.js") }}"></script>
    <script src="{{ asset("js/authentication-main.js") }}"></script>
    <script src="{{ asset("libs/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("libs/sweetalert2/sweetalert2.all.min.js") }}"></script>
</body>

</html>
