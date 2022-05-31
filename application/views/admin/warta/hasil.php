<style>
  #imagePreview {
    width: 150px;
    height: 150px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
  }
</style>

<script type="text/javascript">
  $(function() {
    $("#file").on("change", function() {
      var files = !!this.files ? this.files : [];
      if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

      if (/^image/.test(files[0].type)) { // only image file
        var reader = new FileReader(); // instance of the FileReader
        reader.readAsDataURL(files[0]); // read the local file

        reader.onloadend = function() { // set image data as background of div
          $("#imagePreview").css("background-image", "url(" + this.result + ")");
        }
      }
    });
  });
</script>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="col-6">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
      </div><!-- /.col -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <?php
            // Session 
            if ($this->session->flashdata('sukses')) {
              echo '<div class="alert alert-success">';
              echo $this->session->flashdata('sukses');
              echo '</div>';
            }

            // File upload error
            if (isset($error)) {
              echo '<div class="alert alert-success">';
              echo $error;
              echo '</div>';
            }

            // Error
            echo validation_errors('<div class="alert alert-success">', '</div>');
            ?>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="<?= base_url('admin/warta/surat/' . $site['config_id']) ?>" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <input type="hidden" name="config_id" value="<?php echo $site['config_id'] ?>">
                <div class="form-group">
                  <label>Hasil Penanganan Pengaduan</label>
                  <textarea name="penanganan" placeholder="Google Maps Frame" class="form-control" value="about" id="about"><?php echo $site['penanganan']; ?></textarea>
                </div>
                <div class="col-md-12">
                  <iframe type="application/pdf" src="<?php echo $site['penanganan']; ?>" width="600" height="450"></iframe>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->