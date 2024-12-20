@extends('layouts.app')

@section('title', 'detail incoming')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>detail incoming</h1>
        </div>
        @if (\Session::has('success'))
        <div class="alert alert-success" role="alert">
            {!! \Session::get('success') !!}
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
                            <form method="GET" action="{{ route('show-incomings') }}"
                                class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="origin" class="form-label">Filter by Origin:</label>
                                </div>
                                <div class="col-auto">
                                    <select name="origin" id="origin" class="form-select">
                                        <option value="">All</option>
                                        <option value="indonesia"
                                            {{ request('origin') == 'indonesia' ? 'selected' : '' }}>
                                            Indonesia</option>
                                        <option value="jepang" {{ request('origin') == 'jepang' ? 'selected' : '' }}>
                                            Jepang</option>
                                        <option value="belanda" {{ request('origin') == 'belanda' ? 'selected' : '' }}>
                                            Belanda</option>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </form>

                            <div class="table-responsive">
                                <table class="table-striped mb-0 table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No barang masuk</th>
                                            <th>Kode Barang</th>
                                            <th>Quantity</th>
                                            <th>Origin (asal barang)</th>
                                            <th>Tanggal Masuk</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($incomings as $incoming)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$incoming->no_barang_masuk}}</td>
                                            <td>{{$incoming->kode_barang}}</td>
                                            <td>{{$incoming->quantity}}</td>
                                            <td>{{$incoming->origin}}</td>
                                            <td>{{$incoming->tanggal_masuk}}</td>
                                            <td class="d-flex">
                                                <form action="{{ route('delete-incoming')}}" method="POST"
                                                    id="deleteForm"
                                                    onsubmit="event.preventDefault(); showDeleteModal(this);">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id" value="{{ $incoming->id }}">
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
                                            <td colspan="4">Belum ada data.</td>
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
