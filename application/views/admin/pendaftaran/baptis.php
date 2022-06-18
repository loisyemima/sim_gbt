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
                      <th>Nama</th>
                      <th>Tanggal Lahir</th>
                      <th>No. Telp</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($baptis as $b) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $b['nama'] ?></td>
                        <td><?= $b['tgl_lahir'] ?></td>
                        <td><?= $b['nomor'] ?></td>
                        <td><?= $b['keterangan'] ?></td>
                        <?php $i++; ?>
                        <td>
                          <?php if ($b['status'] == "1") : ?>
                            <form method="POST" action="<?= base_url('admin/pendaftaran/edit_baptis/' . $b['baptis_id']) ?>">
                              <input type="hidden" value="2" name="status">
                              <button type="submit" class="btn btn-warning">Verifikasi</button>
                            </form>
                          <?php elseif ($b['keterangan'] == "Diterima" & $b['status'] == "2") : ?>
                            <a href="<?= base_url('admin/pendaftaran/print_baptis/' . $b['baptis_id']); ?>" target="_blank" class="btn btn-info btn-sm">
                              <i class="fas fa-upload"> </i> Print
                            </a>
                            <?php if ($b['keterangan'] == "Diterima" & $b['status'] == "2" & $b['edit'] == "0") : ?>
                              <a href="<?= base_url('admin/pendaftaran/edit_baptiskod/' . $b['baptis_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"> </i> Edit</a>
                            <?php else : ?>
                              <a href="<?= base_url('admin/pendaftaran/edit_baptis2/' . $b['baptis_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"> </i> Edit</a>
                            <?php endif; ?>
                            <a href="<?= base_url('admin/pendaftaran/delete_baptis/' . $b['baptis_id']); ?>" onclick="return confirm('Yakin ingin menghapus data??')" class="btn btn-danger btn-primary btn-sm">
                              <i class="fa fa-trash"></i> Hapus
                            </a>
                          <?php else : ?>
                            <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editStatusModal<?php echo $b['baptis_id']; ?>"><i class="fas fa-pencil-alt"></i> status</a>
                            <a href="<?= base_url('admin/pendaftaran/delete_baptis/' . $b['baptis_id']); ?>" onclick="return confirm('Yakin ingin menghapus data??')" class="btn btn-danger btn-primary btn-sm">
                              <i class="fa fa-trash"></i> Hapus
                            </a>
                          <?php endif; ?>
                        </td>
                      </tr>
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

  <!-- Modal Status-->
  <?php foreach ($baptis as $bps) : ?>
    <div class="modal fade" id="editStatusModal<?php echo $bps['baptis_id']; ?>" tabindex="-1" aria-labelledby="editStatusModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editStatusModalLabel">Edit Pendaftarn Baptis</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url('admin/pendaftaran/edit_status/' . $bps['baptis_id']); ?>" method="post">
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

  <!-- Modal Edit
  <?php foreach ($baptis as $bs) : ?>
    <div class="modal fade" id="editBaptisModal<?php echo $bs['baptis_id']; ?>" tabindex="-1" aria-labelledby="editBaptisModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editBaptisModalLabel">Edit Pendaftarn Baptis</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url('admin/pendaftaran/edit_baptis2/' . $bs['baptis_id']); ?>" method="post" id="newModalForm">
            <div class="modal-body">
              <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="" value="<?php echo $bs['nama'] ?>">
              </div>
              <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="" value="<?php echo $bs['jenis_kelamin'] ?>">
              </div>
              <div class="form-group">
                <label for="">Tempat & Tanggal Lahir</label>
                <input type="text" class="form-control" id="tempattgl_lahir" name="tempattgl_lahir" placeholder="" value="<?php echo $bs['tempattgl_lahir'] ?>">
              </div>
              <div class="form-group">
                <label for="">Nama Ayah</label>
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="" value="<?php echo $bs['nama_ayah'] ?>">
              </div>
              <div class="form-group">
                <label for="">Nama Ibuk</label>
                <input type="text" class="form-control" id="nama_ibuk" name="nama_ibuk" placeholder="" value="<?php echo $bs['nama_ibuk'] ?>">
              </div>
              <div class="form-group">
                <label for="">No Surat </label><a>*No terakhir :<?php echo $kode['kode'] ?></a>
                <input type="text" class="form-control" id="kode" name="kode" placeholder="" value="<?php echo $bs['kode'] ?>">

              </div>
              <div class="form-group">
                <label for="">Hari dan Tanggal Baptis</label>
                <input type="text" class="form-control" id="hari_tanggal" name="hari_tanggal" placeholder="" value="<?php echo $bs['hari_tanggal'] ?>">
              </div>
              <div class="form-group">
                <label for="">Tempat</label>
                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="" value="<?php echo $bs['tempat'] ?>">
              </div>
              <div class="form-group">
                <label for="">Dilayani oleh</label>
                <input type="text" class="form-control" id="dilayani" name="dilayani" placeholder="" value="<?php echo $bs['dilayani'] ?>">
              </div>
              <div class="form-group">
                <label for="">Tempat& Tanggal TTD</label>
                <input type="text" class="form-control" id="tgl_ttd" name="tgl_ttd" placeholder="" value="<?php echo $bs['tgl_ttd'] ?>">
              </div>
              <div class="form-group">
                <label for="">Nama Gembala</label>
                <input type="text" class="form-control" id="nama_gembala" name="nama_gembala" placeholder="" value="<?php echo $bs['nama_gembala'] ?>">
              </div>
              <div class="form-group">
                <label for="">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" placeholder="" value="<?php echo $bs['nik'] ?>">
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
  <?php endforeach; ?> -->