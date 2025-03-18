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

    <title>Pendaftaran KTMA Universitas Saintek Muhamadiyah</title>

    <!-- vendor css -->
    <link href="<?= base_url('assets/libs/@fortawesome/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/libs/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/libs/prismjs/themes/prism-tomorrow.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/libs/select2/css/select2.min.css'); ?>" rel="stylesheet">

    <!-- Sweet Alert css-->
    <link href="<?php echo base_url() ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- Layout config Js -->
    <script src="<?php echo base_url() ?>assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url() ?>assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    

    <!-- template css -->
    <!-- App Css-->
    <link href="<?php echo base_url() ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet" type="text/css" />

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

      .select2-container{
        display: block;
      }
    </style>
  </head>
  <body class="bg-gray-100">
    <nav class="navbar bg-white shadow-base">
      <a class="navbar-brand tx-bold tx-spacing--2 tx-color-01" href="#">LOGO</a>
    </nav>

   
    <div class="container mt-5">
      <div class="card bg-white">
        <div class="card-body">
          <h5 id="section2" class="tx-semibold">Pandaftaran KTMA</h5>
        </div>

        <?php if (session()->getFlashdata('errors')) : ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>
        
        <form id="ktam-form" action="<?= site_url('formKtam/update') ?>" method="POST">
          <div id="wizard2">
            <h3>Data Diri</h3>
            <section>
              <p class="mg-b-20">Try the keyboard navigation by clicking arrow left or right!</p>

              <div class="row row-sm">
                <div class="col-md-6 mb-3">
                  <label>Daerah <span class="tx-danger">*</span></label>
                  <select class="form-control select2-no-search" id="daerah" name="daerah" required="">
                      <option value="">-- Pilih Daerah --</option> 
                      <option value="Kota Jakarta Selatan">Kota Jakarta Selatan</option>
                      <option value="Kota Jakarta Timur">Kota Jakarta Timur</option>
                      <option value="Kota Depok">Kota Depok</option>
                      <option value="Kota Bogor">Kota Bogor</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label>Cabang <span class="tx-danger">*</span></label>
                  <select id="cabang" class="form-control select2-no-search" name="cabang" required="">
                      <option value="">-- Pilih Cabang --</option>
                  </select>
                </div>
              </div>

              <div class="row row-sm">
                <div class="col-md-6 mb-3">
                  <label class="form-control-label">Nama Lengkap: <span class="tx-danger">*</span></label>
                  <input id="nama_lengkap" class="form-control" name="nama_lengkap" placeholder="" type="text" value="<?= $anggota['nama_lengkap']; ?>" required>
                </div><!-- col -->
                <div class="col-md-6 mb-3">
                  <label class="form-control-label">NIK: <span class="tx-danger">*</span></label>
                  <input id="nik" class="form-control" name="nik" placeholder="" type="text" value="<?= $anggota['nik'] ?>" required>
                </div><!-- col -->
              </div>

              <div class="row row-sm">
                <div class="col-md-4 mb-3">
                  <label class="form-control-label">Gelar:</label>
                  <input id="gelar_depan" class="form-control" name="gelar_depan" placeholder="Gelar Depan" type="text" value="<?= $anggota['gelar_depan']; ?>" required>
                </div><!-- col -->
                <div class="col-md-4 mb-3 d-flex align-items-end">
                  <input id="gelar_belakang" class="form-control" name="gelar_belakang" placeholder="Gelar Belakang" type="text" value="<?= $anggota['gelar_belakang']; ?>" required>
                </div><!-- col -->
              </div>

              <div class="row row-sm">
                <div class="col-md-4 mb-3">
                  <label class="form-control-label">Tempat, Tanggal Lahir: <span class="tx-danger">*</span></label>
                  <input id="tempat_lahir" class="form-control" name="tempat_lahir" placeholder="Tempat" type="text" value="<?= $anggota['tempat_lahir']; ?>" required>
                </div><!-- col -->
                <div class="col-md-4 mb-3 d-flex align-items-end">
                  <input id="tanggal_lahir" class="form-control flatpickr-input" name="tanggal_lahir" placeholder="Tanggal Lahir" type="text" data-provider="flatpickr" data-date-format="d-m-Y" readonly="readonly" value="<?= $anggota['tanggal_lahir']; ?>" required>
                </div><!-- col -->
              </div><!-- row -->

              <div class="row row-sm">
                <div class="col-md-4 mb-3">
                  <label class="form-control-label">Jenis Kelamin <span class="tx-danger">*</span></label>
                  <div class="">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-Laki" class="custom-control-input">
                      <label class="custom-control-label" for="Lakilaki">Laki-laki</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" class="custom-control-input">
                      <label class="custom-control-label" for="Perempuan">Perempuan</label>
                    </div>
                  </div>
                </div><!-- col -->

                <div class="col-md-4 mb-3">
                  <label class="form-control-label">Status Perkawinan <span class="tx-danger">*</span></label>
                  <div class="">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="menikah" name="status_perkawinan" value="Menikah" class="custom-control-input">
                      <label class="custom-control-label" for="menikah">Menikah</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="belum_menikah" name="status_perkawinan" value="Belum Menikah" class="custom-control-input">
                      <label class="custom-control-label" for="belum_menikah">Belum Menikah</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="janda" name="status_perkawinan" value="Janda" class="custom-control-input">
                      <label class="custom-control-label" for="janda">Janda</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="duda" name="status_perkawinan" value="Duda" class="custom-control-input">
                      <label class="custom-control-label" for="duda">Duda</label>
                    </div>
                  </div>
                </div><!-- col -->
              </div><!-- row -->

              <div class="row row-sm">
                <div class="col-md-6 mb-3">
                  <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                  <input type="email" id="email" class="form-control" name="email" placeholder="" type="text" value="<?= $anggota['email']; ?>" required>
                </div><!-- col -->
                <div class="col-md-6 mb-3">
                  <label class="form-control-label">Nomor Telp./HP: <span class="tx-danger">*</span></label>
                  <input id="nomor_hp" class="form-control" name="nomor_hp" placeholder="" type="text" value="<?= $anggota['nomor_hp']; ?>" required>
                </div><!-- col -->
              </div>
              
              <div class="row row-sm">
                <div class="col-md-6 mb-3">
                  <label class="form-control-label">Profesi: <span class="tx-danger">*</span></label>
                  <select class="form-control select2-no-search" name="profesi" id="profesi" required="">
                    <option value="" selected="selected">Pilih..</option>
                    <option value="Pensiunan">Pensiunan</option>
                    <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                    <option value="Pegawai/Karyawan">Pegawai/Karyawan</option>
                    <option value="Pengusaha">Pengusaha</option>
                    <option value="Pengrajin">Pengrajin</option>
                    <option value="Pedagang">Pedagang</option>
                    <option value="Arsitek">Arsitek</option>
                    <option value="Apoteker">Apoteker</option>
                    <option value="Paramedis">Paramedis</option>
                    <option value="Advokat">Advokat</option>
                    <option value="Akuntan">Akuntan</option>
                    <option value="Insinyur">Insinyur</option>
                    <option value="Dokter">Dokter</option>
                    <option value="Nelayan">Nelayan</option>
                    <option value="Petani">Petani</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Guru">Guru</option>
                    <option value="Lain-lain">Lain-lain</option>
                  </select>
                </div><!-- col -->
                <div class="col-md-6 mb-3">
                  <label class="form-control-label">Profesi Lainnya:</label>
                  <input id="profesi_lainnya" class="form-control" name="profesi_lainnya" placeholder="" type="text" value="<?= $anggota['profesi_lainnya']; ?>">
                </div><!-- col -->
              </div>

              <div class="row row-sm">
                <div class="col-md-6 mb-3">
                  <label class="form-control-label">Pekerjaan: <span class="tx-danger">*</span></label>
                  <select class="form-control select2-no-search" name="pekerjaan" id="pekerjaan" required="">
                    <option value="" disabled="" selected="">Select</option>
                    <option value="Negeri/TNI/POLRI">Negeri/TNI/POLRI</option>
                    <option value="Instansi Swasta">Instansi Swasta</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Belum Bekerja">Belum Bekerja</option>
                  </select>
                </div><!-- col -->
                <div class="col-md-6 mb-3">
                  <label class="form-control-label">Instansi/Tempat kerja:</label>
                  <input id="tempat_kerja" class="form-control" name="tempat_kerja" placeholder="" type="text" value="<?= $anggota['tempat_kerja']; ?>">
                </div><!-- col -->
              </div>
            </section>

            <h3>Data Alamat</h3>
            <section>
              <p>Wonderful transition effects.</p>
              <div class="row row-sm">
                <div class="col-md-6 mb-3">
                  <label class="form-control-label">Provinsi : <span class="tx-danger">*</span></label>
                  <select class="form-control select2" id="provinsi" name="provinsi">
                    <option label="Choose one"></option>
                  </select>
                </div><!-- col -->
                <div class="col-md-6 mb-3">
                  <label class="form-control-label">Kabupaten/Kota : <span class="tx-danger">*</span></label>
                  <select class="form-control select2" id="kota" name="kota">
                    <option label="Choose one"></option>
                  </select>
                </div><!-- col -->
              </div>

              <div class="row row-sm">
                <div class="col-md-6 mb-3">
                  <label class="form-control-label">Kecamatan : <span class="tx-danger">*</span></label>
                  <select class="form-control select2" id="kecamatan" name="kecamatan">
                    <option label="Choose one"></option>
                  </select>
                </div><!-- col -->
                <div class="col-md-6 mb-3">
                  <label class="form-control-label">Desa/Kelurahan : <span class="tx-danger">*</span></label>
                  <select class="form-control select2" id="kelurahan" name="kelurahan">
                    <option label="Choose one"></option>
                  </select>
                </div><!-- col -->
              </div>

              <div class="row row-sm">
                <div class="col-md-8 mb-3">
                  <label class="form-control-label">Alamat : <span class="tx-danger">*</span></label>
                  <textarea id="alamat" name="alamat" class="form-control" rows="2" placeholder="Alamat Lengkap" required><?= $anggota['alamat']; ?></textarea>
                </div><!-- col -->
                <div class="col-md-4 mb-3">
                  <label class="form-control-label">Kode POS : <span class="tx-danger">*</span></label>
                  <input id="kode_pos" class="form-control" name="kode_pos" placeholder="" type="text" value="<?= $anggota['kode_pos']; ?>" required>
                </div><!-- col -->
              </div>

            </section>


            <h3>Data Pendidikan</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
              <div class="row row-sm">
                <div class="col-md-6 mb-3">
                  <label>Pendidikan Terakhir <span class="tx-danger">*</span></label>
                  <select class="form-control select2-no-search" name="pendidikan_terakhir" id="pendidikan_terakhir" required="">
                    <option value="" disabled="" selected="">Select</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="D3">DIPLOMA</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                  </select>
                </div>
              </div>

              <div class="row row-sm">
                <div class="col-md-6 mb-3">
                  <label>Riwayat Pendidikan</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text wd-100">SD</span>
                    </div>
                    <input type="text" id="	riwayat_sd" name="riwayat_sd" class="form-control" placeholder="SD" value="<?= $anggota['riwayat_sd']; ?>">
                  </div>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text wd-100">SMP</span>
                    </div>
                    <input type="text" id="riwayat_smp" name="riwayat_smp" class="form-control" placeholder="SMP" value="<?= $anggota['riwayat_smp']; ?>">
                  </div>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text wd-100">SMA</span>
                    </div>
                    <input type="text" id="riwayat_sma" name="riwayat_sma" class="form-control" placeholder="SMA" value="<?= $anggota['riwayat_sma']; ?>">
                  </div>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text wd-100">DIPLOMA</span>
                    </div>
                    <input type="text" id="riwayat_diploma" name="riwayat_diploma" class="form-control" placeholder="DIPLOMA" value="<?= $anggota['riwayat_diploma']; ?>">
                  </div>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text wd-100">S1</span>
                    </div>
                    <input type="text" id="riwayat_s1" name="riwayat_s1" class="form-control" placeholder="S1" value="<?= $anggota['riwayat_s1']; ?>">
                  </div>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text wd-100">S2</span>
                    </div>
                    <input type="text" id="riwayat_s2" name="riwayat_s2" class="form-control" placeholder="S2" value="<?= $anggota['riwayat_s2']; ?>">
                  </div>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text wd-100">S3</span>
                    </div>
                    <input type="text" id="riwayat_s3" name="riwayat_s3" class="form-control" placeholder="S3" value="<?= $anggota['riwayat_s3']; ?>">
                  </div>
                </div>
              </div>

              <div class="row row-sm">
                <div class="col-md-6 mb-3">
                  <label class="form-control-label">Pernah Belajar di Pondok Pesantren / Madrasah <span class="tx-danger">*</span></label>
                  <div class="">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="pesantren_pernah" name="pernah_belajar_ponpes" value="Pernah" class="custom-control-input">
                      <label class="custom-control-label" for="pesantren_pernah">Pernah</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="pesantren_tidak_pernah" name="pernah_belajar_ponpes" value="Tidak Pernah" class="custom-control-input">
                      <label class="custom-control-label" for="pesantren_tidak_pernah">Tidak Pernah</label>
                    </div>
                  </div>
                </div><!-- col -->
              </div><!-- row -->

              <div class="row row-sm">
                <div class="col-md-6 mb-3">
                  <label class="form-control-label">Kemampuan Bahasa :</label>
                  
                  <table class="table-bordered">
                    <thead>
                      <tr>
                        <td class="wd-200"><span class="input-group-text">Bahasa</span></td>
                        <td><span class="input-group-text">Kemampuan</span></td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="ht-50">
                        <td class="px-3">
                          <span>Bahasa Indonesia</span>
                        </td>
                        <td class="px-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="bahasa_indonesia_pasif" name="bahasa_indonesia" value="Pasif" class="custom-control-input">
                            <label class="custom-control-label" for="bahasa_indonesia_pasif">Pasif</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="bahasa_indonesia_aktif" name="bahasa_indonesia" value="Aktif" class="custom-control-input">
                            <label class="custom-control-label" for="bahasa_indonesia_aktif">Aktif</label>
                          </div>
                        </td>
                      </tr>

                      <tr class="ht-50">
                        <td class="px-3">
                          <span>Bahasa Arab</span>
                        </td>
                        <td class="px-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="bahasa_arab_pasif" name="bahasa_arab" value="Pasif" class="custom-control-input">
                            <label class="custom-control-label" for="bahasa_arab_pasif">Pasif</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="bahasa_arab_aktif" name="bahasa_arab" value="Aktif" class="custom-control-input">
                            <label class="custom-control-label" for="bahasa_arab_aktif">Aktif</label>
                          </div>
                        </td>
                      </tr>

                      <tr class="ht-50">
                        <td class="px-3">
                          <span>Bahasa Inggris</span>
                        </td>
                        <td class="px-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="bahasa_inggris_pasif" name="bahasa_inggris" value="Pasif" class="custom-control-input">
                            <label class="custom-control-label" for="bahasa_inggris_pasif">Pasif</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="bahasa_inggris_aktif" name="bahasa_inggris" value="Aktif" class="custom-control-input">
                            <label class="custom-control-label" for="bahasa_inggris_aktif">Aktif</label>
                          </div>
                        </td>
                      </tr>

                      <tr class="ht-50">
                        <td class="px-3">
                          <span>Lainnya</span>
                        </td>
                        <td class="px-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="bahasa_lainnya_pasif" name="bahasa_lainnya" value="Pasif" class="custom-control-input">
                            <label class="custom-control-label" for="bahasa_lainnya_pasif">Pasif</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="bahasa_lainnya_aktif" name="bahasa_lainnya" value="Aktif" class="custom-control-input">
                            <label class="custom-control-label" for="bahasa_lainnya_aktif">Aktif</label>
                          </div>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                  
                </div><!-- col -->
              </div><!-- row -->

              <div class="row row-sm">
                <div class="col-md-12 mb-3">
                  <label class="form-control-label">Organisasi Yang Pernah/Sedang Diikuti :</label>
                  
                  <table class="table-bordered">
                    <thead>
                      <tr>
                        <td class="wd-lg-250"><span class="input-group-text">Nama Organisasi</span></td>
                        <td><span class="input-group-text">Tingkat</span></td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($organisasiList as $organisasi) : ?>
                      <tr class="ht-50">
                        <td class="px-3">
                          <span><?= $organisasi['nama'] ?></span>
                        </td>
                        <td class="px-3">
                          <?php 
                            if($organisasi['pusat'] == 1){
                          ?>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="<?= $organisasi['org_id']; ?>_pusat" name="<?= $organisasi['org_id']; ?>_pusat" value="1" class="custom-control-input">
                                <label class="custom-control-label" for="<?= $organisasi['org_id']; ?>_pusat">Pusat</label>
                              </div>
                          <?php
                            }
                          ?>
                          
                          <?php 
                            if($organisasi['wilayah'] == 1){
                          ?>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="<?= $organisasi['org_id']; ?>_wilayah" name="<?= $organisasi['org_id']; ?>_wilayah" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="<?= $organisasi['org_id']; ?>_wilayah">Wilayah</label>
                          </div>
                          <?php
                            }
                          ?>
                          
                          <?php 
                            if($organisasi['daerah'] == 1){
                          ?>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="<?= $organisasi['org_id']; ?>_daerah" name="<?= $organisasi['org_id']; ?>_daerah" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="<?= $organisasi['org_id']; ?>_daerah">Daerah</label>
                          </div>
                          <?php
                            }
                          ?>

                          <?php 
                            if($organisasi['cabang'] == 1){
                          ?>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="<?= $organisasi['org_id']; ?>_cabang" name="<?= $organisasi['org_id']; ?>_cabang" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="<?= $organisasi['org_id']; ?>_cabang">Cabang</label>
                          </div>
                          <?php
                            }
                          ?>
                          
                          <?php 
                            if($organisasi['ranting'] == 1){
                          ?>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="<?= $organisasi['org_id']; ?>_ranting" name="<?= $organisasi['org_id']; ?>_ranting" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="<?= $organisasi['org_id']; ?>_ranting">Ranting</label>
                          </div>
                          <?php
                            }
                          ?>

                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div><!-- col -->
              </div><!-- row -->

              <div class="row row-sm">
                <div class="col-md-8 mb-3">
                  <label class="form-control-label">Organisasi Lain yang Pernah/Sedang Diikuti : </label>
                  <textarea id="organisasi_lain" name="organisasi_lain" class="form-control" rows="2" placeholder="" required><?= $anggota['organisasi_lain']; ?></textarea>
                </div><!-- col -->
              </div>

            </section>
          </div>
        </form>
      </div>
    </div>
    

    <script src="<?= base_url('assets/libs/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/jqueryui/jquery-ui.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/feather-icons/feather.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/prismjs/prism.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/parsleyjs/parsley.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/jquery-steps/build/jquery.steps.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/js-cookie/js.cookie.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/select2/js/select2.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/flatpickr/flatpickr.min.js'); ?>"></script>
    

    <script>
      (function($) {

        'use strict'

        var Defaults = $.fn.select2.amd.require('select2/defaults');

        $.extend(Defaults.defaults, {
          searchInputPlaceholder: ''
        });

        var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

        var _renderSearchDropdown = SearchDropdown.prototype.render;

        SearchDropdown.prototype.render = function(decorated) {

          // invoke parent method
          var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

          this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

          return $rendered;
        };

      })(window.jQuery);

      $(function(){

        'use strict'

        $('#wizard2').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          onStepChanging: function (event, currentIndex, newIndex) {
            if(currentIndex < newIndex) {
              // Step 1 form validation
              if(currentIndex === 0) {
                // var fname = $('#firstname').parsley();
                // var lname = $('#lastname').parsley();

                // if(fname.isValid() && lname.isValid()) {
                  return true;
                // } else {
                //   fname.validate();
                //   lname.validate();
                // }
              }

              // Step 2 form validation
              if(currentIndex === 1) {
                
                // var email = $('#email').parsley();
                // if(email.isValid()) {
                  return true;
                // } else { email.validate(); }
              }
              if(currentIndex === 2){
                return true;
              }
            // Always allow step back to the previous step even if the current step is not valid.
            } else { return true; }
          },
          onFinished: function (event, currentIndex) {
            $("#ktam-form").submit();
          }
        });

        $('[data-provider="flatpickr"]').flatpickr();

        // Basic with search
        $('.select2').select2({
          placeholder: 'Choose one',
          searchInputPlaceholder: 'Search options'
        });

        // Disable search
        $('.select2-no-search').select2({
          minimumResultsForSearch: Infinity,
          placeholder: 'Choose one'
        });
        

      });

      function cleanedString(text){
        return text.replace(/[_\W]+/g, "_").toLowerCase();
      }   

      $(document).ready(function () {

        const selectedDaerah = "<?= $anggota['daerah']; ?>";
        const selectedCabang = "<?= $anggota['cabang']; ?>";
        const selectedProfesi = "<?= $anggota['profesi']; ?>";
        const selectedPekerjaan = "<?= $anggota['pekerjaan']; ?>";

        const selectedProvinsi = "<?= $anggota['provinsi']; ?>";
        const selectedKota = "<?= $anggota['kota']; ?>";
        const selectedKecamatan = "<?= $anggota['kecamatan']; ?>";
        const selectedKelurahan = "<?= $anggota['kelurahan']; ?>";

        const selectedPendidikanTerakhir = "<?= $anggota['pendidikan_terakhir']; ?>";
        
        const selectedJk = "<?= $anggota['jenis_kelamin']; ?>";
        const selectedSp = "<?= $anggota['status_perkawinan']; ?>";
        const selectedBahasaIndonesia = "<?= $anggota['bahasa_indonesia']; ?>";
        const selectedBahasaArab = "<?= $anggota['bahasa_arab']; ?>";
        const selectedBahasaInggris = "<?= $anggota['bahasa_inggris']; ?>";
        const selectedBahasaLainnya = "<?= $anggota['bahasa_lainnya']; ?>";

        
        if (selectedDaerah) {
        $('#daerah').val(selectedDaerah).trigger('change');

        var daerah = $('#daerah').val();

        if (daerah !== '') {
            $.ajax({
                url: "<?= site_url('formKtam/get-by-daerah') ?>",
                type: "GET",
                data: { daerah: daerah },
                dataType: "json",
                success: function(response) {
                    $('#cabang').empty().append('<option value="">-- Pilih Cabang --</option>');
                    $.each(response, function(index, item) {
                        if(item.nama_cabang == selectedCabang){
                            $('#cabang').append('<option value="' + item.nama_cabang + '" selected="selected">' + item.nama_cabang + '</option>');
                        }else{
                            $('#cabang').append('<option value="' + item.nama_cabang + '" >' + item.nama_cabang + '</option>');
                        }
                        
                    });
                }
            });
            
        } else {
            $('#cabang').empty().append('<option value="">-- Pilih Cabang --</option>');
        }

        }

        if (selectedProfesi) {
        $('#profesi').val(selectedProfesi).trigger('change');
        }

        if (selectedPekerjaan) {
        $('#pekerjaan').val(selectedPekerjaan).trigger('change');
        }

        $('#daerah').change(function() {
        var daerah = $(this).val();

        if (daerah !== '') {
            $.ajax({
                url: "<?= site_url('formKtam/get-by-daerah') ?>",
                type: "GET",
                data: { daerah: daerah },
                dataType: "json",
                success: function(response) {
                    $('#cabang').empty().append('<option value="">-- Pilih Cabang --</option>');
                    $.each(response, function(index, item) {
                        $('#cabang').append('<option value="' + item.nama_cabang + '">' + item.nama_cabang + '</option>');
                    });
                }
            });
        } else {
            $('#cabang').empty().append('<option value="">-- Pilih Cabang --</option>');
        }
        });

        $.ajax({
            url: "<?= base_url('assets/json/alamat/provinces.json') ?>",
            type: "GET",
            dataType: "json",
            success: function (data) {
                $.each(data, function (index, provinsi) {
                if(provinsi.name == selectedProvinsi){
                    $("#provinsi").append(`<option value="${provinsi.name}" json-id="${provinsi.id}" selected="selected">${provinsi.name}</option>`);
                    var provinsiId = $("#provinsi option:selected").attr("json-id");
                    if (provinsiId) {
                        $.ajax({
                            url: `<?= base_url('assets/json/alamat/regencies/'); ?>${provinsiId}.json`,
                            type: "GET",
                            dataType: "json",
                            success: function (data) {
                                $.each(data, function (index, kota) {
                                    if(kota.name == selectedKota){
                                        $("#kota").append(`<option value="${kota.name}" json-id="${kota.id}" selected="selected">${kota.name}</option>`);
                                        let kotaId = $("#kota option:selected").attr("json-id");
                                        if (kotaId) {
                                            $.ajax({
                                                url: `<?= base_url('assets/json/alamat/districts/'); ?>${kotaId}.json`,
                                                type: "GET",
                                                dataType: "json",
                                                success: function (data) {
                                                    $.each(data, function (index, kecamatan) {
                                                        if(kecamatan.name == selectedKecamatan){
                                                            $("#kecamatan").append(`<option value="${kecamatan.name}" json-id="${kecamatan.id}" selected="selected">${kecamatan.name}</option>`);
                                                            let kecamatanId = $("#kecamatan option:selected").attr("json-id");
                                                            if (kecamatanId) {
                                                                $.ajax({
                                                                    url: `<?= base_url('assets/json/alamat/villages/'); ?>${kecamatanId}.json`,
                                                                    type: "GET",
                                                                    dataType: "json",
                                                                    success: function (data) {
                                                                        $.each(data, function (index, kelurahan) {
                                                                            if(kelurahan.name == selectedKelurahan){
                                                                                $("#kelurahan").append(`<option value="${kelurahan.name}" json-id="${kelurahan.id}" selected="selected">${kelurahan.name}</option>`);
                                                                            }else{
                                                                                $("#kelurahan").append(`<option value="${kelurahan.name}" json-id="${kelurahan.id}">${kelurahan.name}</option>`);
                                                                            }
                                                                        });
                                                                    },
                                                                    error: function () {
                                                                        alert("Gagal memuat data kelurahan/desa.");
                                                                    }
                                                                });
                                                            }
                                                        }else{
                                                            $("#kecamatan").append(`<option value="${kecamatan.name}" json-id="${kecamatan.id}">${kecamatan.name}</option>`);
                                                        }
                                                        
                                                    });
                                                },
                                                error: function () {
                                                    alert("Gagal memuat data kecamatan.");
                                                }
                                            });
                                        }
                                    }else{
                                        $("#kota").append(`<option value="${kota.name}" json-id="${kota.id}">${kota.name}</option>`);
                                    }
                                    
                                });
                            },
                            error: function () {
                                alert("Gagal memuat data kota/kabupaten.");
                            }
                        });
                    }
                }else{
                    $("#provinsi").append(`<option value="${provinsi.name}" json-id="${provinsi.id}">${provinsi.name}</option>`);
                }
                
                    
                });
                
            },
            error: function () {
                alert("Gagal memuat data provinsi.");
            }
        });

        if (selectedPendidikanTerakhir) {
            $('#pendidikan_terakhir').val(selectedPendidikanTerakhir).trigger('change');
        }

        if (selectedJk) {
            $('#'+cleanedString(selectedJk)).prop( "checked", true );
        }

        if(selectedSp){
            $('#'+cleanedString(selectedSp)).prop( "checked", true );
        }

        if(selectedBahasaIndonesia){
            $('#bahasa_indonesia_'+cleanedString(selectedBahasaIndonesia)).prop( "checked", true );
        }

        if(selectedBahasaArab){
            $('#bahasa_arab_'+cleanedString(selectedBahasaArab)).prop( "checked", true );
        }

        if(selectedBahasaInggris){
            $('#bahasa_inggris_'+cleanedString(selectedBahasaInggris)).prop( "checked", true );
        }

        if(selectedBahasaLainnya){
            $('#bahasa_lainnya_'+cleanedString(selectedBahasaLainnya)).prop( "checked", true );
        }

        // Event saat provinsi dipilih
        $("#provinsi").change(function () {

            let provinsiId = $(this).children(":selected").attr("json-id");
            $("#kota").html('<option value="">-- Pilih Kota/Kabupaten --</option>'); // Reset kota
            $("#kecamatan").html('<option value="">-- Pilih Kecamatan --</option>'); // Reset kecamatan

            if (provinsiId) {
                $.ajax({
                    url: `<?= base_url('assets/json/alamat/regencies/'); ?>${provinsiId}.json`,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $.each(data, function (index, kota) {
                        
                        $("#kota").append(`<option value="${kota.name}" json-id="${kota.id}">${kota.name}</option>`);
                        
                        });
                    },
                    error: function () {
                        alert("Gagal memuat data kota/kabupaten.");
                    }
                });
            }
        });

        // Event saat kota/kabupaten dipilih
        $("#kota").change(function () {
            let kotaId = $(this).children(":selected").attr("json-id");
            $("#kecamatan").html('<option value="">-- Pilih Kecamatan --</option>'); // Reset kecamatan

            if (kotaId) {
                $.ajax({
                    url: `<?= base_url('assets/json/alamat/districts/'); ?>${kotaId}.json`,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $.each(data, function (index, kecamatan) {
                        
                        $("#kecamatan").append(`<option value="${kecamatan.name}" json-id="${kecamatan.id}">${kecamatan.name}</option>`);
                            
                        });
                    },
                    error: function () {
                        alert("Gagal memuat data kecamatan.");
                    }
                });
            }
        });

        // Event saat kecamatan dipilih
        $("#kecamatan").change(function () {
            let kecamatanId = $(this).children(":selected").attr("json-id");
            $("#kelurahan").html('<option value="">-- Pilih Kelurahan/Desa --</option>'); // Reset kelurahan

            if (kecamatanId) {
                $.ajax({
                    url: `<?= base_url('assets/json/alamat/villages/'); ?>${kecamatanId}.json`,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $.each(data, function (index, kelurahan) {

                            $("#kelurahan").append(`<option value="${kelurahan.name}" json-id="${kelurahan.id}">${kelurahan.name}</option>`);
                        
                        });
                    },
                    error: function () {
                        alert("Gagal memuat data kelurahan/desa.");
                    }
                });
            }
        });
      });
    </script>
  </body>
</html>
