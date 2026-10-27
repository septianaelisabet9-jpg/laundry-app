@extends('template')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <!-- Tombol Kembali -->
            <div class="mb-3">
                <a href="/pelanggan" class="btn btn-outline-secondary btn-sm">&larr; Kembali ke Data Pelanggan</a>
            </div>

            <!-- Card Form Tambah Pelanggan -->
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-1">Tambah Pelanggan Baru</h3>
                    <p class="text-muted small mb-4">Masukkan data lengkap pelanggan baru laundry di sini.</p>

                    <form action="/simpan_pelanggan" method="POST">
                        @csrf

                        <!-- Input Nama Pelanggan -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Pelanggan:</label>
                            <input type="text" name="nama_pelanggan" class="form-control" placeholder="Contoh: Budi Santoso" required>
                        </div>

                        <!-- Input No Telepon -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">No Telepon:</label>
                            <input type="text" name="no_tlpn" class="form-control" placeholder="Contoh: 081234567890" required>
                        </div>

                        <!-- Input Alamat -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Alamat:</label>
                            <textarea name="alamat" class="form-control" rows="3" placeholder="Masukkan alamat lengkap..." required></textarea>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary w-100 py-2 shadow-sm">Simpan Data</button>
                            <a href="/pelanggan" class="btn btn-light w-100 py-2 border">Batal</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection