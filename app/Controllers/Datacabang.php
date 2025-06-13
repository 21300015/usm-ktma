<?php

namespace App\Controllers;
use App\Models\CabangModel;
use CodeIgniter\Controller;

class Datacabang extends Controller
{
    public function index()
    {

        return view('master/cabang/pagebody');
    }

    public function getData()
    {
        $model = new CabangModel();
        $data = $model->findAll();
        
        return $this->response
                ->setHeader('Content-Type', 'application/json')
                ->setJSON(['data' => $data]);
    }

    public function getCabangByDaerah()
    {
        $daerah = $this->request->getGet('daerah');
        $model = new CabangModel();
        $cabang = $model->getCabangByDaerah($daerah);

        return $this->response->setJSON($cabang);
    }

    public function loadDataUpdate($id)
    {

        $model = new CabangModel();
        $cabang = $model->where('id', $id)->first();

        return $this->response
        ->setHeader('Content-Type', 'application/json')
        ->setJSON([
            'cabang' => $cabang
        ]);
        
    }

    public function store()
    {
        $CabangModel = new CabangModel();
        $daerah = $this->request->getPost('kota');
        $nama_cabang = $this->request->getPost('cabang');

        $cek = $CabangModel->where('daerah', $daerah)
                          ->where('nama_cabang', $nama_cabang)
                          ->first();

        if ($cek) {
            // Data sudah ada, kirim respon error
            return redirect()->back()->withInput()->with('error', 'Data daerah dan cabang sudah ada.');
        }

        $data = [
            'nama_cabang' => $this->request->getPost('cabang'),
            'provinsi' => $this->request->getPost('provinsi'),
            'daerah' => $this->request->getPost('kota'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'kelurahan' => $this->request->getPost('kelurahan'),
            'alamat' => $this->request->getPost('alamat'),
            'kontak' => $this->request->getPost('nomor_hp'),
            'email' => $this->request->getPost('email'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        
        $CabangModel->insert($data);

        return redirect()->to('master/datacabang')->with('success', 'Data berhasil Disimpan!');
    }

    public function update($id)
    {

        $CabangModel = new CabangModel();

        $data = [
            'nama_cabang' => $this->request->getPost('cabang'),
            'provinsi' => $this->request->getPost('provinsi'),
            'daerah' => $this->request->getPost('kota'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'kelurahan' => $this->request->getPost('kelurahan'),
            'alamat' => $this->request->getPost('alamat'),
            'kontak' => $this->request->getPost('nomor_hp'),
            'email' => $this->request->getPost('email'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $CabangModel->update($id, $data);


        return redirect()->to('master/datacabang')->with('success', 'Data berhasil Diperbaharui!');
    }
    
}
