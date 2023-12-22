@extends('templates.app')
@section('title', 'Transaksi')

@section('header')
    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <b>TRANSAKSI</b>
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
        <div class="section full">

            <ul class="listview image-listview flush">
                <li>
                    <a href="/transaksi/detail" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="repeat-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>
                                <div class="mb-05"><strong>18 Desember 2023</strong></div>
                                <div class="text-small mb-05">Pembelian Pulsa Sebesar Rp100.000</div>
                                <span class="badge badge-success">Berhasil</span>
                            </div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="/transaksi/detail" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="repeat-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>
                                <div class="mb-05"><strong>18 Desember 2023</strong></div>
                                <div class="text-small mb-05">Pembelian Listrik Sebesar Rp100.000</div>
                                <span class="badge badge-warning">Menuggu</span>
                            </div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="/transaksi/detail" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="repeat-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>
                                <div class="mb-05"><strong>18 Desember 2023</strong></div>
                                <div class="text-small mb-05">Permintaan Transfer Uang Sebesar Rp100.000</div>
                                <span class="badge badge-danger">Gagal</span>
                            </div>
                        </div>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
    <!-- * App Capsule -->
@endsection