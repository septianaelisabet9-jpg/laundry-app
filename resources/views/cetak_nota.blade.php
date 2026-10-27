@extends('template')

@section('content')
<title>cetak nota</title>
<div class="container d-flex justify-content-center align-items-center py-5">
    <div class="card shadow-sm p-4" style="width: 380px; background-color: #fff;">
        
        <!-- Header Struk -->
        <div class="text-center mb-3">
            <h4 class="fw-bold mb-1">LAUNDRY REKIK</h4>
            <p class="text-muted small mb-0">Jl. Contoh No. 123<br>HP: 0812-3456-7890</p>
        </div>
        
        <hr>
        
        <!-- Info Transaksi -->
        <table class="table table-sm table-borderless small mb-2">
            <tr>
                <td>No Nota</td>
                <td>: #TRX-001</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>: 28/03/2026 10:30</td>
            </tr>
            <tr>
                <td>Pelanggan</td>
                <td>: Andi</td>
            </tr>
        </table>

        <hr>

        <!-- Detail Pesanan -->
        <div class="small mb-2">
            <div class="fw-bold">Cuci Kiloan (Reguler)</div>
            <div class="d-flex justify-content-between text-muted">
                <span>3 kg x Rp 7.000</span>
                <span>Rp 21.000</span>
            </div>
            
            <div class="fw-bold mt-2">Setrika Sepatu</div>
            <div class="d-flex justify-content-between text-muted">
                <span>1 pasang x Rp 10.000</span>
                <span>Rp 10.000</span>
            </div>
        </div>

        <hr>

        <!-- Total & Status -->
        <div class="d-flex justify-content-between fw-bold mb-1">
            <span>Total</span>
            <span>Rp 31.000</span>
        </div>
        <div class="d-flex justify-content-between small mb-3">
            <span class="text-muted">Status Bayar</span>
            <span class="text-success fw-bold">LUNAS</span>
        </div>

        <hr>

        <!-- Footer / Pesan Penutup -->
        <div class="text-center text-muted" style="font-size: 11px;">
            <p class="mb-0">-- Terima Kasih --</p>
            <p class="mb-0">Barang yang tidak diambil > 30 hari di luar tanggung jawab kami.</p>
        </div>

        <!-- Tombol Print Manual (Hilang saat diprint) -->
        <div class="text-center mt-3 d-print-none">
            <button onclick="window.print()" class="btn btn-primary btn-sm w-100">Cetak Struk</button>
            <a href="/transaksi" class="btn btn-outline-secondary btn-sm w-100 mt-2">Kembali ke Transaksi</a>
        </div>

    </div>
</div>

<!-- Script otomatis print saat halaman dibuka (opsional, hapus tag <script> di bawah jika tidak ingin langsung tercetak otomatis) -->
<script>
    // window.onload = function() { window.print(); }
</script>
@endsection