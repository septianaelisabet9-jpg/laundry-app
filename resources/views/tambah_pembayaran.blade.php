<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Pembayaran Otomatis</title>
</head>
<body>
    <h2>Input Pembayaran</h2>

    <p><a href="/pembayaran">Kembali ke Data Pembayaran</a></p>

    <form action="/simpan_pembayaran" method="POST">
        @csrf
        
        <label for="transaksi">Pilih Transaksi (Belum Lunas):</label><br>
        <select id="transaksi" name="transaksi_id" required>
            <option value="">-- Pilih Transaksi --</option>
            @foreach($transaksi as $t)
                <option value="{{ $t->id }}">
                    #TRX-{{ $t->id }} - {{ $t->nama_pelanggan }} (Total Tagihan: Rp {{ number_format($t->total_bayar, 0, ',', '.') }})
                </option>
            @endforeach
        </select>
        <br><br>

        <label for="metode">Metode Pembayaran:</label><br>
        <select id="metode" name="metode_pembayaran" required>
            <option value="cash">Tunai (Cash)</option>
            <option value="qris">QRIS</option>
            <option value="transfer">Transfer Bank</option>
        </select>
        <br><br>

        

        <button type="submit">Simpan Pembayaran</button>
    </form>
</body>
</html>