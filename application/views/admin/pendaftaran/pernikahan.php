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
                      <th>Laki-laki</th>
                      <th>Perempuan</th>
                      <th>No. Telp</th>
                      <th>Baptis</th>
                      <th>Tanggal Pengajuan</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pernikahan as $p) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $p['nama_laki'] ?></td>
                        <td><?= $p['nama_perempuan'] ?></td>
                        <td><?= $p['nomor'] ?></td>
                        <td><?= $p['baptis'] ?></td>
                        <td><?= $p['date'] ?></td>
                        <td><?= $p['keterangan'] ?></td>
                        <td>
                          <?php if ($p['status'] == "1") : ?>
                            <form method="POST" action="<?= base_url('admin/pendaftaran/edit_pernikahan/' . $p['pernikahan_id']) ?>">
                              <input type="hidden" value="2" name="status">
                              <button type="submit" class="btn btn-warning">Verifikasi</button>
                            </form>
                          <?php elseif ($p['keterangan'] == "Diterima" & $p['status'] == "2") : ?>
                            <a href="<?= base_url('admin/pendaftaran/print_pernikahan/' . $p['pernikahan_id']); ?>" target="_blank" class="btn btn-info btn-sm">
                              <i class="fas fa-upload"></i> Print
                            </a>
                            <?php if ($p['keterangan'] == "Diterima" & $p['status'] == "2" & $p['edit'] == "0") : ?>
                              <a href="<?= base_url('admin/pendaftaran/edit_pernikahankod/' . $p['pernikahan_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"> </i> Edit</a>
                            <?php else : ?>
                              <a href="<?= base_url('admin/pendaftaran/edit_pernikahan2/' . $p['pernikahan_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"> </i> Edit</a>
                            <?php endif; ?>
                            <a href="<?= base_url('admin/pendaftaran/delete_pernikahan/' . $p['pernikahan_id']); ?>" onclick="return confirm('Yakin ingin menghapus data??')" class="btn btn-danger btn-primary btn-sm">
                              <i class="fa fa-trash"></i> Hapus
                            </a>
                          <?php else : ?>
                            <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editStatusModal<?php echo $p['pernikahan_id']; ?>"><i class="fas fa-pencil-alt"></i> status</a>
                            <a href="<?= base_url('admin/pendaftaran/delete_pernikahan/' . $p['pernikahan_id']); ?>" onclick="return confirm('Yakin ingin menghapus data??')" class="btn btn-danger btn-primary btn-sm">
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
  <?php foreach ($pernikahan as $prn) : ?>
    <div class="modal fade" id="editStatusModal<?php echo $prn['pernikahan_id']; ?>" tabindex="-1" aria-labelledby="editStatusModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editStatusModalLabel">Edit Pendaftarn Pernikahan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url('admin/pendaftaran/edit_statusper/' . $prn['pernikahan_id']); ?>" method="post">
            <div class="modal-body">
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
              <button type="submit" class="btn btn-primary">edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <?php foreach ($pernikahan as $pr) : ?>
    <div class="modal fade" id="editPernikahanModal<?php echo $pr['pernikahan_id']; ?>" tabindex="-1" aria-labelledby="editPernikahanModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editPernikahanModalLabel">Edit Pendaftarn pernikahan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url('admin/pendaftaran/edit_pernikahan2/' . $pr['pernikahan_id']); ?>" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label for="">Nama Pria</label>
                <input type="text" class="form-control" id="nama_laki" name="nama_laki" placeholder="" value="<?php echo $pr['nama_laki'] ?>" disabled>
              </div>
              <div class="form-group">
                <label for="">Tempat, Tanggal Lahir Pria</label>
                <input type="text" class="form-control" id="lahir_laki" name="lahir_laki" placeholder="" value="<?php echo $pr['lahir_laki'] ?>" disabled>
              </div>
              <div class="form-group">
                <label for="">Nama Perempuan</label>
                <input type="text" class="form-control" id="nama_perempuan" name="nama_perempuan" placeholder="" value="<?php echo $pr['nama_perempuan'] ?>" disabled>
              </div>
              <div class="form-group">
                <label for="">Tempat, Tanggal Lahir Perempuan</label>
                <input type="text" class="form-control" id="lahir_perempuan" name="lahir_perempuan" placeholder="" value="<?php echo $pr['lahir_perempuan'] ?>" disabled>
              </div>
              <div class="form-group">
                <label for="">No Surat </label> <a> * No terakhir :<?php echo $kode['kode'] ?></a>
                <input type="text" class="form-control" id="kode" name="kode" placeholder="" value="<?php echo $pr['kode'] ?>">
              </div>
              <div class="form-group">
                <label for="">Hari dan Tanggal Pernikahan</label>
                <input type="text" class="form-control" id="tgl_pernikahan" name="tgl_pernikahan" placeholder="" value="<?php echo $pr['tgl_pernikahan'] ?>">
              </div>
              <div class="form-group">
                <label for="">Tempat</label>
                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="" value="<?php echo $pr['tempat'] ?>">
              </div>
              <div class="form-group">
                <label for="">Dilayani oleh</label>
                <input type="text" class="form-control" id="dilayani" name="dilayani" placeholder="" value="<?php echo $pr['dilayani'] ?>">
              </div>
              <div class="form-group">
                <label for="">Tempat& Tanggal TTD</label>
                <input type="text" class="form-control" id="tempattgl_ttd" name="tempattgl_ttd" placeholder="" value="<?php echo $pr['tempattgl_ttd'] ?>">
              </div>
              <div class="form-group">
                <label for="">Nama Gembala</label>
                <input type="text" class="form-control" id="nama_ttd" name="nama_ttd" placeholder="" value="<?php echo $pr['nama_ttd'] ?>">
              </div>
              <div class="form-group">
                <label for="">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" placeholder="" value="<?php echo $pr['nik'] ?>">
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>