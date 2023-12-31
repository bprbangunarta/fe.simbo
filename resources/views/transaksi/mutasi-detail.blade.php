@extends('templates.app')
@section('title', 'Transaksi Detail')
@section('bg', 'bg-white')

@section('header')
    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="/transaksi" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <b>DETAIL</b>
        </div>
        <div class="right">
            @include('templates.notifikasi')
        </div>
    </div>
    <!-- * App Header -->
@endsection

@section('content')
    <!-- App Capsule -->
    <div id="appCapsule" class="full-height">

        <div class="section">

            <div class="listed-detail mt-3">
                <div class="icon-wrapper">
                    <div class="iconbox bg-success">
                        <ion-icon name="checkmark-outline"></ion-icon>
                    </div>
                </div>
                <h3 class="text-center mt-2">Success</h3>
            </div>

            <ul class="listview simple-listview no-space mt-3">
                <li>
                    <span>Dari</span>
                    <strong>{{ Auth::user()->name }}</strong>
                </li>
                <li>
                    <span>Rekening</span>
                    <strong>{{ $norek }}</strong>
                </li>
                <li>
                    <span>Jumlah</span>

                    @if ($transaksi['data']['dc'] == 'C')
                        <strong class="text-success">
                            + Rp{{ number_format($transaksi['data']['nominal'], 0, ',', '.') }}
                        </strong>
                    @elseif ($transaksi['data']['dc'] == 'D')
                        <strong class="text-danger">
                            - Rp{{ number_format($transaksi['data']['nominal'], 0, ',', '.') }}
                        </strong>
                    @endif
                </li>
                <li>
                    <span>Tanggal</span>
                    <strong>
                        {{ \Carbon\Carbon::parse($transaksi['data']['inptgljam'])->format('d M Y H:i:s') }}
                    </strong>
                </li>
            </ul>


        </div>

    </div>
    <!-- * App Capsule -->
@endsection
