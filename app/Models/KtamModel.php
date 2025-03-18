<?php

namespace App\Models;

use CodeIgniter\Model;

class KtamModel extends Model
{
    protected $table = 'ktam';
    protected $primaryKey = 'nik';
    protected $allowedFields = [
        'nik', 
        'nama_lengkap', 
        'gelar_depan', 
        'gelar_belakang', 
        'tempat_lahir', 
        'tanggal_lahir', 
        'jenis_kelamin',
        'status_perkawinan',
        'alamat',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'kode_pos',
        'daerah',
        'cabang',
        'email',
        'nomor_hp',
        'profesi',
        'profesi_lainnya',
        'pekerjaan',
        'tempat_kerja',
        'pendidikan_terakhir',
        'riwayat_sd',
        'riwayat_smp',
        'riwayat_sma',
        'riwayat_diploma',
        'riwayat_s1',
        'riwayat_s2',
        'riwayat_s3',
        'pernah_belajar_ponpes',
        'bahasa_indonesia',
        'bahasa_arab',
        'bahasa_inggris',
        'bahasa_lainnya',
        'organisasi_lain'
    ];
}