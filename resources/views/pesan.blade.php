@extends('template')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="container" style="max-width: 450px;">

        <style>
    body {
        
        background-image: url('{{ asset("img/laundry.png") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
            
            <!-- Kartu Kotak Form Pesan Laundry -->
            <div class="card shadow-lg border-0 bg-white">
                <div class="card-body p-4">
                    <h3 class="fw-bold text-primary text-center mb-1">Form Pesan Laundry 🧺</h3>
                    <p class="text-muted text-center fs-6 mb-4">Silakan isi data cucian kamu di bawah ini</p>
                    
                    <form action="/pesan/simpan" method="POST">
                        @csrf 
                        
                        <div class="mb-3">
                            <label for="nama_pelanggan" class="form-label fw-semibold">Nama Pelanggan:</label>
                            <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required placeholder="Masukkan nama lengkap">
                        </div>

                        <div class="mb-3">
                            <label for="layanan" class="form-label fw-semibold">Pilih Layanan Laundry:</label>
                            <select class="form-select" id="layanan" name="layanan" required>
                                <option value="" selected disabled>-- Pilih Jenis Layanan --</option>
                                <option value="Cuci Kering">Cuci Kering</option>
                                <option value="Cuci Setrika">Cuci + Setrika</option>
                                <option value="Setrika Saja">Setrika Saja</option>
                                <option value="Express / Kilat">Express (Kilat)</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="berat" class="form-label fw-semibold">Estimasi Berat (kg):</label>
                            <input type="number" step="0.1" class="form-control" id="berat" name="berat" required placeholder="Contoh: 3">
                        </div>

                        <div class="mb-3">
                            <label for="catatan" class="form-label fw-semibold">Catatan (Opsional):</label>
                            <textarea class="form-control" id="catatan" name="catatan" rows="2" placeholder="Pesan tambahan untuk cucian..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Konfirmasi Pesanan</button>
                        
                        <div class="text-center mt-3">
                            <a href="/home" class="text-decoration-none small text-muted">&larr; Kembali ke Home</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection