<?php

namespace App\Models;

use CodeIgniter\Model;

class UploadDocModel extends Model
{
    protected $table = 'ktam';
    protected $primaryKey = 'nik';
    protected $allowedFields = ['pas_foto', 'bukti_bayar', 'surat_rekomendasi', 'doc_updated_at'];

}