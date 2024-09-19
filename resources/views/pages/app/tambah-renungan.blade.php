@extends('layouts.app')

@section('title', 'Tambah Renungan')

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
                <h1>Tambah Renungan</h1>
            </div>
        </section>
        <div class="section-body">
            <form action="{{ route('tambah-renungan') }}" method="POST">
                @csrf <!-- Laravel CSRF Token untuk keamanan -->
                @method('POST')
                <div class="form-group">
                    <label for="title">Judul Renungan</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var today = new Date().toISOString().split('T')[0];
                        document.getElementById('tanggal').value = today;
                    });
                </script>
                <div class="form-group">
                    <label for="date_renungan">Tanggal Buat</label>
                    <input type="date" id="date_renungan" name="date_renungan" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="bacaan">Bacaan</label>
                    <input type="text" id="bacaan" name="bacaan" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="ayat_kunci">Ayat Kunci</label>
                    <input type="text" id="ayat_kunci" name="ayat_kunci" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="content_renungan">Isi</label>
                    <textarea id="content_renungan" name="content_renungan" class="form-control" rows="5" required></textarea>
                </div>

                <div class="form-group">
                    <label for="kalimat_prinsip">Kalimat Prinsip</label>
                    <textarea id="kalimat_prinsip" name="kalimat_prinsip" class="form-control" rows="2" required></textarea>
                </div>

                <div class="form-group">
                    <label for="doa">Doa</label>
                    <textarea id="doa" name="doa" class="form-control" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
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
