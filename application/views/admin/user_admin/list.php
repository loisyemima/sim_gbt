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
                <a href="<?= base_url('admin/user/create_user'); ?>" class="btn btn-primary mb-3">Add New user</a>
                <table class="table table-bordered table-hover" id="example1">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Full Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($user2 as $u) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $u['name'] ?></td>
                        <td><?= $u['username'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td>
                          <img src="<?php echo base_url('assets/img/profile/' . $u['image']); ?>" width="150px" height="150px">
                        </td>
                        <td>
                          <a href="<?= base_url('admin/user/edit_user/' . $u['id']); ?>" class="badge badge-pill badge-success">edit</a>
                          <a href="<?= base_url('admin/user/delete_user/' . $u['id']); ?>" class="badge badge-pill badge-danger">delete</a>
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