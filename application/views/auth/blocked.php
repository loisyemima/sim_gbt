<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> 404 Page not found</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">



  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1>404 Error Page</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->

  <!-- Main content -->
  <section class="content">
    <div class="error-page">
      <h2 class="headline text-warning"> 404</h2>

      <div class="error-content">
        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>

        <p>
          We could not find the page you were looking for.
          Meanwhile, you may <a href="<?= base_url('user/profile') ?>">return to dashboard</a> or try using the search form.
        </p>
      </div>
      <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
  </section>



  <!-- jQuery -->
  <script src="<?= base_url('assets/admin/') ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/admin/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/admin/') ?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets/admin/') ?>dist/js/demo.js"></script>
</body>

</html>