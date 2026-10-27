@extends('template')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <!-- Tombol Kembali -->
            <div class="mb-3">
                <a href="/pembayaran" class="btn btn-outline-secondary btn-sm">&larr; Kembali ke Data Pembayaran</a>
            </div>

            <!-- Card Form Input Pembayaran -->
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-1">Input Pembayaran</h3>
                    <p class="text-muted small mb-4">Pilih transaksi yang belum lunas untuk memproses pembayaran.</p>

                    <form action="/simpan_pembayaran" method="POST">
                        @csrf
                        
                        <!-- Pilih Transaksi (Looping Database) -->
                        <div class="mb-3">
                            <label for="transaksi" class="form-label fw-semibold">Pilih Transaksi (Belum Lunas):</label>
                            <select id="transaksi" name="transaksi_id" class="form-select" required>
                                <option value="">-- Pilih Transaksi --</option>
                                @foreach($transaksi as $t)
                                    <option value="{{ $t->id }}">
                                        #TRX-{{ $t->id }} - {{ $t->nama_pelanggan }} (Total: Rp {{ number_format($t->total_bayar, 0, ',', '.') }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Metode Pembayaran -->
                        <div class="mb-4">
                            <label for="metode" class="form-label fw-semibold">Metode Pembayaran:</label>
                            <select id="metode" name="metode_pembayaran" class="form-select" required>
                                <option value="cash">Tunai (Cash)</option>
                                <option value="qris">QRIS</option>
                                <option value="transfer">Transfer Bank</option>
                            </select>
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