        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu border-end">
            <!-- LOGO -->
            <div class="navbar-brand-box bg-light">
                <!-- Dark Logo-->
                <a href="#!" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo base_url() ?>assets/images/logo_usm.png" alt="" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo base_url() ?>assets/images/banner_fik.png" alt="" height="52">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="#!" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?php echo base_url() ?>assets/images/logo_usm.png" alt="" height="50">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo base_url() ?>assets/images/banner_fik.png" alt="" height="52">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>                   
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu"></span></li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('dashboard')?>" class="nav-link menu-link">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboard">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link master" href="#sidebarKtam" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarKtam">
                                <i class="bx bx-plus-medical"></i> <span data-key="t-master">KTAM</span>
                            </a>
                            <div class="collapse menu-dropdown master" id="sidebarKtam">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('ktam_list')?>" class="nav-link" data-key=""> Data KTAM </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('master/datacabang')?>" class="nav-link" data-key=""> Data Cabang </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link master" href="#sidebarMaster" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaster">
                                <i class="bx bx-plus-medical"></i> <span data-key="t-master">Master Data</span>
                            </a>
                            <div class="collapse menu-dropdown master" id="sidebarMaster">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('master/datamhs')?>" class="nav-link dtmhs" data-key=""> Data Mahasiswa </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('master/datadosen')?>" class="nav-link dtdosen" data-key=""> Data Dosen </a>
                                    </li> 
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('master/datauser')?>" class="nav-link dtuser" data-key=""> Data User </a>
                                    </li>                                                                          
                                </ul>
                            </div>
                        </li>                                                
                        <li class="nav-item">
                            <a href="<?php echo site_url('master/infoakademik')?>" class="nav-link menu-link">
                                <i class="bx bx-info-square"></i> <span data-key="">Info Akademik</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('master/regcamaba')?>" class="nav-link menu-link">
                                <i class="bx bx-user-plus"></i> <span data-key="">Register Calon Mahasiswa</span>
                            </a>
                        </li>                        
                        <li class="nav-item">
                            <a href="<?php echo site_url('master/layanan')?>" class="nav-link menu-link dtlayanan">
                                <i class="bx bx-file"></i> <span data-key="">Layanan Akademik</span>
                            </a>
                        </li>                        
                        <li class="nav-item">
                            <a href="<?php echo site_url('master/manajemensurat')?>" class="nav-link dtsurat">
                                <i class="bx bx-mail-send"></i> <span data-key="t-manj-surat">Manajemen Surat</span>
                            </a>
                        </li>                        
                        <li class="nav-item">
                            <a href="<?php echo site_url('master/prosedur')?>" class="nav-link dtpedoman">
                                <i class="bx bx-file"></i> <span data-key="t-pedoman">Pedoman &amp; Prosedur</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarMbkm" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMbkm">
                                <i class="lab la-markdown"></i> <span data-key="t-jadwal">MBKM</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMbkm">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('mbkm/tahapan')?>" class="nav-link dttahapan" data-key=""> Tahapan </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('mbkm/persyaratan')?>" class="nav-link dtpersyaratan" data-key=""> Persyaratan </a>
                                    </li>                                    
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('mbkm/template')?>" class="nav-link dttemplate" data-key=""> Template </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('mbkm/surattugasmbkm')?>" class="nav-link dtsurtugmbkm" data-key=""> Surat Tugas Pembimbing MBKM</a>
                                    </li>                                    
                                </ul>
                            </div>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarSkripsi" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSkripsi">
                                <i class="bx bxs-calendar-event"></i> <span data-key="t-jadwal">Skripsi/Tugas Akhir</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarSkripsi">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('skripsi/persyaratan')?>" class="nav-link dtsyaratskripsi" data-key=""> Persyaratan </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('skripsi/tahapan')?>" class="nav-link dttahapanskripsi" data-key=""> Tahapan </a>
                                    </li>                                    
                                    <!--li class="nav-item">
                                        <a href="#" class="nav-link" data-key="t-jadwal-ti"> Pengajuan Judul </a>
                                    </li-->                                    
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('skripsi/template')?>" class="nav-link dttemplateskripsi" data-key=""> Template Penulisan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('skripsi/surtugskripsi')?>" class="nav-link dtsurtugmbkm" data-key=""> ST Pembimbing Skripsi/TA </a>
                                    </li>                                    
                                    <li class="nav-item">
                                        <a href="<?php echo site_url('skripsi/monitoringsidang')?>" class="nav-link dtmonsidang" data-key="t-jadwal-sd"> Monitoring Sidang</a>
                                    </li>                                    
                                </ul>
                            </div>
                        </li>                                                  
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarYudisium" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarYudisium">
                                <i class="las la-user-graduate"></i> <span data-key="t-kur">Yudisium</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarYudisium">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-key="t-kurikulum-si"> Tahapan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-key="t-kurikulum-ti"> Persyaratan</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarKur" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarKur">
                                <i class="bx bxs-graduation"></i> <span data-key="t-kur">Kurikulum</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarKur">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="kurikulum_si.php" class="nav-link" data-key="t-kurikulum-si"> S-1 Sistem Informasi </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="kurikulum_ti.php" class="nav-link" data-key="t-kurikulum-ti"> S-1 Teknik Informatika </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="kurikulum_sd.php" class="nav-link" data-key="t-kurikulum-sd"> S-1 Data Sains </a>
                                    </li>
                                </ul>
                            </div>                            
                        </li>                                               
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#">
                                <i class="bx bxs-calendar"></i> <span data-key="">Kalender Akademik</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('contact')?>" class="nav-link menu-link">
                                <i class="bx bx-phone"></i> <span data-key="">Help Desk </span>
                            </a>
                        </li>                        
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
