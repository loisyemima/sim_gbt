<footer class="footer pt-5 mt-5">
  <div class="container">
    <div class=" row">
      <div class="col-md-3 mb-4 ms-auto">
        <div>
          <a href="https://www.creative-tim.com/product/material-kit">
            <img src="<?= base_url('assets/img/') ?>logo/Logogbt.png" class="mb-3 footer-logo" alt="main_logo">
          </a>
          <h6 class="font-weight-bolder mb-4">GEREJA BETHEL TABERNAKEL SILIRAGUNG</h6>
        </div>
        <div>
          <a class="nav-item" href="">
            <i class="fas fa-phone text-lg"> 085172063237</i>
          </a>
        </div>
        <br>
        <div>
          <ul class="d-flex flex-row ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link pe-1" href="<?php echo $config['facebook']; ?>" target="_blank">
                <i class="fab fa-facebook text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="<?php echo $config['whatsapp']; ?>" target="_blank">
                <i class="fab fa-whatsapp text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="<?php echo $config['instagram']; ?>" target="_blank">
                <i class="fab fa-instagram text-lg opacity-8"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-2 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">Pengumuman</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                Warta
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                Surat Edaran
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-6 mb-4">
        <div>
          <h6 class="text-sm">Pendaftaran</h6>
          <ul class="flex-column ms-n3 nav">
            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                Pendaftaran Baptis
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                Pendaftaran Penyerahan Anak
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                Pendaftaran Pernikahan
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-6 footer-links">

        <h5>Lokasi Kami</h5>

        <iframe width="250" height="150" frameborder="0" style="border:0" src="<?php echo $config['lokasi']; ?>" allowfullscreen></iframe>

      </div>

      <div class="col-12">
        <div class="text-center">
          <strong>Copyright &copy; SIM GBT KRISTUS AJAIB SILIRAGUNG <?= date('Y') ?></strong>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--   Core JS Files   -->
<script src="<?= base_url('assets/front/') ?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/front/') ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/front/') ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="<?= base_url('assets/front/') ?>assets/js/plugins/countup.min.js"></script>
<script src="<?= base_url('assets/front/') ?>assets/js/plugins/choices.min.js"></script>
<script src="<?= base_url('assets/front/') ?>assets/js/plugins/prism.min.js"></script>
<script src="<?= base_url('assets/front/') ?>assets/js/plugins/highlight.min.js"></script>
<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="<?= base_url('assets/front/') ?>assets/js/plugins/rellax.min.js"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="<?= base_url('assets/front/') ?>assets/js/plugins/tilt.min.js"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="<?= base_url('assets/front/') ?>assets/js/plugins/choices.min.js"></script>
<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="<?= base_url('assets/front/') ?>assets/js/plugins/parallax.min.js"></script>
<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="<?= base_url('assets/front/') ?>assets/js/material-kit.min.js?v=3.0.2" type="text/javascript"></script> -->
<!-- Vendor JS Files -->

<script src="<?php echo base_url('assets/vendor/purecounter/purecounter.js') ?>"></script>

<script src="<?php echo base_url('assets/vendor/aos/aos.js') ?>"></script>

<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>

<script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>

<script src="<?php echo base_url('assets/vendor/php-email-form/validate.js') ?>"></script>







<!-- Template Main JS File -->

<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

<!-- <script type="text/javascript">
  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script> -->

</body>

</html>