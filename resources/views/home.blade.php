@extends('template')
@section('content')

<div class="container py-4">
    <!-- Kotak Sambutan -->
    <div class="card shadow-sm border-0 mb-4 bg-light">
        <div class="card-body p-4">
            <h2 class="fw-bold text-primary">Selamat Datang, septiana! 🧺</h2>
            <p class="text-muted mb-0 fs-5">Siap melayani cucian bersih untuk pelanggan hari ini?</p>
        </div>
    </div>

    <!-- Menu Navigasi -->
    <h3 class="mb-3">Menu Navigasi:</h3>
    
    <div class="mb-4">
        <a href="/pelanggan" class="btn btn-primary">Data Pelanggan</a>
        <a href="/layanan" class="btn btn-success">Data Layanan</a>
        <a href="/transaksi" class="btn btn-info">Data Transaksi</a>
        <a href="/karyawan" class="btn btn-secondary">Data Karyawan</a>
        <a href="/pembayaran" class="btn btn-warning">Data Pembayaran</a>
        <a href="/laporan" class="btn btn-dark">Laporan Keuangan</a>
        <a href="/pesan" class="btn btn-success">Pesan</a>
    </div>

    <!-- Tombol Logout -->
   <div class="text-start">
        <a href="/logout" class="btn btn-outline-danger px-4">Logout</a>
    </div>
</div>

@endsection