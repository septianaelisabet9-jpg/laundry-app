<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pembayaran</title>
</head>
<body>

    <h2>Data Pembayaran Laundry</h2>
    
    <p>
        <a href="/home">Kembali ke Dashboard</a> | 
        <a href="/tambah_pembayaran"><button>+ Tambah Pembayaran</button></a>
    </p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal Bayar</th>
                <th>Jumlah Bayar</th>
                <th>Metode Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($pembayaran as $p)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $p->nama_pelanggan }}</td>
                <td>{{ $p->tgl_bayar }}</td>
                <td>Rp {{ number_format($p->jmlh_bayar, 0, ',', '.') }}</td>
                <td>{{ $p->metode_pembayaran }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
 
</body>
</html>