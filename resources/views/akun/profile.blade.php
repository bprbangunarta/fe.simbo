@extends('templates.app')
@section('title', 'Akun')

@section('header')
    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <b>AKUN</b>
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
        </div>

        <div class="listview-title mt-1">Informasi</div>
        <ul class="listview image-listview text inset">
            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div>{{ Auth::user()->name }}</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div>{{ Auth::user()->phone }}</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div>{{ Auth::user()->email }}</div>
                    </div>
                </a>
            </li>
        </ul>

        <div class="listview-title mt-1">Bantuan</div>
        <ul class="listview image-listview text inset">
            <li>
                <a href="/hubungi-kami" class="item">
                    <div class="in">
                        <div>Hubungi Kami</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="/pusat-bantuan" class="item">
                    <div class="in">
                        <div>Pusat Bantuan</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="/syarat-ketentuan" class="item">
                    <div class="in">
                        <div>Syarat dan Ketentuan</div>
                    </div>
                </a>
            </li>
        </ul>

        <div class="listview-title mt-1">Keamanan</div>
        <ul class="listview image-listview text inset mb-2">
            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div>Rekening Aktif</div>
                    </div>
                </a>
            </li>

            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div>Ubah Password</div>
                    </div>
                </a>
            </li>

            <li>
                <a href="#" class="item" onclick="logout()">
                    <div class="in">
                        <div>Keluar Aplikasi</div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- * App Capsule -->
@endsection

@push('myscript')
    <script>
        function logout() {
            fetch('{{ route('logout') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: '_token={{ csrf_token() }}'
                })
                .then(response => {
                    if (response.ok) {
                        console.log('Logout berhasil');
                        window.location.href = '{{ route('login') }}';
                    } else {
                        console.error('Gagal logout');
                    }
                })
                .catch(error => {
                    console.error('Kesalahan:', error);
                });
        }
    </script>
@endpush
