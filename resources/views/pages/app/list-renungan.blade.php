@extends('layouts.app')

@section('title', 'Daftar Renungan')

@include('')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ _('Daftar Renungan') }}</h1>
            </div>
        </section>
        <div class="section-body">
            <style>
                .section-header2 {
                    display: flex;
                    justify-content: flex-end;
                    padding-right: 20px;
                    /* Menambah jarak antara tombol dan batas kanan */
                }
            </style>
            <div class="section-header2 d-flex justify-content-between">
                <div></div> <!-- Ini bisa diisi dengan konten lain atau dibiarkan kosong -->
                <a href="{{ route('tambah-renungan') }}" class="btn btn-primary me-3">Tambah Renungan</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        {{-- <th>No</th> --}}
                        <th>Judul Renungan</th>
                        <th>Bacaan</th>
                        <th>Ayat Kunci</th>
                        <th>Prinsip</th>
                        <th>Perenung</th>
                        <th>Tanggal</th>
                        <th>Content</th>
                        <th>Doa</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @isset($renungan)
                        @foreach ($renungan as $r)
                            <tr>
                                {{-- <td>{{  }}</td> <!-- Menampilkan nomor urut --> --}}
                                <td>{{ $r->title }}</td>
                                <td>{{ $r->bacaan }}</td>
                                <td>{{ $r->ayat_kunci }}</td>
                                <td>{{ $r->kalimat_prinsip }}</td>
                                <td>{{ $r->kalimat_renung }}</td>
                                <td>{{ $r->date_renungan->format('Y-m-d') }}</td> <!-- Format tanggal -->
                                <td>{{ $r->content_renungan }}</td>
                                <td>{{ $r->doa }}</td>
                                <td><a href="{{ route('renungan.edit', $item->id) }}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form action="{{ route('renungan.destroy', $item->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11">Data renungan tidak tersedia.</td>
                        </tr>
                    @endisset
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
