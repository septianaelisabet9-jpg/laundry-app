<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan - Laundry</title>
</head>
<body>
    <h2>Data Pelanggan Laundry</h2>

    <button type="button" onclick="window.print()">Print Window</button>
    <button><a href="/pelanggan/pdf" target="_blank">Download PDF</a></button>
    <button><a href="/pelanggan/excel">Export Excel</a></button>
    <br>
    <br>
    <button>
    <a href="/tambah-pelanggan">Tambah Pelanggan Baru</a>
    </button>  
    <button>
    <a href="/home">Kembali ke Home</a>
    </button>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach($pelanggan as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->nama_pelanggan }}</td>
            <td>{{ $p->no_tlpn }}</td>
            <td>{{ $p->alamat }}</td>
           
            <td>
            <a href="/edit_pelanggan/{{ $p->id }}">Edit</a> | 
            <a href="/hapus_pelanggan/{{ $p->id }}" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
            
        </tr>
        @endforeach
    </table>
</body>
</html>