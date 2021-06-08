<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h5 mb-0 text-gray-800">Dashboard</h1>
    <a href="<?=site_url('dashboard/laporan')?>" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fa fa-file-pdf fa-sm"></i> Generate Report PDF</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-2 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tiket</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?//=$count_site;?>10</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-ticket-alt fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Perjalanan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?//=$count_site;?>10</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-2 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Trayek</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?//=$count_site;?>10</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-map-signs fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-2 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Mobil</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?//=$count_site;?>10</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-taxi fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pelanggan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?//=$count_site;?>10</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Content Row -->

  <div class="row">

    <div class="col-xl-7 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Pemesanan Tiket Hari ini : <?=date('d-m-Y')?></h6>
          <div class="dropdown no-arrow">
            <a href="#"><i class="far fa-calendar-alt"></i></a>
          </div>

        </div>
        <!-- Card Body -->
        <div class="card-body">
          <table class="table table-sm table-bordered" id="dataTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Kota Asal</th>
                <th>Kota Tujuan</th>
                <th>Atas Nama</th>
                <th>Jlh/No Kursi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php //$no = 1; foreach ($count_users_per_site as $s) { ?>
                <tr>
                  <td>1<?//=$no++;?></td>
                  <td>MEDAN<?//=$s->st_nama_site?></td>
                  <td>PSP<?//=$s->jlh?></td>
                  <td>Joni<?//=$s->jlh?></td>
                  <td>2 [3,4]<?//=$s->jlh?></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Detail">
                      <i class="fa fa-bars"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Pilih Mobil">
                      <i class="fa fa-taxi"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Batalkan">
                      <i class="fas fa-times-circle text-danger"></i>
                    </a>
                  </td>
                </tr>
                <?php //} ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-xl-5 col-lg-5">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Pemesanan Tiket Hari ini : <?=date('d-m-Y')?></h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <table class="table table-sm table-bordered" id="dataTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Mobil</th>
                  <th>Sesi</th>
                  <th><i class="fa fa-chair"></i></th>
                  <th><i class="fa fa-taxi"></i></th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php //$no = 1; foreach ($count_users_per_site as $s) { ?>
                  <tr>
                    <td>1<?//=$no++;?></td>
                    <td>225<?//=$s->st_nama_site?></td>
                    <td>Malam<?//=$s->jlh?></td>
                    <td>3,4<?//=$s->jlh?></td>
                    <td>Loket<?//=$s->jlh?></td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Validasi
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#"><i class="fa fa-chair" aria-hidden></i> Atur Kursi</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Loket</a>
                          <a class="dropdown-item" href="#">Jemput</a>
                          <a class="dropdown-item" href="#">Berangkat</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item text-primary" href="#"><i class="fas fa-check" aria-hidden></i> Sampai</a>
                          <a class="dropdown-item text-danger" href="#"><i class="fas fa-times" aria-hidden></i> Batal</a>
                        </div>
                      </div>

                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-user" aria-hidden></i>
                        </button>
                        <div class="dropdown-menu small">
                          <div class="m-2">
                            Nama: Rizki<br>
                            Jemput: Jl.Air Bersih Ujung<br>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php //} ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- /.container-fluid -->
