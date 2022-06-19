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
                        <label for="" class="">
                          <h5>Nama Pria</h5>
                        </label>
                        <i> *Contoh : Hadi Subroto </i>
                        <div class="input-group input-group-static mb-4">
                          <input type="text" id="nama_laki" name="nama_laki" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                        <label>
                          <h5>Nama Wanita</h5>
                        </label>
                        <i> *Contoh : Ruth Vilance </i>
                        <div class="input-group input-group-static mb-4">
                          <input type="text" id="nama_perempuan" name="nama_perempuan" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                        <label>
                          <h5>Tempat Lahir Pria</h5>
                        </label><br><i> * Contoh : Banyuwangi</i>
                        <div class="input-group input-group-static mb-4">
                          <input type="text" id="tempat_laki" name="tempat_laki" class="form-control">
                        </div>
                      </div>

                      <div class="col-6">
                        <label>
                          <h5>Tempat Lahir wanita</h5>
                        </label><br><i> * Contoh : Banyuwangi</i>
                        <div class="input-group input-group-static mb-4">
                          <input type="text" id="tempat_perempuan" name="tempat_perempuan" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                        <label>
                          <h5>Tanggal Lahir Laki</h5>
                        </label>
                        <div class="input-group input-group-static mb-4">
                          <input type="date" id="lahir_laki" name="lahir_laki" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                        <label>
                          <h5>Tanggal Lahir Wanita</h5>
                        </label>
                        <div class="input-group input-group-static mb-4">
                          <input type="date" id="lahir_perempuan" name="lahir_perempuan" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                        <label>
                          <h5>No Telp</h5>
                        </label>
                        <div class="input-group input-group-static mb-4">
                          <input type="text" id="nomor" name="nomor" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                        <label>
                          <h5>Apakah Sudah Melakukan Baptis ?</h5>
                        </label>
                        <div class="row">
                          <div class="col-6 text-start">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="baptis" id="flexRadioDefault1" value="Sudah Baptis" checked>
                              <label class="form-check-label" for="flexRadioDefault1">
                                Sudah Baptis
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="baptis" value="Belum Baptis" id="flexRadioDefault2">
                              <label class="form-check-label" for="flexRadioDefault2">
                                Belum Baptis
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-center">
                          <button type="submit" class="btn bg-gradient-info mt-3 mb-0">Send</button>
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