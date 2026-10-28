@extends('template')

@section('content')
<div class="container-fluid py-3">
    <h2 class="mb-4">Data Layanan Laundry</h2>

    <!-- Baris Tombol Aksi -->
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
        <div>
            <a href="/home" class="btn btn-outline-secondary btn-sm"> Kembali ke Home</a>
            <a href="/tambah-layanan" class="btn btn-primary btn-sm">+ Tambah Layanan Baru</a>
        </div>
        <div>
            <button type="button" class="btn btn-secondary btn-sm" onclick="window.print()">Print Window</button>
            <a href="/layanan/pdf" target="_blank" class="btn btn-danger btn-sm">Download PDF</a>
            <a href="/layanan/excel" class="btn btn-success btn-sm">Export Excel</a>
        </div>
    </div>

    
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle w-100">
            <thead class="table-dark text-center">
                <tr>
                    <th width="50">No</th>
                    <th>Nama Layanan</th>
                    <th>Jenis</th>
                    <th>Harga (Rp)</th>
                    <th width="140">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($layanan as $l)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $l->nama_layanan }}</td>
                    <td>{{ $l->jenis }}</td>
                    <td>Rp {{ number_format($l->harga, 0, ',', '.') }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-1">
                            <!-- Tombol Edit -->
                            <a href="/edit_layanan/{{ $l->id }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <!-- Tombol Hapus Form POST -->
                            <form action="/hapus-layanan/{{ $l->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus layanan ini?')">
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

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th width="50">No</th>
                    <th>Nama Layanan</th>
                    <th>Jenis</th>
                    <th>Harga (Rp)</th>
                    <th width="140">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
