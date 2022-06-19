<header class="header-2">
  <div class="page-header min-vh-75" style="background-image: url('<?= base_url('assets/img/logo/' . $config['image']) ?>')">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center mx-auto">
          <h2 class="text-white pt-3 mt-n5"><?php echo $config['ket'] ?></h2>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

  <section class="pt-3 pb-4" id="count-stats">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto py-3">
          <div class="row">
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <i class="material-icons text-info" style="font-size:100px;">campaign</i>
                <h6 class="text-lg"><a class="" href="<?= base_url('warta') ?>">Jadwal Ibadah</a></h6>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <i class="material-icons text-info" style="font-size:100px;">photo_library</i>
                <h6 class="text-lg"><a href="<?= base_url('Galeri') ?>">Gallery</a></h6>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <i class="material-icons text-info" style="font-size:100px;">app_registration</i>
                <h6 class="text-lg"><a href="<?= base_url('pendaftaran') ?>">Pendaftaran</a></h6>
              </div>
              <hr class="vertical dark">
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-5 position-relative bg-gradient-dark mx-n3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-start mb-5 mt-5">
          <h3 class="text-white z-index-1 position-relative">Pengurus</h3>
          <p class="text-white opacity-8 mb-0">Gereja Bethel Tabernakel Siliragung</p>
        </div>
      </div>
      <div class="row">
        <?php foreach ($pengurus as $p) { ?>
          <div class="col-lg-6 col-12 mt-4">
            <div class="card card-profile mt-4 z-index-2">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100 border-radius-md shadow-lg" src="<?php echo base_url('assets/img/profile/member/' . $p['images']); ?>" alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0"><?php echo $p['nama']; ?></h5>
                    <h6 class="text-info"><?php echo $p['description']; ?></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>

    </div>
  </section>




</div>