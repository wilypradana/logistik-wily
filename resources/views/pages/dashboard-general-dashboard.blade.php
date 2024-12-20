@extends('layouts.app')

@section('title', 'General Dashboard')

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
            <div class="row">
            <div class="col-lg-7 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Barang Masuk</h4>
                            <div class="card-header-action">
                                <a href="{{ route('show-incomings') }}"
                                    class="btn btn-primary">View All</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped mb-0 table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No barang masuk</th>
                                            <th>Kode Barang</th>
                                            <th>Quantity</th>
                                            <th>origin (asal barang)</th>
                                            <th>Tanggal Masuk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($incomings as $incoming)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$incoming->no_barang_masuk}}</td>
                                            <td>{{$incoming->kode_barang}}</td>
                                            <td>{{$incoming->quantity}}</td>
                                            <td>{{$incoming->origin}}</td>
                                            <td>{{$incoming->tanggal_masuk}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-lg-7 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Barang keluar</h4>
                            <div class="card-header-action">
                                <a href="{{ route('show-outbound') }}"
                                    class="btn btn-primary">View All</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped mb-0 table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No barang keluar</th>
                                            <th>Kode Barang</th>
                                            <th>Quantity</th>
                                            <th>Destinantion (tujuan barang)</th>
                                            <th>Tanggal Keluar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($outbounds as $outbound)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$outbound->no_barang_keluar}}</td>
                                            <td>{{$outbound->kode_barang}}</td>
                                            <td>{{$outbound->quantity}}</td>
                                            <td>{{$outbound->destination}}</td>
                                            <td>{{$outbound->tanggal_keluar}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
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
