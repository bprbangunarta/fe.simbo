@extends('templates.app')
@section('title', 'Pusat Bantuan')
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
            <b>PUSAT BANTUAN</b>
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
                Selamat datang di Pusat Bantuan Aplikasi SIMBO! Kami berkomitmen untuk menyediakan bantuan dan informasi yang diperlukan untuk memastikan pengalaman pengguna yang lancar. Berikut adalah beberapa topik yang dapat membantu Anda.
            </p>
        </div>        
    </div>
    <!-- * App Capsule -->
@endsection