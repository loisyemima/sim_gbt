<?php foreach ($warta as $w) { ?>
  <header>
    <img class="page-header min-vh-80" src="<?= base_url('assets/img/upload/' . $w['image']); ?>">
  </header>
  <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
    <!-- START Testimonials w/ user image & text & info -->
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-0">
      <div class="container">
        <div class="section text-center">
          <h2 class="title">- Jadwal Ibadah Gereja Bethel Tabernakel Siliragung -</h2>
        </div>
      </div>
    </div>
    <section class="py-sm-7 py-5 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 mx-auto">
            <div class="card box-shadow-xl overflow-hidden mb-5">
              <div class="row">
                <div class="col-lg-5 position-relative bg-cover px-0" style="background-image: url('../assets/img/examples/blog2.jpg')" loading="lazy">
                  <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                    <div class="mask bg-gradient-dark opacity-8"></div>
                    <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                      <h3 class="text-white">Informasi</h3>
                      <p class="text-white opacity-8 mb-4">Untuk Ibadah Raya Minggu Selain Offline Juga Terdapat Live diFacebook GBT Kristus Ajaib</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                  <div class="d-flex justify-content-center align-items-center mb-0">
                    <h3 class="mb-0"><?php echo $w['description']; ?></h3>
                  </div>
                </div>
              </div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Testimonials w/ user image & text & info -->
  </div>