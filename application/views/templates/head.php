<!DOCTYPE html>
  <html lang="en">

    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta http-equiv="X-UA-Compatible" content="ie-edge" />
      <meta name="google-signin-client_id" content="1001833581658-v4p7e0oj6lho72vpjb22nc9cuvb8to3a.apps.googleusercontent.com">
      <link rel="icon" href="<?= base_url() ?>assets/img/logo.ico" type="image/png" />
      <title>
        Kostista
      </title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon.css" />
      <link rel="stylesheet" href="<?= base_url() ?>assets/css/themify-icons.css" />
      <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.css" />
      <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/nice-select/css/nice-select.css" />
      <script src="https://kit.fontawesome.com/57f6744e01.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" />
      <link rel="stylesheet" href="<?= base_url() ?>assets/css/uikit.min.css" />
      <script src="<?= base_url() ?>assets/js/vendor/jquery/jquery.js"></script>

      <!--      
      <script src="<?= base_url() ?>assets/js/vendor/jquery/jquery.js"></script>
      <script src="<?= base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
      <script src="<?= base_url() ?>assets/js/popper.js"></script>
      <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
 -->
    
      <!--gmaps Js-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
      <script src="<?= base_url() ?>assets/js/gmaps.min.js"></script>
      <script src="<?= base_url() ?>assets/js/theme.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <!-- masukin leaflet -->
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
      <!-- Make sure you put this AFTER Leaflet's CSS -->
      <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin="">
      </script>

      <style media="screen">
        #mapid { 
          top: 140px;
          bottom: 0;
          height : 70vh;
          position: fixed;
          right: 0;
        }

        .filternav{
          border-top: solid white 1px;
          color: white;
          width: 0;
          position: fixed;
          z-index: 999;
          top: 130px;
          left: 0;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }

        .filternav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
        }
        @media (max-width:700px){
          #mapid{
            display: none;
            position: static;
          }
        }

         
      </style>

    </head>

    <body class="bg-light">
    