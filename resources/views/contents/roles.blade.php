@extends("layouts.settings")

@section("title")
    Peran &mdash; {{ config("app.name") }}
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
        $dummyRoles = [
            [
                "id" => 1,
                "name" => "Administrator",
                "code" => "ADMIN",
                "users_count" => 3,
            ],
            [
                "id" => 2,
                "name" => "Manajer",
                "code" => "MGR",
                "users_count" => 5,
            ],
            [
                "id" => 3,
                "name" => "Staf IT",
                "code" => "IT",
                "users_count" => 8,
            ],
            [
                "id" => 4,
                "name" => "Staf HRD",
                "code" => "HRD",
                "users_count" => 4,
            ],
            [
                "id" => 5,
                "name" => "Karyawan",
                "code" => "EMP",
                "users_count" => 20,
            ],
        ];
    @endphp

    <div class="container-fluid">

        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div>
                <h1 class="page-title fw-semibold fs-18 mb-0">Manajemen Peran</h1>
                <nav>
                    <ol class="breadcrumb mb-0 mt-1">
                        <li class="breadcrumb-item"><a href="{{ route("settings.dashboard") }}">Pengaturan Aplikasi</a></li>
                        <li aria-current="page" class="breadcrumb-item active">Peran</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-md-1 ms-0 mt-2 mt-md-0">
                <button class="btn btn-primary btn-wave" data-bs-target="#addRoleModal" data-bs-toggle="modal" type="button">
                    <i class="bi bi-plus-lg me-2"></i>Tambah Peran Baru
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h5 class="card-title my-auto">Daftar Peran</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col" style="width: 5%;">No.</th>
                                        <th class="text-center" scope="col">Nama Peran</th>
                                        <th class="text-center" scope="col">Kode Peran</th>
                                        <th class="text-center" scope="col">Jumlah Anggota</th>
                                        <th class="text-center" scope="col" style="width: 15%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dummyRoles as $role)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $role["name"] }}</td>
                                            <td class="text-center">{{ $role["code"] }}</td>
                                            <td class="text-center">{{ $role["users_count"] }}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-outline-secondary me-2" data-bs-target="#editRoleModal{{ $role["id"] }}" data-bs-toggle="modal">
                                                        <i class="bi bi-pencil-fill me-1"></i> Edit
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger" onclick="alert('Ini adalah aksi hapus dummy.');" type="button">
                                                        <i class="bi bi-trash-fill me-1"></i> Hapus
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center text-muted py-4" colspan="4">
                                                Belum ada data bagian untuk ditampilkan.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Modal tambah peran baru --}}
    <div aria-hidden="true" aria-labelledby="addRoleLabel" class="modal fade" id="addRoleModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addRoleModalLabel">Tambah Peran Baru</h5>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <form action="javascript:void(0);" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" for="name">Nama Peran</label>
                            <input class="form-control" id="name" name="name" placeholder="Contoh: Administrator" required type="text">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="code">Kode Peran</label>
                            <input class="form-control" id="code" name="code" placeholder="Contoh: ADM" required type="text">
                            <div class="form-text">Kode singkat untuk peran ini (maksimal 5 karakter).</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Batal</button>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal edit peran --}}
    @foreach ($dummyRoles as $role)
        <div aria-hidden="true" aria-labelledby="editRoleModalLabel{{ $role["id"] }}" class="modal fade" id="editRoleModal{{ $role["id"] }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editRoleModalLabel{{ $role["id"] }}">Edit Peran</h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                    </div>
                    <form action="javascript:void(0);" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label" for="name-{{ $role["id"] }}">Nama Peran</label>
                                <input class="form-control" id="name-{{ $role["id"] }}" name="name" required type="text" value="{{ $role["name"] }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="code-{{ $role["id"] }}">Kode Peran</label>
                                <input class="form-control" id="code-{{ $role["id"] }}" name="code" required type="text" value="{{ $role["code"] }}">
                                <div class="form-text">Kode singkat untuk peran ini (maksimal 5 karakter).</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Batal</button>
                            <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
