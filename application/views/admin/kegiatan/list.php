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
                <a href="<?= base_url('admin/kegiatan/create_kegiatan'); ?>" class="btn btn-primary mb-3">Add Data</a>
                <table class="table table-bordered table-hover" id="example2">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Kegiatan</th>
                      <th>Tanggal Kegiatan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kegiatan as $p) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $p['nama_kegiatan'] ?></td>
                        <td><?= $p['tgl_kegiatan'] ?></td>
                        <td>
                          <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#detailKegiatanModal<?php echo $p['kegiatan_id']; ?>"><i class="fa fa-eye"></i></a>
                          <a href="<?= base_url('admin/kegiatan/edit_kegiatan/' . $p['kegiatan_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                          <a href="<?= base_url('admin/kegiatan/delete_kegiatan/' . $p['kegiatan_id']); ?>" class="btn btn-danger btn-primary btn-sm"><i class="fa fa-trash"></i></a>
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

  <?php foreach ($kegiatan as $list) : ?>
    <div class="modal fade" id="detailKegiatanModal<?php echo $list['kegiatan_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Detail</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped table-bordered table-hover">
                <tr>
                  <td>Nama Kegiatan</td>
                  <td><?php echo $list['nama_kegiatan'] ?></td>
                </tr>
                <tr>
                  <td>Tanggal Kegiatan</td>
                  <td><?php echo $list['tgl_kegiatan'] ?></td>
                </tr>
                <tr>
                  <td>Deskripsi</td>
                  <td><?php echo $list['deskripsi']; ?></td>
                </tr>
              </table>
            </div>
            <div class="clearfix"></div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>