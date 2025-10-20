@extends("layouts.settings")

@section("title")
    Jabatan &mdash; {{ config("app.name") }}
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
                <h1 class="page-title fw-semibold fs-18 mb-0">Manajemen Jabatan</h1>
                <nav>
                    <ol class="breadcrumb mb-0 mt-1">
                        <li class="breadcrumb-item"><a href="{{ route("settings.dashboard") }}">Pengaturan Aplikasi</a></li>
                        <li aria-current="page" class="breadcrumb-item active">Jabatan</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-md-1 ms-0 mt-2 mt-md-0">
                <button class="btn btn-primary btn-wave" data-bs-target="#addPositionModal" data-bs-toggle="modal" type="button">
                    <i class="bi bi-plus-lg me-2"></i>Tambah Jabatan Baru
                </button>
                <a class="btn btn-info btn-wave" href="{{ route("settings.positions.archives.index") }}">
                    <i class="bi bi-files me-2"></i>Lihat Arsip
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                        <h5 class="card-title my-auto">Daftar Jabatan</h5>
                        <form action="{{ route("settings.positions.index") }}" method="GET">
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
                                        <th class="text-center" scope="col">Nama Jabatan</th>
                                        <th class="text-center" scope="col">Kode Jabatan</th>
                                        <th class="text-center" scope="col" style="width: 15%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($positions as $position)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $position->name }}</td>
                                            <td class="text-center">{{ $position->code }}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-outline-secondary me-2" data-bs-target="#editPositionModal{{ $position->id }}" data-bs-toggle="modal">
                                                        <i class="bi bi-pencil-fill me-1"></i> Edit
                                                    </button>
                                                    <form action="{{ route("settings.positions.destroy", $position->id) }}" id="delete-form-{{ $position->id }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button class="btn btn-sm btn-outline-danger delete-button" data-id="{{ $position->id }}" type="button">
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
                            {{ $positions->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Modal tambah jabatan baru --}}
    <div aria-hidden="true" aria-labelledby="addPositionModalLabel" class="modal fade" id="addPositionModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPositionModalLabel">Tambah Jabatan Baru</h5>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <form action="{{ route("settings.positions.store") }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" for="name">Nama Jabatan</label>
                            <input class="form-control" id="name" name="name" placeholder="Contoh: Kepala Bagian" required type="text">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="code">Kode Jabatan</label>
                            <input class="form-control" id="code" name="code" placeholder="Contoh: KABAG" required type="text">
                            <div class="form-text">Kode singkat untuk jabatan ini (maksimal 5 karakter).</div>
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

    {{-- Modal edit jabatan --}}
    @foreach ($positions as $position)
        <div aria-hidden="true" aria-labelledby="editPositionModalLabel{{ $position->id }}" class="modal fade" id="editPositionModal{{ $position->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editPositionModalLabel{{ $position->id }}">Edit Jabatan</h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                    </div>
                    <form action="{{ route("settings.positions.update", $position->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label" for="name-{{ $position->id }}">Nama Jabatan</label>
                                <input class="form-control" id="name-{{ $position->id }}" name="name" required type="text" value="{{ $position->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="code-{{ $position->id }}">Kode Jabatan</label>
                                <input class="form-control" id="code-{{ $position->id }}" name="code" required type="text" value="{{ $position->code }}">
                                <div class="form-text">Kode singkat untuk jabatan ini (maksimal 5 karakter).</div>
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
