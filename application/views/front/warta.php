<?php foreach ($warta as $w) { ?>
  <header>
    <img class="page-header min-vh-80" src="<?= base_url('assets/img/upload/' . $w['image']); ?>">
  </header>
  <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
    <!-- START Testimonials w/ user image & text & info -->
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
      <div class="container">
        <div class="section text-center">
          <h2 class="title">- Jadwal Ibadah GBT Kristus Ajaib Siliragung -</h2>
        </div>
      </div>
    </div>
    <section class="py-sm-7 py-5 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 mx-auto">
            <div class="row py-5">
              <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h3 class="mb-0"><?php echo $w['description']; ?></h3>

                </div>

              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <!-- END Testimonials w/ user image & text & info -->
  </div>