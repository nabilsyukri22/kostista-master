<!--================ Start Header Menu Area =================-->
<header class="header_area white-header">
  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand row h-100 ml-1" href="<?= base_url() ?>">
          <img class="logo-nav" src="<?= base_url() ?>assets/img/logo.png" alt="" />
          <span class="my-auto ml-2">KOSTISTA</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span> <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
          <ul class="nav navbar-nav menu_nav ml-auto">
            <?php if (!$this->session->userdata('sudah_login')) { ?> <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>login/">Masuk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>user/registrasi/">Daftar</a>
              </li>
            <?php } else { ?>
              <div class="dropdown">
                <button class="btn btn-secondary bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?= $this->session->userdata('fullname') ?>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="<?= base_url() ?><?= $this->session->userdata('id_role') == 1 ? "admin" : "user" ?>"><i class="fa fa-dashboard mr-2"></i>Dashboard</a>
                  <a class="dropdown-item" href="<?= base_url() ?>pencarian"><i class="fa fa-search mr-2"></i>Cari Kos</a>
                  <a class="dropdown-item" href="<?= base_url() ?>Login/logout1"><i class="fa fa-sign-out mr-2"></i>Keluar</a>
                </div>
              </div>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
<!--================ End Header Menu Area =================-->