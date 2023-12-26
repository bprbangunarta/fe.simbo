@extends('templates.app')
@section('title', 'Rekening')

@section('header')
    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <b>REKENING</b>
        </div>
        <div class="right">
            @include('templates.notifikasi')
        </div>
    </div>
    <!-- * App Header -->
@endsection

@section('content')
    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- LIST SIMAPAN -->
        @if ($simapan->isNotEmpty())
            <div class="section full mt-2 mb-2">
                <!-- carousel single -->
                <div class="carousel-single splide">
                    <div class="splide__track">
                        <ul class="splide__list">

                            @foreach ($simapan as $item)
                                <li class="splide__slide">
                                    <!-- card block -->
                                    <div class="card-block bg-primary">
                                        <div class="card-button dropdown">
                                            <a href="#" class="btn btn-link btn-icon" onclick="copyToClipboard()">
                                                <ion-icon name="copy-outline"></ion-icon>
                                            </a>
                                        </div>

                                        <div class="card-main">
                                            <div class="balance">
                                                <span class="label">SALDO</span>
                                                <h1 class="title">Rp. {{ number_format($item->saldoakhir, 0, ',', '.') }}
                                                </h1>
                                            </div>
                                            <div class="in">
                                                <div class="card-number text-light">
                                                    <span class="label">Rekening</span>
                                                    <div name="no_rekening" id="no_rekening">{{ $item->noacc }}</div>
                                                </div>
                                                <div class="bottom">
                                                    <div class="card-expiry">
                                                        <span class="label">Produk</span>
                                                        SIMAPAN
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- * card block -->
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- * carousel single -->
            </div>
        @else
        @endif
        <!-- * LIST SIMAPAN -->

        <!-- LIST SILOKA -->
        @if ($siloka->isNotEmpty())
            <div class="section full mt-2 mb-2">
                <!-- carousel single -->
                <div class="carousel-single splide">
                    <div class="splide__track">
                        <ul class="splide__list">

                            @foreach ($siloka as $item)
                                <li class="splide__slide">
                                    <!-- card block -->
                                    <div class="card-block bg-info">
                                        <div class="card-button dropdown">
                                            <a href="#" class="btn btn-link btn-icon">
                                                <ion-icon name="copy-outline"></ion-icon>
                                            </a>
                                        </div>

                                        <div class="card-main">
                                            <div class="balance">
                                                <span class="label">SALDO</span>
                                                <h1 class="title">Rp. {{ number_format($item->saldoakhir, 0, ',', '.') }}
                                                </h1>
                                            </div>
                                            <div class="in">
                                                <div class="card-number">
                                                    <span class="label">Rekening</span>
                                                    <div name="no_rekening" id="no_rekening">{{ $item->noacc }}</div>
                                                </div>
                                                <div class="bottom">
                                                    <div class="card-expiry">
                                                        <span class="label">Produk</span>
                                                        SILOKA
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- * card block -->
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- * carousel single -->
            </div>
        @else
        @endif
        <!-- * LIST SILOKA -->

        <!-- LIST SIMANTAP -->
        @if ($simantap->isNotEmpty())
            <div class="section full mt-2 mb-2">
                <!-- carousel single -->
                <div class="carousel-single splide">
                    <div class="splide__track">
                        <ul class="splide__list">

                            @foreach ($simantap as $item)
                                <li class="splide__slide">
                                    <!-- card block -->
                                    <div class="card-block bg-danger">
                                        <div class="card-button dropdown">
                                            <a href="#" class="btn btn-link btn-icon">
                                                <ion-icon name="copy-outline"></ion-icon>
                                            </a>
                                        </div>

                                        <div class="card-main">
                                            <div class="balance">
                                                <span class="label">SALDO</span>
                                                <h1 class="title">Rp. {{ number_format($item->saldoakhir, 0, ',', '.') }}
                                                </h1>
                                            </div>
                                            <div class="in">
                                                <div class="card-number">
                                                    <span class="label">Rekening</span>
                                                    <div name="no_rekening" id="no_rekening">{{ $item->noacc }}</div>
                                                </div>
                                                <div class="bottom">
                                                    <div class="card-expiry">
                                                        <span class="label">Produk</span>
                                                        SIMANTAP
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- * card block -->
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- * carousel single -->
            </div>
        @else
        @endif
        <!-- * LIST SIMANTAP -->

        <!-- LIST SIMABRUR -->
        @if ($simabrur->isNotEmpty())
            <div class="section full mt-2 mb-2">
                <!-- carousel single -->
                <div class="carousel-single splide">
                    <div class="splide__track">
                        <ul class="splide__list">

                            @foreach ($simabrur as $item)
                                <li class="splide__slide">
                                    <!-- card block -->
                                    <div class="card-block bg-warning">
                                        <div class="card-button dropdown">
                                            <a href="#" class="btn btn-link btn-icon">
                                                <ion-icon name="copy-outline"></ion-icon>
                                            </a>
                                        </div>

                                        <div class="card-main">
                                            <div class="balance">
                                                <span class="label">SALDO</span>
                                                <h1 class="title">Rp. {{ number_format($item->saldoakhir, 0, ',', '.') }}
                                                </h1>
                                            </div>
                                            <div class="in">
                                                <div class="card-number">
                                                    <span class="label">Rekening</span>
                                                    <div name="no_rekening" id="no_rekening">{{ $item->noacc }}</div>
                                                </div>
                                                <div class="bottom">
                                                    <div class="card-expiry">
                                                        <span class="label">Produk</span>
                                                        SIMABRUR
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- * card block -->
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- * carousel single -->
            </div>
        @else
        @endif
        <!-- * LIST SIMABRUR -->

        <!-- LIST DEPOSITO -->
        @if ($deposito->isNotEmpty())
            <div class="section full mt-2 mb-2">
                <!-- carousel single -->
                <div class="carousel-single splide">
                    <div class="splide__track">
                        <ul class="splide__list">

                            @foreach ($deposito as $item)
                                <li class="splide__slide">
                                    <!-- card block -->
                                    <div class="card-block bg-dark">
                                        <div class="card-button dropdown">
                                            <a href="#" class="btn btn-link btn-icon">
                                                <ion-icon name="copy-outline"></ion-icon>
                                            </a>
                                        </div>

                                        <div class="card-main">
                                            <div class="balance">
                                                <span class="label">SALDO</span>
                                                <h1 class="title">Rp. {{ number_format($item->nomawal, 0, ',', '.') }}
                                                </h1>
                                            </div>
                                            <div class="in">
                                                <div class="card-number">
                                                    <span class="label">Rekening</span>
                                                    <div name="no_rekening" id="no_rekening">{{ $item->noacc }}</div>
                                                </div>
                                                <div class="bottom">
                                                    <div class="card-expiry">
                                                        <span class="label">Produk</span>
                                                        @if ($item->kodeprd == '04')
                                                            SIMABRUR PAKET
                                                        @elseif ($item->kodeprd == '05')
                                                            SIMABRUR NON PAKET
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- * card block -->
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- * carousel single -->
            </div>
        @else
        @endif
        <!-- * LIST DEPOSITO -->


    </div>
    <!-- * App Capsule -->
@endsection

@push('myscript')
@endpush
