@extends('template')
@section('content')

<div class="container-fluid py-3">

    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
        <div class="d-flex gap-2">
            <a href="/home" class="btn btn-outline-secondary btn-sm">&larr; Kembali ke Dashboard</a>
            <a href="/tkry" class="btn btn-primary btn-sm">+ Tambah Karyawan Baru</a>
        </div>

        <div>
            <button type="button" class="btn btn-secondary btn-sm" onclick="window.print()">Print Window</button>
            <a href="/karyawan/pdf" target="_blank" class="btn btn-danger btn-sm">Download PDF</a>
            <a href="/karyawan/excel" class="btn btn-success btn-sm">Export Excel</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle w-100">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID Karyawan</th>
                    <th>Foto</th> <!-- Kolom Baru untuk Foto -->
                    <th>ID User</th>
                    <th>username</th>
                    <th>email</th>
                    <th>Nama Karyawan</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Layanan</th>
                    <th width="140">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawan as $k)
                <tr>
                    <td class="text-center">{{ $k->id_karyawan }}</td>
                    
                    <!-- Menampilkan Foto dari folder assets/img/ -->
                    <td class="text-center">
                        @if($k->img)
                            <img src="{{ asset('assets/img/' . $k->img) }}" alt="Foto" width="40" height="40" class="rounded-circle" style="object-fit: cover;">
                        @else
                            <span class="text-muted small">No Image</span>
                        @endif
                    </td>

                    <td class="text-center">{{ $k->id_user }}</td>
                    <td>{{ $k->username ?? '-' }}</td>
                    <td>{{ $k->email ?? '-' }}</td>
                    <td>{{ $k->nama_kry ?? '-' }}</td>
                    <td>{{ $k->alamat_kry ?? '-' }}</td>
                    <td class="text-center">{{ $k->jk_kry ?? '-' }}</td>
                    <td>{{ $k->nama_layanan ?? '-' }}</td>
                    
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-1">
                            <a href="/edit_karyawan/{{ $k->id_karyawan }}" class="btn btn-success btn-sm">Edit</a>
                            
                            <form action="/hapus_karyawan/{{ $k->id_karyawan }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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