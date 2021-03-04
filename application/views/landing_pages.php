<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay"></div>
    <div class="container div-explore">
      <div class="row justify-content-center px-4">
        <div class="col-lg-6">
          <div class="banner_content text-center mb-4">
            <h2 style="color: white">EXPLORE OTISTA</h2>
          </div>
        </div>

        <div class="row justify-content-center kos-div">

          <div class="col-sm-4 py-2 single_course" onclick="window.location='pencarian?lokasi=1&sortby=0'">
            <div class="overlayed"></div>
            <div class="card h-100 border-0 rounded-0">
              <div class="course_head crop">
                <img class="img-fluid" src="<?= base_url() ?>assets/img/courses/c1.png" alt="" />
              </div>
              <div class="card-body">
                <h3 class="card-title mb-0">BONSAY</h3>
                <p class="card-text mt-2">Kebon Sayur - Sekitar kampus dan tidak perlu menyebrang.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 py-2 single_course" onclick="window.location='pencarian?lokasi=3&sortby=0'">
            <div class="overlayed"></div>
            <div class="card h-100 border-0 rounded-0">
              <div class="course_head crop">
                <img class="img-fluid" src="<?= base_url() ?>assets/img/courses/c2.png" alt="" />
              </div>
              <div class="card-body">
                <h3 class="card-title mb-0">BONASEL</h3>
                <p class="card-text mt-2">Kebon Nanas Selatan - Nyebrang dulu, sebelah selatan Jl. Otista 3.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 py-2 single_course" onclick="window.location='pencarian?lokasi=2&sortby=0'">
            <div class="overlayed"></div>
            <div class="card h-100 border-0 rounded-0">
              <div class="course_head crop">
                <img class="img-fluid" src="<?= base_url() ?>assets/img/courses/c3.png" alt="" />
              </div>
              <div class="card-body">
                <h3 class="card-title mb-0">BONASUT</h3>
                <p class="card-text mt-2">Kebon Nanas Utara - Nyebrang dulu, sebelah utara Jl. Otista 3</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->

<!--================ Start Trainers Area =================-->
<section class="trainer_area bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="main_title">
          <h2 class="mb-3">Cari Kosan</h2>
          <p>
            Rating kosan dari yang tertinggi
          </p>
        </div>
      </div>
    </div>

    <div class="row justify-content-center d-flex align-items-center">
<?php foreach ($sql as $kos): ?>
  
      <div style="cursor: pointer;" class="col-lg-3 col-md-6 col-sm-12 single-trainer " onclick="window.location='<?php echo base_url();?>detail/<?=$kos->slug ?>'">
        <div class="thumb d-flex justify-content-sm-center">
          <img class="img-fluid" src="<?php echo base_url();?>file/kos_image/<?=$kos->image_header ?>" alt="" />
        </div>
        <div class="meta-text text-sm-center">
          <div class="h6"><?=$kos->nama ?></div>
          <span class="ml-2 px-2 uk-badge bg-white border border-warning text-warning">
            <span class="fa fa-star mr-1"></span><?php echo $kos->star ?>
          </span>
        </div>
      </div>

<?php endforeach ?>
    </div>

  </div>
</section>
<!--================ End Trainers Area =================-->

<script>
  $(function() {
    $(document).scroll(function() {
      var $nav = $(".navbar");
      $nav.toggleClass('scroll', $(this).scrollTop() > $nav.height());
    });
  });
</script>