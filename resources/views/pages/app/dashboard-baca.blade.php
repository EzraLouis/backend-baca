@extends('layouts.app')

@section('title', 'Beranda')

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
                <h1>Dashboard</h1>
            </div>
        </section>
        <div class="section-body">
            <div class="container mt-5">
                <div class="row">
                    <!-- Renungan Card -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="card card-statistic-1">
                            <div class="card-menu bg-primary text-white text-center p-3">
                                <i class="fa fa-book fa-2x"></i>
                                <h5 class="mt-2">Renungan</h5>
                                <div class="card-body text-center text-white">
                                    {{-- <a href="{{ route('list-renungan') }}" class="btn btn-primary">List</a>
                                    <a href="{{ route('tambah-renungan') }}" class="btn btn-primary">Tambah</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Setting Card -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="card card-statistic-1">
                            <div class="card-menu bg-warning text-white text-center p-3">
                                <i class="fa fa-cog fa-2x"></i>
                                <h5 class="mt-2">Setting</h5>
                                <div class="card-body text-center text-white">
                                    <p>Adjust your preferences and settings.</p>
                                    <a href="#" class="btn btn-warning">Settings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
