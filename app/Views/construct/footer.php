            <footer class="footer border-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © FASILKOM - USM.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                -
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-primary btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <!--jquery cdn-->
    <script src="<?php echo base_url() ?>assets/js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

    <div id="appfooterdata" style="display:none !important"><?php echo $encdata?></div>      

    <script src="<?php echo base_url() ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/node-waves/waves.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="<?php echo base_url() ?>assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="<?php echo base_url() ?>assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--select2 cdn-->
    <script src="<?php echo base_url() ?>assets/js/select2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/pages/select2.init.js"></script>
    
    <!--Swiper slider js-->
    <script src="<?php echo base_url() ?>assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url() ?>assets/js/app.js"></script>
    <script src="<?php echo base_url() ?>modules/app.js"></script>  

    <!-- Dashboard init -->
    <script src="<?php echo base_url() ?>assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- Sweet Alerts js -->
    <script src="<?php echo base_url() ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="<?php echo base_url() ?>assets/js/pages/sweetalerts.init.js"></script>
    
    <!-- Modern colorpicker bundle -->
    <script src="<?php echo base_url() ?>assets/libs/@simonwep/pickr/pickr.min.js"></script>

    <!-- init js -->
    <script src="<?php echo base_url() ?>assets/js/pages/form-pickers.init.js"></script>    

    <!--datatable js-->
    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>assets/js/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jszip.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/pages/datatables.init.js"></script>

    <?php echo $jsfiles?>

</body>

</html>