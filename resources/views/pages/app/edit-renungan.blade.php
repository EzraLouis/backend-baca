@extends('layouts.app')

@section('title', 'Edit Renungan')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Renungan</h1>
            </div>
            
        </section>
        <div class="section-body">
            <form action="{{ route('update-renungan', $renungan->id) }}" method="POST">
                @csrf <!-- Laravel CSRF Token untuk keamanan -->
                @method('PUT') <!-- Menggunakan metode PUT untuk pembaruan data -->

                <div class="form-group">
                    <label for="judul">Judul Renungan</label>
                    <input type="text" id="judul" name="judul" class="form-control" value="{{ old('judul', $renungan->judul) }}" required>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal Buat</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{ old('tanggal', $renungan->tanggal) }}" required>
                </div>

                <div class="form-group">
                    <label for="bacaan">Bacaan</label>
                    <input type="text" id="bacaan" name="bacaan" class="form-control" value="{{ old('bacaan', $renungan->bacaan) }}" required>
                </div>

                <div class="form-group">
                    <label for="ayat_kunci">Ayat Kunci</label>
                    <input type="text" id="ayat_kunci" name="ayat_kunci" class="form-control" value="{{ old('ayat_kunci', $renungan->ayat_kunci) }}" required>
                </div>

                <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea id="isi" name="isi" class="form-control" rows="5" required>{{ old('isi', $renungan->isi) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="kalimat_prinsip">Kalimat Prinsip</label>
                    <textarea id="kalimat_prinsip" name="kalimat_prinsip" class="form-control" rows="2" required>{{ old('kalimat_prinsip', $renungan->kalimat_prinsip) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="doa">Doa</label>
                    <textarea id="doa" name="doa" class="form-control" rows="3" required>{{ old('doa', $renungan->doa) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update Renungan</button>
            </form>
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
