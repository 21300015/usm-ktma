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
                                <form id="ktam-form" method="POST">
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
                                            <input id="nama_lengkap" class="form-control" name="nama_lengkap" placeholder="" type="text" value="" required>
                                            </div><!-- col -->
                                            <div class="col-md-6 mb-3">
                                            <label class="form-control-label">NIK: <span class="tx-danger">*</span></label>
                                            <input id="nik" class="form-control" name="nik" placeholder="" type="text" value="" required>
                                            </div><!-- col -->
                                        </div>

                                        <div class="row row-sm">
                                            <div class="col-md-4 mb-3">
                                            <label class="form-control-label">Gelar:</label>
                                            <input id="gelar_depan" class="form-control" name="gelar_depan" placeholder="Gelar Depan" type="text" value="" required>
                                            </div><!-- col -->
                                            <div class="col-md-4 mb-3 d-flex align-items-end">
                                            <input id="gelar_belakang" class="form-control" name="gelar_belakang" placeholder="Gelar Belakang" type="text" value="" required>
                                            </div><!-- col -->
                                        </div>

                                        <div class="row row-sm">
                                            <div class="col-md-4 mb-3">
                                            <label class="form-control-label">Tempat, Tanggal Lahir: <span class="tx-danger">*</span></label>
                                            <input id="tempat_lahir" class="form-control" name="tempat_lahir" placeholder="Tempat" type="text" value="" required>
                                            </div><!-- col -->
                                            <div class="col-md-4 mb-3 d-flex align-items-end">
                                            <input id="tanggal_lahir" class="form-control flatpickr-input" name="tanggal_lahir" placeholder="Tanggal Lahir" type="text" data-provider="flatpickr" data-date-format="d-m-Y" readonly="readonly" value="" required>
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
                                                <input type="radio" id="janda" name="status_perkawinan" value="Janda/Duda" class="custom-control-input">
                                                <label class="custom-control-label" for="janda">Janda/Duda</label>
                                                </div>
                                            </div>
                                            </div><!-- col -->
                                        </div><!-- row -->

                                        <div class="row row-sm">
                                            <div class="col-md-6 mb-3">
                                            <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                            <input type="email" id="email" class="form-control" name="email" placeholder="" type="text" value="" required>
                                            </div><!-- col -->
                                            <div class="col-md-6 mb-3">
                                            <label class="form-control-label">Nomor Telp./HP: <span class="tx-danger">*</span></label>
                                            <input id="nomor_hp" class="form-control" name="nomor_hp" placeholder="" type="text" value="" required>
                                            </div><!-- col -->
                                        </div>
                                        
                                        <div class="row row-sm">
                                            <div class="col-md-6 mb-3">
                                            <label class="form-control-label">Profesi: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2-no-search" name="profesi" id="profesi" required="">
                                                <option value="" selected="selected">Pilih..</option>
                                                <option value="Guru">Guru</option>
                                                <option value="Dosen">Dosen</option>
                                                <option value="Pensiunan">Pensiunan</option>
                                                <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                                <option value="Nelayan">Nelayan</option>
                                                <option value="Dokter">Dokter</option>
                                                <option value="Insinyur">Insinyur</option>
                                                <option value="Akuntan">Akuntan</option>
                                                <option value="Advokat">Advokat</option>
                                                <option value="Paramedis">Paramedis</option>
                                                <option value="Apoteker">Apoteker</option>
                                                <option value="Arsitek">Arsitek</option>
                                                <option value="Pedagang">Pedagang</option>
                                                <option value="Pengrajin">Pengrajin</option>
                                                <option value="Pengusaha">Pengusaha</option>
                                                <option value="Pegawai/karyawan">Pegawai/karyawan</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                            </div><!-- col -->
                                            <div class="col-md-6 mb-3">
                                            <label class="form-control-label">Profesi Lainnya:</label>
                                            <input id="profesi_lainnya" class="form-control" name="profesi_lainnya" placeholder="" type="text" value="">
                                            </div><!-- col -->
                                        </div>

                                        <div class="row row-sm">
                                            <div class="col-md-6 mb-3">
                                            <label class="form-control-label">Status Pekerjaan: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2-no-search" name="pekerjaan" id="pekerjaan" required="">
                                                <option value="" disabled="" selected="">Select</option>
                                                <option value="Belum Bekerja">Belum Bekerja</option>
                                                <option value="Bekerja">Bekerja</option>
                                                <option value="Pensiunan">Pensiunan</option>
                                            </select>
                                            </div><!-- col -->
                                            <div class="col-md-6 mb-3">
                                            <label class="form-control-label">Instansi/Tempat kerja:</label>
                                            <input id="tempat_kerja" class="form-control" name="tempat_kerja" placeholder="" type="text" value="">
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
                                            <input id="kode_pos" class="form-control" name="kode_pos" placeholder="" type="text" value="" required>
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
                                                <input type="text" id="riwayat_sd" name="riwayat_sd" class="form-control" placeholder="SD" value="">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text wd-100">SMP</span>
                                                </div>
                                                <input type="text" id="riwayat_smp" name="riwayat_smp" class="form-control" placeholder="SMP" value="">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text wd-100">SMA</span>
                                                </div>
                                                <input type="text" id="riwayat_sma" name="riwayat_sma" class="form-control" placeholder="SMA" value="">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text wd-100">DIPLOMA</span>
                                                </div>
                                                <input type="text" id="riwayat_diploma" name="riwayat_diploma" class="form-control" placeholder="DIPLOMA" value="">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text wd-100">S1</span>
                                                </div>
                                                <input type="text" id="riwayat_s1" name="riwayat_s1" class="form-control" placeholder="S1" value="">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text wd-100">S2</span>
                                                </div>
                                                <input type="text" id="riwayat_s2" name="riwayat_s2" class="form-control" placeholder="S2" value="">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text wd-100">S3</span>
                                                </div>
                                                <input type="text" id="riwayat_s3" name="riwayat_s3" class="form-control" placeholder="S3" value="">
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
                                                <?php 


                                                foreach ($organisasiList as $organisasi) : 
                                                
                                                ?>
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
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Daerah</th>
                                        <th>Cabang</th>
                                        <th>Foto</th>
                                        <th>Bukti Bayar</th>
                                        <th>Surat Rec</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>

        <div id="detailpage" class="" style="display: none;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex bg-light">
                            <h4 class="card-title mb-0 flex-grow-1">Detail Data Mahasiswa</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <h3 id="wizard2-h-0" tabindex="-1" class="title current">Data Diri</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_daerah" class="col-sm-4 col-form-label">Daerah</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_daerah" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_cabang" class="col-sm-4 col-form-label">Cabang</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_cabang" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_name" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_name" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_nik" class="col-sm-4 col-form-label">NIK</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_nik" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_gelar_depan" class="col-sm-4 col-form-label">Gelar Depan</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_gelar_depan" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_gelar_belakang" class="col-sm-4 col-form-label">Gelar Belakang</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_gelar_belakang" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_tempat_lahir" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_tanggal_lahir" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_jk" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_jk" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_sp" class="col-sm-4 col-form-label">Status Perkawinan</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_sp" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_email" class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_email" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_nomor_hp" class="col-sm-4 col-form-label">Nomor Telp./HP</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_nomor_hp" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_profesi" class="col-sm-4 col-form-label">Profesi</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_profesi" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_profesi_lainnya" class="col-sm-4 col-form-label">Profesi Lainnya</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_profesi_lainnya" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_pekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_pekerjaan" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_tempat_kerja" class="col-sm-4 col-form-label">Instansi/Tempat kerja</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_tempat_kerja" value="">
                                        </div>
                                    </div>
                                </div>

                                <h3 id="wizard2-h-0" tabindex="-1" class="title current">Data Alamat</h3>
                                <hr>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_provinsi" class="col-sm-4 col-form-label">Provinsi</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_provinsi" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_kota" class="col-sm-4 col-form-label">Kabupaten/Kota</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_kota" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_kecamatan" class="col-sm-4 col-form-label">Kecamatan</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_kecamatan" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_kelurahan" class="col-sm-4 col-form-label">Desa/Kelurahan</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_kelurahan" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_alamat" class="col-sm-4 col-form-label">Alamat Lengkap</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_alamat" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_kode_pos" class="col-sm-4 col-form-label">Kode Pos</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_kode_pos" value="">
                                        </div>
                                    </div>
                                </div>

                                <h3 id="wizard2-h-0" tabindex="-1" class="title current">Data Pendidikan</h3>
                                <hr>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_pendidikan_terakhir" class="col-sm-4 col-form-label">Pendidikan Terakhir</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_pendidikan_terakhir" value="">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="static_pernah_belajar_ponpes" class="col-sm-4 col-form-label">Pernah Belajar di Pondok Pesantren / Madrasah</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_pernah_belajar_ponpes" value="">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="static_organisasi_lain" class="col-sm-4 col-form-label">Organisasi Lain yang Pernah/Sedang Diikuti</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_organisasi_lain" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-12 col-form-label">Riwayat Pendidikan</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text wd-100">SD</span>
                                                </div>
                                                <input type="text" id="static_riwayat_sd" class="form-control" placeholder="SD">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text wd-100">SMP</span>
                                                </div>
                                                <input type="text" id="static_riwayat_smp" class="form-control" placeholder="SMP">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text wd-100">SMA</span>
                                                </div>
                                                <input type="text" id="static_riwayat_sma" class="form-control" placeholder="SMA">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text wd-100">Diploma</span>
                                                </div>
                                                <input type="text" id="static_riwayat_diploma" class="form-control" placeholder="Diploma">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text wd-100">S1</span>
                                                </div>
                                                <input type="text" id="static_riwayat_s1" class="form-control" placeholder="S1">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text wd-100">S2</span>
                                                </div>
                                                <input type="text" id="static_riwayat_s2" class="form-control" placeholder="S2">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text wd-100">S3</span>
                                                </div>
                                                <input type="text" id="static_riwayat_s3" class="form-control" placeholder="S3">
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                    <input type="text" readonly class="form-control-plaintext" id="static_bahasa_indonesia" value="">
                                                </td>
                                            </tr>

                                            <tr class="ht-50">
                                                <td class="px-3">
                                                <span>Bahasa Arab</span>
                                                </td>
                                                <td class="px-3">
                                                    <input type="text" readonly class="form-control-plaintext" id="static_bahasa_arab" value="">
                                                </td>
                                            </tr>

                                            <tr class="ht-50">
                                                <td class="px-3">
                                                <span>Bahasa Inggris</span>
                                                </td>
                                                <td class="px-3">
                                                    <input type="text" readonly class="form-control-plaintext" id="static_bahasa_inggris" value="">
                                                </td>
                                            </tr>

                                            <tr class="ht-50">
                                                <td class="px-3">
                                                <span>Lainnya</span>
                                                </td>
                                                <td class="px-3">
                                                    <input type="text" readonly class="form-control-plaintext" id="static_bahasa_lainnya" value="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-control-label">Organisasi Yang Pernah/Sedang Diikuti</label>
                                    
                                    <table class="table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="wd-lg-250"><span class="input-group-text">Nama Organisasi</span></td>
                                                <td colspan="5" class="text-center"><span class="d-block input-group-text text-center">Tingkat</span></td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php 

                                            foreach ($organisasiList as $organisasi) : 

                                        ?>
                                            <tr class="ht-50" colspan="5">
                                                <td class="px-3">
                                                    <span><?= $organisasi['nama'] ?></span>
                                                </td>
                                                <td class="px-3 pt-2 text-center">
                                                    <label class="custom-control-label">Pusat</label>
                                                    <?php 
                                                        if($organisasi['pusat'] == 1){
                                                    ?>
                                                    
                                                    <div id="<?= $organisasi['org_id']; ?>_static_pusat"></div>

                                                    <?php
                                                        }
                                                    ?>
                                                    
                                                </td>
                                                <td class="px-3 pt-2 text-center">
                                                    <label class="custom-control-label">Wilayah</label>
                                                    <?php 
                                                        if($organisasi['wilayah'] == 1){
                                                    ?>

                                                    <div id="<?= $organisasi['org_id']; ?>_static_wilayah"></div>

                                                    <?php
                                                        }
                                                    ?>
                                                </td>
                                                <td class="px-3 pt-2 text-center">
                                                    <label class="custom-control-label">Daerah</label>
                                                    <?php 
                                                        if($organisasi['daerah'] == 1){
                                                    ?>

                                                    <div id="<?= $organisasi['org_id']; ?>_static_daerah"></div>

                                                    <?php
                                                        }
                                                    ?>
                                                </td>
                                                <td class="px-3 pt-2 text-center">
                                                    <label class="custom-control-label">Cabang</label>
                                                    <?php 
                                                        if($organisasi['cabang'] == 1){
                                                    ?>
                                                    <div id="<?= $organisasi['org_id']; ?>_static_cabang"></div>
                                                    <?php
                                                        }
                                                    ?>
                                                </td>
                                                <td class="px-3 pt-2 text-center">
                                                    <label class="custom-control-label">Ranting</label>
                                                    <?php 
                                                        if($organisasi['ranting'] == 1){
                                                    ?>
                                                    <div id="<?= $organisasi['org_id']; ?>_static_ranting"></div>
                                                    <?php
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>

                                            
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Pas Foto</label>
                                        <div class="col-sm-8" id="static_pas_foto">
                                        
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Bukti Bayar</label>
                                        <div class="col-sm-8" id="static_bukti_bayar">
                                        
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Surat Rekomendasi</label>
                                        <div class="col-sm-8" id="static_surat_rekomendasi">
                                        
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="static_created_at" class="col-sm-4 col-form-label">Status Bayar</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_created_at" value="">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="static_status_bayar" class="col-sm-4 col-form-label">Status Bayar</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_status_bayar" value="">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="static_status_approve" class="col-sm-4 col-form-label">Status Approved</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_status_approve" value="">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="static_approve_by" class="col-sm-4 col-form-label">Approved By</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_approve_by" value="">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="static_updated_at" class="col-sm-4 col-form-label">Latest Update Data</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_updated_at" value="">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="static_doc_updated_at" class="col-sm-4 col-form-label">Latest Update Document</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_doc_updated_at" value="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="text-center gap-3 mt-3">
                                <div class="hstack gap-2 justify-content-center" id="btnAction">
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div><!-- content -->
</div>

<div class="modal" id="modalGambar" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
        <img id="imgPreview" src="" alt="Preview" style="">
      </div>
      <div class="modal-footer">
        <button type="button" id="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?= $this->include('construct/footer'); ?>

<script>
    $(document).on('click', '.btn-preview', function () {
        let imgSrc = $(this).data('src');
        $('.modal-title').text(imgSrc);
        $('#imgPreview').attr('src', imgSrc);
        $('#modalGambar').fadeIn();
    });

    $('#closeModal').on('click', function () {
        $('#modalGambar').fadeOut();
    });

    $(document).on('click', '.btn-open-pdf', function () {
        const fileUrl = $(this).data('src');
        window.open(fileUrl, '_blank'); // Buka PDF di tab baru
    });


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
            enableCancelButton: true,
            titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
            onCanceled: function (event) {
                let confirmed = confirm("Apakah kamu yakin ingin Membatalkan Input Data ?");
    
                if (confirmed) {
                    // Redirect atau submit form
                    listView();
                } else {
                    // Jika tidak dikonfirmasi, tetap di halaman saat ini
                    event.preventDefault();
                }
                
            },
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

    $(document).ready(function() {
        let table = $('#ktam_list').DataTable({
            ajax: "<?= site_url('ktam/getData'); ?>",
            autoWidth: false,
            columns: [
                {
                    data: null,
                    title: 'No',
                    render: function (data, type, row, meta) {
                        return meta.row + 1;
                    },
                    searchable: false
                },
                { data: 'nik' },
                { data: 'nama_lengkap' },
                { data: 'daerah' },
                { data: 'nama_cabang' },
                { data: 'pas_foto', 
                    render: function(data, type, row) {
                        if (!data || data === '') {
                            return `<button class="btn btn-info btn-sm" disabled>Lihat</button>`;
                        } else {
                            return `<button class="btn btn-info btn-sm btn-preview" data-src="${data}">Lihat</button>`;
                        }
                    }
                },
                { data: 'bukti_bayar' , 
                    render: function(data, type, row) {
                        if (!data || data === '') {
                            return `<button class="btn btn-info btn-sm" disabled>Lihat</button>`;
                        } else {
                            return `<button class="btn btn-info btn-sm btn-preview" data-src="${data}">Lihat</button>`;
                        }
                    }
                },
                { data: 'surat_rekomendasi',
                    render: function(data, type, row) {
                        if (!data || data === '') {
                            return `<button class="btn btn-info btn-sm" disabled>Lihat</button>`;
                        } else {
                            return `<button class="btn btn-info btn-sm btn-open-pdf" data-src="${data}">Lihat</button>`;
                        }
                    }
                },
                { data: 'status_approve',
                    render: function(data) {
                        if (!data || data === '' || data === 'pending') {
                            return `<span class="status-badge bg-warning">Pending</span>`;
                        } else if (data === 'approved') {
                            return `<span class="status-badge bg-success">Approved</span>`;
                        } else if (data === 'rejected') {
                            return `<span class="status-badge bg-danger">Rejected</span>`;
                        }else {
                            return `${data}`;
                        }
                    }
                 },
                {
                    data: 'nik',
                    render: function(data) {
                        return `
                            
                            <button class='btn btn-info btn-sm edit' onClick='detailData(${data})'>Detail</button>
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
    
    let mode = "";
    let actionUrl = '';

    function getMode(nik = '') {
        
        if (mode === 'add') {
            actionUrl = '/Ktam/store';
        } else if (mode === 'edit') {
            actionUrl = '/Ktam/update/' + nik;
        } else if (mode === 'detail'){

        }

        $('#ktam-form').attr('action', actionUrl);
    }
    

    function addData(){
        mode = "add";
        getMode();
       
        $('#formpage').show(500, 'swing');
        $('#detailpage').hide(500, 'swing');
        $('#gridpage').hide(500, 'swing');
    }

    function detailData(nik){
        $.ajax({
            url: '/Ktam/loadDataUpdate/' + nik,
            method: 'GET',
            success: function(response) {
                console.log('Raw response:', response);
                try {
                    let data = typeof response === 'string' ? JSON.parse(response) : response;
                    console.log('Parsed JSON:', data);
                    $('#static_cabang').val(data.anggota.nama_cabang);
                    $('#static_daerah').val(data.anggota.daerah);
                    $('#static_nik').val(data.anggota.nik);
                    $('#static_name').val(data.anggota.nama_lengkap);
                    $('#static_gelar_depan').val(data.anggota.gelar_depan);
                    $('#static_gelar_belakang').val(data.anggota.gelar_belakang);
                    $('#static_tempat_lahir').val(data.anggota.tempat_lahir);
                    $('#static_tanggal_lahir').val(data.anggota.tanggal_lahir);
                    $('#static_jk').val(data.anggota.jenis_kelamin);
                    $('#static_sp').val(data.anggota.status_perkawinan);
                    $('#static_email').val(data.anggota.email);
                    $('#static_nomor_hp').val(data.anggota.nomor_hp);
                    $('#static_profesi').val(data.anggota.profesi);
                    $('#static_profesi_lainnya').val(data.anggota.profesi_lainnya);
                    $('#static_pekerjaan').val(data.anggota.pekerjaan);
                    $('#static_tempat_kerja').val(data.anggota.tempat_kerja);
                    $('#static_provinsi').val(data.anggota.provinsi);
                    $('#static_kota').val(data.anggota.kota);
                    $('#static_kecamatan').val(data.anggota.kecamatan);
                    $('#static_kelurahan').val(data.anggota.kelurahan);
                    $('#static_alamat').val(data.anggota.alamat);
                    $('#static_kode_pos').val(data.anggota.kode_pos);
                    $('#static_pendidikan_terakhir').val(data.anggota.pendidikan_terakhir);
                    $('#static_riwayat_sd').val(data.anggota.riwayat_sd);
                    $('#static_riwayat_smp').val(data.anggota.riwayat_smp);
                    $('#static_riwayat_sma').val(data.anggota.riwayat_sma);
                    $('#static_riwayat_diploma').val(data.anggota.riwayat_diploma);
                    $('#static_riwayat_s1').val(data.anggota.riwayat_s1);
                    $('#static_riwayat_s2').val(data.anggota.riwayat_s2);
                    $('#static_riwayat_s3').val(data.anggota.riwayat_s3);
                    $('#static_pernah_belajar_ponpes').val(data.anggota.pernah_belajar_ponpes);
                    $('#static_bahasa_indonesia').val(data.anggota.bahasa_indonesia);
                    $('#static_bahasa_arab').val(data.anggota.bahasa_arab);
                    $('#static_bahasa_inggris').val(data.anggota.bahasa_inggris);
                    $('#static_bahasa_lainnya').val(data.anggota.bahasa_lainnya);
                    $('#static_organisasi_lain').val(data.anggota.organisasi_lain);
                    $('#static_status_bayar').val(data.anggota.status_bayar);
                    $('#static_status_approve').val(data.anggota.status_approve);
                    $('#static_approve_by').val(data.anggota.approve_by);
                    $('#static_updated_at').val(data.anggota.updated_at);
                    $('#static_doc_updated_at').val(data.anggota.doc_updated_at);
                    $('#static_created_at').val(data.anggota.created_at);

                    
                    $.each(data.organisasiAnggota, function(i, o) {
                        if(o.pusat == 1){
                            $('#'+o.org_id+'_static_pusat').html("<i class=\"fas fa-check-square checked\"></i>");
                        }else{
                            $('#'+o.org_id+'_static_pusat').html("<i class=\"fas fa-minus-square not-checked\"></i>");
                        }

                        if(o.wilayah == 1){
                            $('#'+o.org_id+'_static_wilayah').html("<i class=\"fas fa-check-square checked\"></i>");
                        }else{
                            $('#'+o.org_id+'_static_wilayah').html("<i class=\"fas fa-minus-square not-checked\"></i>");
                        }

                        if(o.daerah == 1){
                            $('#'+o.org_id+'_static_daerah').html("<i class=\"fas fa-check-square checked\"></i>");
                        }else{
                            $('#'+o.org_id+'_static_daerah').html("<i class=\"fas fa-minus-square not-checked\"></i>");
                        }

                        if(o.cabang == 1){
                            $('#'+o.org_id+'_static_cabang').html("<i class=\"fas fa-check-square checked\"></i>");
                        }else{
                            $('#'+o.org_id+'_static_cabang').html("<i class=\"fas fa-minus-square not-checked\"></i>");
                        }

                        if(o.ranting == 1){
                            $('#'+o.org_id+'_static_ranting').html("<i class=\"fas fa-check-square checked\"></i>");
                        }else{
                            $('#'+o.org_id+'_static_ranting').html("<i class=\"fas fa-minus-square not-checked\"></i>");
                        }
                    });

                    const static_nik = data.anggota.nik;
                    const pas_foto = data.anggota.pas_foto;
                    const bukti_bayar = data.anggota.bukti_bayar;
                    const surat_rekomendasi = data.anggota.surat_rekomendasi;
                    const status = data.anggota.status_approve;

                    if (!pas_foto || pas_foto === '') {
                        $('#static_pas_foto').html(`
                            <span>Belum Upload</span>
                        `);
                    } else {
                        $('#static_pas_foto').html(`
                            <img src="${pas_foto}" alt="Profile" class="profile-img me-2">
                        `);
                    }

                    if (!bukti_bayar || bukti_bayar === '') {
                        $('#static_bukti_bayar').html(`
                            <span>Belum Upload</span>
                        `);
                    } else {
                        $('#static_bukti_bayar').html(`
                            <img src="${bukti_bayar}" alt="" class="img-thumbnail me-2">
                        `);
                    }

                    if (!surat_rekomendasi || surat_rekomendasi === '') {
                        $('#static_surat_rekomendasi').html(`
                            <span>Belum Upload</span>
                        `);
                    } else {
                        $('#static_surat_rekomendasi').html(`
                            <button class="btn btn-info btn-sm btn-open-pdf" data-src="${surat_rekomendasi}">Lihat</button>
                        `);
                    }

                    if (!status || status === '' || status === 'Pending') {
                        $('#btnAction').html(`
                            <button type="button" class="btn btn-light btbatal" onClick="listView()">Kembali</button>
                            <button type="button" class="btn btn-info" onClick="editData(${static_nik})">Edit</button>
                            <button type="button" class="btn btn-success" onClick="approveKtam(${static_nik})">Setujui</button>
                            <button type="button" class="btn btn-danger" onClick="rejectKtam(${static_nik})">Tolak</button>
                            <button type="button" class="btn btn-danger" onClick="hapusData(${static_nik})">Hapus</button>

                        `);
                    } else {
                        $('#btnAction').html(`
                            <button type="button" class="btn btn-light btbatal" onClick="listView()">Kembali</button>

                            <button type="button" class="btn btn-info" onClick="editData(${static_nik})">Edit</button>
                            <button type="button" class="btn btn-danger" onClick="hapusData(${static_nik})">Hapus</button>
                        `);
                    }

                    console.log('Parsed JSON:', pas_foto);
                } catch (e) {
                    console.error('JSON parse error:', e.message);
                }
            },
            error: function(xhr) {
                console.error('AJAX error:', xhr.responseText);
            }
        });

        $('#detailpage').show(500, 'swing');
        $('#formpage').hide(500, 'swing');
        $('#gridpage').hide(500, 'swing');
    }

    function editData(nik){
        mode = "edit";
        getMode(nik);

        $.ajax({
            url: '/Ktam/loadDataUpdate/' + nik,
            method: 'GET',
            success: function(response) {
                console.log('Raw response:', response);
                try {
                    let data = typeof response === 'string' ? JSON.parse(response) : response;
                    console.log('Parsed JSON:', data);
                    $('#nik').val(data.anggota.nik);
                    $('#nama_lengkap').val(data.anggota.nama_lengkap);
                    $('#gelar_depan').val(data.anggota.gelar_depan);
                    $('#gelar_belakang').val(data.anggota.gelar_belakang);
                    $('#tempat_lahir').val(data.anggota.tempat_lahir);
                    $('#tanggal_lahir').val(data.anggota.tanggal_lahir);
                    $('#email').val(data.anggota.email);
                    $('#nomor_hp').val(data.anggota.nomor_hp);
                    $('#profesi_lainnya').val(data.anggota.profesi_lainnya);
                    $('#tempat_kerja').val(data.anggota.tempat_kerja);
                    $('#alamat').val(data.anggota.alamat);
                    $('#kode_pos').val(data.anggota.kode_pos);
                    $('#riwayat_sd').val(data.anggota.riwayat_sd);
                    $('#riwayat_smp').val(data.anggota.riwayat_smp);
                    $('#riwayat_sma').val(data.anggota.riwayat_sma);
                    $('#riwayat_diploma').val(data.anggota.riwayat_diploma);
                    $('#riwayat_s1').val(data.anggota.riwayat_s1);
                    $('#riwayat_s2').val(data.anggota.riwayat_s2);
                    $('#riwayat_s3').val(data.anggota.riwayat_s3);
                    $('#organisasi_lain').val(data.anggota.organisasi_lain);
                    
                    const selectedDaerah = data.anggota.daerah;
                    const selectedCabang = data.anggota.nama_cabang;
                    const selectedProfesi = data.anggota.profesi;
                    const selectedPekerjaan = data.anggota.pekerjaan;

                    const selectedProvinsi = data.anggota.provinsi;
                    const selectedKota = data.anggota.kota;
                    const selectedKecamatan =  data.anggota.kecamatan;
                    const selectedKelurahan = data.anggota.kelurahan;

                    const selectedPendidikanTerakhir = data.anggota.pendidikan_terakhir;
                    
                    const selectedJk = data.anggota.jenis_kelamin;
                    const selectedSp = data.anggota.status_perkawinan;
                    const selectedPonpes = data.anggota.pernah_belajar_ponpes;
                    const selectedBahasaIndonesia = data.anggota.bahasa_indonesia;
                    const selectedBahasaArab = data.anggota.bahasa_arab;
                    const selectedBahasaInggris = data.anggota.bahasa_inggris;
                    const selectedBahasaLainnya = data.anggota.bahasa_lainnya;

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

                    if (selectedJk) {
                        $('#'+cleanedString(selectedJk)).prop( "checked", true );
                    }

                    if(selectedSp){
                        $('#'+cleanedString(selectedSp)).prop( "checked", true );
                    }

                    if (selectedProfesi) {
                        $('#profesi').val(selectedProfesi).trigger('change');
                    }

                    if (selectedPekerjaan) {
                        $('#pekerjaan').val(selectedPekerjaan).trigger('change');
                    }

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

                    if(selectedPonpes == "Pernah"){
                        $('#pesantren_pernah').prop( "checked", true );
                    }else if(selectedPonpes == "Tidak Pernah"){
                        $('#pesantren_tidak_pernah').prop( "checked", true );
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

                    $.each(data.organisasiAnggota, function(i, o) {
                        if(o.pusat == 1){
                            $('#'+o.org_id+'_pusat').prop( "checked", true );
                        }
                        if(o.wilayah == 1){
                            $('#'+o.org_id+'_wilayah').prop( "checked", true );
                        }
                        if(o.daerah == 1){
                            $('#'+o.org_id+'_daerah').prop( "checked", true );
                        }
                        if(o.cabang == 1){
                            $('#'+o.org_id+'_cabang').prop( "checked", true );
                        }
                        if(o.ranting == 1){
                            $('#'+o.org_id+'_ranting').prop( "checked", true );
                        }
                    });
                } catch (e) {
                    console.error('JSON parse error:', e.message);
                }
            },
            error: function(xhr) {
                console.error('AJAX error:', xhr.responseText);
            }
        });
        $('#formpage').show(500, 'swing');
        $('#detailpage').hide(500, 'swing');
        $('#gridpage').hide(500, 'swing');
    }

    function hapusData(nik){
        
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            $.ajax({
                url: '/Ktam/delete/' + nik,
                type: 'DELETE',
                success: function(response) {
                    alert('Data berhasil dihapus!');
                    $('#ktam_list').DataTable().ajax.reload(); // Reload DataTable setelah penghapusan
                    listView();
                },
                error: function(xhr) {
                    console.error('Error deleting data:', xhr.responseText);
                    alert('Gagal menghapus data!');
                }
            });
        }
    }

    function approveKtam(nik) {
        if (confirm("Apakah Anda yakin ingin menyetujui data ini?")) {
            $.ajax({
                url: '/Ktam/approve/' + nik,
                type: 'POST',
                success: function(response) {
                    alert('Data berhasil disetujui!');
                    $('#ktam_list').DataTable().ajax.reload(); // Reload DataTable setelah persetujuan
                    listView();
                },
                error: function(xhr) {
                    console.error('Error approving data:', xhr.responseText);
                    alert('Gagal menyetujui data!');
                }
            });
        }
    }

    function rejectKtam(nik) {
        if (confirm("Apakah Anda yakin ingin menolak data ini?")) {
            $.ajax({
                url: '/Ktam/reject/' + nik,
                type: 'POST',
                success: function(response) {
                    alert('Data berhasil ditolak!');
                    $('#ktam_list').DataTable().ajax.reload(); // Reload DataTable setelah penolakan
                    listView();
                },
                error: function(xhr) {
                    console.error('Error rejecting data:', xhr.responseText);
                    alert('Gagal menolak data!');
                }
            });
        }
    }

    function listView(){
        $('#ktam-form')[0].reset();

        $('.select2').val('').trigger('change');
        $('.select2-no-search').val('').trigger('change');

        $('#gridpage').show(500, 'swing');
        $('#detailpage').hide(500, 'swing');
        $('#formpage').hide(500, 'swing');
    }
</script>