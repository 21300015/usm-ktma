<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Blanko Pendaftaran Muhammadiyah</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            font-size: 12px; 
            color:#18329c;
        }
        .container { 
            /* width: 210mm;  */
            /* height: 297mm; */
            /* margin: 0 auto; 
            padding: 20px; 
            border: 1px solid ; */
        }
        h1, h2, h3 {     
            font-family: times new roman, sans-serif; 
            text-align: center; 
            margin: 0; 
        }
        h4 {
            margin-bottom: 5px;
            font-weight: bold;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 5px; 
        }
        td, th { 
            padding: 5px 0px; 
            vertical-align: middle; 
        }
        ol{
            padding-left: 20px; 
        }
        .judul { 
            font-weight: bold; 
            text-align: center; 
            margin-top: 20px; 
        }
        .box { 
            border: 1px solid #000; 
            padding: 5px; 
            margin-bottom: 10px; 
        }
        .section-title { 
            font-weight: bold; 
            margin-top: 15px; 
        }
        .td-value {
            border-bottom: 1px solid;
            /* padding: 0px; */
            vertical-align: middle;
        }
        .lower-alpha{
            list-style: lower-alpha;
        }
        .horizontal-list-1{
            padding-left: 15px;
            columns: 1;
            -webkit-columns: 1;
            -moz-columns: 1;
        }
        .horizontal-list-2{
            padding-left: 15px;
            columns: 2;
            -webkit-columns: 2;
            -moz-columns: 2;
        }
        .horizontal-list-3{
            padding-left: 15px;
            columns: 3;
            -webkit-columns: 3;
            -moz-columns: 3;
        }
        .horizontal-list-4 {
            padding-left: 15px;
            columns: 4;
            -webkit-columns: 4;
            -moz-columns: 4;
        }
        .horizontal-list-5{
            padding-left: 15px;
            columns: 5;
            -webkit-columns: 5;
            -moz-columns: 5;
        }

        .horizontal-ol {
            list-style: none;
            counter-reset: list;
            padding: 0;
            margin: 0;
        }

        .horizontal-ol li {
            display: inline-block;
            margin-right: 20px;
        }

        .horizontal-ol li::before {
            counter-increment: list;
            content: counter(list) ". ";
            /* font-weight: bold; */
        }
       
        .sp-list{
            padding-left: 15px;
            columns: 3;
            -webkit-columns: 3;
            -moz-columns: 3;
        }
        .pas-foto {
            width: 27.9mm;
            height: 38.1mm;
            display: inline-block;
            border: 1px solid;
            margin: 10px;
            align-content: center;
            text-align: center;
        }
        .signature {
            width: 80%;
            margin: 0 auto;
            padding-bottom: 65px;
            border-bottom: 1px solid;
        }
        .tb_profesi tr td{
            padding: 0;
        }
        .active {
            text-decoration: line-through;
        }
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <a style="text-align: center;display: block;width: 100%;">
            <img src="<?= $logo ?>" style="width: 80px; height: 80px;margin-bottom: 15px;">
        </a>
        <h2>BLANKO PENDAFTARAN<br>ANGGOTA MUHAMMADIYAH</h2>

        <ol>
            <li> Kartu Tanda Anggota Muhammadiyah untuk pemohon baru diterbitkan Pimpinan Wilayah Muhammadiyah yang telah mendapat pelimpahan wewenang menerbitkan Kartu Tanda Anggota untuk wilayahnya.</li>
            <li> Kartu Tanda Anggota pembaruan (yang telah memiliki NBM) dan Kartu Tanda Anggota baru untuk pemohon dari luar Pimpinan Wilayah yang belum mendapat pelimpahan wewenang menerbitkan Kartu Tanda Anggota hanya diterbitkan oleh Pimpinan Pusat Muhammadiyah.</li>
            <li> Kartu TandaAnggota diterbitkan apabila telah memenuhipersyaratan:
                <ol style="list-style: lower-alpha;padding-left: 15px;">
                    <li>Telah mendapatkan pengesahan dari Pimpinan Cabang Muhammadiyah setempat</li>
                    <li>Telah melunasi uang pangkal sebesar Rp. 25.000,00 (dua puluh lima ribu rupiah) sesuai dengan ketentuan yang telah ditetapkan Pimpinan Pusat Muhammadiyah, dengan menunjukkan bukti pembayaran untuk Pimpinan Persyarikatan masing-masing.</li>
                </ol>
            </li>
        </ol>
        
        <table>
            <tbody>
                <tr>
                    <td style="width: 185px;">Nomor KTA</td>
                    <td class="td-value" colspan="4">: <small style="float:right;">(diisi oleh petugas)</small></td>
                </tr>
                <tr>
                    <td>Daerah</td>
                    <td class="td-value" colspan="4">: <?= $anggota['daerah']; ?></td>
                </tr>
                <tr>
                    <td>Cabang</td>
                    <td class="td-value" colspan="4">: <?= $anggota['nama_cabang']; ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td class="td-value" colspan="4">: <?= $anggota['nama_lengkap']; ?></td>
                </tr>
                <tr>
                    <td>Gelar Kesarjanaan / Gelar Lain</td>
                    <td width="50" style="padding: 0;vertical-align: middle;"> : 
                        <span>
                            <small>Depan</small>
                        </span>
                    </td>
                    <td class="td-value"> : <?= $anggota['gelar_depan']; ?></td>

                    <td width="50" style="padding: 0;vertical-align: middle;" class="text-center"> : 
                        <span>
                            <small>Belakang</small>
                        </span>
                    </td>
                    <td class="td-value" width="150"> : <?= $anggota['gelar_belakang']; ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td class="td-value" colspan="2">: <?= $anggota['tempat_lahir']; ?></td>

                    <td class="text-center"><small>Tanggal Lahir</small></td>
                    <td class="td-value">: <?= $anggota['tanggal_lahir']; ?></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td class="td-value" colspan="2">: <small style="float:right;">(diisi jika tanggal lahir tidak diketahui)</small></td>

                    <td class="text-center"><small>Jenis Kelamin</small></td>
                    <td class="td-value">: <span <?= $anggota['jenis_kelamin'] == 'Laki-laki' ? 'class="active"' : '' ?>>Laki-laki</span> / <span <?= $anggota['jenis_kelamin'] == 'Perempuan' ? 'class="active"' : '' ?>>Perempuan</span></td>
                </tr>
                <tr>
                    <td>Alamat Lenkap</td>
                    <td class="td-value" colspan="4">: <?= $anggota['alamat']; ?></td>
                </tr>
                <tr>
                    <td>Desa / Kelurahan</td>
                    <td class="td-value" colspan="4">: <?= $anggota['kelurahan']; ?></td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td class="td-value" colspan="4">: <?= $anggota['kecamatan']; ?></td>
                </tr>
                <tr>
                    <td>Kab/Kota</td>
                    <td class="td-value" colspan="4">: <?= $anggota['kota']; ?></td>
                </tr>
                <tr>
                    <td>Provinsi</td>
                    <td class="td-value" colspan="4">: <?= $anggota['provinsi']; ?></td>
                </tr>
                <tr>
                    <td>Kode Pos</td>
                    <td class="td-value" colspan="2">: <?= $anggota['kode_pos']; ?></td>

                    <td width="60" class="text-center"><small>No HP / Telp</small></td>
                    <td class="td-value">: <?= $anggota['nomor_hp']; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td class="td-value" colspan="4">: <?= $anggota['email']; ?></td>
                </tr>
            </tbody>
        </table>
        
        <div>
            <h4>Profesi*</h4>
            <table class="tb_profesi">
                <tr>
                    <td <?= $anggota['profesi'] == 'Guru' ? 'class="active"' : '' ?>>1. Guru</td>
                    <td <?= $anggota['profesi'] == 'Dokter' ? 'class="active"' : '' ?>>5. Dokter</td>
                    <td <?= $anggota['profesi'] == 'Paramedis' ? 'class="active"' : '' ?>>9. Paramedis</td>
                    <td <?= $anggota['profesi'] == 'Pengrajin' ? 'class="active"' : '' ?>>13. Pengrajin</td>
                </tr>
                <tr>
                    <td <?= $anggota['profesi'] == 'Dosen' ? 'class="active"' : '' ?>>2. Dosen</td>
                    <td <?= $anggota['profesi'] == 'Insinyur' ? 'class="active"' : '' ?>>6. Insinyur</td>
                    <td <?= $anggota['profesi'] == 'Apoteker' ? 'class="active"' : '' ?>>10. Apoteker</td>
                    <td <?= $anggota['profesi'] == 'Pengusaha' ? 'class="active"' : '' ?>>14. Pengusaha</td>
                </tr>
                <tr>
                    <td <?= $anggota['profesi'] == 'Pensiunan' ? 'class="active"' : '' ?>>3. Pensiunan </td>
                    <td <?= $anggota['profesi'] == 'Akuntan' ? 'class="active"' : '' ?>>7. Akuntan </td>
                    <td <?= $anggota['profesi'] == 'Arsitek' ? 'class="active"' : '' ?>>11. Arsitek</td>
                    <td <?= $anggota['profesi'] == 'Pegawai/karyawan' ? 'class="active"' : '' ?>>15. Pegawai/karyawan</td>
                </tr>
                <tr>
                    <td <?= $anggota['profesi'] == 'Nelayan' ? 'class="active"' : '' ?>>4. Nelayan </td>
                    <td <?= $anggota['profesi'] == 'Advokat' ? 'class="active"' : '' ?>>8. Advokat </td>
                    <td <?= $anggota['profesi'] == 'Pedagang' ? 'class="active"' : '' ?>>12. Pedagang </td>
                    <td <?= $anggota['profesi'] == 'Lainnya' ? 'class="active"' : '' ?>>16. Lainnya</td>
                </tr>
            </table>
        </div>

        <div>
            <table>
                <tbody>
                    <tr>
                        <td width="120"><strong>Status Pekerjaan*</strong></td>
                        <td class="td-value">
                            <ol class="hl horizontal-ol">
                                <li <?= $anggota['pekerjaan'] == 'Belum Bekerja' ? 'class="active"' : '' ?>>Belum Bekerja</li>
                                <li <?= $anggota['pekerjaan'] == 'Bekerja' ? 'class="active"' : '' ?>>Bekerja</li>
                                <li <?= $anggota['pekerjaan'] == 'Pensiunan' ? 'class="active"' : '' ?>>Pensiunan</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td width="120"><strong>Instansi/Tempat kerja</strong></td>
                        <td class="td-value"> <?= $anggota['tempat_kerja']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <table>
                <tbody>
                    <tr>
                        <td width="120"><strong>Status Perkawinan*</strong></td>
                        <td class="td-value">
                            <ol class="hl horizontal-ol">
                                <li <?= $anggota['status_perkawinan'] == 'Menikah' ? 'class="active"' : '' ?>><span id="menikah">Menikah</span></li>
                                <li <?= $anggota['status_perkawinan'] == 'Belum Menikah' ? 'class="active"' : '' ?>><span id="belum_menikah">Belum Menikah</span></li>
                                <li <?= $anggota['status_perkawinan'] == 'Janda/Duda' ? 'class="active"' : '' ?>><span id="janda">Janda/Duda</span></li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <table>
                <tbody>
                    <tr>
                        <td width="180"><strong>Pendidikan yang Pernah Diikuti**</strong></td>
                        <td class="td-value">
                            <ol class="hl horizontal-ol">
                                <li <?= $anggota['riwayat_sd'] == '' && $anggota['riwayat_smp'] == '' && $anggota['riwayat_sma'] == '' && $anggota['riwayat_diploma'] == '' && $anggota['riwayat_s1'] == '' && $anggota['riwayat_s2'] == '' && $anggota['riwayat_s3'] == '' ? 'class="active"' : '' ?>>Tidak ada</li>
                                <li <?= $anggota['riwayat_sd'] != '' ? 'class="active"' : '' ?>>SD</li>
                                <li <?= $anggota['riwayat_smp'] != '' ? 'class="active"' : '' ?>>SLTP</li>
                                <li <?= $anggota['riwayat_sma'] != '' ? 'class="active"' : '' ?>>SLTA</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td <?= $anggota['riwayat_diploma'] != '' ? 'class="active"' : '' ?>><span>5. Diploma/Sarjana Muda Jur./Prog. Studi</span></td>
                        <td class="td-value">: <?= $anggota['riwayat_diploma']; ?></td>
                    </tr>
                    <tr>
                        <td <?= $anggota['riwayat_s1'] != '' ? 'class="active"' : '' ?>><span>6. Sarjana (S-1) Jur./Prog. Studi</span></td>
                        <td class="td-value">: <?= $anggota['riwayat_s1']; ?></td>
                    </tr>
                    <tr>
                        <td <?= $anggota['riwayat_s2'] != '' ? 'class="active"' : '' ?>><span id="s2">7. Pasca Sarjana (S-2) Jur./Prog. Studi</span></td>
                        <td class="td-value">: <?= $anggota['riwayat_s2']; ?></td>
                    </tr>
                    <tr>
                        <td <?= $anggota['riwayat_s3'] != '' ? 'class="active"' : '' ?>><span id="s3">8. Pasca Sarjana (S-3) Jur./Prog Studi</span></td>
                        <td class="td-value">: <?= $anggota['riwayat_s3']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <h4>Kemampuan Bahasa** :</h4>
            <table>
                <tbody>
                    <tr>
                        <td width="180">1. Bahasa Indonesia</td>
                        <td class="td-value">
                            <ol class="hl horizontal-ol lower-alpha">
                                <li <?= $anggota['bahasa_indonesia'] != 'Aktif' ? 'class="active"' : '' ?>><span>Pasif</span></li>
                                <li <?= $anggota['bahasa_indonesia'] == 'Aktif' ? 'class="active"' : '' ?>><span>Aktif</span></li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td width="180">2. Bahasa Arab</td>
                        <td class="td-value">
                            <ol class="hl horizontal-ol lower-alpha">
                                <li <?= $anggota['bahasa_arab'] != 'Aktif' ? 'class="active"' : '' ?>><span>Pasif</span></li>
                                <li <?= $anggota['bahasa_arab'] == 'Aktif' ? 'class="active"' : '' ?>><span>Aktif</span></li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td width="180">3. Bahasa Inggris</td>
                        <td class="td-value">
                            <ol class="hl horizontal-ol lower-alpha">
                                <li <?= $anggota['bahasa_inggris'] != 'Aktif' ? 'class="active"' : '' ?>><span>Pasif</span></li>
                                <li <?= $anggota['bahasa_inggris'] == 'Aktif' ? 'class="active"' : '' ?>><span>Aktif</span></li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td width="180">4. Lainnya.......................</td>
                        <td class="td-value">
                            <ol class="hl horizontal-ol lower-alpha">
                                <li <?= $anggota['bahasa_lainnya'] != 'Aktif' ? 'class="active"' : '' ?>><span>Pasif</span></li>
                                <li <?= $anggota['bahasa_lainnya'] == 'Aktif' ? 'class="active"' : '' ?>><span>Aktif</span></li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <table>
                <tbody>
                    <tr>
                        <td width="220"><strong>Pernah Belajar di Pondok Pesantren / Madrasah*</strong></td>
                        <td class="td-value">
                            <ol class="hl horizontal-ol">
                                <li <?= $anggota['pernah_belajar_ponpes'] == 'Pernah' ? 'class="active"' : '' ?>><span id="pesantren">Ya</span></li>
                                <li <?= $anggota['pernah_belajar_ponpes'] != 'Pernah' ? 'class="active"' : '' ?>><span id="tidak_pesantren">Tidak</span></li>
                            </ol>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <h4>Organisasi Yang Pernah/Sedang Diikuti** :</h4>
            <table>
                <tbody>
                    <?php foreach ($organisasiList as $organisasi): 
                        // Cari data anggota untuk organisasi ini
                        $oa = null;
                        foreach ($organisasiAnggota as $o) {
                            if ($o['org_id'] == $organisasi['org_id']) {
                                $oa = $o;
                                break;
                            }
                        }
                    ?>
                    <tr class="ht-50">
                        <td width="220"><?= $organisasi['nama'] ?></td>
                        <td class="td-value">
                            <ol class="hl horizontal-ol lower-alpha">
                                
                                <li <?= isset($oa) && $oa['pusat'] == 1 ? 'class="active"' : '' ?>>Pusat</li>
                                
                                <li <?= isset($oa) && $oa['wilayah'] == 1 ? 'class="active"' : '' ?>>Wilayah</li>
                                
                                <li <?= isset($oa) && $oa['daerah'] == 1 ? 'class="active"' : '' ?>>Daerah</li>
                                
                                <li <?= isset($oa) && $oa['cabang'] == 1 ? 'class="active"' : '' ?>>Cabang</li>
                                
                                <li <?= isset($oa) && $oa['ranting'] == 1 ? 'class="active"' : '' ?>>Ranting</li>
                               
                            </ol>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                    
                </tbody>
            </table>
        </div>

        <div>
            <h4>Organisasi Lain yang Pernah/Sedang Diikuti** :</h4>
            <div style="display:block;width: 100%;height: 60px;border: 1px solid;">
                <?= $anggota['organisasi_lain']; ?>
            </div>
        </div>

        <div style="display: block;margin-top: 10px;position: relative;top: 30px;">
            <div style="display: inline-block;">
                <div style="width: 200px;display: inline-block;vertical-align: top;">
                    <p>Keterangan<br>* Lingkari/coret salah satu<br>** Lingkari/coret lebih dari satu</p>
                </div>
                <div class="pas-foto"><br><br><br><br>Foto 3 x 4 Berwarna</div>
                <div class="pas-foto"><br><br><br><br>Foto 3 x 4 Berwarna</div>
            </div>
        </div>

        <div>
            <p style="margin-bottom: 5px;">Saya yang bertanda tangan di bawah ini, mengajukan permohonan menjadi anggota Muhammadiyah.<br>Saya menyatakan sanggup dan bersedia untuk:</p>
            <ol style="margin-top: 5px;">
                <li>Tunduk dan taat pada keputusan/peraturan dan menjaga nama baik Persyarikatan.</li>
                <li>Menjadi teladan yang utama bagi umat Islam, beramal dan mencapai tujuan Persyarikatan, melaksanakan/mendukung usaha Persyarikatan.</li>
                <li>Membayar Iuran Wajib Anggota sebesar Rp. 1.000,00 (seribu rupiah) setiap bulannya yang akan dibayarkan kepada Pimpinan Cabang Muhammadiyah.</li>
            </ol>
        </div>

        

        <table width="100%" style="text-align: center; margin-top: 30px;">
            <tr>
                <td>_______________________</td>
                <td>_______________________</td>
                <td>_______________________</td>
                <td>_______________________</td>
            </tr>
            <tr>
                <td>(Kabupaten/Kota)</td>
                <td>(Tgl)</td>
                <td>(Bulan)</td>
                <td>(Tahun)</td>
            </tr>
        </table>

        <br>

        <table width="100%" style="text-align: center;">
            <tbody>
                <tr>
                <td>
                    <strong>Pemohon,</strong>
                    <div class="signature" >
                    </div>
                </td>
                <td>
                    <strong>Pimpinan Ranting</strong>
                    <div class="signature" >
                    </div>
                </td>
                <td>
                    <strong>Pimpinan Cabang Muhammadiyah</strong>
                    <div class="signature" >
                    </div>
                </td>
                </tr>
                <tr>
                <td>(nama lengkap &amp; tanda tangan)</td>
                <td>
                    <strong>Ketua / Sekretaris</strong>
                    <br> NBM : ...................................<br>
                    <small>Sah apabila ada tanda tangan<br> dan cap stempel Pimpinan Ranting</small>
                </td>
                <td>
                    <strong>Ketua / Sekretaris</strong>
                    <br> NBM : ...................................<br>
                    <small>Sah apabila ada tanda tangan<br> dan cap stempel Pimpinan Cabang</small>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
