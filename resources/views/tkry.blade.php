@extends('template')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            
            <!-- Tombol Kembali -->
            <div class="mb-3">
                <a href="/karyawan" class="btn btn-outline-secondary btn-sm">&larr; Kembali ke Data Karyawan</a>
            </div>

            <!-- Card Form Input Karyawan -->
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-1">Input Karyawan Baru</h3>
                    <p class="text-muted small mb-4">Tambahkan akun login, data lengkap, dan foto karyawan baru di sini.</p>

                    <!-- 1. TAMBAHKAN enctype DI SINI -->
                    <form action="/aksi_tkry" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Username -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Username:</label>
                            <input type="text" name="us" class="form-control" placeholder="Contoh: budikasir" required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Password:</label>
                            <input type="password" name="ps" class="form-control" placeholder="Masukkan password..." required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email:</label>
                            <input type="email" name="email" class="form-control" placeholder="contoh@email.com" required>
                        </div>

                        <!-- Level -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Level:</label>
                            <select name="le" class="form-select" required>
                                <option value="">-- Pilih Level --</option>
                                <option value="1">Admin</option>
                                <option value="2">Karyawan</option>
                                <option value="3">Pelanggan</option>
                            </select>
                        </div>

                        <!-- Nama Karyawan -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Karyawan:</label>
                            <input type="text" name="s" class="form-control" placeholder="Contoh: Budi Santoso" required>
                        </div>

                        <!-- Alamat Karyawan -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Alamat Karyawan:</label>
                            <input type="text" name="b" class="form-control" placeholder="Masukkan alamat lengkap..." required>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold d-block">Jenis Kelamin:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="jkL" value="L" required>
                                <label class="form-check-label" for="jkL">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk" id="jkP" value="P" required>
                                <label class="form-check-label" for="jkP">Perempuan</label>
                            </div>
                        </div>

                        <!-- 2. INPUT UPLOAD FOTO BARU -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Foto Karyawan (Img):</label>
                            <input type="file" name="img" class="form-control" accept="image/*" required>
                            <div class="form-text text-muted">Format file: JPG, PNG, JPEG.</div>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary w-100 py-2 shadow-sm">Simpan</button>
                            <a href="/karyawan" class="btn btn-light w-100 py-2 border">Batal</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection