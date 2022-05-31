  <!-- Content Wrapper. Contains pevent content -->
  <div class="content-wrapper">
    <!-- Content Header (Pevent header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- Pevent Heading -->
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
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <?= form_error('event', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                <?= $this->session->flashdata('messevent'); ?>

                <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#neweventModal">Add New event</a>

                <table class="table table-bordered table-hover" id="example2">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">nama</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($event as $e) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $e['name'] ?></td>
                        <td>
                          <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editeventModal<?php echo $e['event_id']; ?>"><i class="fas fa-pencil-alt"></i></a>
                          <a href="" class="btn btn-danger btn-primary btn-sm" data-toggle="modal" data-target="#deleteeventModal<?php echo $e['event_id']; ?>"><i class="fa fa-trash"></i></a>
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


  <!-- Modal Add-->
  <div class="modal fade" id="neweventModal" tabindex="-1" aria-labelledby="neweventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="neweventModalLabel">Add New event</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('admin/gallery/event'); ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="name">
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

  <!-- Modal Edit-->
  <?php foreach ($event as $ev) : ?>
    <div class="modal fade" id="editeventModal<?php echo $ev['event_id']; ?>" tabindex="-1" aria-labelledby="editeventModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editeventModalLabel">Edit Event</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url('admin/gallery/edit_event/' . $ev['event_id']); ?>" method="post">
            <div class="modal-body">
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $ev['name'] ?> " placeholder="event Name">
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

  <!-- Modal Delete-->
  <?php foreach ($event as $event) : ?>
    <div class="modal fade" id="deleteeventModal<?php echo $event['event_id']; ?>" tabindex="-1" aria-labelledby="deleteeventModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteeventModalLabel">Anda Yakin Menghapus Data?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url('admin/gallery/delete_event/' . $event['event_id']); ?>" method="post">
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Delete</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>