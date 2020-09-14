<?php 
  $pg_active = isset($_GET['page']) ? $_GET['page'] : '';
  if ($pg_active == 'dashboard'){
    $home = 'active';
  }elseif ($pg_active == 'client' || $pg_active == 'add_client' || $pg_active == 'add_stok_barang' || $pg_active == 'update_stok_barang'){
    $client = 'active';
  }elseif ($pg_active == 'transaksi_pembelian' || $pg_active == 'transaksi_stok_tersedia' || $pg_active == 'add_transaksi_stok_tersedia' || $pg_active == 'add_transaksi_pembelian' || $pg_active == 'update_transaksi_pembelian'){
    $transaksi = 'active';
  }else{
    $beranda = 'active';
  }
?>
      <div class="flex-fill">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="./index.html">
                <img src="./demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Jane Pearson</span>
                      <small class="text-muted d-block mt-1">Administrator</small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-user"></i> Profile
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-settings"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-log-out"></i> Sign out
                    </a>
                  </div>
                </div>
              </div>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="./index.php?page=dasboard" class="nav-link <?php echo $home; ?>"><i class="fe fe-home"></i> Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link <?php echo $client; ?>" data-toggle="dropdown"><i class="fe fe-user"></i> Client</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./index.php?page=client" class="dropdown-item ">Client</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Transaksi</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./index.php?page=transaksi" class="dropdown-item ">Transaksi</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="./docs/index.html" class="nav-link"><i class="fe fe-file-text"></i> Documentasi</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>