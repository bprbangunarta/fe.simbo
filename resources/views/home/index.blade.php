@extends('templates.app')
@section('title', 'Home')
@section('bg', 'bg-white')

@section('header')
    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left"></div>
        <div class="pageTitle">
            <b>HOME</b>
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

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title">Saldo Tabungan</span>
                        <h1 class="total">
                            {{ number_format($saldo['data']['saldoakhir'], 0, ',', '.') }}
                        </h1>
                    </div>
                    <div class="right">
                        <a href="#" class="button" data-bs-toggle="modal" data-bs-target="#topupActionSheet">
                            <ion-icon name="add-outline"></ion-icon>
                        </a>
                    </div>
                </div>
                <!-- * Balance -->
                <!-- Wallet Footer -->
                <div class="wallet-footer">
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#transferActionSheet">
                            <div class="icon-wrapper">
                                <ion-icon name="arrow-up-outline"></ion-icon>
                            </div>
                            <strong>Transfer</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#maintenanceActionSheet">
                            <div class="icon-wrapper bg-danger">
                                <ion-icon name="phone-portrait-outline"></ion-icon>
                            </div>
                            <strong>Pulsa</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#maintenanceActionSheet">
                            <div class="icon-wrapper bg-warning">
                                <ion-icon name="bulb-outline"></ion-icon>
                            </div>
                            <strong>Listrik</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#maintenanceActionSheet">
                            <div class="icon-wrapper" style="background:#00F6F7">
                                <ion-icon name="water-outline"></ion-icon>
                            </div>
                            <strong>PDAM</strong>
                        </a>
                    </div>

                </div>
                <!-- * Wallet Footer -->
            </div>
        </div>
        <!-- Wallet Card -->


        <!-- Topup Action Sheet -->
        <div class="modal fade action-sheet" id="topupActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Topup Saldo</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="bank">Virtual Account</label>
                                        <select class="form-control custom-select" name="bank" id="bank">
                                            <option value="0">BANK BRI</option>
                                            <option value="2">BANK MANDIRI</option>
                                            <option value="1">BANK PERMATA</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Nomor Rekening</label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" name="no_rekening" id="no_rekening"
                                            value="KODEBANK{{ $norek }}">
                                    </div>
                                </div>


                                <div class="form-group basic">
                                    <button type="button" class="btn btn-primary btn-block btn-lg"
                                        data-bs-dismiss="modal">Salin Nomor VA</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Topup Action Sheet -->

        <!-- Transfer Action Sheet -->
        <div class="modal fade action-sheet" id="transferActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Transfer</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label">Pilih Bank</label>
                                        <select class="form-control custom-select" name="bank_name" id="bank_name" required>
                                            <option value="0">BANK BRI</option>
                                            <option value="2">BANK MANDIRI</option>
                                            <option value="1">BANK PERMATA</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label">No Rekening</label>
                                        <input type="nomor" inputmode="numeric" class="form-control" name="norek"
                                            id="norek" required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Nominal</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text">RP</span>
                                        <input type="text" inputmode="numeric" class="form-control" name="nominal"
                                            id="nominal" required>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <button type="button" class="btn btn-primary btn-block btn-lg"
                                        data-bs-dismiss="modal">Withdraw</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Transfer Action Sheet -->

        <!-- Maintenance Action Sheet -->
        <div class="modal fade action-sheet" id="maintenanceActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Mintenance</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <p>
                                Mohon maaf fitur ini masih dalam proses pengembangan.
                            </p>
                            <a href="#" class="btn btn-primary btn-lg btn-block" data-bs-dismiss="modal">Tutup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Maintenanca Action Sheet -->

        <div class="section full mt-2">
            <!-- carousel single -->
            <div class="carousel-single splide splide--loop splide--ltr splide--draggable is-active" id="splide01"
                style="visibility: visible;">
                <div class="splide__track" id="splide01-track" style="padding-left: 16px; padding-right: 16px;">
                    <ul class="splide__list" id="splide01-list" style="transform: translateX(-2105.98px);">

                        <li class="splide__slide splide__slide--clone" aria-hidden="true" tabindex="-1"
                            style="margin-right: 16px; width: 353.667px;">
                            <img src="https://www.bni.co.id/Portals/1/xNews/uploads/2023/12/14/SFN-BannerWeb1350x488px_BNIDEBITCONTACTLESS-01.jpg"
                                alt="alt" class="imaged w-100">
                        </li>
                        <li class="splide__slide splide__slide--clone" aria-hidden="true" tabindex="-1"
                            style="margin-right: 16px; width: 353.667px;">
                            <img src="https://www.bni.co.id/Portals/1/xNews/uploads/2023/11/28/BNI-MBANK-WHOOSH-KERETA-CEPAT.png"
                                alt="alt" class="imaged w-100">
                        </li>
                        <li class="splide__slide splide__slide--clone" aria-hidden="true" tabindex="-1"
                            style="margin-right: 16px; width: 353.667px;">
                            <img src="https://www.bni.co.id/Portals/1/xNews/uploads/2023/12/11/Update-Fitur-Terbaru-Mobile-Banking_08122023.jpg"
                                alt="alt" class="imaged w-100">
                        </li>
                        <li class="splide__slide splide__slide--clone" style="margin-right: 16px; width: 353.667px;">
                            <img src="https://www.bni.co.id/portals/1/BNI/Personal/Pinjaman/Images/BNI-GRIYA2023-Des.jpg"
                                alt="alt" class="imaged w-100">
                        </li>
                        <li class="splide__slide splide__slide--clone" style="margin-right: 16px; width: 353.667px;">
                            <img src="https://www.bni.co.id//Portals/1/DNNGalleryPro/uploads/2023/10/10/ADE_Cashback-100_-Transaksi-biller_FA_231006_Banner-Website.jpg"
                                alt="alt" class="imaged w-100">
                        </li>
                    </ul>
                </div>
            </div>
            <!-- * carousel single -->
        </div>

        <!-- Transaksi -->
        <div class="section mt-2 mb-2">
            <div class="section-heading">
                <h2 class="title">Transaksi</h2>
                <a href="/transaksi" class="link text-primary">Lainnya</a>
            </div>
            <div class="transactions">
                @if (is_array($transaksi) && isset($transaksi['data']))
                    @foreach ($transaksi['data'] as $item)
                        @php
                            $param = $item['inptgljam'];
                        @endphp

                        <a href="{{ route('transaksi.mutasi.detail', ['id' => $norek, 'param' => $param]) }}"
                            class="item">
                            <div class="detail">
                                <div>
                                    <strong>
                                        {{ \Carbon\Carbon::parse($item['tgltrn'])->locale('id')->format('d F Y') }}
                                    </strong>
                                    <p>{{ $item['ket'] }}</p>
                                </div>
                            </div>
                            <div class="right">
                                @if ($item['dc'] == 'C')
                                    <div class="price text-success">
                                        +{{ number_format($item['nominal'], 0, ',', '.') }}
                                    </div>
                                @elseif ($item['dc'] == 'D')
                                    <div class="price text-danger">
                                        -{{ number_format($item['nominal'], 0, ',', '.') }}
                                    </div>
                                @endif
                            </div>
                        </a>
                    @endforeach
                @else
                @endif
            </div>
        </div>
        <!-- * Transaksi -->

        <!-- app footer -->
        <div class="appFooter">
            <div class="footer-title">
                Copyright © SIMBO 2023
            </div>
            PT. BPR BANGUNARTA
        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->
@endsection
