
@extends('template')
@section('content')

<style>
    .dashboard {
        padding: 25px 10px;
        color: #263449;
    }

    .welcome-card {
        background: linear-gradient(120deg, #2878d0, #65b6e8);
        border-radius: 20px;
        padding: 35px;
        color: white;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(40, 120, 208, 0.18);
    }

    .welcome-card h2 {
        font-weight: 700;
        font-size: 28px;
    }

    .welcome-card p {
        opacity: .9;
        margin-bottom: 0;
    }

    .welcome-icon {
        position: absolute;
        right: 35px;
        top: 20px;
        font-size: 85px;
        opacity: .2;
    }

    .section-title {
        font-weight: 700;
        margin: 30px 0 18px;
    }

    .menu-card {
        background: white;
        border: 1px solid #edf1f7;
        border-radius: 16px;
        padding: 23px 18px;
        height: 100%;
        text-decoration: none;
        color: #263449;
        display: block;
        transition: .3s;
        box-shadow: 0 4px 15px rgba(0,0,0,.035);
    }

    .menu-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 25px rgba(40,120,208,.12);
        color: #2878d0;
    }

    .menu-icon {
        width: 55px;
        height: 55px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 27px;
        margin-bottom: 17px;
    }

    .menu-card h5 {
        font-weight: 700;
        font-size: 16px;
        margin-bottom: 7px;
    }

    .menu-card p {
        color: #8b97a8;
        font-size: 13px;
        margin-bottom: 0;
    }

    .icon-blue { background: #e8f2ff; }
    .icon-green { background: #e6f8ef; }
    .icon-orange { background: #fff2df; }
    .icon-purple { background: #f1eaff; }
    .icon-pink { background: #ffeaf0; }
    .icon-cyan { background: #e4f8fb; }
    .icon-yellow { background: #fff8dc; }

    .logout-btn {
        border-radius: 10px;
        padding: 10px 20px;
        font-weight: 600;
    }

    @media (max-width: 576px) {
        .welcome-card {
            padding: 25px;
        }

        .welcome-card h2 {
            font-size: 22px;
        }

        .welcome-icon {
            right: 15px;
            font-size: 55px;
        }
    }
</style>

<div class="container-fluid dashboard">

    <!-- WELCOME -->
    <div class="welcome-card mb-4">
        <div class="welcome-icon">🧺</div>

        <h2>Selamat Datang, {{ session('u') }}!</h2>

        <p>
            Selamat bekerja! Mari berikan pelayanan laundry terbaik
            untuk setiap pelanggan hari ini.
        </p>
    </div>

    <!-- MENU -->
    <h4 class="section-title">Menu Navigasi</h4>
    <p class="text-muted mb-4">
        Pilih menu untuk mengelola sistem Laundry kamu.
    </p>

    <div class="row g-4">

        <div class="col-xl-3 col-md-4 col-sm-6">
            <a href="/pelanggan" class="menu-card">
                <div class="menu-icon icon-blue">👥</div>
                <h5>Data Pelanggan</h5>
                <p>Kelola informasi pelanggan laundry.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-4 col-sm-6">
            <a href="/layanan" class="menu-card">
                <div class="menu-icon icon-green">🫧</div>
                <h5>Data Layanan</h5>
                <p>Kelola jenis dan harga layanan.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-4 col-sm-6">
            <a href="/transaksi" class="menu-card">
                <div class="menu-icon icon-orange">🧾</div>
                <h5>Data Transaksi</h5>
                <p>Lihat dan kelola transaksi laundry.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-4 col-sm-6">
            <a href="/karyawan" class="menu-card">
                <div class="menu-icon icon-purple">👨‍💼</div>
                <h5>Data Karyawan</h5>
                <p>Kelola data karyawan.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-4 col-sm-6">
            <a href="/pembayaran" class="menu-card">
                <div class="menu-icon icon-pink">💳</div>
                <h5>Data Pembayaran</h5>
                <p>Kelola pembayaran pelanggan.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-4 col-sm-6">
            <a href="/laporan" class="menu-card">
                <div class="menu-icon icon-cyan">📊</div>
                <h5>Laporan Keuangan</h5>
                <p>Lihat laporan pendapatan laundry.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-4 col-sm-6">
            <a href="/pesan" class="menu-card">
                <div class="menu-icon icon-yellow">💬</div>
                <h5>Pesan</h5>
                <p>Lihat dan kelola pesan.</p>
            </a>
        </div>

    </div>

    <!-- LOGOUT -->
    <div class="mt-5 pt-3 d-flex justify-content-end">
        <a href="/logout"
           class="btn btn-outline-danger logout-btn"
           onclick="return confirm('Apakah kamu yakin ingin logout?')">
            ↪ Logout
        </a>
    </div>

</div>

@endsection
