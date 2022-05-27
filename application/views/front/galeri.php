<div class="page-header min-vh-45" style="background-image: url('<?= base_url('assets/img/') ?>logo/images.jpg')">
  <span class="mask bg-gradient-dark opacity-8"></span>
</div>

<!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
  <!-- START Testimonials w/ user image & text & info -->
  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Galeri</h2>
      </div>
    </div>
  </div>

  <section class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">Check my latest blogposts</h3>
        </div>
      </div>
      <div class="row">
        <?php foreach ($gallery as $g) { ?>
          <div class="col-md-3">
            <div class="card card-plain">
              <div class="card-header p-0 position-relative">
                <a class="d-block blur-shadow-image">
                  <img src="<?= base_url('assets/img/gallery/' . $g['image']); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>

    </div>
  </section>
</div>