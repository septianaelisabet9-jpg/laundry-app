@extends('template')
@section('content')

<div class="container-fluid dashboard">

    <div class="welcome-card mb-4">
        <div class="welcome-icon">🧺</div>
        <h2>Selamat Datang, {{ session('u') }}!</h2>
        <p>
            Selamat bekerja! Mari berikan pelayanan laundry terbaik
            untuk setiap pelanggan hari ini.
        </p>
    </div>

    <h4 class="section-title">Menu Navigasi</h4>
    <p class="text-muted mb-4">
        Pilih menu untuk mengelola sistem Laundry kamu.
    </p>

   <div class="row g-4">

    <div class="col-xl-3 col-md-4 col-sm-6">
        <a href="/pesan" class="menu-card">
            <div class="menu-icon icon-yellow">💬</div>
            <h5>Pesan</h5>
            <p>Lihat dan kelola pesan.</p>
        </a>
    </div>

    @if(session('level') == 'Admin')
    <div class="col-xl-3 col-md-4 col-sm-6">
        <a href="/pelanggan" class="menu-card">
            <div class="menu-icon icon-blue">👥</div>
            <h5>Data Pelanggan</h5>
            <p>Kelola informasi pelanggan laundry.</p>
        </a>
    </div>
    @endif

    @if(session('level') == 'Admin')
    <div class="col-xl-3 col-md-4 col-sm-6">
        <a href="/layanan" class="menu-card">
            <div class="menu-icon icon-green">🫧</div>
            <h5>Data Layanan</h5>
            <p>Kelola jenis dan harga layanan.</p>
        </a>
    </div>
    @endif

    <div class="col-xl-3 col-md-4 col-sm-6">
        <a href="/transaksi" class="menu-card">
            <div class="menu-icon icon-orange">🧾</div>
            <h5>Data Transaksi</h5>
            <p>Lihat dan kelola transaksi laundry.</p>
        </a>
    </div>

    @if(session('level') == 'Admin')
    <div class="col-xl-3 col-md-4 col-sm-6">
        <a href="/karyawan" class="menu-card">
            <div class="menu-icon icon-purple">👨‍💼</div>
            <h5>Data Karyawan</h5>
            <p>Kelola data karyawan.</p>
        </a>
    </div>
    @endif

    @if(session('level') == 'Admin')
    <div class="col-xl-3 col-md-4 col-sm-6">
        <a href="/pembayaran" class="menu-card">
            <div class="menu-icon icon-pink">💳</div>
            <h5>Data Pembayaran</h5>
            <p>Kelola pembayaran pelanggan.</p>
        </a>
    </div>
    @endif

    <div class="col-xl-3 col-md-4 col-sm-6">
        <a href="/laporan" class="menu-card">
            <div class="menu-icon icon-cyan">📊</div>
            <h5>Laporan Keuangan</h5>
            <p>Lihat laporan pendapatan laundry.</p>
        </a>
    </div>

   </div>

    <div class="mt-5 pt-3 d-flex justify-content-end">
        <a href="/logout"
           class="btn btn-outline-danger logout-btn"
           onclick="return confirm('Apakah kamu yakin ingin logout?')">
            ↪ Logout
        </a>
    </div>

</div>

@endsection