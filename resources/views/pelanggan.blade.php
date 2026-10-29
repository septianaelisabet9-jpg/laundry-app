@extends('template')

@section('content')
<div class="container-fluid py-3">
    <h2 class="mb-4">Data Pelanggan Laundry</h2>

    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
        <div>
            <a href="/home" class="btn btn-outline-secondary btn-sm">&larr; Kembali ke Home</a>
            <a href="/tambah-pelanggan" class="btn btn-primary btn-sm">+ Tambah Pelanggan Baru</a>
        </div>
        <div>
            <button type="button" class="btn btn-secondary btn-sm" onclick="window.print()">Print Window</button>
            <a href="/pelanggan/pdf" target="_blank" class="btn btn-danger btn-sm">Download PDF</a>
            <a href="/pelanggan/excel" class="btn btn-success btn-sm">Export Excel</a>
        </div>
    </div>

    <!-- Tabel Bootstrap Bergaris -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle w-100">
            <thead class="table-dark text-center">
                <tr>
                    <th width="50">No</th>
                    <th>Nama Pelanggan</th>
                    <th>Foto</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th width="140">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pelanggan as $p)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $p->nama_pelanggan }}</td>
                    <td class="text-center">
                        @if($p->img)
                            <img src="{{ asset('assets/img/' . $p->img) }}" alt="Foto" width="40" height="40" class="rounded-circle" style="object-fit: cover;">
                        @else
                            <span class="text-muted small">No Image</span>
                        @endif
                    </td>
                    <td>{{ $p->no_tlpn }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-1">
                            <!-- Tombol Edit -->
                            <a href="/edit_pelanggan/{{ $p->id }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <!-- Tombol Hapus Form POST -->
                            <form action="/hapus_pelanggan/{{ $p->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pelanggan ini?')">
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