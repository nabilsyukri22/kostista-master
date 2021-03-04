<?php foreach ($detailkos  as $detail):?>
<div class="container-fluid h-100">

    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="col-12">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 4:1.5">

                    <ul class="uk-slideshow-items">
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                <img src="<?= base_url() ?>file/kos_image/1.jpg" alt="" uk-cover>
                            </div>
                        </li>
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                <img src="<?= base_url() ?>file/kos_image/2.jpg" alt="" uk-cover>
                            </div>
                        </li>
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                <img src="<?= base_url() ?>file/kos_image/3.jpg" alt="" uk-cover>
                            </div>
                        </li>
                    </ul>

                    <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                </div>
            </div>

            <div class="col-12 my-4">

                <div class="row">

                    <div class="col order-last order-md-first mt-4 mt-lg-0">
                        <h1 class="uk-heading-divider"><?=$detail['nama'] ?>
                            <span>
                                <span class="ml-2 px-2 uk-badge bg-white border border-warning text-warning">
                                    <span class="fa fa-star mr-1"></span>
                                    <?php foreach ($avgreviewkos as $avg):?>
                                        <?= $avg['star']?>
                                    <?php endforeach?>
                                </span>

                                <?php foreach ($verifikasikos as $verifikasi):?>
                                <?php
                                    $verifikasi = $verifikasi['id'];
                                    if ($verifikasi > 0){
                                        echo
                                            "<span class='ml-2 px-2 uk-badge bg-success'>
                                                <span class='fa fa-check-circle mr-1'></span>
                                                Terverifikasi
                                            </span>";
                                    }
                                    else{
                                        print
                                        "<span class='ml-2 px-2 uk-badge bg-success'>
                                            <span class='fa fa-check-circle mr-1'></span>
                                            Tidak Terverifikasi
                                        </span>";                                    
                                    } 


                                    // if( isset( $verifikasi ) ) {
                                    //     switch( $verifikasi ) {
                                    //         case 0:
                                    //             print "WTF!!!";
                                    //     }
                                    // }

                                    // switch ($verifikasi) {
                                    //     case NULL:
                                    //         echo
                                    //         "<span class='ml-2 px-2 uk-badge bg-success'>
                                    //             <span class='fa fa-check-circle mr-1'></span>
                                    //             Tidak Terverifikasi
                                    //         </span>";
                                    //         break;
                                    //     case 1:
                                    //         echo
                                    //             "<span class='ml-2 px-2 uk-badge bg-success'>
                                    //                 <span class='fa fa-check-circle mr-1'></span>
                                    //                 Terverifikasi
                                    //             </span>";
                                    // }
                                ?>
                                <?php endforeach?>

                                <br>
                                <div class="mt-2 uk-text-lead text-alamat uk-text-italic"><?=$detail['alamat'] ?>
                            </span>
                        </h1>
                    </div>

                    <div class="col col-md-auto col-12 text-center">

                        <div class="col-12 p-0 text-right">
                            <span class="uk-label h1 uk-text-large bg-primary uk-text-capitalize py-2 px-4 text-center text-white w-100">
                                <div><?=$detail['harga_min']?> - <?=$detail['harga_max']?></div>
                                <div class="per-kamar-text">Per kamar per bulan</div>
                            </span>
                        </div>

                        <div class="row d-flex justify-content-center p-0">
                            <?php
                                $tipe = $detail['tipe'];
                                switch ($tipe) {
                                    case "Putra":
                                        echo
                                        "<div class='col flex-item align-self-stretch text-center pr-0 mr-2'>
                                            <span class='uk-label bg-white text-info border border-info uk-text-capitalize py-1 w-100'>
                                                <span class='badge badge-info mr-1'><i class='fa fa-male' aria-hidden='true'></i></span>
                                                Putra
                                            </span>
                                        </div>";
                                    break;
                                    case "Putri":
                                        echo
                                        "<div class='col flex-item align-self-stretch text-center pr-0 mr-2'>
                                            <span class='uk-label bg-white text-danger border border-danger uk-text-capitalize py-1 w-100'>
                                                <span class='badge badge-danger mr-1'><i class='fa fa-female' aria-hidden='true'></i></span>
                                                Putri
                                            </span>
                                        </div>";
                                    break;
                                    case "Campur":
                                        echo
                                        "<div class='col flex-item align-self-stretch text-center pr-0 mr-2'>
                                            <span class='uk-label bg-white text-dark border border-dark uk-text-capitalize py-1 w-100'>
                                                <span class='badge badge-info mr-1'><i class='fa fa-male' aria-hidden='true'></i></span>
                                                <span class='badge badge-danger mr-1'><i class='fa fa-female' aria-hidden='true'></i></span>
                                                Campur
                                            </span>
                                        </div>";
                                    break;
                                }
                            ?>


                            <div class="flex-item align-self-stretch col text-center pl-0">
                                <span class="uk-label bg-white text-success border border-success uk-text-capitalize py-1 h-100 w-100">
                                    <span class="badge badge-success mr-1">4</span>
                                    <span class="text-tersedia">Kamar Tersedia</span>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-4">

                    <div class="col-12 col-md-4">
                        <div class="col-12 px-0">
                            <h3 class="uk-heading-bullet">Fasilitas</h3>
                            <div class="row d-flex w-100 content justify-content-center justify-content-md-start">

                                <?php
                                    $t = $detail['wifi'];
                                    if ($t < "1") {
                                        echo
                                        "<div class='col-4 col-md-6 col-xl-4 div-icon'>
                                            <div class='icon-fasilitas mx-auto'>
                                                <i class='fa fa-wifi'></i>
                                                <span>Tidak Ada WiFi</span>
                                            </div>
                                        </div>";
                                    }
                                    else{
                                        echo
                                        "<div class='col-4 col-md-6 col-xl-4 div-icon'>
                                            <div class='icon-fasilitas active mx-auto'>
                                                <i class='fa fa-wifi'></i>
                                                <span>Ada WiFi</span>
                                            </div>
                                        </div>";
                                        }
                                ?> 

                                <?php
                                    $t = $detail['km_dalam'];
                                    if ($t < "1") {
                                        echo
                                        "<div class='col-4 col-md-6 col-xl-4 div-icon'>
                                            <div class='icon-fasilitas mx-auto'>
                                                <i class='fa fa-bath'></i>
                                                <span>Kamar Mandi Luar</span>
                                            </div>
                                        </div>";
                                    }
                                    else{
                                        echo
                                        "<div class='col-4 col-md-6 col-xl-4 div-icon'>
                                            <div class='icon-fasilitas active mx-auto'>
                                                <i class='fa fa-bath'></i>
                                                <span>Kamar Mandi Dalam</span>
                                            </div>
                                        </div>";
                                        }
                                ?>

                                <?php
                                    $t = $detail['dapur'];
                                    if ($t < "1") {
                                        echo
                                        "<div class='col-4 col-md-6 col-xl-4 div-icon'>
                                            <div class='icon-fasilitas mx-auto'>
                                                <i class='fa fa-cutlery'></i>
                                                <span>Tidak Ada Dapur</span>
                                            </div>
                                        </div>";
                                    }
                                    else{
                                        echo
                                        "<div class='col-4 col-md-6 col-xl-4 div-icon'>
                                            <div class='icon-fasilitas active mx-auto'>
                                                <i class='fa fa-cutlery'></i>
                                                <span>Ada Dapur</span>
                                            </div>
                                        </div>";
                                        }
                                ?>

                                <?php
                                    $t = $detail['listrik'];
                                    if ($t < "1") {
                                        echo
                                        "<div class='col-4 col-md-6 col-xl-4 div-icon'>
                                            <div class='icon-fasilitas mx-auto'>
                                                <i class='fa fa-bolt'></i>
                                                <span>Tidak Termasuk Listrik</span>
                                            </div>
                                        </div>";
                                    }
                                    else{
                                        echo
                                        "<div class='col-4 col-md-6 col-xl-4 div-icon'>
                                            <div class='icon-fasilitas active mx-auto'>
                                                <i class='fa fa-bolt'></i>
                                                <span>Termasuk Listrik</span>
                                            </div>
                                        </div>";
                                        }
                                ?>

                                <?php
                                    $t = $detail['air'];
                                    if ($t < "1") {
                                        echo
                                        "<div class='col-4 col-md-6 col-xl-4 div-icon'>
                                            <div class='icon-fasilitas mx-auto'>
                                                <i class='fa fa-tint'></i>
                                                <span>Tidak Termasuk Air</span>
                                            </div>
                                        </div>";
                                    }
                                    else{
                                        echo
                                        "<div class='col-4 col-md-6 col-xl-4 div-icon'>
                                            <div class='icon-fasilitas active mx-auto'>
                                                <i class='fa fa-tint'></i>
                                                <span>Termasuk Air</span>
                                            </div>
                                        </div>";
                                        }
                                ?>

                                <?php
                                    $t = $detail['dekat_kampus'];
                                    if ($t < "1") {
                                        echo
                                        "<div class='col-4 col-md-6 col-xl-4 div-icon'>
                                            <div class='icon-fasilitas mx-auto'>
                                                <i class='fa fa-road'></i>
                                                <span>Tidak Dekat Kampus</span>
                                            </div>
                                        </div>";
                                    }
                                    else{
                                        echo
                                        "<div class='col-4 col-md-6 col-xl-4 div-icon'>
                                            <div class='icon-fasilitas active mx-auto'>
                                                <i class='fa fa-road'></i>
                                                <span>Dekat Kampus</span>
                                            </div>
                                        </div>";
                                        }
                                ?>
                            </div>
                        </div>

                        <div class="col-12 my-4 px-0">
                            <div class="d-flex justify-content-center uk-section-muted px-0 py-3">
                                <div class="col col-auto text-grey-light my-auto h-100 pr-0">
                                    <i class="fa fa-2x fa-user-circle h-100"></i>
                                </div>
                                <div class="col col-auto text-grey-light">
                                    <div class="text-pemilik h5 mb-0"><?=$detail['nama_pemilik']?></div>
                                    <div class="text-kontak"><?=$detail['no_hp_pemilik']?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="col-12 px-0">
                            <h3 class="uk-heading-bullet">Deskripsi</h3>
                            <p><?=$detail['deskripsi']?>
                            </p>
                        </div>
                    </div>

                </div>

                <div class="row mt-4">
                </div>

                <div class="row my-4">
                    <h3 class="uk-heading-bullet">Ulasan</h3>
                    <div class="row my-4">
                        <div class="col-12 col-lg-6 pb-4 mx-0">
                            <!-- RATING - Form -->
                            <div class="div-ulasan">
                                <div class="h5 text-second
                                ary text-center w-100">Berikan Penilaianmu:</div>
                                <form class="rating-form text-warning" action="#" method="post" name="rating-kosan">
                                    <fieldset class="form-group">
                                        <div class="form-item">
                                            <input id="rating-5" name="rating" type="radio" value="5" />
                                            <label for="rating-5" data-value="5">
                                                <span class="rating-star">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                                <span class="ir">5</span>
                                            </label>
                                            <input id="rating-4" name="rating" type="radio" value="4" />
                                            <label for="rating-4" data-value="4">
                                                <span class="rating-star">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                                <span class="ir">4</span>
                                            </label>
                                            <input id="rating-3" name="rating" type="radio" value="3" />
                                            <label for="rating-3" data-value="3">
                                                <span class="rating-star">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                                <span class="ir">3</span>
                                            </label>
                                            <input id="rating-2" name="rating" type="radio" value="2" />
                                            <label for="rating-2" data-value="2">
                                                <span class="rating-star">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                                <span class="ir">2</span>
                                            </label>
                                            <input id="rating-1" name="rating" type="radio" value="1" />
                                            <label for="rating-1" data-value="1">
                                                <span class="rating-star">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                                <span class="ir">1</span>
                                            </label>
                                        </div>
                                    </fieldset>
                                    <div id="review" class="container p-4">
                                        <textarea class="ulasan-text w-100" id="ulasan" rows="4" maxlength="150" placeholder="Masukkan ulasanmu di sini.. (maks. 150 karakter)"></textarea>
                                        <button type="submit" class="float-right btn btn-primary btn-lg mt-2 btn-ulasan text-right">
                                            <div class="text-center">Kirim</div>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="col-12 col-lg-6 pb-4 overflow-auto div-review">
                            <?php foreach ($reviewkos as $review) : ?>
                            <div class="row review-section uk-section-muted p-3">
                                <div class="col-md-12 col-xs-4 review-part-left">
                                    <div class="d-flex justify-content-start mb-3">
                                        <div class="flex-item">
                                            <img src="<?= base_url() ?>assets/images/default-user.png">
                                        </div>
                                        <div class="flex-item">
                                            <div class="col-12">
                                                <span><?= $review['fullname']?></span><br>
                                                <p class="p-0"><?= $review['time_stamp']?></p>
                                            </div>
                                            <div class="col-12 p-0 text-warning">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <?php
                                                    $x=0;
                                                    $y=0;
                                                    while($x<$review['star']) {
                                                        echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                                        $x++;
                                                    }
                                                    while($y<5-$x) {
                                                        echo "<i class='fa fa-star-o' aria-hidden='true'></i>";
                                                        $y++;
                                                    }
                                                    ?>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 review-part-right">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 pt-2 pt-md-0">
                                            <p class="p-0"><?= $review['review']?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>  
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12 mt-4">
                        <div class="d-flex justify-content-start bg-white border border-light-grey div-kontak px-0 p-3">

                            <div class="col col-auto text-grey-light w-100">
                                <div class="d-flex justify-content-between h-100">
                                    <div class="flex-item text-pemilik h5 mb-0 font-weight-light">
                                        <div class="d-flex justify-content-start h-100">
                                            <div class="flex-item my-auto">
                                                <i class="fa fa-exclamation-triangle mr-4"></i>
                                            </div>
                                            <div class="flex-item">
                                                Ada data yang kurang tepat atau kendala lain dengan kos? </div>
                                        </div>
                                    </div>
                                    <a href="">
                                        <div class="flex-item text-pemilik h5 mb-0 font-weight-normal my-auto">
                                            Laporkan
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<?php endforeach?>

<script>
    $("#review").slideUp();
    $('input[type=radio]').change(function() {
        $("#review").slideDown();
    });
</script>