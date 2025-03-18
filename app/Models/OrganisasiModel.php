<?php

namespace App\Models;
use CodeIgniter\Model;

class OrganisasiModel extends Model
{
    protected $table = 'organisasi';
    protected $primaryKey = 'org_id';
    protected $allowedFields = ['org_id', 'nama'];

    public function getOrganisasi()
    {
        return $this->orderBy('org_id', 'ASC')->findAll();
    }
}
