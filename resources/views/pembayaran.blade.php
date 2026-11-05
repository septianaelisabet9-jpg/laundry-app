
@extends('template')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Data Pembayaran Laundry</h5>

                    <!-- Tombol Aksi -->
                    <div class="d-flex flex-wrap justify-content-between mb-3 gap-2">
                        <div>
                            <a href="/home" class="btn btn-primary btn-sm">
                                Kembali ke Dashboard
                            </a>

                            <a href="/tambah_pembayaran" class="btn btn-danger btn-sm">
                                + Tambah Pembayaran
                            </a>
                        </div>

                        <div>
                            <button type="button" class="btn btn-secondary btn-sm"
                                onclick="window.print()">
                                Print Window
                            </button>

                            <a href="/pembayaran/pdf" target="_blank"
                                class="btn btn-danger btn-sm">
                                Download PDF
                            </a>

                            <a href="/pembayaran/excel"
                                class="btn btn-success btn-sm">
                                Export Excel
                            </a>
                        </div>
                    </div>

                    <!-- Table with DataTables -->
                    <table class="table datatable">
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

                                <td>
                                    Rp {{ number_format($p->jmlh_bayar, 0, ',', '.') }}
                                </td>

                                <td>{{ $p->metode_pembayaran }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with DataTables -->

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
