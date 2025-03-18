<?= $this->include('construct/header'); ?>
<?= $this->include('construct/sidebar'); ?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Data Kartu Tanda Anggota Muhammadiyah</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">KTAM</a></li>
                                <li class="breadcrumb-item active">Data Kartu Tanda Anggota Muhammadiyah</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div id="formpage" class="" style="display: none;">
            <!--begin::Content container-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex bg-light">
                                <h4 class="card-title mb-0 flex-grow-1">Input Data Mahasiswa</h4>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">
                                    <form id="ktam-form" action="<?= site_url('formKtam/store') ?>" method="POST">
                                        <div id="wizard2">
                                            <h3>Data Diri</h3>
                                            <section>
                                            <p class="mg-b-20">Try the keyboard navigation by clicking arrow left or right!</p>

                                            <div class="row row-sm">
                                                <div class="col-md-6 mb-3">
                                                <label>Daerah <span class="tx-danger">*</span></label>
                                                <select class="form-control select2-no-search" id="daerah" name="daerah" required="">
                                                    <option value="">-- Pilih Daerah --</option>
                                                    <?php foreach ($daerahList as $d) : ?>
                                                        <option value="<?= $d['daerah'] ?>"><?= $d['daerah'] ?></option>
                                                    <?php endforeach; ?>
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
                                                <input id="nama_lengkap" class="form-control" name="nama_lengkap" placeholder="" type="text" required>
                                                </div><!-- col -->
                                                <div class="col-md-6 mb-3">
                                                <label class="form-control-label">NIK: <span class="tx-danger">*</span></label>
                                                <input id="nik" class="form-control" name="nik" placeholder="" type="text" required>
                                                </div><!-- col -->
                                            </div>

                                            <div class="row row-sm">
                                                <div class="col-md-4 mb-3">
                                                <label class="form-control-label">Gelar:</label>
                                                <input id="gelar_depan" class="form-control" name="gelar_depan" placeholder="Gelar Depan" type="text" required>
                                                </div><!-- col -->
                                                <div class="col-md-4 mb-3 d-flex align-items-end">
                                                <input id="gelar_belakang" class="form-control" name="gelar_belakang" placeholder="Gelar Belakang" type="text" required>
                                                </div><!-- col -->
                                            </div>

                                            <div class="row row-sm">
                                                <div class="col-md-4 mb-3">
                                                <label class="form-control-label">Tempat, Tanggal Lahir: <span class="tx-danger">*</span></label>
                                                <input id="tempat_lahir" class="form-control" name="tempat_lahir" placeholder="Tempat" type="text" required>
                                                </div><!-- col -->
                                                <div class="col-md-4 mb-3 d-flex align-items-end">
                                                <input id="tanggal_lahir" class="form-control flatpickr-input" name="tanggal_lahir" placeholder="Tanggal Lahir" type="text" data-provider="flatpickr" data-date-format="d-m-Y" readonly="readonly" required>
                                                </div><!-- col -->
                                            </div><!-- row -->

                                            <div class="row row-sm">
                                                <div class="col-md-4 mb-3">
                                                <label class="form-control-label">Jenis Kelamin <span class="tx-danger">*</span></label>
                                                <div class="">
                                                    <div class="custom-control custom-radio">
                                                    <input type="radio" id="laki" name="jenis_kelamin" value="Laki-Laki" class="custom-control-input">
                                                    <label class="custom-control-label" for="laki">Laki-laki</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" class="custom-control-input">
                                                    <label class="custom-control-label" for="perempuan">Perempuan</label>
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
                                                <input type="email" id="email" class="form-control" name="email" placeholder="" type="text" required>
                                                </div><!-- col -->
                                                <div class="col-md-6 mb-3">
                                                <label class="form-control-label">Nomor Telp./HP: <span class="tx-danger">*</span></label>
                                                <input id="nomor_hp" class="form-control" name="nomor_hp" placeholder="" type="text" required>
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
                                                <input id="profesi_lainnya" class="form-control" name="profesi_lainnya" placeholder="" type="text">
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
                                                <input id="tempat_kerja" class="form-control" name="tempat_kerja" placeholder="" type="text">
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
                                                <textarea id="alamat" name="alamat" class="form-control" rows="2" placeholder="Alamat Lengkap" required></textarea>
                                                </div><!-- col -->
                                                <div class="col-md-4 mb-3">
                                                <label class="form-control-label">Kode POS : <span class="tx-danger">*</span></label>
                                                <input id="kode_pos" class="form-control" name="kode_pos" placeholder="" type="text" required>
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
                                                    <input type="text" id="	riwayat_sd" name="riwayat_sd" class="form-control" placeholder="SD">
                                                </div>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text wd-100">SMP</span>
                                                    </div>
                                                    <input type="text" id="riwayat_smp" name="riwayat_smp" class="form-control" placeholder="SMP">
                                                </div>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text wd-100">SMA</span>
                                                    </div>
                                                    <input type="text" id="riwayat_sma" name="riwayat_sma" class="form-control" placeholder="SMA">
                                                </div>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text wd-100">DIPLOMA</span>
                                                    </div>
                                                    <input type="text" id="riwayat_diploma" name="riwayat_diploma" class="form-control" placeholder="DIPLOMA">
                                                </div>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text wd-100">S1</span>
                                                    </div>
                                                    <input type="text" id="riwayat_s1" name="riwayat_s1" class="form-control" placeholder="S1">
                                                </div>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text wd-100">S2</span>
                                                    </div>
                                                    <input type="text" id="riwayat_s2" name="riwayat_s2" class="form-control" placeholder="S2">
                                                </div>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text wd-100">S3</span>
                                                    </div>
                                                    <input type="text" id="riwayat_s3" name="riwayat_s3" class="form-control" placeholder="S3">
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
                                                <textarea id="organisasi_lain" name="organisasi_lain" class="form-control" rows="2" placeholder="" required></textarea>
                                                </div><!-- col -->
                                            </div>

                                            </section>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            <!--end row-->
        </div>

        <div id="gridpage">
            <div class="row">
                <div class="col">
                    <!-- <div class="alert alert-primary" role="alert">
                        <i class="las la-info-circle"></i> <strong>Nilai</strong> hasil sidang Skripsi akan ditampilkan apabila mahasiswa sudah mengumpulkan <strong>Hardcover Skripsi/TA</strong>
                    </div>  -->

                    <div class="card">
                        <div class="card-header align-items-center bg-light d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Data Kartu Tanda Anggota Muhammadiyah</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <button type="button" class="btn btaddnew btn-primary" onClick="addData()"><i class="las la-plus align-middle me-1"></i> Tambah Data</button>
                                </div>
                            </div>
                        </div>                                                    
                        <div class="card-body table-responsive">
                            <table class="table table-bordered" id="ktam_list">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Pas Foto</th>
                                        <th>JK</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
      
    </div><!-- content -->
</div>

<?= $this->include('construct/footer'); ?>

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

    $(document).ready(function() {
        let table = $('#ktam_list').DataTable({
            ajax: "<?= site_url('ktam/getData'); ?>",
            columns: [
                { data: 'nik' },
                { data: 'nama_lengkap' },
                { data: 'tempat_lahir' },
                { data: 'jenis_kelamin' },
                {
                    data: 'nik',
                    render: function(data) {
                        return `
                            <button class='btn btn-info btn-sm edit' onClick='editData(${data})'>Edit</button>
                            <button class='btn btn-danger btn-sm delete' onClick='hapusData(${data})'>Hapus</button>
                        `;
                    }
                }
            ]
        });

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
                    $("#provinsi").append(`<option value="${provinsi.name}" json-id="${provinsi.id}">${provinsi.name}</option>`);
                });
            },
            error: function () {
                alert("Gagal memuat data provinsi.");
            }
        });

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

    function addData(){
       
        $('#formpage').show(500, 'swing');
        $('#gridpage').hide(500, 'swing');
    }

    function editData(nik){
        alert('edit: '+nik);
        $('#formpage').show(500, 'swing');
        $('#gridpage').hide(500, 'swing');
    }

    function hapusData(nik){
        
        alert('delete: '+nik);
        
    }

    function listView(){
       
        $('#gridpage').show(500, 'swing');
        $('#formpage').hide(500, 'swing');
    }
</script>