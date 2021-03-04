<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h3>Form Edit User</h3>
                        </div>
                        <div class="body"> 
                            <!-- Horizontal Layout -->
                            <?php foreach($user as $u){ ?>
                                            <form  method="POST" id="form_edit_user" class="form-horizontal"  action="<?php echo site_url('admin/proses_update_user')?>">
                                               <input type="hidden" name="id_user" value="<?php echo $u->id_user ?>">
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="nama">Username</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $u->username ?>" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <!-- FULLNAME -->
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="password">Nama Lengkap</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="fullname" id="fullname" class="form-control" value="<?php echo $u->fullname ?>" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <!-- END FULLNAME -->
                                                 <!-- PASSWORD -->
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="password">Password</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="password" name="password" id="password" class="form-control" value="<?php echo $u->password ?>" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <!-- END FULLNAME -->

                                                 <!-- ID ROLE -->
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="jenis">Role</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                                <select class="form-control show-tick" name="id_role" value="<?php echo $u->id_role ?>">
                                                                    <option value="2">User</option>
                                                                    <option value="1">Admin</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END ID ROLE -->

                                                <div class="row clearfix">
                                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                                        <a href="<?php echo base_url('admin/view_admin')?>"><input type="button" class="btn btn-danger m-t-15 waves-effect" value="Cancel"></a>
                                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Submit">
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



