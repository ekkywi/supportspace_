@extends("layouts.settings")

@section("title")
    Bagian &mdash; {{ config("app.name") }}
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
        $dummySections = [
            [
                "id" => 1,
                "name" => "Dukungan Pelanggan",
                "code" => "CUST-SUP",
                "users_count" => 12,
            ],
            [
                "id" => 2,
                "name" => "Teknologi Informasi",
                "code" => "IT",
                "users_count" => 8,
            ],
            [
                "id" => 3,
                "name" => "Sumber Daya Manusia",
                "code" => "HR",
                "users_count" => 5,
            ],
            [
                "id" => 4,
                "name" => "Pemasaran",
                "code" => "MKT",
                "users_count" => 7,
            ],
            [
                "id" => 5,
                "name" => "Penjualan",
                "code" => "SL",
                "users_count" => 10,
            ],
            [
                "id" => 6,
                "name" => "Keuangan",
                "code" => "FIN",
                "users_count" => 6,
            ],
            [
                "id" => 7,
                "name" => "Pengembangan Produk",
                "code" => "PD",
                "users_count" => 9,
            ],
            [
                "id" => 8,
                "name" => "Operasi",
                "code" => "OPS",
                "users_count" => 4,
            ],
            [
                "id" => 9,
                "name" => "Layanan Pelanggan",
                "code" => "CS",
                "users_count" => 11,
            ],
        ];
    @endphp

    <div class="container-fluid">

        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div>
                <h1 class="page-title fw-semibold fs-18 mb-0">Manajemen Bagian</h1>
                <nav>
                    <ol class="breadcrumb mb-0 mt-1">
                        <li class="breadcrumb-item"><a href="{{ route("settings.dashboard") }}">Pengaturan Aplikasi</a></li>
                        <li aria-current="page" class="breadcrumb-item active">Bagian</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-md-1 ms-0 mt-2 mt-md-0">
                <button class="btn btn-primary btn-wave" data-bs-target="#addSectionModal" data-bs-toggle="modal" type="button">
                    <i class="bi bi-plus-lg me-2"></i>Tambah Bagian Baru
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h5 class="card-title my-auto">Daftar Bagian</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col" style="width: 5%;">No.</th>
                                        <th class="text-center" scope="col">Nama Bagian</th>
                                        <th class="text-center" scope="col">Kode Bagian</th>
                                        <th class="text-center" scope="col">Jumlah Anggota</th>
                                        <th class="text-center" scope="col" style="width: 15%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dummySections as $section)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $section["name"] }}</td>
                                            <td class="text-center">{{ $section["code"] }}</td>
                                            <td class="text-center">{{ $section["users_count"] }}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-outline-secondary me-2" data-bs-target="#editSectionModal{{ $section["id"] }}" data-bs-toggle="modal">
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

    {{-- Modal tambah bagian baru --}}
    <div aria-hidden="true" aria-labelledby="addSectionModalLabel" class="modal fade" id="addSectionModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSectionModalLabel">Tambah Bagian Baru</h5>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <form action="javascript:void(0);" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" for="name">Nama Bagian</label>
                            <input class="form-control" id="name" name="name" placeholder="Contoh: Marketing" required type="text">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="code">Kode Bagian</label>
                            <input class="form-control" id="code" name="code" placeholder="Contoh: MKT" required type="text">
                            <div class="form-text">Kode singkat untuk bagian ini (maksimal 5 karakter).</div>
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

    {{-- Modal edit bagian --}}
    @foreach ($dummySections as $section)
        <div aria-hidden="true" aria-labelledby="editSectionModalLabel{{ $section["id"] }}" class="modal fade" id="editSectionModal{{ $section["id"] }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editSectionModalLabel{{ $section["id"] }}">Edit Bagian</h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                    </div>
                    <form action="javascript:void(0);" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label" for="name-{{ $section["id"] }}">Nama Bagian</label>
                                <input class="form-control" id="name-{{ $section["id"] }}" name="name" required type="text" value="{{ $section["name"] }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="code-{{ $section["id"] }}">Kode Bagian</label>
                                <input class="form-control" id="code-{{ $section["id"] }}" name="code" required type="text" value="{{ $section["code"] }}">
                                <div class="form-text">Kode singkat untuk bagian ini (maksimal 5 karakter).</div>
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
