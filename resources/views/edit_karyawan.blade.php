@extends('template')

@section('content')

<title>edit karyawan</title>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <!-- Tombol Kembali -->
            <div class="mb-3">
                <a href="/karyawan" class="btn btn-outline-secondary btn-sm">&larr; Kembali ke Data Karyawan</a>
            </div>

            <!-- Card Form Edit -->
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-3">Edit Data Karyawan</h3>
                    <p class="text-muted small mb-4">Silakan perbarui informasi karyawan di bawah ini.</p>

                    <form action="/edit_karyawan_aksi/{{ $karyawan->id_karyawan }}" method="POST">
                        @csrf

                        <!-- Input Nama -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Karyawan:</label>
                            <input type="text" name="nama_kry" value="{{ $karyawan->nama_kry }}" class="form-control" required>
                        </div>

                        <!-- Input Alamat -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Alamat:</label>
                            <input type="text" name="alamat_kry" value="{{ $karyawan->alamat_kry }}" class="form-control" required>
                        </div>

                        <!-- Pilihan Jenis Kelamin -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold d-block">Jenis Kelamin:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk_kry" id="jkL" value="L" {{ $karyawan->jk_kry == 'L' ? 'checked' : '' }}>
                                <label class="form-check-label" for="jkL">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jk_kry" id="jkP" value="P" {{ $karyawan->jk_kry == 'P' ? 'checked' : '' }}>
                                <label class="form-check-label" for="jkP">Perempuan</label>
                            </div>
                        </div>

                        <!-- Tombol Simpan -->
                        <button type="submit" class="btn btn-primary w-100 py-2 shadow-sm">Simpan Perubahan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection