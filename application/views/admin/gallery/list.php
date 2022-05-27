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
                <a href="<?= base_url('admin/gallery/create_gallery'); ?>" class="btn btn-primary mb-3">Add New gallery</a>
                <table class="table table-bordered table-hover" id="example2">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Image</th>
                      <th>Image Name</th>
                      <th>Title</th>
                      <th>event</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($gallery as $g) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td>
                          <img src="<?php echo base_url('assets/img/gallery/' . $g['image']); ?>" width="200px">
                        </td>
                        <td><?= $g['image_name'] ?></td>
                        <td><?= $g['title'] ?></td>
                        <td><?= $g['name'] ?></td>
                        <td>
                          <a href="<?= base_url('admin/gallery/edit_gallery/' . $g['gallery_id']); ?>" class="badge badge-pill badge-success">edit</a>
                          <a href="<?= base_url('admin/gallery/delete_gallery/' . $g['gallery_id']); ?>" class="badge badge-pill badge-danger">delete</a>
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