<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Layanan</title>
</head>
<body>
    <h2>Edit Data Layanan</h2>

    <form action="/edit_layanan_aksi/{{ $layanan->id }}" method="POST">
        @csrf
        <p>Nama Layanan: <input type="text" name="nama_layanan" value="{{ $layanan->nama_layanan }}" required></p>
        <p>Jenis: <input type="text" name="jenis" value="{{ $layanan->jenis }}" required></p>
        <p>Harga (Rp): <input type="number" name="harga" value="{{ $layanan->harga }}" required></p>
        
        <button type="submit">Simpan Perubahan</button>
        <a href="/layanan">Batal</a>
    </form>
</body>
</html>