@extends('layouts.app')

@section('title', 'detail stocks')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>detail stocks</h1>
        </div>
        @if (\Session::has('success'))
        <div class="alert alert-success" role="alert">
            {!! \Session::get('success') !!}
        </div>

        @endif
        @if (\Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {!! \Session::get('error') !!}
                </div>
            @endif
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="col-lg-7 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Barang Masuk</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped mb-0 table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Quantity</th>
                                            <th>origin</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($stocks as $stock)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$stock->kode_barang}}</td>
                                            <td>{{$stock->quantity}}</td>
                                            <td>{{$stock->origin}}</td>
                                            <td>
                                            <form action="{{ route('delete-stock')}}"
                                            method="POST">
                                             @csrf
                                            <input type="hidden" name="id" value="{{ $stock->id }}">
                                            <button type="submit"
                                                    class="btn btn-danger btn-action d-flex align-items-center justify-content-center"
                                                    title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>Tidak ada data</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
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