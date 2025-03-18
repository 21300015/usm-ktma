<?php 

namespace App\Models;
use CodeIgniter\Model;

class CabangModel extends Model
{
    protected $table = 'cabang_muhammadiyah';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_cabang', 'daerah', 'provinsi', 'kota', 'kecamatan', 'kelurahan', 'alamat', 'kontak', 'email'];

    // Ambil daftar daerah unik dari database
    public function getDaerah()
    {
        return $this->select('daerah')->distinct()->findAll();
    }

    // Ambil daftar cabang berdasarkan daerah yang dipilih
    public function getCabangByDaerah($daerah)
    {
        return $this->where('daerah', $daerah)->findAll();
    }
}
