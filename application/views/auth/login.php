<div class="page-header align-items-start min-vh-100" style="background-image: url('<?= base_url('assets/img/') ?>logo/login.jpg');" loading="lazy">
  <span class="mask bg-gradient-dark opacity-6"></span>
  <div class="container my-auto">
    <div class="row">
      <div class="col-lg-4 col-md-8 col-12 mx-auto">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-secondary shadow-secondary border-radius-lg py-3 pe-1">
              <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">SIM GBT</h4>
              <center>
                <img src="<?= base_url('assets/img/') ?>logo/logo-kuning.png" style="width: 80px ;" alt="">
              </center>
            </div>
          </div>
          <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <form role="form" action="<?= base_url('auth'); ?>" method="POST" class="text-start">
              <div class="input-group input-group-outline my-3">
                <label class="form-label">username</label>
                <input type="text" id="username" name="username" value="<?= set_value('username'); ?>" class="form-control">
              </div>
              <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control">
              </div>
              <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-secondary shadow-secondary w-100 my-4 mb-2">Sign in</button>
              </div>
              <p class="mt-4 text-sm text-center">
                <a href="<?= base_url('auth/lupaPassword') ?>">Lupa Password?</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>