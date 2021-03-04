<script src="https://apis.google.com/js/platform.js" async defer></script>
<div class="container h-100">
    <div id="alert-label" style="position: absolute; z-index:1000; left: 50%; transform: translateX(-50%);">
    </div>
    <div class="d-flex justify-content-center" style="height: 100vh; padding-top: 70px">
        <div class="user_card my-auto">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="<?= base_url() ?>assets/img/logo_circle.png" class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form id="sign_in" method="POST" action="<?php echo base_url() ?>Login/proses_login">
                    <div class="row mb-2">
                        <div class="col-12">
                            <?php echo $this->session->flashdata('suksesdaftar'); ?>
                            <?php echo $this->session->flashdata('notif'); ?>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="email" class="form-control input_user" value="" placeholder="Email" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control input_pass" value="" placeholder="Password" required>
                    </div>
                    <div class="d-flex justify-content-center my-3 login_container">
                        <button type="submit" name="button" class="btn login_btn">Masuk</button>
                    </div>
                    <div class="d-flex justify-content-center my-3 login_container">
                        <div class="g-signin2" data-onsuccess="onSignIn" data-longtitle="true"></div>
                    </div>
                </form>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    Belum Punya Akun? <a href="<?php echo base_url(); ?>user/registrasi" class="ml-2">Daftar</a>
                </div>
                <div class="d-flex justify-content-center links">
                    <a href="<?php echo base_url(); ?>">Halaman Utama</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var id, name, image_url, email;

    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        id = profile.getId();
        name = profile.getName();
        image_url = profile.getImageUrl();
        email = profile.getEmail();
        nim = email.slice(0, -11);
        if (is_stis(email)) {
            if (!check_db(nim)) {
                post("<?= base_url() ?>user/proses_daftar_user_google", {
                    username: nim,
                    fullname: name,
                    email: email,
                    profil_image : image_url,
                    id_role: 3
                });
            } else {
                post("<?= base_url() ?>login/proses_login_google", {email: email});
            }
        } else {
            show_alert("Maaf anda harus menggunakan email berdomain STIS");
            signOut();
        }
    }

    function post(path, params, method = 'post') {
        const form = document.createElement('form');
        form.method = method;
        form.action = path;

        for (const key in params) {
            if (params.hasOwnProperty(key)) {
                const hiddenField = document.createElement('input');
                hiddenField.type = 'hidden';
                hiddenField.name = key;
                hiddenField.value = params[key];

                form.appendChild(hiddenField);
            }
        }

        document.body.appendChild(form);
        form.submit();
    }

    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function() {
            console.log('User signed out.');
        });
    }

    function is_stis(email) {
        if (email.includes("@stis.ac.id")) {
            return true;
        }
        return false;
    }

    function check_db(nim) {
        var exist = false;
        $.ajax({
            url: "<?= base_url() ?>login/check_db/" + nim,
            type: "GET",
            dataType: "json",
            async: false,
            success: function(result) {
                exist = result;
            }
        });
        return exist;
    }

    function show_alert(error) {
        $("#alert-label").append(`
        <div class="alert alert-danger alert-dismissible w-100 mt-4 fade show" role="alert">
            <span class="error-msg">` + error + `</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        `);
    }
</script>