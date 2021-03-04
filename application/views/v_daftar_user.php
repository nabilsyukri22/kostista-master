<div class="container h-100">
    <div class="d-flex justify-content-center" style="min-height: 100vh; padding-top: 120px">
        <div class="user_card1">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="<?= base_url() ?>assets/img/logo_circle.png" class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form id="sign_up" method="POST" action="<?php echo base_url() ?>user/proses_daftar_user" style="width: 500px">
                    <div class="input-group mb-4">
                        <div class="input-group-append">
                             <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="username" placeholder="Nama Pengguna" required autofocus>
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" name="password" minlength="6" placeholder="Sandi" required>
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Sandi Konfirmasi" required>
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                        </div>
                        <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap" required autofocus>
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                        </div>
                        <div class="form-inline ml-2">
                            <input name="jk" type="radio" class="with-gap" id="radio_3" value="Pria" />
                            <label for="radio_3" class="mr-3">Pria</label>
                            <input name="jk" type="radio" id="radio_4" class="with-gap" value="Wanita" />
                            <label for="radio_4">Wanita</label>
                        </div>
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <!-- <small id="emailHelp" class="mt-0 form-text text-muted">We'll never share your email with anyone else.</small> -->
                    <div class="input-group mb-4">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" class="form-control" name="no_hp" placeholder="No HP" required autofocus>
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                        </div>
                        <textarea rows="4" class="form-control no-resize" placeholder="Alamat" name="alamat"></textarea>
                    </div>
                    <input type="hidden" class="form-control" name="id_role" value="2" required autofocus>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink" required>
                        <label for="terms">Saya bersedia mendaftarkan diri di Kostista</a>.</label>
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button id="daftar" name="button" class="btn login_btn">Daftar</button>
                    </div>
                </form>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    Sudah Punya Akun? <a href="<?php echo base_url(); ?>Login" class="ml-2">Masuk</a>
                </div>
                <div class="d-flex justify-content-center links">
                    <a href="<?php echo base_url(); ?>">Halaman Utama</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#email').on('blur', function() {
        var email = $('#email').val();

        $.ajax({
            url: '<?= base_url(); ?>user/cek_email',
            type: 'post',
            data: {
                'email': email,
            },
            success: function(response) {
                if (response == 'taken') {
                    email_state = false;
                    //   $('#email').parent().removeClass();
                    $('#email').css({
                        'border-color': 'red'
                    });
                    document.getElementById("daftar").disabled = true;
                    $('#email').siblings("span").text('Sorry... Email already taken');
                    // $('#daftar').setAttribute('type','button');
                    // $('#daftar').click(function() {
                    //     swal({
                    //         text: "Email sudah terdaftar",
                    //     });
                    // })

                } else if (response == 'not_taken') {
                    email_state = true;
                    //   $('#email').parent().removeClass();
                    $('#email').css({
                        'border-color': 'green'
                    });
                    document.getElementById("daftar").disabled = false;
                    $('#email').siblings("span").text('Email available');
                }
            }
        });
    });
</script>