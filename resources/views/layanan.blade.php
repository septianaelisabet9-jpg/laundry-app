
@extends('template')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Data Layanan Laundry</h5>

                    <!-- Tombol Aksi -->
                    <div class="d-flex flex-wrap justify-content-between mb-3 gap-2">
                        <div>
                            <a href="/home" class="btn btn-outline-secondary btn-sm">
                                Kembali ke Home
                            </a>

                            <a href="/tambah-layanan" class="btn btn-primary btn-sm">
                                + Tambah Layanan Baru
                            </a>
                        </div>

                        <div>
                            <button type="button" class="btn btn-secondary btn-sm"
                                onclick="window.print()">
                                Print Window
                            </button>

                            <a href="/layanan/pdf" target="_blank" class="btn btn-danger btn-sm">
                                Download PDF
                            </a>

                            <a href="/layanan/excel" class="btn btn-success btn-sm">
                                Export Excel
                            </a>
                        </div>
                    </div>

                    <!-- Table with DataTables -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Layanan</th>
                                <th>Jenis</th>
                                <th>Harga (Rp)</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($layanan as $l)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $l->nama_layanan }}</td>

                                <td>{{ $l->jenis }}</td>

                                <td>
                                    Rp {{ number_format($l->harga, 0, ',', '.') }}
                                </td>

                                <td>
                                    <a href="/edit_layanan/{{ $l->id }}"
                                        class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="/hapus-layanan/{{ $l->id }}"
                                        method="POST"
                                        style="display:inline;"
                                        onsubmit="return confirm('Yakin ingin menghapus layanan ini?')">

                                        @csrf

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
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
