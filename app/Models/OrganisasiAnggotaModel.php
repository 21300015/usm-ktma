<?php

namespace App\Models;
use CodeIgniter\Model;

class OrganisasiAnggotaModel extends Model
{
    protected $table = 'organisasi_anggota';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true; // ID auto increment
    protected $allowedFields = ['nik', 'org_id', 'pusat', 'wilayah', 'daerah', 'cabang', 'ranting'];

}
