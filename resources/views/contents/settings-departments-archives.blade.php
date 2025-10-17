@extends("layouts.settings")

@section("title")
    Arsip Departemen &mdash; {{ config("app.name") }}
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
    <script src="{{ asset("libs/sweetalert2/sweetalert2.all.min.js") }}"></script>
    <script src="{{ asset("js/notification.js") }}"></script>
@endsection

@section("content")
    <div class="container-fluid">

        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div>
                <h1 class="page-title fw-semibold fs-18 mb-0">Manajemen Departemen</h1>
                <nav>
                    <ol class="breadcrumb mb-0 mt-1">
                        <li class="breadcrumb-item"><a href="{{ route("settings.dashboard") }}">Pengaturan Aplikasi</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("settings.departments.index") }}">Manajemen Departemen</a></li>
                        <li aria-current="page" class="breadcrumb-item active">Arsip</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-md-1 ms-0 mt-2 mt-md-0">
                <a class="btn btn-secondary btn-wave" href="{{ route("settings.departments.index") }}">
                    <i class="bi bi-arrow-left me-2"></i>Kembali
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                        <h5 class="card-title my-auto">Daftar Departemen</h5>
                        <form action="{{ route("settings.departments.archives.index") }}" method="GET">
                            <div class="input-group">
                                <input class="form-control" name="search" placeholder="Cari di arsip..." type="text" value="{{ request("search") }}">
                                <button class="btn btn-primary" type="submit">
                                    <i class="bi bi-search me-2"></i>Cari
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col" style="width: 5%;">No.</th>
                                        <th class="text-center" scope="col">Nama Divisi</th>
                                        <th class="text-center" scope="col">Kode Departmen</th>
                                        <th class="text-center" scope="col">Waktu Hapus</th>
                                        <th class="text-center" scope="col" style="width: 15%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($trashedDepartments as $trashedDepartment)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $trashedDepartment->name }}</td>
                                            <td class="text-center">{{ $trashedDepartment->code }}</td>
                                            <td class="text-center">{{ $trashedDepartment->deleted_at ? $trashedDepartment->deleted_at->format("l, d-m-Y, H:i:s") : "-" }}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <form action="{{ route("settings.departments.archives.restore", $trashedDepartment) }}" class="d-inline" method="POST">
                                                        @csrf
                                                        @method("PUT")
                                                        <button class="btn btn-sm btn-outline-success me-2" type="submit">
                                                            <i class="bi bi-arrow-counterclockwise me-1"></i> Pulihkan
                                                        </button>
                                                    </form>
                                                    <form action="{{ route("settings.departments.archives.force.delete", $trashedDepartment) }}" id="force-delete-form-{{ $trashedDepartment->id }}" method="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button class="btn btn-sm btn-outline-danger" onclick="showConfirmationDialog({ formId: 'force-delete-form-{{ $trashedDepartment->id }}' })" type="button">
                                                            <i class="bi bi-trash3-fill me-1"></i> Hapus Permanen
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center text-muted py-4" colspan="4">
                                                Belum ada data divisi untuk ditampilkan.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="card-footer">
                            {{ $trashedDepartments->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
