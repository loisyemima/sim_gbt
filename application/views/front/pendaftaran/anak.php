<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-4">
  <!-- -------- START HEADER 8 w/ card over right bg image ------- -->
  <section>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-xl col-lg-12 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
            <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-info shadow-info border-radius-lg p-3">
                  <h3 class="text-white text-primary mb-0 text-center "><?= $title ?></h3>
                </div>
              </div>
              <div class="card-body">
                <?php if (validation_errors()) : ?>
                  <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                  </div>
                <?php endif; ?>

                <?= $this->session->flashdata('message'); ?>
                <form id="contact-form" method="post" autocomplete="off">
                  <div class="card-body p-0 my-3">
                    <div class="row">
                      <div class="col-6">
                        <div class="input-group input-group-static mb-4">
                          <label>Nama Wali</label>
                          <input type="text" id="nama_wali" name="nama_wali" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="input-group input-group-static mb-4">
                          <label>Nama Anak</label>
                          <input type="text" id="nama_anak" name="nama_anak" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="input-group input-group-static mb-4">
                          <label>Tempat Lahir</label>
                          <input type="text" id="place" name="place" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="input-group input-group-static mb-4">
                          <label>Tanggal Lahir</label>
                          <input type="date" id="birth" name="birth" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="input-group input-group-static mb-4">
                          <label>No Telp</label>
                          <input type="text" id="number" name="number" class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-center">
                          <button type="submit" class="btn bg-gradient-info mt-3 mb-0">Send Message</button>
                        </div>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -------- END HEADER 8 w/ card over right bg image ------- -->
</div>