<header class="header-2">
  <div class="page-header min-vh-75" style="background-image: url('<?= base_url('assets/img/') ?>logo/gbt.jpg')">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">GBT KRISTUS AJAIB SILIRAGUNG</h1>
          <p class="lead text-white mt-3">"Menjadi Garam Dan Terang Dunia"</p>
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
                <h6 class="text-lg"><a href="">Jadwal Ibadah</a></h6>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <i class="material-icons text-info" style="font-size:100px;">photo_library</i>
                <h6 class="text-lg"><a href="">Gallery</a></h6>
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
          <h3 class="text-white z-index-1 position-relative">The Executive Team</h3>
          <p class="text-white opacity-8 mb-0">There’s nothing I really wanted to do in life that I wasn’t able to get good at. That’s my skill.</p>
        </div>
      </div>
      <div class="row mt-4">
        <?php foreach ($pengurus as $p) { ?>
          <div class="card card-profile  mx-auto mt-4" style="width: 20rem;">
            <img src="<?php echo base_url('assets/img/profile/member/' . $p['images']); ?>" class="card-img-top p-3 pe-md-3" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $p['fullname']; ?></h5>
              <p class="card-text"><?php echo $p['description']; ?></p>
            </div>
          </div>
        <?php } ?>
      </div>

    </div>
  </section>




</div>