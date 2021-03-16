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
      <br><br>
      
      <div class="banner_content text-center mb-4">
        <h1 style="color: white">MAPS</h1>
      </div>

    <!-- menambahkan peta -->
    <div id="mapid" style="width:100%; height: 500px;"> </div>
      <script type="text/javascript">
        var mymap = L.map('mapid').setView([-6.23144, 106.86681], 18);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoibmFiaWxzeXVrcmkiLCJhIjoiY2ttMHBoc204MWFjbDJvczJvcGZwMTV0YSJ9.P-zbUcGo_5lf-RM7xS7ZUw'
        }).addTo(mymap);

        var iconLocation = L.icon({
          iconUrl : '<?= base_url("assets/images/location.png") ?>',
          iconSize : [30,30]
        })

        //array
        var lokasi_array = [
          <?php 
            echo $koordinat;
          
          ?>
        ];

        //tampilkan peta menggunakan for
        for(var i=0; i<lokasi_array.length; i++){
          marker = new L.marker([lokasi_array[i][1], lokasi_array[i][2]],{icon:iconLocation})
            .bindPopup(lokasi_array[i][0])
            .addTo(mymap);
        }

      </script>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->
<script>
  $(function() {
    $(document).scroll(function() {
      var $nav = $(".navbar");
      $nav.toggleClass('scroll', $(this).scrollTop() > $nav.height());
    });
  });
</script>