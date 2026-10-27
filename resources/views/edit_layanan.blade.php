@extends('template')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
           
            <div class="mb-3">
                <a href="/layanan" class="btn btn-outline-secondary btn-sm">&larr; Kembali ke Data Layanan</a>
            </div>

            
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-3">Edit Data Layanan</h3>
                    <p class="text-muted small mb-4">Silakan perbarui informasi jenis layanan laundry di bawah ini.</p>

                    <form action="/edit_layanan_aksi/{{ $layanan->id }}" method="POST">
                        @csrf

                        <!-- Input Nama Layanan -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Layanan:</label>
                            <input type="text" name="nama_layanan" value="{{ $layanan->nama_layanan }}" class="form-control" required>
                        </div>

                        
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Jenis:</label>
                            <input type="text" name="jenis" value="{{ $layanan->jenis }}" class="form-control" required>
                        </div>

                        
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Harga (Rp):</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" name="harga" value="{{ $layanan->harga }}" class="form-control" required>
                            </div>
                        </div>

                        
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary w-100 py-2 shadow-sm">Simpan Perubahan</button>
                            <a href="/layanan" class="btn btn-light w-100 py-2 border">Batal</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection