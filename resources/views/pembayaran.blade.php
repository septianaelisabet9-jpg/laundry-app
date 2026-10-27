@extends('template')
@section('content')

<div class="container-fluid py-3">
   
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Pembayaran Laundry</h2>
        
        <div>
            <a href="/home" class="btn btn-primary btn-sm">Kembali ke Dashboard</a>
            <a href="/tambah_pembayaran" class="btn btn-danger btn-sm">+ Tambah Pembayaran</a>
        </div>
    </div>
     <div>
            <button type="button" class="btn btn-secondary btn-sm" onclick="window.print()">Print Window</button>
            <a href="/karyawan/pdf" target="_blank" class="btn btn-danger btn-sm">Download PDF</a>
            <a href="/karyawan/excel" class="btn btn-success btn-sm">Export Excel</a>
        </div>

   
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
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
                    <td>Rp {{ number_format($p->jmlh_bayar, 0, ',', '.') }}</td>
                    <td>{{ $p->metode_pembayaran }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection