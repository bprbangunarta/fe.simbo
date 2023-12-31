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
        @if (is_array($simapan) && isset($simapan['data']))
            <div class="section full mt-2 mb-2">
                <div class="carousel-single splide">
                    <div class="splide__track">
                        <ul class="splide__list">

                            @foreach ($simapan['data'] as $item)
                                <li class="splide__slide">
                                    <div class="card-block bg-primary">
                                        <div class="card-button dropdown">
                                            <a href="#" class="btn btn-link btn-icon" onclick="copyToClipboard()">
                                                <ion-icon name="copy-outline"></ion-icon>
                                            </a>
                                        </div>

                                        <div class="card-main">
                                            <div class="balance">
                                                <span class="label">SALDO SIMAPAN</span>
                                                <h1 class="title">Rp. {{ number_format($item['saldoakhir'], 0, ',', '.') }}
                                                </h1>
                                            </div>
                                            <div class="in">
                                                <div class="card-number text-light">
                                                    <span class="label">Rekening</span>
                                                    <div name="no_rekening" id="no_rekening">{{ $item['noacc'] }}</div>
                                                </div>
                                                <div class="bottom">
                                                    <div class="card-expiry">
                                                        <span class="label">Atas Nama</span>
                                                        {{ $item['fnama'] }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @else
        @endif
        <!-- * LIST SIMAPAN -->

        <!-- LIST SILOKA -->
        @if (is_array($siloka) && isset($siloka['data']))
            <div class="section full mt-2 mb-2">
                <div class="carousel-single splide">
                    <div class="splide__track">
                        <ul class="splide__list">

                            @foreach ($siloka['data'] as $item)
                                <li class="splide__slide">
                                    <div class="card-block bg-info">
                                        <div class="card-button dropdown">
                                            <a href="#" class="btn btn-link btn-icon" onclick="copyToClipboard()">
                                                <ion-icon name="copy-outline"></ion-icon>
                                            </a>
                                        </div>

                                        <div class="card-main">
                                            <div class="balance">
                                                <span class="label">SALDO SILOKA</span>
                                                <h1 class="title">Rp. {{ number_format($item['saldoakhir'], 0, ',', '.') }}
                                                </h1>
                                            </div>
                                            <div class="in">
                                                <div class="card-number text-light">
                                                    <span class="label">Rekening</span>
                                                    <div name="no_rekening" id="no_rekening">{{ $item['noacc'] }}</div>
                                                </div>
                                                <div class="bottom">
                                                    <div class="card-expiry">
                                                        <span class="label">Atas Nama</span>
                                                        {{ $item['fnama'] }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @else
        @endif
        <!-- * LIST SILOKA -->

        <!-- LIST SIMANTAP -->
        @if (is_array($simantap) && isset($simantap['data']))
            <div class="section full mt-2 mb-2">
                <div class="carousel-single splide">
                    <div class="splide__track">
                        <ul class="splide__list">

                            @foreach ($simantap['data'] as $item)
                                <li class="splide__slide">
                                    <div class="card-block bg-danger">
                                        <div class="card-button dropdown">
                                            <a href="#" class="btn btn-link btn-icon" onclick="copyToClipboard()">
                                                <ion-icon name="copy-outline"></ion-icon>
                                            </a>
                                        </div>

                                        <div class="card-main">
                                            <div class="balance">
                                                <span class="label">SALDO SIMANTAP</span>
                                                <h1 class="title">Rp. {{ number_format($item['saldoakhir'], 0, ',', '.') }}
                                                </h1>
                                            </div>
                                            <div class="in">
                                                <div class="card-number text-light">
                                                    <span class="label">Rekening</span>
                                                    <div name="no_rekening" id="no_rekening">{{ $item['noacc'] }}</div>
                                                </div>
                                                <div class="bottom">
                                                    <div class="card-expiry">
                                                        <span class="label">Atas Nama</span>
                                                        {{ $item['fnama'] }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @else
        @endif
        <!-- * LIST SIMANTAP -->

        <!-- LIST SIMABRUR -->
        @if (is_array($simabrur) && isset($simabrur['data']))
            <div class="section full mt-2 mb-2">
                <div class="carousel-single splide">
                    <div class="splide__track">
                        <ul class="splide__list">

                            @foreach ($simabrur['data'] as $item)
                                <li class="splide__slide">
                                    <div class="card-block bg-warning">
                                        <div class="card-button dropdown">
                                            <a href="#" class="btn btn-link btn-icon" onclick="copyToClipboard()">
                                                <ion-icon name="copy-outline"></ion-icon>
                                            </a>
                                        </div>

                                        <div class="card-main">
                                            <div class="balance">
                                                <span class="label">SALDO
                                                    @if ($item['kodeprd'] == '04')
                                                        SIMABRUR PAKET
                                                    @elseif ($item['kodeprd'] == '05')
                                                        SIMABRUR NON PAKET
                                                    @endif
                                                </span>
                                                <h1 class="title">Rp. {{ number_format($item['saldoakhir'], 0, ',', '.') }}
                                                </h1>
                                            </div>
                                            <div class="in">
                                                <div class="card-number text-light">
                                                    <span class="label">Rekening</span>
                                                    <div name="no_rekening" id="no_rekening">{{ $item['noacc'] }}</div>
                                                </div>
                                                <div class="bottom">
                                                    <div class="card-expiry">
                                                        <span class="label">Atas Nama</span>
                                                        {{ $item['fnama'] }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @else
        @endif
        <!-- * LIST SIMABRUR -->

        <!-- LIST DEPOSITO -->
        @if (is_array($deposito) && isset($deposito['data']))
            <div class="section full mt-2 mb-2">
                <div class="carousel-single splide">
                    <div class="splide__track">
                        <ul class="splide__list">

                            @foreach ($deposito['data'] as $item)
                                <li class="splide__slide">
                                    <div class="card-block bg-dark">
                                        <div class="card-button dropdown">
                                            <a href="#" class="btn btn-link btn-icon" onclick="copyToClipboard()">
                                                <ion-icon name="copy-outline"></ion-icon>
                                            </a>
                                        </div>

                                        <div class="card-main">
                                            <div class="balance">
                                                <span class="label">SALDO DEPOSITO</span>
                                                <h1 class="title">Rp.
                                                    {{ number_format($item['nominal'], 0, ',', '.') }}
                                                </h1>
                                            </div>
                                            <div class="in">
                                                <div class="card-number text-light">
                                                    <span class="label">Rekening</span>
                                                    <div name="no_rekening" id="no_rekening">{{ $item['noacc'] }}</div>
                                                </div>
                                                <div class="bottom">
                                                    <div class="card-expiry">
                                                        <span class="label">Atas Nama</span>
                                                        {{ $item['fnama'] }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @else
        @endif
        <!-- * LIST DEPOSITO -->


    </div>
    <!-- * App Capsule -->
@endsection

@push('myscript')
@endpush
