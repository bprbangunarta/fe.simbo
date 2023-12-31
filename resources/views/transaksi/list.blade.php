@extends('templates.app')
@section('title', 'Transaksi')
@section('bg', 'bg-white')


@section('header')
    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="/dashboard" class="headerButton goBack">
                <ion-icon name="chevron-back-outline" role="img" class="md hydrated"
                    aria-label="chevron back outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            RIWAYAT
        </div>
        <div class="right">
            <a href="javascript:;" class="headerButton" data-bs-toggle="modal" data-bs-target="#periode">
                <ion-icon name="calendar-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Extra Header -->
    <div class="extraHeader pe-0 ps-0">
        <ul class="nav nav-tabs lined" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#transaksi" role="tab">
                    Transaksi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#mutasi" role="tab">
                    Mutasi
                </a>
            </li>
        </ul>
    </div>
    <!-- * Extra Header -->

    <!-- Form Action Sheet -->
    <div class="modal fade action-sheet" id="periode" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Periode</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">

                        <form>
                            <div class="form-group basic">
                                <label class="label">Mulai Dari</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" name="tgl1">
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Sampai Dengan</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" name="tgl2">
                                </div>
                            </div>


                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                    data-bs-dismiss="modal">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Form Action Sheet -->
@endsection

@section('content')

    <!-- App Capsule -->
    <div id="appCapsule" class="extra-header-active full-height">

        <div class="section tab-content mt-1 mb-2">

            <!-- transaksi tab -->
            <div class="tab-pane fade show active" id="transaksi" role="tabpanel">
                <div class="section full">
                    <ul class="listview image-listview flush">
                        @if (is_array($transaksi) && isset($transaksi['data']))
                            @foreach ($transaksi['data'] as $item)
                                @php
                                    $param = $item['inptgljam'];
                                @endphp

                                <li>
                                    <a href="{{ route('transaksi.mutasi.detail', ['id' => $norek, 'param' => $param]) }}"
                                        class="item">

                                        @if ($item['dc'] == 'C')
                                            <div class="icon-box bg-primary">
                                                <ion-icon name="swap-vertical-outline"></ion-icon>
                                            </div>
                                        @elseif ($item['dc'] == 'D')
                                            <div class="icon-box bg-warning">
                                                <ion-icon name="swap-vertical-outline"></ion-icon>
                                            </div>
                                        @endif
                                        <div class="in">
                                            <div>
                                                <div class="mb-05">
                                                    <strong>{{ \Carbon\Carbon::parse($item['tgltrn'])->locale('id')->format('d F Y') }}</strong>
                                                </div>
                                                <div class="text-small mb-05">{{ $item['ket'] }}
                                                    Rp{{ number_format($item['nominal'], 0, ',', '.') }}</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        @else
                        @endif
                    </ul>
                </div>
            </div>
            <!-- * waiting tab -->

            <!-- mutasi tab -->
            <div class="tab-pane fade" id="mutasi" role="tabpanel">
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
            <!-- * paid tab -->

        </div>

    </div>
    <!-- * App Capsule -->
@endsection
