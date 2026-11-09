
@extends('template')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Data Pelanggan Laundry</h5>

                    <div class="d-flex flex-wrap justify-content-between mb-3 gap-2">
                        <div>
                            <a href="/home" class="btn btn-outline-secondary btn-sm">
                                &larr; Kembali ke Home
                            </a>

                            <a href="/tambah_pelanggan" class="btn btn-primary btn-sm">
                                + Tambah Pelanggan Baru
                            </a>
                        </div>

                        <div>
                            <button type="button" class="btn btn-secondary btn-sm"
                                onclick="window.print()">
                                Print Window
                            </button>

                            <a href="/pelanggan/pdf" target="_blank" class="btn btn-danger btn-sm">
                                Download PDF
                            </a>

                            <a href="/pelanggan/excel" class="btn btn-success btn-sm">
                                Export Excel
                            </a>
                        </div>
                    </div>

                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Foto</th>
                                <th>No Telepon</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($pelanggan as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $p->nama_pelanggan }}</td>

                                <td>
                                    @if($p->img)
                                        <img src="{{ asset('assets/img/' . $p->img) }}"
                                            width="50"
                                            height="50"
                                            class="rounded-circle"
                                            style="object-fit: cover;">
                                    @else
                                        <span class="badge bg-secondary">No Image</span>
                                    @endif
                                </td>

                                <td>{{ $p->no_tlpn }}</td>

                                <td>{{ $p->alamat }}</td>

                                <td>
                                    <a href="/edit_pelanggan/{{ $p->id }}"
                                        class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="/hapus_pelanggan/{{ $p->id }}"
                                        method="POST"
                                        style="display:inline;"
                                        onsubmit="return confirm('Yakin ingin menghapus pelanggan ini?')">

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
