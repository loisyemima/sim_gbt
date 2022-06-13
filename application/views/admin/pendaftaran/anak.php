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
                <table class="table table-bordered table-hover" id="example2">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Anak</th>
                      <th>Nama Ayah</th>
                      <th>Nama Ibuk</th>
                      <th>Tempat & Tanggal Lahir</th>
                      <th>No. Telp</th>
                      <th>Tanggal Pengajuan</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($anak as $a) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $a['nama_anak'] ?></td>
                        <td><?= $a['nama_ayah'] ?></td>
                        <td><?= $a['nama_ibu'] ?></td>
                        <td><?= $a['tempattgl_lahir'] ?></td>
                        <td><?= $a['nomor'] ?></td>
                        <td><?= $a['date'] ?></td>
                        <td><?= $a['keterangan'] ?></td>
                        <td>
                          <?php if ($a['status'] == "1") : ?>
                            <form method="POST" action="<?= base_url('admin/pendaftaran/edit_anak/' . $a['anak_id']) ?>">
                              <input type="hidden" value="2" name="status">
                              <button type="submit" class="btn btn-warning">Verifikasi</button>
                            </form>
                          <?php elseif ($a['keterangan'] == "Diterima" & $a['status'] == "2") : ?>
                            <a href="<?= base_url('admin/pendaftaran/print_anak/' . $a['anak_id']); ?>" target="_blank" class="btn btn-info btn-sm">
                              <i class="fas fa-upload"></i> Print
                            </a>
                            <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editanakModal<?php echo $a['anak_id']; ?>"><i class="fas fa-pencil-alt"></i> Edit</a> <br>
                            <a href="<?= base_url('admin/pendaftaran/delete_anak/' . $a['anak_id']); ?>" onclick="return confirm('Yakin ingin menghapus data??')" class="btn btn-danger btn-primary btn-sm">
                              <i class="fa fa-trash"></i> Hapus
                            </a>
                          <?php else : ?>
                            <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editStatusModal<?php echo $a['anak_id']; ?>"><i class="fas fa-pencil-alt"></i> status</a>
                            <a href="<?= base_url('admin/pendaftaran/delete_anak/' . $a['anak_id']); ?>" onclick="return confirm('Yakin ingin menghapus data??')" class="btn btn-danger btn-primary btn-sm">
                              <i class="fa fa-trash"></i> Hapus
                            </a>
                          <?php endif; ?>
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

  <!-- Modal Edit-->
  <?php foreach ($anak as $ak) : ?>
    <div class="modal fade" id="editAnakModal<?php echo $ak['anak_id']; ?>" tabindex="-1" aria-labelledby="editAnakModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editAnakModalLabel">Edit Pendaftaran Anak</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url('admin/pendaftaran/edit_Anak2/' . $ak['anak_id']); ?>" method="post">
            <div class="modal-body">
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo $ak['nama_anak'] ?>" disabled>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="place" name="place" placeholder="" value="<?php echo $ak['place'] ?>" disabled>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="birth" name="birth" placeholder="" value="<?php echo $ak['birth'] ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="kode" name="kode" placeholder="" value="<?php echo $ak['kode'] ?>">
              </div>
              <div class="col-sm-6">
                <!-- radio -->
                <div class="form-group">
                  <label for=""> Status Penerimaan Data</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="keterangan" value="Diterima" checked>
                    <label class="form-check-label">Diterima</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="keterangan" value="Ditolak">
                    <label class="form-check-label">Ditolak</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>