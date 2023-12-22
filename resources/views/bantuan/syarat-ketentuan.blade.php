@extends('templates.app')
@section('title', 'Syarat dan Ketentuan')
@section('bg', 'bg-white')

@section('header')
    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="/akun" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <b>SYARAT DAN KETENTUAN</b>
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
            <p class="text-dark" style="text-align:justify;">
                Selamat datang di aplikasi SIMBO kami. Sebelum Anda memulai penggunaan aplikasi ini, harap membaca dan memahami syarat serta ketentuan berikut.
            </p>

            <h3>1. Penggunaan Layanan</h3>
            <p class="text-dark" style="text-align:justify;">
                Dengan mengunduh dan menggunakan aplikasi SIMBO kami, Anda setuju untuk tunduk pada syarat dan ketentuan ini.
            </p>
            <p class="text-dark" style="text-align:justify;">
                Layanan aplikasi SIMBO kami hanya dapat diakses oleh nasabah yang telah mendaftar dan memiliki akun aktif di bank kami.
            </p>

            <h3>2. Keamanan Akun</h3>
            <p class="text-dark" style="text-align:justify;">
                Setiap nasabah bertanggung jawab atas keamanan dan kerahasiaan informasi login dan kata sandi mereka. Jangan mengungkapkan informasi ini kepada pihak lain.
            </p>
            <p class="text-dark" style="text-align:justify;">
                Jika terjadi kehilangan atau dicurinya informasi login Anda, segera laporkan kepada bank untuk tindakan lebih lanjut.
            </p>

            <h3>3. Penggunaan Aplikasi</h3>
            <p class="text-dark" style="text-align:justify;">
                Aplikasi SIMBO hanya boleh digunakan untuk tujuan transaksi keuangan pribadi. Penggunaan aplikasi ini untuk kegiatan ilegal atau melanggar hukum dilarang.
            </p>
            <p class="text-dark" style="text-align:justify;">
                Bank berhak untuk membatasi atau menghentikan akses ke layanan aplikasi SIMBO jika terdeteksi penggunaan yang mencurigakan atau melanggar syarat dan ketentuan ini.
            </p>

            <h3>4. Transaksi dan Keamanan</h3>
            <p class="text-dark" style="text-align:justify;">
                Semua transaksi melalui aplikasi SIMBO dianggap sah dan mengikat nasabah. Bank tidak bertanggung jawab atas kerugian yang timbul akibat kesalahan nasabah dalam melakukan transaksi.
            </p>
            <p class="text-dark" style="text-align:justify;">
                Bank berkomitmen untuk menjaga keamanan dan kerahasiaan data nasabah. Namun, bank tidak bertanggung jawab atas kerugian yang timbul akibat akses ilegal pihak ketiga.
            </p>
            
            <h3>5. Pembaruan Aplikasi</h3>
            <p class="text-dark" style="text-align:justify;">
                Penting untuk memperbarui aplikasi SIMBO secara berkala untuk memastikan keamanan dan ketersediaan fitur terbaru.
            </p>
            <p class="text-dark" style="text-align:justify;">
                Bank berhak melakukan pembaruan tanpa pemberitahuan sebelumnya, namun akan memberikan informasi setelah pembaruan selesai.
            </p>

            <p class="text-dark" style="text-align:justify;">
                Dengan melanjutkan penggunaan layanan aplikasi SIMBO, Anda dianggap telah membaca, memahami, dan menyetujui semua syarat dan ketentuan yang tercantum di atas. Bank berhak untuk mengubah syarat dan ketentuan ini tanpa pemberitahuan sebelumnya, dan perubahan tersebut akan berlaku sejak tanggal diumumkan.
            </p>
        </div>        
    </div>
    <!-- * App Capsule -->
@endsection