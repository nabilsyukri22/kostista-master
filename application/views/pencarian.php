<div class="container-fluid">
    <div class="row">

        <div id="filter-div" class="col-12 col-md-3 card bg-light mb-3 d-md-block  collapse">
            <div class="position-sticky" style="top: 0">

                <form id="form_pencarian" action="pencarian" method="get">
                    <h2 class="my-2">
                    
                        Filter
                    
                    </h2>

                    <div class="border-top my-3 border-grey"></div>

                    <div class="h6">
                    
                        Kos untuk:
                        
                    </div>
                    <?php $type = $this->input->get('kos'); ?>
                    <div class="col-12 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="col-5 btn btn-primary <?= $type == "1" ? "active" : "" ?>">
                            <input type="radio" name="kos" id="option1" value="1" <?= $type == "1" ? "checked" : "" ?>>
                            <span style="font-size: 30px" class="fa fa-male mr-2"></span><br>
                            
                            Putra

                        </label>
                        <label class="col-5 btn btn-primary <?= $type == "2" ? "active" : "" ?>">
                            <input type="radio" name="kos" id="option2" value="2" <?= $type == "2" ? "checked" : "" ?>>
                            <span style="font-size: 30px" class="fa fa-female mr-2"></span><br>
                            
                            Putri

                        </label>
                        <label class="col-5 btn btn-primary <?= $type == "3" ? "active" : "" ?>">
                            <input type="radio" name="kos" id="option3" value="3" <?= $type == "3" ? "checked" : "" ?>>
                            <span style="font-size: 30px" class="fas fa-restroom mr-2"></span><br>
                            
                            Campur

                        </label>
                    </div>

                    <div class="border-top my-3"></div>

                    <div class="h6">
                    
                        Fasilitas:
                    
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="wifi" type="checkbox" value=1 id="fasilitas1">
                        <label class="form-check-label" for="fasilitas1">

                            Wifi

                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" name="km_dalam" type="checkbox" value=1 id="fasilitas2">
                        <label class="form-check-label" for="fasilitas2">

                            Kamar Mandi Dalam

                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" name="dapur" type="checkbox" value=1 id="fasilitas3">
                        <label class="form-check-label" for="fasilitas3">

                            Dapur

                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" name="listrik" type="checkbox" value=1 id="fasilitas3">
                        <label class="form-check-label" for="fasilitas3">

                            Termasuk Listrik

                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" name="air" type="checkbox" value=1 id="fasilitas3">
                        <label class="form-check-label" for="fasilitas3">

                            Termasuk Air

                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" name="dekat_kampus" type="checkbox" value=1 id="fasilitas3">
                        <label class="form-check-label" for="fasilitas3">

                            Dekat Kampus

                        </label>
                    </div>

                    <div class="border-top my-3"></div>

                    <div class="h6">

                        Lokasi:
                        
                    </div>
                    <div class="col text-center">

                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <?php $loc = $this->input->get('lokasi') ?>
                            <label class="btn btn-primary <?= $loc == "1" ? "active" : "" ?>">
                                <input type="radio" name="lokasi" value=1 id="option1" <?= $loc == "1" ? "checked" : "" ?>> 
                                
                                Bonsay

                            </label>
                            <label class="btn btn-primary <?= $loc == "2" ? "active" : "" ?>">
                                <input type="radio" name="lokasi" value=2 id="option2" <?= $loc == "2" ? "checked" : "" ?>> 
                                
                                Bonasut

                            </label>
                            <label class="btn btn-primary <?= $loc == "3" ? "active" : "" ?>">
                                <input type="radio" name="lokasi" value=3 id="option3" <?= $loc == "3" ? "checked" : "" ?>> 
                                
                                Bonasel

                            </label>
                        </div>

                    </div>

                    <input type="hidden" value="<?= $this->input->get('sortby') === null ? 0 : $this->input->get('sortby') ?>" name="sortby">
                    <div class="border-top my-3"></div>

                    <div class="col text-center">
                        <button type="reset" class="btn btn-secondary" onclick="window.location='pencarian?sortby=0'">
                        
                            Reset
                        
                        </button>
                        <button type="submit" class="btn btn-success">Cari <span class="fa fa-search"></button>
                    </div>

                    <div class="border-bottom my-3 border-light"></div>
                </form>

            </div>
        </div>
        <!-- sidebar -->

        <div class="col-12 col-md-9">


            <div class="col-12 h-auto">
                <nav class="navbar navbar-light d-flex justify-content-between" style="margin-top: 2%; margin-bottom:-1%">
                    <div class="flex-item">
                        <button class="btn btn-success d-md-none" data-toggle="collapse" data-target="#filter-div" aria-expanded="false" aria-controls="filter-div"><i class="fa fa-filter mr-2"></i>Filter</button>
                    </div>
                    <div class="flex-item">
                        <label class="mr-2 my-0">Urutkan :</label>
                        <div class="dropdown d-inline-block">
                            <button class="btn btn-primary dropdown-toggle dm1" style="width: 150px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                (Choose one)</button>
                            <ul class="dropdown-menu dm1" aria-labelledby="dropdownMenuButton">
                                <li><a data-value=0 class="dropdown-item">Harga Terendah</a></li>
                                <li><a data-value=1 class="dropdown-item">Harga Tertinggi</a></li>
                                <li><a data-value=2 class="dropdown-item">Jarak Terdekat</a></li>
                                <li><a data-value=3 class="dropdown-item">Ulasan</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="border-top my-3"></div>
            </div>
            <?php if (empty($pencarian)) { ?>
                <div class="row h-75 w-100 h4 text-center font-italic">
                    <div class="m-auto">
                        Belum ada data
                    </div>
                </div>
            <?php } else { ?>
                <?php foreach ($pencarian as $kos) { ?>
                    <div class="col-12">
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

                                                <div class="flex-item align-self-stretch col text-center pl-0">
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
                                            <div class="col-9 p-0 text-left ">
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
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>

</div>
</div>

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
</script>