@extends("layouts.settings")

@section("title")
    Hak Akses &mdash; {{ config("app.name") }}
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
    @php
        $dummyPermissions = [
            [
                "code" => "view_users",
                "description" => "Mengizinkan pengguna untuk melihat daftar pengguna.",
                "group" => "User Management",
                "roles" => [["name" => "Admin"], ["name" => "Manager"]],
            ],
            [
                "code" => "edit_users",
                "description" => "Mengizinkan pengguna untuk mengedit informasi pengguna.",
                "group" => "User Management",
                "roles" => [["name" => "Admin"]],
            ],
            [
                "code" => "delete_users",
                "description" => "Mengizinkan pengguna untuk menghapus pengguna dari sistem.",
                "group" => "User Management",
                "roles" => [["name" => "Admin"]],
            ],
            [
                "code" => "view_reports",
                "description" => "Mengizinkan pengguna untuk melihat laporan sistem.",
                "group" => "Reporting",
                "roles" => [["name" => "Admin"], ["name" => "Manager"], ["name" => "Analyst"]],
            ],
            [
                "code" => "generate_reports",
                "description" => "Mengizinkan pengguna untuk menghasilkan laporan baru.",
                "group" => "Reporting",
                "roles" => [["name" => "Admin"], ["name" => "Manager"]],
            ],
            [
                "code" => "manage_settings",
                "description" => "Mengizinkan pengguna untuk mengubah pengaturan aplikasi.",
                "group" => "System Settings",
                "roles" => [["name" => "Admin"]],
            ],
        ];

    @endphp

    <div class="container-fluid">

        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div>
                <h1 class="page-title fw-semibold fs-18 mb-0">Informasi Hak Akses</h1>
                <nav>
                    <ol class="breadcrumb mb-0 mt-1">
                        <li class="breadcrumb-item"><a href="{{ route("settings.dashboard") }}">Pengaturan Aplikasi</a></li>
                        <li aria-current="page" class="breadcrumb-item active">Hak Akses</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="alert alert-info" role="alert">
            <i class="ti ti-info-circle me-1"></i>
            Halaman ini hanya menampilkan jenis izin yang tersedia di dalam sistem. Izin baru ditambahkan oleh developer melalui pembaruan aplikasi.
        </div>

        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">
                    Daftar Hak Akses
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-nowrap" id="responsiveDataTable" style="width:100%">
                    <thead>
                        <tr id="filters">
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th scope="col">Nama Hak Akses (Kode)</th>
                            <th scope="col">Deksripsi Hak Akses</th>
                            <th scope="col">Grup</th>
                            <th scope="col">Diberikan Kepada Peran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dummyPermissions as $permission)
                            <tr>
                                <td>{{ $permission["code"] }}</td>
                                <td>{{ $permission["description"] }}</td>
                                <td>{{ $permission["group"] }}</td>
                                <td>
                                    @foreach ($permission["roles"] as $role)
                                        <span class="badge bg-primary">{{ $role["name"] }}</span>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
