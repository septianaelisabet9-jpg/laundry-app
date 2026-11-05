
@extends('template')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Data Transaksi Laundry</h5>

                    
                    <div class="d-flex flex-wrap justify-content-between mb-3 gap-2">
                        <div>
                            <a href="/home" class="btn btn-outline-secondary btn-sm">
                                Kembali ke Home
                            </a>

                            <a href="/tambah-transaksi" class="btn btn-primary btn-sm">
                                + Tambah Transaksi Baru
                            </a>
                        </div>

                        <div>
                            <button type="button" onclick="window.print()"
                                class="btn btn-secondary btn-sm">
                                Print Window
                            </button>

                            <a href="/transaksi/pdf" target="_blank"
                                class="btn btn-danger btn-sm">
                                Download PDF
                            </a>

                            <a href="/transaksi/excel"
                                class="btn btn-success btn-sm">
                                Export Excel
                            </a>
                        </div>
                    </div>

                    
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Layanan</th>
                                <th>Berat</th>
                                <th>Total Bayar</th>
                                <th>Status Laundry</th>
                                <th>Status Bayar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($transaksi as $t)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $t->nama_pelanggan ?? '-' }}</td>

                                <td>{{ $t->nama_layanan ?? '-' }}</td>

                                <td>{{ $t->berat ?? 0 }} kg</td>

                                <td>
                                    Rp {{ number_format($t->total_bayar, 0, ',', '.') }}
                                </td>

                                <td>
                                    @if($t->status_laundry == 'Selesai')
                                        <span class="badge bg-success">
                                            Selesai
                                        </span>
                                    @else
                                        <span class="badge bg-warning text-dark">
                                            Proses
                                        </span>

                                        <br>

                                        <a href="/update-status-laundry/{{ $t->id }}"
                                            class="btn btn-outline-success btn-sm mt-1"
                                            onclick="return confirm('Tandai transaksi ini sudah selesai?')">
                                            Tandai Selesai
                                        </a>
                                    @endif
                                </td>

                                <td>
                                    <span class="badge {{ $t->status_bayar == 'Lunas' ? 'bg-success' : 'bg-danger' }}">
                                        {{ $t->status_bayar }}
                                    </span>
                                </td>

                                <td>
                                    <a href="/hapus-transaksi/{{ $t->id }}"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus transaksi ini?')">
                                        Hapus
                                    </a>
                                </td>
                            </tr>

                            @empty
                            <tr>
                                <td colspan="8" class="text-center">
                                    Belum ada data transaksi laundry.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <!-- End Table with DataTables -->

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
