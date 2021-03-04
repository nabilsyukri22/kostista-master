<section class="content">
            <div class="container-fluid">
                <!-- Basic Examples -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <!-- HEADER PAGE
                            <div class="header">
                                <h2>
                                    <a href="#">
                                        <button type="button" class="btn btn-primary waves-effect">
                                            <i class="material-icons">person_add</i>&nbsp;TAMBAH DATA</button>
                                        
                                    </a>
                                </h2>
                            </div> -->
                            <!-- END HEADER PAGE-->

                            <div class="body">
                                <div class="row clearfix">
                                    
                                </div>

                                <div class="alert alert-success">
                                    <strong>HALLO !</strong> <?php echo strtoupper($fullname) ?>, Anda login sebagai <b>User</b>. <br>
                                    <?php if ($id_role=='1') { ?>
                                        Klik <a href="<?php echo base_url() ?>admin"><b>disini</b></a> untuk login sebagai admin.
                                    <?php } ?>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Examples -->
            </div>
        </section>



