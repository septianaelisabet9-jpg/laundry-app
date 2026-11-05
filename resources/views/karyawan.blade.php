
@extends('template')

@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Data Karyawan Laundry</h5>

                    <!-- Tombol Aksi -->
                    <div class="d-flex flex-wrap justify-content-between mb-3 gap-2">
                        <div>
                            <a href="/home" class="btn btn-outline-secondary btn-sm">
                                &larr; Kembali ke Dashboard
                            </a>

                            <a href="/tkry" class="btn btn-primary btn-sm">
                                + Tambah Karyawan Baru
                            </a>
                        </div>

                        <div>
                            <button type="button" class="btn btn-secondary btn-sm"
                                onclick="window.print()">
                                Print Window
                            </button>

                            <a href="/karyawan/pdf" target="_blank"
                                class="btn btn-danger btn-sm">
                                Download PDF
                            </a>

                            <a href="/karyawan/excel"
                                class="btn btn-success btn-sm">
                                Export Excel
                            </a>
                        </div>
                    </div>

                    <!-- Table with DataTables -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>ID Karyawan</th>
                                <th>Foto</th>
                                <th>ID User</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Nama Karyawan</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Layanan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($karyawan as $k)

                            @php
                                $columns = array_keys(get_object_vars($k));
                                $primaryKey = $columns[0] ?? 'id';
                            @endphp

                            <tr>
                                <td>{{ $k->{$primaryKey} }}</td>

                                <td>
                                    @if($k->img)
                                        <img src="{{ asset('assets/img/' . $k->img) }}"
                                            alt="Foto"
                                            width="40"
                                            height="40"
                                            class="rounded-circle"
                                            style="object-fit: cover;">
                                    @else
                                        <span class="text-muted small">No Image</span>
                                    @endif
                                </td>

                                <td>{{ $k->id_user ?? '-' }}</td>

                                <td>{{ $k->username ?? '-' }}</td>

                                <td>{{ $k->email ?? '-' }}</td>

                                <td>{{ $k->nama_kry ?? '-' }}</td>

                                <td>{{ $k->alamat_kry ?? '-' }}</td>

                                <td>{{ $k->jk_kry ?? '-' }}</td>

                                <td>{{ $k->nama_layanan ?? '-' }}</td>

                                <td>
                                    <a href="/edit_karyawan/{{ $k->{$primaryKey} }}"
                                        class="btn btn-success btn-sm">
                                        Edit
                                    </a>

                                    <form action="/hapus_karyawan/{{ $k->{$primaryKey} }}"
                                        method="POST"
                                        style="display:inline;"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">

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
