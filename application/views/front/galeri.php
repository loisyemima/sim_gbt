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
      <section class="py-7">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#natal" role="tab" aria-controls="profile" aria-selected="true">
                      Natal
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#paskah" role="tab" aria-controls="dashboard" aria-selected="false">
                      Paskah
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#baksos" role="tab" aria-controls="dashboard" aria-selected="false">
                      Bakti Sosial
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="tab-content">

              <div id="natal" class="tab-pane active"><br>
                <?php
                $r = 1;
                foreach ($gallery as $g) { ?>
                  <?php
                  $key2 = $this->db->query("select * from gallery where judul='$g[judul]'");
                  $tot_key2 = $key2->num_rows();
                  $key3 = $key2->result_array();

                  ?>
                  <?php if ($r === 1 || $tot_key2 === 1) { ?>
                    <h6 class="text-lg mt-4" <?php echo $tot_key2; ?>><?php echo $g['judul']; ?></h6>
                    <?php foreach ($key3 as $key3) { ?>
                      <img src="<?php echo base_url('assets/img/gallery/' . $key3['gambar']); ?>" alt="abda" class=" rounded rekanan-pic" width="300px" height="200px">
                    <?php } ?>
                  <?php $r = $g['judul'];
                  } elseif ($r === $g['judul']) {
                    continue;
                  } else {
                    $r = 1;
                  } ?>
                <?php } ?>
              </div>


              <div id="paskah" class="tab-pane fade"><br>
                <?php
                $r2 = 1;
                foreach ($gallery2 as $x) { ?>
                  <?php
                  $ky2  = $this->db->query("select * from gallery where judul='$x[judul]'");
                  $tot_ky2 = $ky2->num_rows();
                  $ky3 = $ky2->result_array();

                  ?>
                  <?php if ($r2 === 1 || $tot_ky2 === 1) { ?>
                    <h6 class="text-lg mt-4" <?php echo $tot_key2; ?>><?php echo $x['judul']; ?></h6>
                    <?php foreach ($ky3 as $ky3) { ?>
                      <img src="<?php echo base_url('assets/img/gallery/' . $ky3['gambar']); ?>" alt="abda" class=" rounded rekanan-pic" width="300px" height="200px">
                    <?php } ?>
                  <?php $r2 = $x['judul'];
                  } elseif ($r2 === $x['judul']) {
                    continue;
                  } else {
                    $r2 = 1;
                  } ?>
                <?php } ?>
              </div>

              <div id="baksos" class="tab-pane fade"><br>
                <?php
                $r3 = 1;
                foreach ($gallery3 as $y) { ?>
                  <?php
                  $k2  = $this->db->query("select * from gallery where judul='$y[judul]'");
                  $tot_k2 = $k2->num_rows();
                  $k3 = $k2->result_array();

                  ?>
                  <?php if ($r3 === 1 || $tot_k2 === 1) { ?>
                    <h6 class="text-lg mt-4" <?php echo $tot_key2; ?>><?php echo $y['judul']; ?></h6>
                    <?php foreach ($k3 as $k3) { ?>
                      <img src="<?php echo base_url('assets/img/gallery/' . $k3['gambar']); ?>" alt="abda" class=" rounded rekanan-pic" width="300px" height="200px">
                    <?php } ?>
                  <?php $r3 = $y['judul'];
                  } elseif ($r3 === $y['judul']) {
                    continue;
                  } else {
                    $r3 = 1;
                  } ?>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
  </section>
</div>