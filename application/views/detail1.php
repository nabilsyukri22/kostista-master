<div class="container-fluid h-100">

    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="col-12">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 4:1.5">

                    <ul class="uk-slideshow-items">
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                <img src="<?php echo base_url(); ?>file/kos_image/<?= $image_header ?>" alt="" uk-cover>
                            </div>
                        </li>
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                <img src="<?php echo base_url(); ?>file/kos_image/<?= $image_header2 ?>" alt="" uk-cover>
                            </div>
                        </li>
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                <img src="<?php echo base_url(); ?>file/kos_image/<?= $image_header3 ?>" alt="" uk-cover>
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
                        <h1 class="uk-heading-divider"><?= $nama ?> <br>
                            <span>
                                <span class="ml-2 px-2 uk-badge bg-white border border-warning text-warning">
                                    <span class="fa fa-star mr-1"></span>
                                    <?php if (is_null($star)) {
                                        echo "0.0";
                                    } else {
                                        echo $star;
                                    } ?>
                                </span>
                                <?php if ($jml_verif == 0) { ?>
                                <span class="ml-2 px-2 uk-badge bg-danger">
                                    <span class="fa fa-times-circle mr-1"></span>
                                    Belum Terverifikasi
                                </span>
                                <?php } else { ?> 
                                <span class="ml-2 px-2 uk-badge bg-success">
                                    <span class="fa fa-check-circle mr-1"></span>
                                    <abbr title="Diverifikasi oleh : <?php foreach ($data_verif as $v) : 
                                            echo $v["fullname"].", "; 
                                        endforeach ?>">Terverifikasi</abbr>
                                </span>
                                <?php } ?>

                                <?php if ($this->session->userdata('id_role')==3) { ?>
                                    <?php if ($sudah_verifikasi) { ?>
                                        <form action="<?= base_url() ?>User/give_verif" method="post">
                                            <span class="ml-2 px-2 uk-badge bg-danger" style="cursor: pointer;">
                                                <input type="hidden" name="id_kos" value="<?= $id_kos ?>">
                                                <input type="hidden" name="slug" value="<?= $slug ?>">
                                                <button type="submit" name="hapus_verif" style="border: 0px;background:none;color: white; cursor: pointer;">Batalkan Verifikasi</button>
                                            </span>
                                        </form>
                                    <?php } else { ?>
                                    <form action="<?= base_url() ?>User/give_verif" method="post">
                                        <span class="ml-2 px-2 uk-badge bg-primary" style="cursor: pointer;">
                                            <input type="hidden" name="id_kos" value="<?= $id_kos ?>">
                                            <input type="hidden" name="slug" value="<?= $slug ?>">
                                            <button type="submit" name="verif" style="border: 0px;background:none;color: white; cursor: pointer;">Verifikasi kos ini</button>
                                        </span>
                                    </form>
                                    <?php } ?>
                                <?php } ?>

                                <div class="mt-2 uk-text-lead text-alamat uk-text-italic"><?= $alamat ?>
                            </span>
                        </h1>
                    </div>

                    <div class="col col-md-auto col-12 text-center">

                        <div class="col-12 p-0 text-right">
                            <span class="uk-label h1 uk-text-large bg-primary uk-text-capitalize py-2 px-4 text-center text-white w-100">
                                <div><?= $harga_min === $harga_max ? "Rp " . number_format($harga_min, 2, ',', '.') : "Rp " . number_format($harga_min, 2, ',', '.') . " - Rp " . number_format($harga_max, 2, ',', '.')   ?></div>
                                <div class="per-kamar-text">Per kamar per bulan</div>
                            </span>
                        </div>

                        <div class="row d-flex justify-content-center p-0">
                            <div class="col flex-item align-self-stretch text-center pr-0 mr-2">
                                <span class="uk-label bg-white border <?php if ($tipe == 'Putra') {
                                                                            echo "text-info border-info";
                                                                        } else if ($tipe == 'Putri') {
                                                                            echo "text-danger border-danger";
                                                                        } else {
                                                                            echo "text-secondary border-secondary";
                                                                        } ?> uk-text-capitalize py-1 w-100">
                                    <span class="badge badge-<?php if ($tipe == 'Putra') {
                                                                    echo "info";
                                                                } else if ($tipe == 'Putri') {
                                                                    echo "danger";
                                                                } else {
                                                                    echo "secondary";
                                                                } ?> mr-1"><i class="fa <?php if ($tipe == 'Putra') {
                                                                                            echo "fa-male";
                                                                                        } else if ($tipe == 'Putri') {
                                                                                            echo "fa-female";
                                                                                        } else {
                                                                                            echo "fa-group";
                                                                                        } ?>" aria-hidden="true"></i></span>
                                    <?= $tipe ?>
                                </span>
                            </div>

                            <div class="flex-item align-self-stretch col text-center pl-0">
                                <?php if ($jumlah_tersedia == 0) {
                                    echo "<span class=\"uk-label bg-white text-danger border border-danger uk-text-capitalize py-1 h-100 w-100\">
                                    <span class=\"text-tersedia\">Kamar Tidak Tersedia</span>
                                </span>";
                                } else {
                                    echo "<span class=\"uk-label bg-white text-success border border-success uk-text-capitalize py-1 h-100 w-100\">
                                    <span class=\"badge badge-success mr-1\">$jumlah_tersedia</span>
                                    <span class=\"text-tersedia\">Kamar Tersedia</span>
                                </span>";
                                } ?>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-4">

                    <div class="col-12 col-md-4">
                        <div class="col-12 px-0">
                            <h3 class="uk-heading-bullet">Fasilitas</h3>
                            <div class="row d-flex w-100 content justify-content-center justify-content-md-start">
                                <div class="col-4 col-md-6 col-xl-4 div-icon">
                                    <div class="icon-fasilitas <?php if ($wifi == 1) {
                                                                    echo "active";
                                                                } ?> mx-auto">
                                        <i class="fa fa-wifi"></i>
                                        <span><?php if ($wifi == 1) {
                                                    echo "Terdapat Wifi";
                                                } else {
                                                    echo "Tidak ada wifi";
                                                } ?></span>
                                    </div>
                                </div>
                                <div class="col-4 col-md-6 col-xl-4 div-icon">
                                    <div class="icon-fasilitas <?php if ($km_dalam == 1) {
                                                                    echo "active";
                                                                } ?> mx-auto">
                                        <i class="fa fa-bath"></i>
                                        <span><?php if ($km_dalam == 1) {
                                                    echo "Kamar Mandi Dalam";
                                                } else {
                                                    echo "Kamar Mandi Luar";
                                                } ?></span>
                                    </div>
                                </div>
                                <div class="col-4 col-md-6 col-xl-4 div-icon">
                                    <div class="icon-fasilitas <?php if ($dapur == 1) {
                                                                    echo "active";
                                                                } ?> mx-auto">
                                        <i class="fa fa-cutlery"></i>
                                        <span><?php if ($dapur == 1) {
                                                    echo "Terdapat Dapur";
                                                } else {
                                                    echo "Tidak ada dapur";
                                                } ?></span>
                                    </div>
                                </div>
                                <div class="col-4 col-md-6 col-xl-4 div-icon">
                                    <div class="icon-fasilitas <?php if ($listrik == 1) {
                                                                    echo "active";
                                                                } ?> mx-auto">
                                        <i class="fa fa-bolt"></i>
                                        <span><?php if ($listrik == 1) {
                                                    echo "Biaya Termasuk Listrik";
                                                } else {
                                                    echo "Biaya Tidak Termasuk Listrik";
                                                } ?></span>
                                    </div>
                                </div>
                                <div class="col-4 col-md-6 col-xl-4 div-icon">
                                    <div class="icon-fasilitas <?php if ($air == 1) {
                                                                    echo "active";
                                                                } ?> mx-auto">
                                        <i class="fa fa-tint"></i>
                                        <span><?php if ($air == 1) {
                                                    echo "Biaya Termasuk Air";
                                                } else {
                                                    echo "Biaya Tidak Termasuk Air";
                                                } ?></span>
                                    </div>
                                </div>
                                <div class="col-4 col-md-6 col-xl-4 div-icon">
                                    <div class="icon-fasilitas <?php if ($dekat_kampus == 1) {
                                                                    echo "active";
                                                                } ?> mx-auto">
                                        <i class="fa fa-road"></i>
                                        <span><?php if ($dekat_kampus == 1) {
                                                    echo "Dekat Kampus";
                                                } else {
                                                    echo "Cukup Jauh dari kampus";
                                                } ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 my-4 px-0">
                            <div class="d-flex justify-content-center uk-section-muted px-0 py-3">
                                <div class="col col-auto text-grey-light my-auto h-100 pr-0">
                                    <i class="fa fa-2x fa-user-circle h-100"></i>
                                </div>
                                <div class="col col-auto text-grey-light">
                                    <div class="text-pemilik h5 mb-0"><?= $nama_pemilik ?></div>
                                    <div class="text-kontak"><?= $no_hp_pemilik ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="col-12 px-0">
                            <h3 class="uk-heading-bullet">Deskripsi</h3>
                            <p><?= $deskripsi ?></p>
                        </div>
                    </div>

                </div>