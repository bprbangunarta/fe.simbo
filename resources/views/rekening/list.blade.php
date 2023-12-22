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

        <div class="section mt-2">

            <!-- card block -->
            @forelse ($tabungan as $item)

            @if ($item->kodeprd == "01")
                @php $bg = 'primary'; @endphp
            @elseif ($item->kodeprd == "02")
                @php $bg = 'info'; @endphp
            @elseif ($item->kodeprd == "03")
                @php $bg = 'danger'; @endphp
            @elseif ($item->kodeprd == "04" || $item->kodeprd == "05")
                @php $bg = 'warning'; @endphp
            @endif

            <div class="card-block bg-{{ $bg }} mb-2">
                <div class="card-button dropdown">
                    <a href="#" class="btn btn-link btn-icon">
                        <ion-icon name="copy-outline"></ion-icon>
                    </a>
                </div>

                <div class="card-main">
                    <div class="balance">
                        <span class="label">SALDO</span>
                        <h1 class="title">Rp. {{ number_format($item->saldoakhir, 0, ',', '.') }}</h1>
                    </div>
                    <div class="in">
                        <div class="card-number">
                            <span class="label">Rekening</span>
                            {{ $item->noacc }}
                        </div>
                        <div class="bottom">
                            <div class="card-expiry">
                                <span class="label">Produk</span>
                                @if ($item->kodeprd == "01")
                                    SIMAPAN
                                @elseif ($item->kodeprd == "02")
                                    SILOKA
                                @elseif ($item->kodeprd == "03")
                                    SIMANTAP
                                @elseif ($item->kodeprd == "04")
                                    SIMABRUR PAKET
                                @elseif ($item->kodeprd == "05")
                                    SIMABRUR NON PAKET
                                @elseif ($item->kodeprd == "11")
                                    ABP SIMAPAN
                                @elseif ($item->kodeprd == "12")
                                    ABP SILOKA
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
            <!-- * card block -->

            <!-- card block -->
            @forelse ($deposito as $item)
            <div class="card-block bg-dark mb-2">
                <div class="card-button dropdown">
                    <a href="#" class="btn btn-link btn-icon">
                        <ion-icon name="copy-outline"></ion-icon>
                    </a>
                </div>
                
                <div class="card-main">
                    <div class="balance">
                        <span class="label">SALDO</span>
                        <h1 class="title">Rp. {{ number_format($item->nomawal, 0, ',', '.') }}</h1>
                    </div>
                    <div class="in">
                        <div class="card-number">
                            <span class="label">Rekening</span>
                            {{ $item->noacc }}
                        </div>
                        <div class="bottom">
                            <div class="card-expiry">
                                <span class="label">Produk</span>
                                DEPOSITO
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
            <!-- * card block -->

        </div>


    </div>
    <!-- * App Capsule -->
@endsection