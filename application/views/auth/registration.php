<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a class="h1"><b>SIM </b>GBT</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="<?= base_url('auth/registration'); ?> " method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <a href="<?= base_url('auth'); ?>" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->