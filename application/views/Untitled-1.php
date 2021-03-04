    <div class="signup-box">
        <div class="logo">
            <img src="<?php echo base_url() ?>assets/images/mbakos2.png" width="350px" align="center">
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST" action="<?php echo base_url() ?>user/proses_daftar_user">
                    <div class="msg">Form Daftar</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <!-- Fullname -->
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="fullname" placeholder="Fullname" required autofocus>
                        </div>
                    </div>
                    <!-- END Fullname -->

                    <!-- Jenis Kelamin  -->
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input name="jk" type="radio" class="with-gap" id="radio_3" value="Pria" />
                            <label for="radio_3">Pria</label>
                            <input name="jk" type="radio" id="radio_4" class="with-gap" value="Wanita" />
                            <label for="radio_4">Wanita</label>
                        </div>
                    </div>
                    <!-- END Jenis Kelamin -->



                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                    </div>

                    <!-- Nohp -->
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">phone</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="no_hp" placeholder="No HP" required autofocus>
                        </div>
                    </div>
                    <!-- END Nohp -->

                    <!-- Alamat -->
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">location_on</i>
                        </span>
                        <div class="form-line">
                            <textarea rows="4" class="form-control no-resize" placeholder="Alamat" name="alamat"></textarea>
                        </div>
                    </div>
                    <!-- END Alamat -->

                    <input type="hidden" class="form-control" name="id_role" value="2" required autofocus>



                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">Saya setuju daftar di Mbakos</a>.</label>
                    </div>

                    <button class="btn btn-block btn-lg bg-info waves-effect" type="submit">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="<?php echo base_url() ?>Login">Sudah mempunyai akun?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo base_url() ?>Main_Controller">Halaman Utama</a>
                    </div>
                </form>
            </div>
        </div>
    </div>