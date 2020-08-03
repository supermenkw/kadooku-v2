@extends('layouts.dashboard')

@section('title')
    Kadooku - Dashboard Transactions
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
    <div class="container-fluid">
        <div class="dashboard-heading">
        <h2 class="dashboard-title">Transactions</h2>
        <p class="dashboard-subtitle">
            Big result start from the small one
        </p>
        </div>
        <div class="dashboard-content">
        <ul class="nav nav-pills" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
            <a
                class="nav-link active"
                id="sell-tab"
                data-toggle="tab"
                href="#sell"
                role="tab"
                aria-controls="sell"
                aria-selected="true"
                >Sell Product</a
            >
            </li>
            <li class="nav-item" role="presentation">
            <a
                class="nav-link"
                id="buy-tab"
                data-toggle="tab"
                href="#buy"
                role="tab"
                aria-controls="buy"
                aria-selected="false"
                >Buy Product</a
            >
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div
            class="tab-pane fade show active"
            id="sell"
            role="tabpanel"
            aria-labelledby="sell-tab"
            >
            <div class="row mt-3">
                <div class="col-12 mt-2">
                <a
                    class="card card-list d-block"
                    href="{{url('/dashboard/transaction/detail')}}"
                >
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                        <img
                            src="{{ asset('images/detil_1.jpg') }}"
                            alt=""
                            class="content-img"
                        />
                        </div>
                        <div class="col-md-4">
                        Shirup Marzzan
                        </div>
                        <div class="col-md-3">
                        Angga
                        </div>
                        <div class="col-md-3">
                        12 Januari, 2020
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                        <img src="{{ asset('images/arrow-right.svg') }}" alt="" />
                        </div>
                    </div>
                    </div>
                </a>
                <a
                    class="card card-list d-block"
                    href="/dashboard-transactions-details.html"
                >
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                        <img
                            src="{{ asset('images/detil_2.jpg') }}""
                            alt=""
                            class="content-img"
                        />
                        </div>
                        <div class="col-md-4">
                        Snekaer
                        </div>
                        <div class="col-md-3">
                        John Doe
                        </div>
                        <div class="col-md-3">
                        11 January, 2020
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                        <img src="{{ asset('images/arrow-right.svg') }}" alt="" />
                        </div>
                    </div>
                    </div>
                </a>
                <a
                    class="card card-list d-block"
                    href="/dashboard-transactions-details.html"
                >
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                        <img
                            src="{{ asset('images/detil_3.jpg') }}".jpg"
                            alt=""
                            class="content-img"
                        />
                        </div>
                        <div class="col-md-4">
                        Soffa Lembutte
                        </div>
                        <div class="col-md-3">
                        Shayna
                        </div>
                        <div class="col-md-3">
                        11 January, 2020
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                        <img src="{{ asset('images/arrow-right.svg') }}" alt="" />
                        </div>
                    </div>
                    </div>
                </a>
                </div>
            </div>
            </div>
            <div
            class="tab-pane fade"
            id="buy"
            role="tabpanel"
            aria-labelledby="buy-tab"
            >
            <div class="row mt-3">
                <div class="col-12 mt-2">
                <a
                    class="card card-list d-block"
                    href="/dashboard-transactions-details.html"
                >
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                        <img
                            src="{{ asset('images/detil_1.jpg') }}".jpg"
                            alt=""
                            class="content-img"
                        />
                        </div>
                        <div class="col-md-4">
                        Shirup Marzzan
                        </div>
                        <div class="col-md-3">
                        Angga
                        </div>
                        <div class="col-md-3">
                        12 Januari, 2020
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                        <img src="{{ asset('images/arrow-right.svg') }}" alt="" />
                        </div>
                    </div>
                    </div>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection