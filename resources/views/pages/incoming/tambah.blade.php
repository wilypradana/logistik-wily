@extends('layouts.app')

@section('title', 'catat barang masuk')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>catat barang masuk</h1>
        </div>

        <div class="section-body">

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
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="font-extrabold" style="font-weight: bold; font-size:20px;">Kode Barang</label>
                                    <input type="text" class="form-control" name="kode_barang">
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold"
                                        style="font-weight: bold; font-size:20px;">Quantity</label>
                                    <input type="text" class="form-control" name="quantity" inputmode="numeric" required >
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold"
                                        style="font-weight: bold; font-size:20px;">Origin</label>
                                    <input type="text" class="form-control" name="origin" required >
                                </div>
                                <div class="form-group">
                                    <label class="font-extrabold"
                                        style="font-weight: bold; font-size:20px;">tanggal masuk</label>
                                    <input type="date" class="form-control" name="tanggal_masuk">
                                   <div class="mt-2">
                                   <span class="text-primary">*kosongkan untuk waktu sekarang</span>
                                   </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

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
<!-- Page Specific JS File -->
@endpush