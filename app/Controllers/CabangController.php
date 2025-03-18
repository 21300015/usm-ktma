<?php

namespace App\Controllers;
use App\Models\CabangModel;
use CodeIgniter\Controller;

class CabangController extends Controller
{
    public function index()
    {
        $model = new CabangModel();
        $daerahList = $model->getDaerah(); // Ambil daftar daerah

        return view('cabang/form', ['daerahList' => $daerahList]);
    }

    public function getCabangByDaerah()
    {
        $daerah = $this->request->getGet('daerah');
        $model = new CabangModel();
        $cabang = $model->getCabangByDaerah($daerah);

        return $this->response->setJSON($cabang);
    }
}
