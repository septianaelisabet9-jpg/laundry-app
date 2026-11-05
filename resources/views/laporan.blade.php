
@extends('template')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <!-- Judul dan Tombol Aksi -->
            <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                <div>
                    <h5 class="card-title mb-1">Laporan Pendapatan Laundry</h5>
                    <p class="text-muted small">
                        Data uang masuk dari transaksi laundry.
                    </p>

                    <a href="/home" class="btn btn-outline-secondary btn-sm">
                        &larr; Kembali ke Dashboard
                    </a>
                </div>

                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-secondary btn-sm"
                        onclick="window.print()">
                        Print
                    </button>

                    <a href="/laporan/pdf" target="_blank"
                        class="btn btn-danger btn-sm">
                        PDF
                    </a>

                    <a href="/laporan/excel"
                        class="btn btn-success btn-sm">
                        Excel
                    </a>
                </div>
            </div>

            <!-- Form Filter Tanggal -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Filter Laporan</h5>

                    <form action="/laporan" method="GET" class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label">Dari Tanggal:</label>
                            <input type="date" name="tgl_mulai"
                                class="form-control"
                                value="{{ request('tgl_mulai') }}" required>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Sampai Tanggal:</label>
                            <input type="date" name="tgl_selesai"
                                class="form-control"
                                value="{{ request('tgl_selesai') }}" required>
                        </div>

                        <div class="col-md-4 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">
                                Filter Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Total Pemasukan -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Pemasukan</h5>

                    <h3 class="fw-bold text-primary">
                        Rp {{ number_format($total_pemasukan ?? 0, 0, ',', '.') }}
                    </h3>
                </div>
            </div>

            <!-- Tabel Data Laporan -->
            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Data Laporan Pendapatan</h5>

                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Bayar</th>
                                <th>Kode Transaksi</th>
                                <th>Pelanggan</th>
                                <th>Metode</th>
                                <th>Jumlah Bayar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($laporan as $key => $p)
                            <tr>
                                <td>{{ $key + 1 }}</td>

                                <td>{{ $p->created_at }}</td>

                                <td>
                                    {{ $p->tgl_transaksi ?? '#TRX-00' . $p->id }}
                                </td>

                                <td>{{ $p->nama_pelanggan ?? 'Umum' }}</td>

                                <td>{{ $p->status_bayar ?? 'CASH' }}</td>

                                <td>
                                    Rp {{ number_format($p->jmlh_bayar ?? 0, 0, ',', '.') }}
                                </td>
                            </tr>

                            @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    Belum ada data transaksi atau pendapatan pada rentang tanggal ini.
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
