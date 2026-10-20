<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
</head>
<body>
    <h2>Edit Data Pelanggan</h2>

    <form action="/edit_pelanggan_aksi/{{ $pelanggan->id }}" method="POST">
        @csrf
        <p>Nama Pelanggan: <input type="text" name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}" required></p>
        <p>No Telepon: <input type="text" name="no_tlpn" value="{{ $pelanggan->no_tlpn }}" required></p>
        <p>Alamat: <input type="text" name="alamat" value="{{ $pelanggan->alamat }}" required></p>
        
        <button type="submit">Simpan Perubahan</button>
        <a href="/pelanggan">Batal</a>
    </form>
</body>
</html>