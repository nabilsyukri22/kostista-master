<!-- sidebar start -->
<div id="myFilternav" class="filternav bg-primary">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

  <form id="form_pencarian" action="pencarian" method="get">
    
      <div class="border-grey"></div>
     
      <div class="h6">Kost Untuk:</div>
      <?php $type = $this->input->get('kos'); ?>
   
      <div class="col-12 btn-group btn-group-toggle" data-toggle="buttons">
        <label class="col-3 btn btn-primary">
          <input type="radio" name="kos" id="option1" value="1" <?= $type == "1" ? "checked" : "" ?>>
          <span style="font-size: 30px" class="fa fa-male mr-2" ></span><br>Putra
        </label>
        
        <label class="col-3 btn btn-primary <?= $type == "2" ? "active" : "" ?>">
          <input type="radio" name="kos" id="option2" value="2" <?= $type == "2" ? "checked" : "" ?>>
          <span style="font-size: 30px" class="fa fa-female mr-2"></span><br>Putri  
        </label>
        <label class="col-4 btn btn-primary <?= $type == "4" ? "active" : "" ?>">
          <input type="radio" name="kos" id="option4" value="4" <?= $type == "4" ? "checked" : "" ?>>
          <span style="font-size: 30px" class="fa fa-female mr-2"></span><br>Muslimah  
        </label>
        
        <label class="col-3 btn btn-primary <?= $type == "3" ? "active" : "" ?>">
          <input type="radio" name="kos" id="option3" value="3" <?= $type == "3" ? "checked" : "" ?>>
          <span style="font-size: 30px" class="fas fa-restroom mr-2"></span><br>Campur
        </label>
      </div>

      <div class="border-top my-2"></div>

      <div class="h6">Fasilitas:</div>
      <div class="form-check ml-2">
        <input class="form-check-input" name="wifi" type="checkbox" value=1 id="fasilitas1">
        <label class="form-check-label" for="fasilitas1">Wifi</label>
      </div>
      <div class="form-check ml-2">
        <input class="form-check-input" name="km_dalam" type="checkbox" value=1 id="fasilitas2">
        <label class="form-check-label" for="fasilitas2"> Kamar Mandi Dalam </label>
      </div>
      <div class="form-check ml-2">
        <input class="form-check-input" name="dapur" type="checkbox" value=1 id="fasilitas3">
        <label class="form-check-label" for="fasilitas3">Dapur</label>
      </div>
      <div class="form-check ml-2">
        <input class="form-check-input" name="listrik" type="checkbox" value=1 id="fasilitas4">
        <label class="form-check-label" for="fasilitas4">Termasuk Listrik</label>
      </div>
      <div class="form-check ml-2">
        <input class="form-check-input" name="air" type="checkbox" value=1 id="fasilitas5">
        <label class="form-check-label" for="fasilitas5">Termasuk Air</label>
      </div>
      <div class="form-check ml-2">
        <input class="form-check-input" name="dekat_kampus" type="checkbox" value=1 id="fasilitas6">
        <label class="form-check-label" for="fasilitas6"> Dekat Kampus</label>
      </div>

      <div class="border-top my-2"></div>

      <div class="h6">Lokasi:</div>
      <div class="col text-center">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <?php $loc = $this->input->get('lokasi') ?>
            <label class="btn btn-primary <?= $loc == "1" ? "active" : "" ?>">
              <input type="radio" name="lokasi" value=1 id="option1" <?= $loc == "1" ? "checked" : "" ?>> Bonsay
            </label>
            <label class="btn btn-primary <?= $loc == "2" ? "active" : "" ?>">
              <input type="radio" name="lokasi" value=2 id="option2" <?= $loc == "2" ? "checked" : "" ?>> Bonasut
            </label>
            <label class="btn btn-primary <?= $loc == "3" ? "active" : "" ?>">
              <input type="radio" name="lokasi" value=3 id="option3" <?= $loc == "3" ? "checked" : "" ?>> Bonasel
            </label>
        </div>
      </div>

      <input type="hidden" value="<?= $this->input->get('sortby') === null ? 0 : $this->input->get('sortby') ?>" name="sortby">
      
      <div class="border-top my-3"></div>

      <div class="col text-center mb-2">
        <button type="reset" class="btn btn-secondary" onclick="window.location='pencarian?sortby=0'">Reset</button>
        <button type="submit" class="btn btn-success">Cari <span class="fa fa-search"></button>
      </div>
  </form>            
</div>
<!-- sidebar end -->


<div class="d-flex flex-column navbar-light bg-primary fixed-top">
      <!-- 1 -->
      <nav class="navbar navbar-expand-lg navbar-light order-0">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand" href="<?= base_url() ?>">
          <img class="logo-nav" src="<?= base_url() ?>assets/img/logo.png" alt="" />
          <span class="my-auto ml-2">KOSTISTA</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span> <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
          <ul class="nav navbar-nav menu_nav ml-auto mr-4">
            <?php if (!$this->session->userdata('sudah_login')) { ?> 
              <li class="nav-item">
                <a class="nav-link" style="color:aliceblue;" href="<?= base_url() ?>login/">Masuk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color:aliceblue;" href="<?= base_url() ?>user/registrasi/">Daftar</a>
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
      </nav>

      <!-- 2 -->
      <nav class="navbar-expand-lg navbar-light d-flex order-1 mb-lg-2 mt-0">
        <div class="px-2">
          <form class="form-inline" action="mySearch" method="get">
            <div class="input-group btn-group" role="group" aria-label="First group">
              <button class="btn btn-outline-success my-2 my-sm-0 " type="submit" value="keyword">
                <i class="fa fa-search"></i>
              </button>
              <input class="form-control my-2 my-sm-0" name="keyword" type="search" 
                placeholder="cari nama atau alamat kos" aria-label="Search" style="width: 300px;">
            </div>  
          </form>
        </div>

        <div class="px-2">  
          <button class="btn btn-primary" onclick="openNav()">
          <i class="fa fa-filter mr-2 mr-sm-1"></i>Filter
          </button>
        </div>  

        <div class="px-2">  
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle dm1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Urutkan
            </button>
            <ul class="dropdown-menu dm1" aria-labelledby="dropdownMenuButton">
              <li><a data-value=0 class="dropdown-item">Harga Terendah</a></li>
              <li><a data-value=1 class="dropdown-item">Harga Tertinggi</a></li>
              <li><a data-value=2 class="dropdown-item">Jarak Terdekat</a></li>
              <li><a data-value=3 class="dropdown-item">Ulasan</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <script>
          $(function() {

            $(".dm1 li a").click(function() {

                $(".dm1:first-child").text($(this).text());
                var sort_by = $(this).attr("data-value")
                $("input[name='sortby']").attr("value", sort_by)
                $("#form_pencarian").submit()
            });

            var text_active = $("a[data-value='<?= $this->input->get('sortby') ?>']").text();

            if (text_active === "") {} else {
                $(".dm1:first-child").text(text_active);
            };

            $(".form-check-input[name='<?= $this->input->get('wifi') !== null ? "wifi" : "-" ?>']").prop("checked", true);
            $(".form-check-input[name='<?= $this->input->get('km_dalam') !== null ? "km_dalam" : "-" ?>']").prop("checked", true);
            $(".form-check-input[name='<?= $this->input->get('dapur') !== null ? "dapur" : "-" ?>']").prop("checked", true);
            $(".form-check-input[name='<?= $this->input->get('listrik') !== null ? "listrik" : "-" ?>']").prop("checked", true);
            $(".form-check-input[name='<?= $this->input->get('air') !== null ? "air" : "-" ?>']").prop("checked", true);
            $(".form-check-input[name='<?= $this->input->get('dekat_kampus') !== null ? "dekat_kampus" : "-" ?>']").prop("checked", true);

          });

          function openNav() {
            document.getElementById("myFilternav").style.width = "300px";
          }

          function closeNav() {
            document.getElementById("myFilternav").style.width = "0";
          }
      </script>
</div>

