  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="<?= base_url('dashboard') ?>" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
              GBT KRISTUS AJAIB
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                    Profile
                    <img src="<?= base_url('assets/front/') ?>assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                  </a>
                  <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                    <div class="d-none d-lg-block">
                      <a href="<?= base_url('assets/front/') ?>pages/about-us.html" class="dropdown-item border-radius-md">
                        <span>Sejarah</span>
                      </a>
                      <a href="<?= base_url('assets/front/') ?>pages/contact-us.html" class="dropdown-item border-radius-md">
                        <span>Visi-Misi</span>
                      </a>
                      <a href="<?= base_url('profile') ?>" class="dropdown-item border-radius-md">
                        <span>Profile Gereja</span>
                      </a>
                    </div>

                  </div>
                </li>

                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                    Pengumuman
                    <img src="<?= base_url('assets/front/') ?>assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                  </a>
                  <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                    <div class="d-none d-lg-block">
                      <a href="<?= base_url('warta') ?>" class="dropdown-item border-radius-md">
                        <span>Warta</span>
                      </a>
                    </div>

                  </div>
                </li>
                <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                  <ul class="navbar-nav navbar-nav-hover ms-auto">
                    <li class="nav-item dropdown dropdown-hover mx-2">
                      <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                        Pendaftaran
                        <img src="<?= base_url('assets/front/') ?>assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                      </a>
                      <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                        <div class="d-none d-lg-block">
                          <a href="<?= base_url('pendaftaran/baptis') ?>" class="dropdown-item border-radius-md">
                            <span>Pendaftaran Babtis</span>
                          </a>
                          <a href="<?= base_url('pendaftaran/anak') ?>" class="dropdown-item border-radius-md">
                            <span>Pendaftaran Penyerahan Anak</span>
                          </a>
                          <a href="<?= base_url('pendaftaran/pernikahan') ?>" class="dropdown-item border-radius-md">
                            <span>Pendaftaran pernikahan</span>
                          </a>
                        </div>

                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="<?= base_url('galeri') ?>" class="nav-link ps-2 d-flex cursor-pointer align-items-center" aria-expanded="false">
                        <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                        Galeri
                      </a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover mx-2">
                      <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                        Pages
                        <img src="<?= base_url('assets/front/') ?>assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                      </a>
                      <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                        <div class="d-none d-lg-block">
                          <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                            Landing Pages
                          </h6>
                          <a href="<?= base_url('assets/front/') ?>pages/about-us.html" class="dropdown-item border-radius-md">
                            <span>About Us</span>
                          </a>
                          <a href="<?= base_url('assets/front/') ?>pages/contact-us.html" class="dropdown-item border-radius-md">
                            <span>Contact Us</span>
                          </a>
                          <a href="<?= base_url('assets/front/') ?>pages/author.html" class="dropdown-item border-radius-md">
                            <span>Author</span>
                          </a>
                          <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                            Account
                          </h6>
                          <a href="<?= base_url('assets/front/') ?>pages/sign-in.html" class="dropdown-item border-radius-md">
                            <span>Sign In</span>
                          </a>
                        </div>

                      </div>
                    </li>
                  </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>