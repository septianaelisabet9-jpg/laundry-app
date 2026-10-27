@extends('template') 

@section('content')
<div class="container my-4">
    
    <!-- Judul Halaman -->
    <h3 class="fw-bold mb-3">Data Transaksi Laundry</h3>

    <!-- Baris Tombol Atas (Menyesuaikan Layanan: Kiri untuk Navigasi, Kanan untuk Export) -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <a href="/home" class="btn btn-outline-secondary btn-sm">Kembali ke Home</a>
            <a href="/tambah-transaksi" class="btn btn-primary btn-sm fw-semibold shadow-sm">+ Tambah Transaksi Baru</a>
        </div>
        <div>
            <button type="button" onclick="window.print()" class="btn btn-secondary">Print Window</button>
            <a href="/transaksi/pdf" target="_blank" class="btn btn-danger btn-sm">Download PDF</a>
            <a href="/transaksi/excel" class="btn btn-success btn-sm">Export Excel</a>
        </div>
    </div>

    <!-- Tabel Data -->
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="ps-3">No</th>
                            <th>Nama Pelanggan</th>
                            <th>Layanan</th>
                            <th>Berat</th>
                            <th>Total Bayar</th>
                            <th>Status Laundry</th>
                            <th>Status Bayar</th>
                            <th class="text-center pe-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($transaksi as $t)
                        <tr>
                            <td class="ps-3">{{ $loop->iteration }}</td>
                            <td class="fw-semibold">{{ $t->nama_pelanggan ?? '-' }}</td>
                            <td>{{ $t->nama_layanan ?? '-' }}</td>
                            <td>{{ $t->berat ?? 0 }} kg</td>
                            <td class="fw-semibold text-primary">Rp {{ number_format($t->total_bayar, 0, ',', '.') }}</td>
                            <td>
                                <!-- Badge Status Laundry yang Dinamis -->
                                @if($t->status_laundry == 'Selesai')
                                    <span class="badge bg-success">Selesai</span>
                                @else
                                    <span class="badge bg-warning text-dark">Proses</span>
                                    <br>
                                    <a href="/update-status-laundry/{{ $t->id }}" class="btn btn-outline-success btn-sm py-0 px-2 mt-1" style="font-size: 11px;" onclick="return confirm('Tandai transaksi ini sudah selesai?')">Tandai Selesai</a>
                                @endif
                            </td>
                            <td>
                                <span class="badge {{ $t->status_bayar == 'Lunas' ? 'bg-success' : 'bg-danger' }}">
                                    {{ $t->status_bayar }}
                                </span>
                            </td>
                            <td class="text-center pe-3">
                                <a href="/hapus-transaksi/{{ $t->id }}" class="btn btn-danger btn-sm py-0 px-2 shadow-sm" onclick="return confirm('Yakin ingin menghapus transaksi ini?')">Hapus</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center py-4 text-muted">Belum ada data transaksi laundry.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection