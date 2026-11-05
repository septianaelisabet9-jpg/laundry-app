<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <!-- Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="/home">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Menu Laundry</li>

      <!-- Data Pelanggan -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/pelanggan">
          <i class="bi bi-people"></i>
          <span>Data Pelanggan</span>
        </a>
      </li><!-- End Pelanggan Nav -->

      <!-- Data Transaksi (Dropdown) -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#transaksi-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cart-check"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="transaksi-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="/transaksi/baru">
              <i class="bi bi-circle"></i><span>Transaksi Baru</span>
            </a>
          </li>
          <li>
            <a href="/transaksi/riwayat">
              <i class="bi bi-circle"></i><span>Riwayat Transaksi</span>
            </a>
          </li>
        </ul>
      </li><!-- End Transaksi Nav -->

      <!-- Data Layanan / Paket Cuci -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/layanan">
          <i class="bi bi-tag"></i>
          <span>Paket Layanan</span>
        </a>
      </li><!-- End Layanan Nav -->

      <!-- Laporan -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/laporan">
          <i class="bi bi-file-earmark-text"></i>
          <span>Laporan</span>
        </a>
      </li><!-- End Laporan Nav -->

      <li class="nav-heading">Pengaturan</li>

      <!-- Profile -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/profile">
          <i class="bi bi-person"></i>
          <span>Profile Admin</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
  <main id="main" class="main">