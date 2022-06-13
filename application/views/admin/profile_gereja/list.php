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
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <table class="table table-bordered table-hover" id="">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Gambar</th>
                      <th>Keterangan</th>
                      <th>Deskrips</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($profile as $p) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td>
                          <img src="<?php echo base_url('assets/img/upload/' . $p['gambar']); ?>" width="200px">
                        </td>
                        <td><?= $p['keterangan'] ?></td>
                        <td><?= $p['deskripsi'] ?></td>
                        <td>
                          <a href="<?= base_url('admin/profile_gereja/edit_profile/' . $p['profile_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                          <a href="<?= base_url('admin/profile_gereja/delete_profile/' . $p['profile_id']); ?>" class="btn btn-danger btn-primary btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php $i++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->