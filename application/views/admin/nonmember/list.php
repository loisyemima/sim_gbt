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
                <table class="table table-bordered table-hover" id="example1">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Place Of Birth</th>
                      <th>Date Of Birth</th>
                      <th>Age</th>
                      <th>Status</th>
                      <th>username</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($member as $m) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $m['fullname'] ?></td>
                        <td>
                          <img src="<?php echo base_url('assets/img/profile/member/' . $m['images']); ?>" width="200px">
                        </td>
                        <td><?= $m['place'] ?></td>
                        <td><?= $m['birth'] ?></td>
                        <td><?= $m['name'] ?></td>
                        <td><?= $m['status'] ?></td>
                        <td><?= $m['username'] ?></td>
                        <td>
                          <a href="<?= base_url('admin/member/edit_nonmember/' . $m['member_id']); ?>" class="badge badge-pill badge-success">edit</a>
                          <a href="<?= base_url('admin/member/delete_nonmember/' . $m['member_id']); ?>" class="badge badge-pill badge-danger">delete</a>
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