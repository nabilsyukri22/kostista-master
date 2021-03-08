<!DOCTYPE html>
  <html lang="en">

    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <link rel="icon" href="<?= base_url() ?>assets/img/logo.ico" type="image/png" />
      <title>Kostista</title>
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

      <!-- Bootstrap Core Css -->
      <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

      <!-- Waves Effect Css -->
      <link href="<?php echo base_url() ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

      <!-- Animation Css -->
      <link href="<?php echo base_url() ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

      <!-- Custom Css -->
      <link href="<?php echo base_url() ?>assets/css/style1.css" rel="stylesheet">

      <!-- JQuery DataTable Css -->
      <link href="<?php echo base_url() ?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

      <!-- Colorpicker Css -->
      <link href="<?php echo base_url() ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

      <!-- Dropzone Css -->
      <link href="<?php echo base_url() ?>assets/plugins/dropzone/dropzone.css" rel="stylesheet">

      <!-- Multi Select Css -->
      <link href="<?php echo base_url() ?>assets/plugins/multi-select/css/multi-select.css" rel="stylesheet">

      <!-- Bootstrap Spinner Css -->
      <link href="<?php echo base_url() ?>assets/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

      <!-- Bootstrap Tagsinput Css -->
      <link href="<?php echo base_url() ?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

      <!-- Bootstrap Select Css -->
      <link href="<?php echo base_url() ?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

      <!-- noUISlider Css -->
      <link href="<?php echo base_url() ?>assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

      <!-- Custom Css -->
      <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

      <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
      <link href="<?php echo base_url() ?>assets/css/themes/all-themes.css" rel="stylesheet" />

      
    </head>

    <body class="theme-red">
      <!-- Page Loader -->
      <div class="page-loader-wrapper">
        <div class="loader">
          <div class="preloader">
            <div class="spinner-layer pl-cyan">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div>
              <div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
          </div>
          <p>Please wait...</p>
        </div>
      </div>
      <!-- #END# Page Loader -->
      <!-- Overlay For Sidebars -->
      <div class="overlay"></div>
      <!-- #END# Overlay For Sidebars -->


      <!-- Top Bar -->
      <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/images/kostista.png" width="160px" align="center"></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <!-- kosong -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- #Top Bar -->
      <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
          <!-- User Info -->
          <div class="user-info">
            <div class="image">
              <?php if ($sql[0]->profil_image != '') { ?>
                <img src="<?= $sql[0]->profil_image ?>" width="48" height="48" alt="User" />
              <?php } else if ($sql[0]->jk == 'Pria') { ?>
                <img src="<?php echo base_url() ?>assets/images/avatar male.png" width="48" height="48" alt="User" />
              <?php } else { ?> 
                <img src="<?php echo base_url() ?>assets/images/avatar female.png" width="48" height="48" alt="User" />
              <?php } ?>

            </div>
            <div class="info-container">
              <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $fullname ?></div>
              <div class="email"><?php echo $email ?></div>
              <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                  <li><a href="<?php echo base_url() ?>Login/logout"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- #User Info -->