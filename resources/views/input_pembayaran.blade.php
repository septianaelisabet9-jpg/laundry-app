@extends('template')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            
            <!-- Tombol Kembali -->
            <div class="mb-3">
                <a href="/pembayaran" class="btn btn-outline-secondary btn-sm">&larr; Kembali ke Data Pembayaran</a>
            </div>

            <!-- Card Form Input Pembayaran -->
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-1">Form Input Pembayaran</h3>
                    <p class="text-muted small mb-4">Catat transaksi pembayaran laundry dari pelanggan di sini.</p>

                    <form action="/pembayaran/store" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Pilih Transaksi -->
                        <div class="mb-3">
                            <label for="transaksi" class="form-label fw-semibold">Pilih Transaksi:</label>
                            <select id="transaksi" name="transaksi_id" class="form-select" required>
                                <option value="">-- Pilih Transaksi --</option>
                                <option value="1">#TRX-001 - Andi (Total: Rp 25.000)</option>
                                <option value="2">#TRX-002 - Budi (Total: Rp 30.000)</option>
                            </select>
                        </div>

                        <!-- Tanggal Bayar -->
                        <div class="mb-3">
                            <label for="tanggal" class="form-label fw-semibold">Tanggal Bayar:</label>
                            <input type="datetime-local" id="tanggal" name="tanggal_bayar" class="form-control" required>
                        </div>

                        <!-- Jumlah Bayar -->
                        <div class="mb-3">
                            <label for="jumlah" class="form-label fw-semibold">Jumlah Bayar (Rp):</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" id="jumlah" name="jumlah_bayar" class="form-control" placeholder="Contoh: 25000" required>
                            </div>
                        </div>

                        <!-- Metode Pembayaran -->
                        <div class="mb-3">
                            <label for="metode" class="form-label fw-semibold">Metode Pembayaran:</label>
                            <select id="metode" name="metode_pembayaran" class="form-select" required>
                                <option value="cash">Tunai (Cash)</option>
                                <option value="qris">QRIS</option>
                                <option value="transfer">Transfer Bank</option>
                            </select>
                        </div>

                        <!-- Status Pembayaran -->
                        <div class="mb-3">
                            <label for="status" class="form-label fw-semibold">Status Pembayaran:</label>
                            <select id="status" name="status_pembayaran" class="form-select" required>
                                <option value="lunas">Lunas</option>
                                <option value="dp">DP (Uang Muka)</option>
                            </select>
                        </div>

                        <!-- Bukti Transfer -->
                        <div class="mb-4">
                            <label for="bukti" class="form-label fw-semibold">Bukti Transfer (Opsional):</label>
                            <input type="file" id="bukti" name="bukti_bayar" class="form-control" accept="image/*">
                            <div class="form-text">Format yang didukung: JPG, PNG (Maks. 2MB).</div>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary w-100 py-2 shadow-sm">Simpan Pembayaran</button>
                            <a href="/pembayaran" class="btn btn-light w-100 py-2 border">Batal</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection