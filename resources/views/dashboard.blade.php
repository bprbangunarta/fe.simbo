@extends('templates.app')
@section('title', 'Home')

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
                        <h1 class="total">6.999.999.999</h1>
                    </div>
                    <div class="right">
                        <a href="#" class="button" data-bs-toggle="modal" data-bs-target="#depositActionSheet">
                            <ion-icon name="add-outline"></ion-icon>
                        </a>
                    </div>
                </div>
                <!-- * Balance -->
                <!-- Wallet Footer -->
                <div class="wallet-footer">
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
                            <div class="icon-wrapper bg-danger">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            <strong>Withdraw</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#sendActionSheet">
                            <div class="icon-wrapper">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <strong>Send</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="app-cards.html">
                            <div class="icon-wrapper bg-success">
                                <ion-icon name="card-outline"></ion-icon>
                            </div>
                            <strong>Cards</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exchangeActionSheet">
                            <div class="icon-wrapper bg-warning">
                                <ion-icon name="swap-vertical"></ion-icon>
                            </div>
                            <strong>Exchange</strong>
                        </a>
                    </div>

                </div>
                <!-- * Wallet Footer -->
            </div>
        </div>
        <!-- Wallet Card -->

        <!-- Deposit Action Sheet -->
        <div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
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
                                            <option value="1">BANK PERMATA</option>
                                            <option value="2">BANK MANDIRI</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Nomor Rekening</label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" name="no_rekening" id="no_rekening" value="0010101201041458">
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
        <!-- * Deposit Action Sheet -->

        <!-- Withdraw Action Sheet -->
        <div class="modal fade action-sheet" id="withdrawActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Withdraw Money</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2d">From</label>
                                        <select class="form-control custom-select" id="account2d">
                                            <option value="0">Savings (*** 5019)</option>
                                            <option value="1">Investment (*** 6212)</option>
                                            <option value="2">Mortgage (*** 5021)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">To</label>
                                        <input type="email" class="form-control" id="text11d" placeholder="Enter IBAN">
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Enter Amount</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addonb1">$</span>
                                        <input type="text" class="form-control" placeholder="Enter an amount"
                                            value="100">
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
        <!-- * Withdraw Action Sheet -->

        <!-- Send Action Sheet -->
        <div class="modal fade action-sheet" id="sendActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Send Money</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2">From</label>
                                        <select class="form-control custom-select" id="account2">
                                            <option value="0">Savings (*** 5019)</option>
                                            <option value="1">Investment (*** 6212)</option>
                                            <option value="2">Mortgage (*** 5021)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11">To</label>
                                        <input type="email" class="form-control" id="text11"
                                            placeholder="Enter bank ID">
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Enter Amount</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                        <input type="text" class="form-control" placeholder="Enter an amount"
                                            value="100">
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <button type="button" class="btn btn-primary btn-block btn-lg"
                                        data-bs-dismiss="modal">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Send Action Sheet -->

        <!-- Exchange Action Sheet -->
        <div class="modal fade action-sheet" id="exchangeActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Exchange Money</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group basic">
                                            <div class="input-wrapper">
                                                <label class="label" for="currency1">From</label>
                                                <select class="form-control custom-select" id="currency1">
                                                    <option value="1">EUR</option>
                                                    <option value="2">USD</option>
                                                    <option value="3">AUD</option>
                                                    <option value="4">CAD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group basic">
                                            <div class="input-wrapper">
                                                <label class="label" for="currency2">To</label>
                                                <select class="form-control custom-select" id="currency2">
                                                    <option value="1">USD</option>
                                                    <option value="1">EUR</option>
                                                    <option value="2">AUD</option>
                                                    <option value="3">CAD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Enter Amount</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addon2">$</span>
                                        <input type="text" class="form-control" placeholder="Enter an amount"
                                            value="100">
                                    </div>
                                </div>



                                <div class="form-group basic">
                                    <button type="button" class="btn btn-primary btn-block btn-lg"
                                        data-bs-dismiss="modal">Exchange</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Exchange Action Sheet -->

        <!-- Transaksi -->
        <div class="section mt-4">
            <div class="section-heading">
                <h2 class="title">Transaksi</h2>
                <a href="/transaksi" class="link">Lainnya</a>
            </div>
            <div class="transactions">
                <!-- item -->
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <div>
                            <strong>18 Desember 2023</strong>
                            <p>Penarikan Tab An ZULFADLI RIZAL</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger">-250,000.00</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <div>
                            <strong>18 Desember 2023</strong>
                            <p>SET VIA VA-PMT-0010101201041458 ZULFADLI</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-success">+10,000.00</div>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * Transaksi -->

        <!-- my cards -->
        <div class="section full mt-4">
            <div class="section-heading padding">
                <h2 class="title">Rekening</h2>
                <a href="/rekening" class="link">Lainnya</a>
            </div>

            <!-- carousel single -->
            <div class="carousel-single splide">
                <div class="splide__track">
                    <ul class="splide__list">

                        <li class="splide__slide">
                            <!-- card block -->
                            <div class="card-block bg-primary">
                                <div class="card-button dropdown">
                                    <a href="#" class="btn btn-link btn-icon">
                                        <ion-icon name="copy-outline"></ion-icon>
                                    </a>
                                </div>

                                <div class="card-main">
                                    <div class="balance">
                                        <span class="label">SALDO</span>
                                        <h1 class="title">Rp. 6.999.999.999</h1>
                                    </div>
                                    <div class="in">
                                        <div class="card-number">
                                            <span class="label">Rekening</span>
                                            0010101201041458
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
                                        <h1 class="title">Rp. 6.999.999.999</h1>
                                    </div>
                                    <div class="in">
                                        <div class="card-number">
                                            <span class="label">Rekening</span>
                                            0010101201041458
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
                                        <h1 class="title">Rp. 6.999.999.999</h1>
                                    </div>
                                    <div class="in">
                                        <div class="card-number">
                                            <span class="label">Rekening</span>
                                            0010101201041458
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
                                        <h1 class="title">Rp. 6.999.999.999</h1>
                                    </div>
                                    <div class="in">
                                        <div class="card-number">
                                            <span class="label">Rekening</span>
                                            0010101201041458
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
                            <!-- * card block -->
                        </li>

                    </ul>
                </div>
            </div>
            <!-- * carousel single -->

        </div>
        <!-- * my cards -->

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