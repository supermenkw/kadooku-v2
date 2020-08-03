@extends('layouts.success')

@section('title')
    Kadooku - Register Success
@endsection

@section('content')
<div class="page-content page-success">
    <div class="section-success" data-aos="zoom-in">
    <div class="container">
        <div class="row align-items-center row-login justify-content-center">
        <div class="col-lg-6 text-center">
        <img src="{{asset('/images/logo-bigger.svg')}}" alt="" class="mb-4" />
            <h2>
            Register Processed!
            </h2>
            <p>
            Kamu sudah berhasil terdaftar <br />
            Berikan Kado terbaik untuk yang tersayang!
            </p>
            <div>
            <a class="btn btn-success w-50 mt-4" href="{{ url('dashboard') }}">
                My Dashboard
            </a>
            <a class="btn btn-signup w-50 mt-2" href="{{ url('/') }}">
                Go To Shopping
            </a>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
    
@endsection