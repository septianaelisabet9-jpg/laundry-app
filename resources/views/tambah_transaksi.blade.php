@extends('template')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <!-- Tombol Kembali -->
            <div class="mb-3">
                <a href="/transaksi" class="btn btn-outline-secondary btn-sm">&larr; Kembali ke Data Transaksi</a>
            </div>

            <!-- Card Form Tambah Transaksi -->
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-1">Tambah Transaksi Baru</h3>
                    <p class="text-muted small mb-4">Catat pesanan laundry baru dari pelanggan di sini.</p>

                    <form action="/simpan_transaksi" method="POST">
                        @csrf
                        
                        <!-- Pilih Pelanggan -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Pilih Pelanggan:</label>
                            <select name="id_pelanggan" class="form-select" required>
                                <option value="">-- Pilih Pelanggan --</option>
                                @foreach($pelanggan as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama_pelanggan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Pilih Layanan -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Pilih Layanan:</label>
                            <select name="id_layanan" class="form-select" required>
                                <option value="">-- Pilih Layanan --</option>
                                @foreach($layanan as $l)
                                    <option value="{{ $l->id }}">{{ $l->nama_layanan }} (Rp {{ number_format($l->harga, 0, ',', '.') }})</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Berat / Jumlah Cucian -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Berat Cucian (Kg / Jumlah):</label>
                            <input type="number" step="0.1" name="jumlah" class="form-control" placeholder="Contoh: 2.5" required>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary w-100 py-2 shadow-sm">Simpan Transaksi</button>
                            <a href="/transaksi" class="btn btn-light w-100 py-2 border">Batal</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection