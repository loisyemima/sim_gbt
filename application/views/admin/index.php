  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Jumlah Jemaat GBT Kristus Ajaib Siliragung</h3>
                  <a href="<?= base_url('admin/member') ?>">Data Jemaat</a>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box shadow-lg">
                      <span class="info-box-icon bg-primary"><i class="fas fa-users"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Total Jemaat</span>
                        <span class="info-box-number"><?= $total ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box shadow-lg">
                      <span class="info-box-icon bg-warning"><i class="fas fa-child"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Jemaat Anak</span>
                        <span class="info-box-number"><?= $anak ?></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box shadow-lg">
                      <span class="info-box-icon bg-info"><i class="fas fa-user-friends"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Jemaat Pemuda</span>
                        <span class="info-box-number"><?= $pemuda ?></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box shadow-lg">
                      <span class="info-box-icon bg-success"><i class="fas fa-male"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Jemaat Dewasa</span>
                        <span class="info-box-number"><?= $dewasa ?></span>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->