<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'ktam'; // Nama tabel di database
    protected $primaryKey = 'nik';
    protected $allowedFields = ['nik', 'nama_lengkap', 'provinsi', 'kota', 'kecamatan', 'kelurahan', 'email', 'pas_foto', 'bukti_bayar', 'surat_rekomendasi', 'status_bayar', 'status_approve', 'approve_by', 'created_at', 'updated_at', 'doc_updated_at'];
}
