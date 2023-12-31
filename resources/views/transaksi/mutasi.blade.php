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
                <ion-icon name="funnel-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Extra Header -->
    <div class="extraHeader pe-0 ps-0">
        <ul class="nav nav-tabs lined" role="tablist">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('transaksi', 'transaksi/*/*') ? 'active' : '' }}"
                    href="{{ route('transaksi.index') }}" role="tab">
                    Transaksi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('mutasi', 'mutasi/*/*') ? 'active' : '' }}"
                    href="{{ route('mutasi.index') }}" role="tab">
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
                                <label class="label">Tanggal Awal</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" name="startDate" id="startDate">
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Tanggal Akhir</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" name="endDate" id="endDate">
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

            <!-- mutasi tab -->
            <div class="tab-pane fade show active" id="mutasi" role="tabpanel">
                <div class="section full">
                    <ul class="listview image-listview flush">
                        @if (is_array($transaksi) && isset($transaksi['data']))
                            @foreach ($transaksi['data'] as $item)
                                @php
                                    $param = $item['inptgljam'];
                                @endphp

                                <li>
                                    <a href="{{ route('mutasi.detail', ['id' => $norek, 'param' => $param]) }}"
                                        class="item">

                                        @if ($item['dc'] == 'C')
                                            <div class="icon-box bg-primary">
                                                <ion-icon name="arrow-up-outline"></ion-icon>
                                            </div>
                                        @elseif ($item['dc'] == 'D')
                                            <div class="icon-box bg-warning">
                                                <ion-icon name="arrow-down-outline"></ion-icon>
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
            <!-- * mutasi tab -->

        </div>

    </div>
    <!-- * App Capsule -->
@endsection
