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
                <a href="<?= base_url('admin/pelayan/create_pelayan'); ?>" class="btn btn-primary mb-3">Add New Pelayan</a>
                <table class="table table-bordered table-hover" id="example2">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pelayan as $p) : ?>
                      <tr>
                        <th scope="row" width="25px"><?= $i; ?></th>
                        <td><?= $p['fullname'] ?></td>
                        <td><?= $p['level'] ?></td>
                        <td><?= $p['description'] ?></td>
                        <td>
                          <a href="<?= base_url('admin/pelayan/edit_pelayan/' . $p['pelayan_id']); ?>" class="badge badge-pill badge-success">edit</a>
                          <a href="<?= base_url('admin/pelayan/delete_pelayan/' . $p['pelayan_id']); ?>" class="badge badge-pill badge-danger">delete</a>
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