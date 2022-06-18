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
                          <h5>Nama </h5>
                        </label>
                        <i> * Contoh : Abigail Yemima Sari </i>
                        <div class="input-group input-group-static mb-4">
                          <input type="text" id="nama" name="nama" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                        <label>
                          <h5>Tempat, Tanggal Lahir </h5>
                        </label><i> * Contoh : Banyuwangi</i>
                        <div class="input-group input-group-static mb-4">
                          <input type="text" id="tempat" name="tempat" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                        <label>
                          <h5>Tanggal Lahir</h5>
                        </label>
                        <div class="input-group input-group-static mb-4">
                          <input type="date" id="tgl" name="tgl" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                        <label>
                          <h5>Nama Ayah</h5>
                        </label><i> *Contoh : Hadi Subroto</i>
                        <div class="input-group input-group-static mb-4">
                          <input type="text" id="nama_ayah" name="nama_ayah" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                        <label>
                          <h5>Nama Ibu</h5>
                        </label><i> *contoh : Ruth Vilance</i>
                        <div class="input-group input-group-static mb-4">
                          <input type="text" id="nama_ibuk" name="nama_ibuk" class="form-control">
                        </div>
                      </div>
                      <div class="col-6">
                        <label>
                          <h5>Jenis Kelamin </h5>
                        </label>
                        <div class="row">
                          <div class="col-6 text-start">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="perempuan" checked>
                              <label class="form-check-label" for="flexRadioDefault1">
                                Perempuan
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" id="flexRadioDefault2">
                              <label class="form-check-label" for="flexRadioDefault2">
                                Laki-laki
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="input-group input-group-static mb-4">
                          <label>
                            <h5>No Telp</h5>
                          </label>
                          <input type="text" id="nomor" name="nomor" class="form-control">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12 text-center">
                          <button type="submit" class="btn bg-gradient-info mt-3 mb-4">Send</button>
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