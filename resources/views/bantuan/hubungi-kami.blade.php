@extends('templates.app')
@section('title', 'Hubungi Kami')
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
            <b>HUBUNGI KAMI</b>
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
                Selamat datang di Aplikasi SIMBO! Kami menghargai keterlibatan Anda dan siap membantu menjawab pertanyaan, memberikan dukungan, atau menerima umpan balik. Berikut adalah informasi kontak kami.
            </p>

            <h3>1. Layanan Pelanggan</h3>
            <p class="text-dark" style="text-align:justify;">
                Jika Anda membutuhkan bantuan segera atau memiliki pertanyaan terkait penggunaan Aplikasi SIMBO, tim layanan pelanggan kami siap membantu.
            </p>
            <p class="text-dark" style="text-align:justify;">
                <b>Telepon</b> <br> (0260) 550888
            </p>
            <p class="text-dark" style="text-align:justify;">
                <b>WhatsApp</b> <br> +62 821 21901352
            </p>
            <p class="text-dark" style="text-align:justify;">
                <b>Alamat Email</b> <br> info@bprbangunarta.co.id
            </p>

            <h3>2. Media Sosial</h3>
            <p class="text-dark" style="text-align:justify;">
                Terhubunglah dengan kami melalui media sosial untuk mendapatkan pembaruan terbaru, tips, dan informasi menarik lainnya.
            </p>
            <p class="text-dark" style="text-align:justify;">
                <b>TikTok :</b> @bprbangunarta <br>
                <b>YouTube :</b> BPR Bangunarta <br>
                <b>Facebook :</b> Bangunarta Official <br>
                <b>Instagram :</b> @bprbangunarta
            </p>

            <h3>3. Alamat Kantor</h3>
            <p class="text-dark" style="text-align:justify;">
                Jika Anda memerlukan bantuan secara langsung atau ingin mengunjungi kantor pusat kami, alamat kantor kami adalah
            </p>
            <p class="text-dark" style="text-align:justify;">
                <b>Kantor Pusat</b> <br> Jl. H. Iksan No.89, Pamanukan, Kabupaten Subang, Jawa Barat
            </p>
            <p class="text-dark" style="text-align:justify;">
                <b>Kantor Kas Subang</b> <br> Jl. Otto Iskandardinata No. 73 Telp. (0260) 412449
            </p>
            <p class="text-dark" style="text-align:justify;">
                <b>Kantor Kas Jalancagak</b> <br> Jl. Raya Jalancagak No. 58 Telp. (0260) 472660
            </p>
            <p class="text-dark" style="text-align:justify;">
                <b>Kantor Kas Pagaden</b> <br> Jl. Raya Kamarung, Pagaden Telp. (0260) 450400
            </p>
            <p class="text-dark" style="text-align:justify;">
                <b>Kantor Kas Kalijati</b> <br> Jl. Kalijati-Purwadadi No. 9 Telp. (0260) 4641126
            </p>
            <p class="text-dark" style="text-align:justify;">
                <b>Kantor Kas Sukamandi</b> <br> Jl. Ahmad Yani No. 7, Ciasem Telp. (0260) 523170
            </p>
            <p class="text-dark" style="text-align:justify;">
                <b>Kantor Kas Pusakajaya</b> <br> Jl. Raya Pantura Pusakanagara No. 13 Telp. (0260) 550500
            </p>

            <p class="text-dark" style="text-align:justify;">
                Tim kami berkomitmen untuk memberikan layanan yang berkualitas dan memastikan kepuasan pengguna. Kami berterima kasih atas dukungan Anda terhadap Aplikasi SIMBO, dan kami siap membantu Anda dengan segala kebutuhan atau pertanyaan yang Anda miliki.
            </p>
        </div>        
    </div>
    <!-- * App Capsule -->
@endsection