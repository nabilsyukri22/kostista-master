    <h3 class="uk-heading-bullet">Ulasan</h3>
    <div class="row my-4">
        <div class="col-12 col-lg-6 pb-4 mx-0">
            <!-- RATING - Form -->
            <div class="div-ulasan">
                <?php if ($sudah_isi_review) { ?>
                    <div class="h5 text-secondary text-center w-100 h-100">
                        <div class="my-auto">Terimakasih atas penilaian Anda!</div>
                    </div>
                <?php } else { ?>
                    <div class="h5 text-secondary text-center w-100">Berikan Penilaianmu:</div>
                    <form class="rating-form text-warning" action="<?= base_url() ?>User/give_review" method="post" name="rating-kosan">
                        <input type="hidden" name="id_kos" value="<?= $id_kos ?>">
                        <input type="hidden" name="slug" value="<?= $slug ?>">
                        <fieldset class="form-group" required>
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
                            <textarea name="review" class="ulasan-text w-100" id="ulasan" rows="4" maxlength="150" placeholder="Masukkan ulasanmu di sini.. (maks. 150 karakter)" required></textarea>
                            <?php if ($this->session->userdata('sudah_login')) { ?>
                                <button type="submit" class="float-right btn btn-primary btn-lg mt-2 btn-ulasan text-right">
                                    <div class="text-center">Kirim</div>
                                </button>
                            <?php } else { ?>
                                <button onclick="swal('Maaf','Anda harus login terlebih dahulu sebelum memberikan penilaian terhadap kos','info')" class="float-right btn btn-primary btn-lg mt-2 btn-ulasan text-right">
                                    <div class="text-center">Kirim</div>
                                </button>
                            <?php } ?>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
        <!-- BEGIN LIST REVIEW -->
        <div class="col-12 col-lg-6 pb-4 overflow-auto div-review">
            <h3 class="uk-heading-bullet">Ulasan Lainnya</h3>
            <?php foreach ($review as $r) : ?>
                <div class="row review-section uk-section-muted p-3">
                    <div class="col-md-12 col-xs-4 review-part-left">
                        <div class="d-flex justify-content-start mb-3">
                            <div class="flex-item">
                                <img src="<?= base_url() ?>assets/images/default-user.png">
                            </div>
                            <div class="flex-item">
                                <div class="col-12">
                                    <span><?= $r->nama ?></span><br>
                                    <p class="p-0"><?= $r->time_stamp ?></p>
                                </div>
                                <div class="col-12 p-0 text-warning">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star<?php if (($r->star) < 2) {
                                                                echo "-o";
                                                            } ?>" aria-hidden="true"></i>
                                        <i class="fa fa-star<?php if (($r->star) < 3) {
                                                                echo "-o";
                                                            } ?>" aria-hidden="true"></i>
                                        <i class="fa fa-star<?php if (($r->star) < 4) {
                                                                echo "-o";
                                                            } ?>" aria-hidden="true"></i>
                                        <i class="fa fa-star<?php if (($r->star) < 5) {
                                                                echo "-o";
                                                            } ?>" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 review-part-right">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 pt-2 pt-md-0">
                                <p class="p-0"><?= $r->review ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <!-- END LIST REVIEW -->
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
                                    Ada data yang kurang tepat atau kendala lain dengan kos? 
                                    <form class="" action="<?= base_url() ?>User/give_report" method="post" name="laporkan-kosan">
                                      <div id="report" class="form-item">
                                        <br>
                                        <input type="hidden" name="id_kos" value="<?= $id_kos ?>">
                                        <input type="hidden" name="slug" value="<?= $slug ?>">
                                        <input type="radio" name="report-tipe" value="1"> Kosan fiktif atau tidak ada <br>
                                        <input type="radio" name="report-tipe" value="2"> Informasi yang diberikan tidak sesuai <br>
                                        <input type="radio" name="report-tipe" value="3"> Kosan sudah ada (duplikat) <br>
                                        <input type="radio" name="report-tipe" value="4" id="report-4"> Lainnya
                                        <textarea name="report-text" class="ulasan-text w-100" id="report-text" rows="1" maxlength="100" required placeholder="detail alasan ..."></textarea>

                                        <button type="submit" class="float-right btn btn-primary btn-lg mt-2 btn-report text-right" id="btn-report">
                                            <div class="text-center">Kirim</div>
                                        </button>
                                      </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php if ($this->session->userdata('sudah_login')) { ?>
                            <a onclick="myFunction()"  id="klik-laporkan">
                                <div class="flex-item text-pemilik h5 mb-0 font-weight-normal my-auto">
                                    Laporkan
                                </div>
                            </a>
                        <?php } else { ?>
                            <a onclick="swal('Maaf','Anda harus login terlebih dahulu sebelum memberikan laporan terhadap kos','info')"  id="klik-laporkan">
                                <div class="flex-item text-pemilik h5 mb-0 font-weight-normal my-auto">
                                    Laporkan
                                </div>
                            </a>
                        <?php } ?>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    </div>

    </div>

    </div>

    <script>
        $("#review").slideUp();
        $('input[name=rating]').change(function() {
            $("#review").slideDown();
        });
        <?= $this->session->flashdata('result') ?>

        $("#report").slideUp();
        

        function myFunction() {
          document.getElementById("klik-laporkan").click(); // Click on the checkbox
          $("#report").slideDown();
        }

        $("#report-text").slideUp();
        $("#btn-report").slideUp();
        $('input[name=report-tipe]').change(function() {
            $("#report-text").slideDown();
            $("#btn-report").slideDown();
        });
        <?= $this->session->flashdata('result') ?>
    </script>