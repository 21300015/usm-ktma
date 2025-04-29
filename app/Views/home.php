<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="light" data-body-image="img-1" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>Sistem Info Akademik | Universitas Saintek Muhammadiyah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Klinik DJK-ESDM" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="<?php echo base_url() ?>assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="<?php echo base_url() ?>assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url() ?>assets/css/select2.min.css" rel="stylesheet" />    

    <!-- Sweet Alert css-->
    <link href="<?php echo base_url() ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Layout config Js -->
    <script src="<?php echo base_url() ?>assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo base_url() ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?php echo base_url() ?>assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    <!--datatable css-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/buttons.dataTables.min.css">  
    <style type="text/css">
      .page-center {
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 0 20px;
      }
    </style>

</head>

<body>
    
    <!-- Begin page -->
    <div id="layout-wrapper">

    <div class="page-center">
      <div class="container">
        <div class="card card-body">
          <div class="d-flex bg-white">
            <div class="flex-1">
              <img src="<?= base_url('assets/images/logo_usm.png'); ?>" class="w-25 mb-3">
              <h5>Selamat Datang di layanan KTA Muhammadiyah Online</h5>
              <ul class="list-unstyled">
                  <li><i class="fa fa-caret-right"></i> <em class="fs-12">Layanan ini hanya berlaku untuk pemohon</em> <em class="fw-600">NBM baru</em>.</li> 
                  <li><i class="fa fa-caret-right"></i><em class="fs-12"> Permohonan akan <span class="fw-600">diproses</span> setelah melengkapi <span class="fw-600">upload blanko pengesahan, pas foto, dan bukti transfer</span></em></li>
               </ul>
              <a href="formKtam" class="btn btn-dark">DAFTAR KTMA</a>
            </div>
            <div class="divider-text divider-vertical"></div>
            <div class="flex-1">
              <h5 class="mb-3">Cek Status Pendaftaran</h5>
              <form action="<?= base_url('/ktam/cek-status') ?>" method="post">
                <!-- <div class="form-group mb-3">
                  <label>Email: </label>
                  <input type="email" name="email" class="form-control" placeholder="Email Terdaftar" required="">
                </div> -->
                <div class="form-group mb-3">
                  <label>NIK: </label>
                  <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK Terdaftar" required="">
                </div>

                <div class="form-group mb-3">
                  <label>Email: </label>
                  <input type="text" name="email" id="email" class="form-control" placeholder="Email Terdaftar" required="">
                </div>

                <div class="mg-t-20">
                  <button type="submit" class="btn btn-primary btn-block">Cari</button>
                </div>
              </form>
              <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger mt-3">
                    <?= session()->getFlashdata('error') ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="<?php echo base_url() ?>assets/js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/feather-icons/feather.min.js"></script>
    <script>
      $(function(){

        'use strict'

        feather.replace();

      })
    </script>
  </body>
</html>
