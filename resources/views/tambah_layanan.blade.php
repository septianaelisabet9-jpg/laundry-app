@extends('template')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <!-- Tombol Kembali -->
            <div class="mb-3">
                <a href="/layanan" class="btn btn-outline-secondary btn-sm">&larr; Kembali ke Data Layanan</a>
            </div>

            <!-- Card Form Tambah Layanan -->
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-1">Tambah Layanan Baru</h3>
                    <p class="text-muted small mb-4">Masukkan jenis layanan laundry baru beserta harganya di sini.</p>

                    <form action="/simpan-layanan" method="POST">
                        @csrf

                        <!-- Input Nama Layanan -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Layanan:</label>
                            <input type="text" name="nama_layanan" class="form-control" placeholder="Contoh: Cuci Kiloan Reguler" required>
                        </div>

                        <!-- Input Jenis -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Jenis:</label>
                            <input type="text" name="jenis" class="form-control" placeholder="Contoh: Kiloan / Satuan" required>
                        </div>

                        <!-- Input Harga -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Harga (Rp):</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" name="harga" class="form-control" placeholder="Contoh: 7000" required>
                            </div>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary w-100 py-2 shadow-sm">Simpan Layanan</button>
                            <a href="/layanan" class="btn btn-light w-100 py-2 border">Batal</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection