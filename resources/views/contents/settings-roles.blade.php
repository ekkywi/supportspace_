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
    <script src="{{ asset("libs/sweetalert2/sweetalert2.all.min.js") }}"></script>
    <script src="{{ asset("js/notification.js") }}"></script>
@endsection

@section("content")
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
                <a class="btn btn-info btn-wave" href="#">
                    <i class="bi bi-files me-2"></i>Lihat Arsip
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                        <h5 class="card-title my-auto">Daftar Peran</h5>
                        <form action="{{ route("settings.roles.index") }}" method="GET">
                            <div class="input-group">
                                <input class="form-control" name="search" placeholder="Pencarian..." type="text" value="{{ request("search") }}">
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
                                        <th class="text-center" scope="col">Nama Peran</th>
                                        <th class="text-center" scope="col">Kode Peran</th>
                                        <th class="text-center" scope="col" style="width: 15%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($roles as $role)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $role->name }}</td>
                                            <td class="text-center">{{ $role->code }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-outline-info me-2" data-bs-target="#rolePermissionModal{{ $role->id }}" data-bs-toggle="modal">
                                                        <i class="bi bi-key-fill me-1"></i> Hak Akses
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-secondary me-2" data-bs-target="#editRoleModal{{ $role->id }}" data-bs-toggle="modal">
                                                        <i class="bi bi-pencil-fill me-1"></i> Edit
                                                    </button>
                                                    <form action="{{ route("settings.roles.destroy", $role->id) }}" id="delete-form-{{ $role->id }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button class="btn btn-sm btn-outline-danger delete-button" data-id="{{ $role->id }}" type="button">
                                                            <i class="bi bi-trash-fill me-1"></i> Hapus
                                                        </button>
                                                    </form>
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
                        <div class="card-footer">
                            {{ $roles->links() }}
                        </div>
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
                <form action="{{ route("settings.roles.store") }}" method="POST">
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
    @foreach ($roles as $role)
        <div aria-hidden="true" aria-labelledby="editRoleModalLabel{{ $role->id }}" class="modal fade" id="editRoleModal{{ $role->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editRoleModalLabel{{ $role->id }}">Edit Peran</h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                    </div>
                    <form action="{{ route("settings.roles.update", $role->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label" for="name-{{ $role->id }}">Nama Peran</label>
                                <input class="form-control" id="name-{{ $role->id }}" name="name" required type="text" value="{{ $role->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="code-{{ $role->id }}">Kode Peran</label>
                                <input class="form-control" id="code-{{ $role->id }}" name="code" required type="text" value="{{ $role->name }}">
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
