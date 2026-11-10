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

    <div class="row g-4">

        <!-- Pesan (Bisa diakses semua) -->
        <div class="col-xl-3 col-md-4 col-sm-6">
            <a href="/pesan" class="menu-card">
                <div class="menu-icon icon-yellow">💬</div>
                <h5>Pesan</h5>
                <p>Lihat dan kelola pesan.</p>
            </a>
        </div>

        <!-- HANYA ADMIN: Data Pelanggan -->
        <?php if(session('level') == 'Admin') { ?>
        <div class="col-xl-3 col-md-4 col-sm-6">
            <a href="/pelanggan" class="menu-card">
                <div class="menu-icon icon-blue">👥</div>
                <h5>Data Pelanggan</h5>
                <p>Kelola informasi pelanggan laundry.</p>
            </a>
        </div>
        <?php } ?>

        <!-- HANYA ADMIN: Data Layanan -->
        <?php if(session('level') == 'Admin') { ?>
        <div class="col-xl-3 col-md-4 col-sm-6">
            <a href="/layanan" class="menu-card">
                <div class="menu-icon icon-green">🫧</div>
                <h5>Data Layanan</h5>
                <p>Kelola jenis dan harga layanan.</p>
            </a>
        </div>
        <?php } ?>

        <!-- Data Transaksi (Bisa diakses semua) -->
        <div class="col-xl-3 col-md-4 col-sm-6">
            <a href="/transaksi" class="menu-card">
                <div class="menu-icon icon-orange">🧾</div>
                <h5>Data Transaksi</h5>
                <p>Lihat dan kelola transaksi laundry.</p>
            </a>
        </div>

        <!-- HANYA ADMIN: Data Karyawan -->
        <?php if(session('level') == 'Admin') { ?>
        <div class="col-xl-3 col-md-4 col-sm-6">
            <a href="/karyawan" class="menu-card">
                <div class="menu-icon icon-purple">👨‍💼</div>
                <h5>Data Karyawan</h5>
                <p>Kelola data karyawan.</p>
            </a>
        </div>
        <?php } ?>

        <!-- HANYA ADMIN: Data Pembayaran -->
        <?php if(session('level') == 'Admin') { ?>
        <div class="col-xl-3 col-md-4 col-sm-6">
            <a href="/pembayaran" class="menu-card">
                <div class="menu-icon icon-pink">💳</div>
                <h5>Data Pembayaran</h5>
                <p>Kelola pembayaran pelanggan.</p>
            </a>
        </div>
        <?php } ?>

        <!-- Laporan Keuangan (Bisa diakses semua) -->
        <div class="col-xl-3 col-md-4 col-sm-6">
            <a href="/laporan" class="menu-card">
                <div class="menu-icon icon-cyan">📊</div>
                <h5>Laporan Keuangan</h5>
                <p>Lihat laporan pendapatan laundry.</p>
            </a>
        </div>

        <!-- Logout -->
        <div class="col-xl-3 col-md-4 col-sm-6">
            <a href="/logout"
               class="menu-card"
               onclick="return confirm('Apakah kamu yakin ingin logout?')">
                <div class="menu-icon icon-pink">🚪</div>
                <h5>Logout</h5>
                <p>Keluar dari akun sistem laundry.</p>
            </a>
        </div>

    </div>

</div>

@endsection