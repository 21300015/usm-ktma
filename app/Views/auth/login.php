<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.png'); ?>">

    <title>Pendaftaran KTMA Universitas Saintek Muhammadiyah</title>

    <!-- vendor css -->
    <link href="<?= base_url('lib/@fortawesome/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('lib/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css'); ?>">

  </head>
  <body>
    <div class="signin-panel">
      <img src="<?= base_url('assets/images/bg1.png'); ?>" class-Name="svg-bg">

      <div class="signin-sidebar">
        <div class="signin-sidebar-body">
          <a href="#" class="sidebar-logo mg-b-40"><span>KELOMPOK IV MBKM</span></a>
          <h4 class="signin-title">Welcome back!</h4>
          <h5 class="signin-subtitle">Please signin to continue.</h5>
          <?php if (session()->getFlashdata('error')) : ?>
                <p><?= session()->getFlashdata('error') ?></p>
          <?php endif; ?>
          <form method="post" action="<?= site_url('/login') ?>">
            <div class="signin-form">
              <div class="form-group">
                <label>Email</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Enter your Username" value="" required>
              </div>

              <div class="form-group">
                <label class="d-flex justify-content-between">
                  <span>Password</span>
                  <a href="" class="tx-13">Forgot password?</a>
                </label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" value="" required>
              </div>

              <div class="form-group d-flex mg-b-0">
                <button type="submit" class="btn btn-brand-01 btn-uppercase flex-fill">Sign In</button>
              </div>
            </div>
          </form>

          <p class="mg-t-auto mg-b-0 tx-sm tx-color-03">By signing in, you agree to our <a href="">Terms of Use</a> and <a href="">Privacy Policy</a></p>
        </div><!-- signin-sidebar-body -->
      </div><!-- signin-sidebar -->
    </div><!-- signin-panel -->

    <script src="<?= base_url('lib/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('lib/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('lib/feather-icons/feather.min.js'); ?>"></script>
    <script src="<?= base_url('lib/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>

    <script>
      $(function(){

        'use strict'

        feather.replace();

        new PerfectScrollbar('.signin-sidebar', {
          suppressScrollX: true
        });

      })
    </script>
    <script src="<?= base_url('assets/js/svg-inline.js'); ?>"></script>
  </body>
</html>
