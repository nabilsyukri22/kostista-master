<div class="container-fluid">
    <div class="row">    
        <div class="col-7 bg-light mb-3" style="margin-top: 140px;">
            <!-- kos content -->
            <?php if (empty($pencarian)) { ?>
                <div class="row h-75 w-100 h4 text-center font-italic">
                    <div class="m-auto">
                        Belum ada data
                    </div>
                </div>
            <?php } else { ?>
                <?php foreach ($pencarian as $kos) { ?>
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-4 img-kos-container">
                                <img src="<?= base_url() ?>file/kos_image/<?= $kos["image_header"] ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <div class="h3 card-title col-12 mb-0"><?= $kos["nama"] ?></div>
                                    <div class=" col">
                                        <div class="card-text"><?= $kos["alamat"] ?></div>
                                    </div>
                                    <div class="col col-md-auto col-12" style="max-width: 80%">
                                        <div class="mt-20 mb-20 row d-flex justify-content-center p-0">
                                            <span class="ml-2 px-2 h-100 uk-badge bg-white border border-warning text-warning">
                                                <span class="fa fa-star mr-1"></span>
                                                <?= $kos["rating"] === null ? 0 : $kos["rating"]  ?>
                                            </span>
                                                
                                            <div class="col flex-item align-self-stretch text-center pr-0 mr-2">
                                                <?php if ($kos["lokasi"] == 'Bonsay') {
                                                    echo "<span class=\"uk-label bg-info border text-white border-info uk-text-capitalize py-1 w-100\">" . $kos["lokasi"];
                                                } else if ($kos["lokasi"] == 'Bonasel') {
                                                    echo "<span class=\"uk-label bg-secondary border text-white border-secondary uk-text-capitalize py-1 w-100\">" . $kos["lokasi"];
                                                } else {
                                                    echo "<span class=\"uk-label bg-danger border text-white border-danger uk-text-capitalize py-1 w-100\">" . $kos["lokasi"];
                                                } ?>
                                            </div>

                                            <div class="flex-item align-self-stretch text-center pr-0 mr-2">
                                                <?php if ($kos["tipe"] == 'Putra') {
                                                    echo "<span class=\"uk-label bg-white border text-info border-info uk-text-capitalize py-1 w-100\">
                                                        <span class=\"badge badge-info mr-1\"><i class=\"fa fa-male aria-hidden=\"true\"></i></span>" . $kos["tipe"];
                                                } else if ($kos["tipe"] == 'Putri') {
                                                    echo "<span class=\"uk-label bg-white border text-danger border-danger uk-text-capitalize py-1 w-100\">
                                                        <span class=\"badge badge-danger mr-1\"><i class=\"fa fa-female aria-hidden=\"true\"></i></span>" . $kos["tipe"];
                                                } else {
                                                    echo "<span class=\"uk-label bg-white border text-secondary border-secondary uk-text-capitalize py-1 w-100\">
                                                        <span class=\"badge badge-secondary mr-1\"><i class=\"fa fa-group aria-hidden=\"true\"></i></span>" . $kos["tipe"];
                                                } ?>
                                            </div>                        

                                            <div class="flex-item align-self-stretch col text-center mt-2">
                                                <?php if ($kos["jumlah_tersedia"] == 0) {
                                                    echo "<span class=\"uk-label bg-white text-danger border border-danger uk-text-capitalize py-1 h-100 w-100\">
                                                        <span class=\"text-tersedia\">Kamar Tidak Tersedia</span>
                                                        </span>";
                                                } else {
                                                    echo "<span class=\"uk-label bg-white text-success border border-success uk-text-capitalize py-1 h-100 w-100\">
                                                        <span class=\"badge badge-success mr-1\">" . $kos["jumlah_tersedia"] . "</span>
                                                        <span class=\"text-tersedia\">Kamar Tersedia</span>
                                                        </span>";
                                                } ?>
                                            </div>  

                                            <div class="row d-flex w-100 content justify-content-center justify-content-md-start">
                                                <?php
                                                    $t = $kos['wifi'];
                                                    if ($t < "1") {
                                                        echo
                                                            "<div class='col-4 col-md-6 col-xl-2 div-icon'>
                                                            <div class='icon-fasilitas mx-auto'>
                                                            <i class='fa fa-wifi'></i>
                                                            <span>Tidak Ada WiFi</span>
                                                            </div>
                                                            </div>";
                                                    } else {
                                                        echo
                                                            "<div class='col-4 col-md-6 col-xl-2 div-icon'>
                                                            <div class='icon-fasilitas active mx-auto'>
                                                            <i class='fa fa-wifi'></i>
                                                            <span>Ada WiFi</span>
                                                            </div>
                                                            </div>";
                                                    }
                                                ?>

                                                <?php
                                                    $t = $kos['km_dalam'];
                                                    if ($t < "1") {
                                                        echo
                                                            "<div class='col-4 col-md-6 col-xl-2 div-icon'>
                                                            <div class='icon-fasilitas mx-auto'>
                                                            <i class='fa fa-bath'></i>
                                                            <span>Kamar Mandi Luar</span>
                                                            </div>
                                                            </div>";
                                                    } else {
                                                        echo
                                                            "<div class='col-4 col-md-6 col-xl-2 div-icon'>
                                                            <div class='icon-fasilitas active mx-auto'>
                                                            <i class='fa fa-bath'></i>
                                                            <span>Kamar Mandi Dalam</span>
                                                            </div>
                                                            </div>";
                                                    }
                                                ?>

                                                <?php
                                                    $t = $kos['dapur'];
                                                    if ($t < "1") {
                                                        echo
                                                            "<div class='col-4 col-md-6 col-xl-2 div-icon'>
                                                            <div class='icon-fasilitas mx-auto'>
                                                            <i class='fa fa-cutlery'></i>
                                                            <span>Tidak Ada Dapur</span>
                                                            </div>
                                                            </div>";
                                                    } else {
                                                        echo
                                                            "<div class='col-4 col-md-6 col-xl-2 div-icon'>
                                                            <div class='icon-fasilitas active mx-auto'>
                                                            <i class='fa fa-cutlery'></i>
                                                            <span>Ada Dapur</span>
                                                            </div>
                                                            </div>";
                                                    }
                                                ?>

                                                <?php
                                                    $t = $kos['listrik'];
                                                    if ($t < "1") {
                                                        echo
                                                            "<div class='col-4 col-md-6 col-xl-2 div-icon'>
                                                            <div class='icon-fasilitas mx-auto'>
                                                            <i class='fa fa-bolt'></i>
                                                            <span>Tidak Termasuk Listrik</span>
                                                            </div>
                                                            </div>";
                                                    } else {
                                                        echo
                                                            "<div class='col-4 col-md-6 col-xl-2 div-icon'>
                                                            <div class='icon-fasilitas active mx-auto'>
                                                            <i class='fa fa-bolt'></i>
                                                            <span>Termasuk Listrik</span>
                                                            </div>
                                                            </div>";
                                                    }
                                                ?>

                                                <?php
                                                    $t = $kos['air'];
                                                    if ($t < "1") {
                                                        echo
                                                            "<div class='col-4 col-md-6 col-xl-2 div-icon'>
                                                            <div class='icon-fasilitas mx-auto'>
                                                            <i class='fa fa-tint'></i>
                                                            <span>Tidak Termasuk Air</span>
                                                            </div>
                                                            </div>";
                                                    } else {
                                                        echo
                                                            "<div class='col-4 col-md-6 col-xl-2 div-icon'>
                                                            <div class='icon-fasilitas active mx-auto'>
                                                                <i class='fa fa-tint'></i>
                                                                <span>Termasuk Air</span>
                                                            </div>
                                                            </div>";
                                                    }
                                                ?>

                                                <?php
                                                    $t = $kos['dekat_kampus'];
                                                    if ($t < "1") {
                                                        echo
                                                            "<div class='col-4 col-md-6 col-xl-2 div-icon'>
                                                                <div class='icon-fasilitas mx-auto'>
                                                                    <i class='fa fa-road'></i>
                                                                    <span>Tidak Dekat Kampus</span>
                                                                </div>
                                                            </div>";
                                                    } else {
                                                        echo
                                                            "<div class='col-4 col-md-6 col-xl-2 div-icon'>
                                                                <div class='icon-fasilitas active mx-auto'>
                                                                    <i class='fa fa-road'></i>
                                                                    <span>Dekat Kampus</span>
                                                                </div>
                                                            </div>";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row d-flex my-0 py-0 col">
                                    <div style="padding-top: 1%" class="d-flex w-100 justify-content-end">
                                        <div class="col-9 text-left">
                                            <div class="pl-0 col-8">
                                                <?php
                                                    // date_default_timezone_set('Asia/Jakarta'); 
                                                    $tgl = $kos["date"];
                                                    $jam = $kos["time"];
                                                    $tgl1 = explode("-", $tgl);
                                                    $jam1 = explode(":", $tgl);
                                                    $awal = $kos["date"] . " " . $kos["time"];

                                                    $awal = new DateTime($awal);
                                                    $skrg = new DateTime('Asia/Jakarta');
                                                    $diff = $awal->diff($skrg);

                                                    if ($diff->y > 0) {
                                                        echo "<p class=\"card-text\"><small class=\"text-muted\">Terakhir update " . $diff->y . " tahun yang lalu.</small></p>";
                                                    } else if ($diff->m > 0) {
                                                        echo "<p class=\"card-text\"><small class=\"text-muted\">Terakhir update " . $diff->m . " bulan yang lalu.</small></p>";
                                                    } else if ($diff->d > 0) {
                                                        echo "<p class=\"card-text\"><small class=\"text-muted\">Terakhir update " . $diff->d . " hari yang lalu.</small></p>";
                                                    } else if ($diff->h > 0) {
                                                        echo "<p class=\"card-text\"><small class=\"text-muted\">Terakhir update " . $diff->h . " jam yang lalu.</small></p>";
                                                    } else if ($diff->i > 0) {
                                                        echo "<p class=\"card-text\"><small class=\"text-muted\">Terakhir update " . $diff->i . " menit yang lalu.</small></p>";
                                                    } else {
                                                        echo "<p class=\"card-text\"><small class=\"text-muted\">Terakhir update " . $diff->s . " detik yang lalu.</small></p>";
                                                    }
                                                ?>            
                                            </div>
                                            <span class="h4">
                                                <div><?= $kos["harga_min"] === $kos["harga_max"] ? "Rp " . $kos["harga_min"] . ",00" : "Rp " . number_format($kos["harga_min"], 2, ',', '.') . " - Rp " . number_format($kos["harga_max"], 2, ',', '.')   ?> </div>
                                            </span>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-primary my-4" onclick="window.location='detail/<?= $kos['slug'] ?>'">Selengkapnya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                <?php } ?>
            <?php } ?>
           <!-- end kos content -->       
        </div>

        <!-- menambahkan peta -->
        <div id="mapid" class="col-5 card"></div>
        <!-- end map -->
    </div>
</div>

<script type="text/javascript"> 
    // bagian map
    var mymap = L.map('mapid').setView([-6.23144, 106.86681], 15);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 20,
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
        <?php echo $koordinat; ?>
    ];

    //tampilkan peta menggunakan for
    for(var i=0; i<lokasi_array.length; i++){
        marker = new L.marker([lokasi_array[i][1], lokasi_array[i][2]],{icon:iconLocation})
            .bindPopup(lokasi_array[i][0])
            .addTo(mymap);
    }
</script>