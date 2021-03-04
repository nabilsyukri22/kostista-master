<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Kos
                        </h2>

                    </div>
                    <div class="body">
                        <!-- Horizontal Layout -->
                        <?php foreach ($kos as $k) { ?>
                            <form action="<?php echo site_url('user/proses_update_kos') ?>" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                                <input type="hidden" name="id_kos" value="<?php echo $k->id_kos ?>" class="form-control">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama">Nama</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nama" id="nama" value="<?php echo $k->nama ?>" class="form-control" placeholder="Masukan Nama Kosan" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="jenis">Jenis Kos</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="tipe" required>
                                                <option value="Putra">Putra</option>
                                                <option value="Putri">Putri</option>
                                                <option value="Campur">Campur</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="image">Upload Gambar</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <input type="file" name="image_header"><br>
                                            <?php
                                            if (!empty($k->image_header)) { ?>
                                                <img width="100px" src="<?php echo base_url() . "file/kos_image/" . $k->image_header; ?>" title="Preview Logo">

                                            <?php }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="image">Upload Gambar 2</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <input type="file" name="image_header2"><br>
                                            <?php
                                            if (!empty($k->image_header2)) { ?>
                                                <img width="100px" src="<?php echo base_url() . "file/kos_image/" . $k->image_header2; ?>" title="Preview Logo">

                                            <?php }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="image">Upload Gambar 3</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <input type="file" name="image_header3"><br>
                                            <?php
                                            if (!empty($k->image_header3)) { ?>
                                                <img width="100px" src="<?php echo base_url() . "file/kos_image/" . $k->image_header3; ?>" title="Preview Logo">

                                            <?php }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="deskripsi">Deskripsi</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <!-- <input type="text" name="deskripsi" value="<?php echo $k->deskripsi ?>" id="deskripsi" class="form-control" placeholder="Masukan Deskripsi"> -->
                                                <textarea rows="4" name="deskripsi" value="<?php echo $k->deskripsi ?>" class="form-control no-resize" placeholder="Deskripsikan kosanmu dengan jelas..." required><?php echo $k->deskripsi ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="alamat">Alamat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <!--  <input type="text" name="alamat" value="<?php echo $k->alamat ?>" id="alamat" class="form-control" placeholder="Masukan Alamat"> -->
                                                <textarea rows="4" name="alamat" class="form-control no-resize" placeholder="Deskripsikan alamat kosanmu dengan jelas..." required><?php echo $k->alamat ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="lokasi">Lokasi</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="lokasi" required>
                                                    <option value="Bonasut" <?= $k->lokasi == "Bonasut" ? "selected" : "" ?>>Bonasut</option>
                                                    <option value="Bonasel" <?= $k->lokasi == "Bonasel" ? "selected" : "" ?>>Bonasel</option>
                                                    <option value="Bonsay" <?= $k->lokasi == "Bonsay" ? "selected" : "" ?>>Bonsay</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="harga_min">Harga Minimum</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" id="harga_min" value="<?php echo $k->harga_min ?>" class="form-control" name="harga_min" placeholder="Masukan Harga Minimum" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="harga_max">Harga Maksimum</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" id="harga_max" value="<?php echo $k->harga_max ?>" class="form-control" name="harga_max" placeholder="Masukan Harga Maksimum" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="jarak">Jarak (m)</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" id="jarak" class="form-control" name="jarak" placeholder="Masukan Jarak" required value="<?=$k->jarak?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama_pemilik">Nama Pemilik</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="nama_pemilik" class="form-control" name="nama_pemilik" placeholder="Masukan Nama Pemilik" required value="<?=$k->nama_pemilik?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="no_hp_pemilik">No. HP Pemilik</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" id="no_hp_pemilik" class="form-control" name="no_hp_pemilik" placeholder="Masukan No. HP Pemilik" required value="<?=$k->no_hp_pemilik?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="jumlah_tersedia">Jumlah Kamar Tersedia</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" id="jumlah_tersedia" class="form-control" name="jumlah_tersedia" placeholder="Masukan Jumlah Kamar Tersedia" required value="<?=$k->jumlah_tersedia?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="jenis">Status</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select class="form-control show-tick" name="status" required>
                                                <option value="1">Publish</option>
                                                <option value="0">Draft</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Simpan">
                                        <a href="<?php echo base_url('user/data_kos')?>"><input type="button" class="btn btn-danger m-t-15 waves-effect" value="Cancel"></a>

                                    </div>
                                </div>


                            </form>
                        <?php } ?>
                        <!-- #END# Horizontal Layout -->

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>