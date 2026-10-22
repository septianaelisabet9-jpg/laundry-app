@extends('template')

@section('content')
<div class="container-fluid py-3">
    <h2 class="mb-4">Data Layanan Laundry</h2>

    <!-- Baris Tombol Aksi -->
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
        <div>
            <a href="/home" class="btn btn-outline-secondary btn-sm">&larr; Kembali ke Home</a>
            <a href="/tambah-layanan" class="btn btn-primary btn-sm">+ Tambah Layanan Baru</a>
        </div>
        <div>
            <button type="button" class="btn btn-secondary btn-sm" onclick="window.print()">Print Window</button>
            <a href="/layanan/pdf" target="_blank" class="btn btn-danger btn-sm">Download PDF</a>
            <a href="/layanan/excel" class="btn btn-success btn-sm">Export Excel</a>
        </div>
    </div>

    <!-- Tabel Bergaris Rapi (table-bordered) -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle w-100">
            <thead class="table-dark text-center">
                <tr>
                    <th width="50">No</th>
                    <th>Nama Layanan</th>
                    <th>Jenis</th>
                    <th>Harga (Rp)</th>
                    <th width="140">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($layanan as $l)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $l->nama_layanan }}</td>
                    <td>{{ $l->jenis }}</td>
                    <td>Rp {{ number_format($l->harga, 0, ',', '.') }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-1">
                            <!-- Tombol Edit -->
                            <a href="/edit_layanan/{{ $l->id }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <!-- Tombol Hapus Form POST -->
                            <form action="/hapus-layanan/{{ $l->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus layanan ini?')">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection