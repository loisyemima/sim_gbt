<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a class="h1"><b>SIM </b>GBT</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <?= $this->session->flashdata('message'); ?>
      <form action="<?= base_url('auth'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="username" id="username" name="username" value="<?= set_value('username'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="<?= base_url('auth/registration'); ?>" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->