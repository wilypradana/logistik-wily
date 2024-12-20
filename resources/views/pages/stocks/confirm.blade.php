@extends('layouts.auth')

@section('title', 'konfirmasi hapus')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">
@endpush
@section('main')
    <div class="card card-primary">
 
        <div class="card-header">
     
            <h1>Masukkan Password untuk Melanjutkan</h1>
        </div>

        <div class="card-body">
           

            <form method="POST" class="needs-validation" novalidate="" action="{{ route('delete-proccess')}}">
                @csrf
                <input type="hidden" name="id" value="{{ $data }}">

                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input 
                        id="password" 
                        type="password" 
                        class="form-control" 
                        name="password" 
                        tabindex="2" 
                        required 
                    >
                    <div class="invalid-feedback">
                        Harap masukkan password
                    </div>
                </div>

                <div class="form-group">
                    <button 
                        type="submit" 
                        class="btn btn-primary btn-lg btn-block" 
                        tabindex="4"
                    >
                        Hapus
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush