    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->

    <section class="content">
        <div class="container-fluid">
            <!-- DATA KOS -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Kost
                            </h2>
                        </div>
                        <div class="body">

                             <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                 
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Gambar</th>
                                        <th>Tipe</th>
                                        <th>Harga</th>
                                        <!-- <th>Alamat</th> -->
                                        <!-- <th>Deskripsi</th> -->
                                        <th>Datetime</th>
                                        <th>Oleh</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <?php foreach ($kos as $k) { ?>
                                    <tr>
                                        <td><?php echo $k->id_kos; ?></td>
                                        <td><a href="<?=base_url(); ?>detail/<?=$k->slug ?>"><?php echo $k->nama; ?></a></td>
                                        <td><img width="100px" src="<?php echo base_url()?>file/kos_image/<?=$k->image_header; ?>"></td>
                                        <td><?php echo $k->tipe; ?></td>
                                        <td><?php echo $k->harga_min."<br>sd<br>".$k->harga_max; ?></td>
                                        <!-- <td><?php echo character_limiter($k->alamat); ?></td> -->
                                        <!-- <td><?php echo character_limiter($k->deskripsi,50   ); ?></td> -->
                                        <td><?php echo $k->date; ?></td>
                                        <td><?php echo $k->email; ?></td>
                                        
                                        <td><?php 
                                        if($k->status == '1'){
                                            echo 'Publish';
                                        }elseif($k->status == '0'){
                                            echo 'Unpublish';
                                        } ?></td>
                                        <td style="text-align: center">
                                            <?php if ($k->status==1) {
                                                echo "<a href=\"".base_url('Admin/unpublish_kos_admin/'.$k->id_kos.'/view_kos')."\" onclick=\"return confirm('Kos akan di unpublish, apakah anda yakin?')\"><button type=\"button\" style=\"width:75px;\" class=\"btn btn-warning waves-effect\">Draft</button></a>";
                                            } else {
                                                echo "<a href=\"".base_url('Admin/publish_kos_admin/'.$k->id_kos.'/view_kos')."\" onclick=\"return confirm('Kos akan di publish, apakah anda yakin?')\"><button type=\"button\" style=\"width:75px;\" class=\"btn btn-primary waves-effect\">Publish</button></a>";
                                            } ?>
                                        
                                        <a onclick="return confirm('Apa anda yakin akan menghapus data kos ini ?')" href="<?php echo base_url('Admin/hapus_kos_admin/'.$k->id_kos.'/view_kos')?>">
                                            <button type="button" style="width:75px;margin-top: 10px;" class="btn btn-danger waves-effect">Hapus</button>
                                        </a>
                                        
                                        </td>
                                    </tr>
                                <?php }?>
                                </tbody>

                            </table>
                            <!-- END DATA KOS-->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url()?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url()?>assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url()?>assets/js/admin.js"></script>
    <script src="<?php echo base_url()?>assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url()?>assets/js/demo.js"></script>
</body>

</html>