<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="col-lg-12">
            <?php foreach ($kos as $kos) : ?>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <img src="<?php echo base_url(); ?>file/kos_image/<?= $kos->image_header ?>" width="100%">
                        <div class="caption">
                            <div class="h4"><a title="<?= $kos->nama ?>" href="<?=base_url(); ?>detail/<?=$kos->slug ?>"><?= $kos->nama ?></a></div>
                            <div>
                                <?php
                                if ($kos->lokasi == 'Bonsay') {
                                    echo '<span class="btn bg-blue" width="75px">' . strtoupper($kos->lokasi) . '</span>';
                                } elseif ($kos->lokasi  == 'Bonasel') {
                                    echo '<span class="btn bg-grey width="75px">' . strtoupper($kos->lokasi) . '</span>';
                                } else {
                                    echo '<span class="btn bg-pink width="75px">' . strtoupper($kos->lokasi) . '</span>';
                                }
                                ?>
                                <?php
                                if ($kos->tipe == 'Putra') {
                                    echo '<span class="btn bg-blue width="75px">' . strtoupper($kos->tipe) . '</span>';
                                } elseif ($kos->tipe  == 'Putri') {
                                    echo '<span class="btn bg-pink width="75px">' . strtoupper($kos->tipe) . '</span>';
                                } else {
                                    echo '<span class="btn bg-grey width="75px">' . strtoupper($kos->tipe) . '</span>';
                                }
                                ?>
                                <?php
                                    echo '<span class="btn bg-green">' . strtoupper($kos->jumlah_tersedia) . ' Kamar Tersedia</span>';
                                ?>
                            </div>
                            <div class="h5">Rp. <?= $this->cart->format_number($kos->harga_min); ?> - Rp. <?= $this->cart->format_number($kos->harga_max); ?></div>
                            <div class="h5"><?= $kos->alamat ?></div>
                            

                            
                            <p>
                                <a href="<?= base_url() ?>user/edit_kos/<?= $kos->id_kos ?>" class="btn btn-primary waves-effect" role="button">EDIT</a>
                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" href="<?= base_url() ?>user/delete_kos/<?= $kos->id_kos ?>" class="btn btn-danger waves-effect" role="button">DELETE</a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <!--  <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="card">
                        <div class="header">
                            <h2>
                                <a href="#">
                                    <button type="button" class="btn btn-primary waves-effect">
                                        <i class="material-icons">person_add</i>&nbsp;TAMBAH DATA</button>
                                    
                                </a>
                            </h2>

                        </div>
                        <div class="body">

                            

                             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                 
                                <thead>
                                    <tr>
                                        <th>ID KOS</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Alamat</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID KOS</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Alamat</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                    </tr>
                                </tfoot>
                                
                                <tbody>
                                <?php foreach ($sql as $kos => $k) { ?>
                                    <tr>
                                        <td><?php echo $k->id_kos; ?></td>
                                        <td><?php echo $k->nama; ?></td>
                                        <td><?php echo $k->deskripsi; ?></td>
                                        <td><?php echo $k->date; ?></td>
                                        <td><?php echo $k->time; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>

                            </table>  
                        </div>
                    </div> 
                </div>
            </div> -->
        <!-- #END# Basic Examples -->
    </div>
</section>