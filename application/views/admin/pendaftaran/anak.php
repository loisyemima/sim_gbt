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
                            <?php if ($a['keterangan'] == "Diterima" & $a['status'] == "2" & $a['edit'] == "0") : ?>
                              <a href="<?= base_url('admin/pendaftaran/edit_anakkod/' . $a['anak_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"> </i> Edit</a>
                            <?php else : ?>
                              <a href="<?= base_url('admin/pendaftaran/edit_anak2/' . $a['anak_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"> </i> Edit</a>
                            <?php endif; ?>
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

  <?php foreach ($anak as $ank) : ?>
    <div class="modal fade" id="editStatusModal<?php echo $ank['anak_id']; ?>" tabindex="-1" aria-labelledby="editStatusModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editStatusModalLabel">Edit Pendaftaran Anak</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url('admin/pendaftaran/edit_statusank/' . $ank['anak_id']); ?>" method="post">
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

  <!-- Modal Edit-->
  <?php foreach ($anak as $ak) : ?>
    <div class="modal fade" id="editanakModal<?php echo $ak['anak_id']; ?>" tabindex="-1" aria-labelledby="editAnakModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editanakModalLabel">Edit Pendaftaran Anak</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url('admin/pendaftaran/edit_anak2/' . $ak['anak_id']); ?>" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label for=""> Nama Anak</label>
                <input type="text" class="form-control" id="nama_anak" name="nama_anak" placeholder="" value="<?php echo $ak['nama_anak'] ?>" disabled>
              </div>
              <div class="form-group">
                <label for="">Jenis jenis_kelamin</label>
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="" value="<?php echo $ak['jenis_kelamin'] ?>" disabled>
              </div>
              <div class="form-group">
                <label for="">Tempat, Tanggal Lahir</label>
                <input type="text" class="form-control" id="tempattgl_lahir" name="tempattgl_lahir" placeholder="" value="<?php echo $ak['tempattgl_lahir'] ?>" disabled>
              </div>
              <div class="form-group">
                <label for="">Nama Ayah</label>
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="" value="<?php echo $ak['nama_ayah'] ?>" disabled>
              </div>
              <div class="form-group">
                <label for="">Nama Ibu</label>
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="" value="<?php echo $ak['nama_ibu'] ?>" disabled>
              </div>
              <div class="form-group">
                <label for="">No Surat </label> <a> * No terakhir :<?php echo $kode['kode'] ?></a>
                <input type="text" class="form-control" id="kode" name="kode" placeholder="" value="<?php echo $ak['kode'] ?>">
              </div>
              <div class="form-group">
                <label for="">Hari dan Tanggal Penyerahan Anak</label>
                <input type="text" class="form-control" id="tgl_penyerahan" name="tgl_penyerahan" placeholder="" value="<?php echo $ak['tgl_penyerahan'] ?>">
              </div>
              <div class="form-group">
                <label for="">Tempat</label>
                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="" value="<?php echo $ak['tempat'] ?>">
              </div>
              <div class="form-group">
                <label for="">Dilayani oleh</label>
                <input type="text" class="form-control" id="dilayani" name="dilayani" placeholder="" value="<?php echo $ak['dilayani'] ?>">
              </div>
              <div class="form-group">
                <label for="">Tempat& Tanggal TTD</label>
                <input type="text" class="form-control" id="tempattgl_ttd" name="tempattgl_ttd" placeholder="" value="<?php echo $ak['tempattgl_ttd'] ?>">
              </div>
              <div class="form-group">
                <label for="">Nama Gembala</label>
                <input type="text" class="form-control" id="nama_ttd" name="nama_ttd" placeholder="" value="<?php echo $ak['nama_ttd'] ?>">
              </div>
              <div class="form-group">
                <label for="">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" placeholder="" value="<?php echo $ak['nik'] ?>">
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