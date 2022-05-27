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
                      <th>Name</th>
                      <th>Place of Birth</th>
                      <th>Date of Birth</th>
                      <th>Phone Number</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($baptis as $b) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $b['name'] ?></td>
                        <td><?= $b['place'] ?></td>
                        <td><?= $b['birth'] ?></td>
                        <td><?= $b['number'] ?></td>
                        <td><?= $b['date'] ?></td>
                        <?php $i++; ?>
                        <td>
                          <?php if ($b['status'] == "1") : ?>
                            <form method="POST" action="<?= base_url('admin/pendaftaran/edit_baptis/' . $b['baptis_id']) ?>">
                              <input type="hidden" value="2" name="status">
                              <button type="submit" class="btn btn-warning">Verifikasi</button>
                            </form>
                          <?php else : ?>
                            <a href="" class="badge badge-pill badge-info">diterima</a>
                            <a href="" class="badge badge-pill badge-danger">delete</a>
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