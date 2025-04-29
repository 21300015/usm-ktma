<?php

namespace App\Controllers;

use App\Models\KtamModel;
use App\Models\CabangModel;
use App\Models\OrganisasiModel;
use App\Models\OrganisasiAnggotaModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class Ktam extends BaseController
{
    public function index(): string
    {
        $daerahModel = new CabangModel();
        $daerahList = $daerahModel->getDaerah(); // Ambil daftar daerah

        $organisasiModel = new OrganisasiModel();
        $organisasiList = $organisasiModel->getOrganisasi();

        return view('ktam/ktam_list', ['daerahList' => $daerahList, 'organisasiList' => $organisasiList]);
    }

    public function getCabangByDaerah()
    {
        $daerah = $this->request->getGet('daerah');
        $model = new CabangModel();
        $cabang = $model->getCabangByDaerah($daerah);

        return $this->response->setJSON($cabang);
    }

    public function loadDataUpdate($nik)
    {

        $KtamModel = new KtamModel();
        $anggota = $KtamModel->where('nik', $nik)->first();

        $organisasiModel = new OrganisasiModel();
        $organisasiList = $organisasiModel->getOrganisasi(); // Ambil daftar Organisasi

        $OrganisasiAnggotaModel = new OrganisasiAnggotaModel();
        $organisasiAnggota = $OrganisasiAnggotaModel->where('nik', $nik)->findAll();

        return $this->response
        ->setHeader('Content-Type', 'application/json')
        ->setJSON([
            'anggota' => $anggota,
            'organisasiList' => $organisasiList,
            'organisasiAnggota' => $organisasiAnggota
        ]);
        
    }

    public function getData()
    {
        $model = new KtamModel();
        $data = $model->findAll();
        
        return $this->response
                ->setHeader('Content-Type', 'application/json')
                ->setJSON(['data' => $data]);
    }

    public function store()
    {

        $KtamModel = new KtamModel();

        $dataFormKtam = [
            'nik' => $this->request->getPost('nik'), 
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'gelar_depan' => $this->request->getPost('gelar_depan'),
            'gelar_belakang' => $this->request->getPost('gelar_belakang'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'status_perkawinan' => $this->request->getPost('status_perkawinan'),
            'alamat' => $this->request->getPost('alamat'),
            'provinsi' => $this->request->getPost('provinsi'),
            'kota' => $this->request->getPost('kota'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'kelurahan' => $this->request->getPost('kelurahan'),
            'kode_pos' => $this->request->getPost('kode_pos'),
            'daerah' => $this->request->getPost('daerah'),
            'cabang' => $this->request->getPost('cabang'),
            'email' => $this->request->getPost('email'),
            'nomor_hp' => $this->request->getPost('nomor_hp'),
            'profesi' => $this->request->getPost('profesi'),
            'profesi_lainnya' => $this->request->getPost('profesi_lainnya'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'tempat_kerja' => $this->request->getPost('tempat_kerja'),
            'pendidikan_terakhir' => $this->request->getPost('pendidikan_terakhir'),
            'riwayat_sd' => $this->request->getPost('riwayat_sd'),
            'riwayat_smp' => $this->request->getPost('riwayat_smp'),
            'riwayat_sma' => $this->request->getPost('riwayat_sma'),
            'riwayat_diploma' => $this->request->getPost('riwayat_diploma'),
            'riwayat_s1' => $this->request->getPost('riwayat_s1'),
            'riwayat_s2' => $this->request->getPost('riwayat_s2'),
            'riwayat_s3' => $this->request->getPost('riwayat_s3'),
            'pernah_belajar_ponpes' => $this->request->getPost('pernah_belajar_ponpes'),
            'bahasa_indonesia' => $this->request->getPost('bahasa_indonesia'),
            'bahasa_arab' => $this->request->getPost('bahasa_arab'),
            'bahasa_inggris' => $this->request->getPost('bahasa_inggris'),
            'bahasa_lainnya' => $this->request->getPost('bahasa_lainnya'),
            'organisasi_lain' => $this->request->getPost('organisasi_lain'),
        ];

        // Debugging sebelum insert
        // echo "<pre>";
        // print_r($dataFormKtam);
        // echo "</pre>";

        $KtamModel->insert($dataFormKtam);
            $orgNik = $this->request->getPost('nik');
            $organisasiModel = new OrganisasiModel();
            $OrganisasiAnggotaModel = new OrganisasiAnggotaModel();
            $organisasiList = $organisasiModel->getOrganisasi();
            
            if (!empty($organisasiList)){
                foreach ($organisasiList as $key => $organisasi) {
                    $pusat = $this->request->getPost($organisasi['org_id'].'_pusat');
                    $wilayah = $this->request->getPost($organisasi['org_id'].'_wilayah');
                    $daerah = $this->request->getPost($organisasi['org_id'].'_daerah');
                    $cabang = $this->request->getPost($organisasi['org_id'].'_cabang');
                    $ranting = $this->request->getPost($organisasi['org_id'].'_ranting');
                    if (empty($pusat)) {
                        $pusat = 0;
                    }
                    if (empty($wilayah)) {
                        $wilayah = 0;
                    }
                    if (empty($daerah)) {
                        $daerah = 0;
                    }
                    if (empty($cabang)) {
                        $cabang = 0;
                    }
                    if (empty($ranting)) {
                        $ranting = 0;
                    }
                    $dataOrganisasiAnggota[] = [
                        'nik'  => $orgNik,
                        'org_id'  => $organisasi['org_id'],
                        'pusat'   => $pusat,
                        'wilayah'   => $wilayah,
                        'daerah'   => $daerah,
                        'cabang'   => $cabang,
                        'ranting'   => $ranting,
                    ];
                    
                }
            }

            // Debugging sebelum insert
            // echo "<pre>";
            // print_r($dataOrganisasiAnggota);
            // echo "</pre>";
            

            // Simpan data pengalaman organisasi ke tabel `anggota_pengalaman`
            
            if (!empty($dataOrganisasiAnggota)) {
                if($OrganisasiAnggotaModel->insertBatch($dataOrganisasiAnggota)){
                    return redirect()->to('')->with('success', 'Pendaftaran berhasil!');
                }
            }else{
                return redirect()->to('ktam_list')->with('success', 'Pendaftaran berhasil!');
            }
        
    }

    public function update($nik)
    {

        $KtamModel = new KtamModel();

        $dataFormKtam = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'gelar_depan' => $this->request->getPost('gelar_depan'),
            'gelar_belakang' => $this->request->getPost('gelar_belakang'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'status_perkawinan' => $this->request->getPost('status_perkawinan'),
            'alamat' => $this->request->getPost('alamat'),
            'provinsi' => $this->request->getPost('provinsi'),
            'kota' => $this->request->getPost('kota'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'kelurahan' => $this->request->getPost('kelurahan'),
            'kode_pos' => $this->request->getPost('kode_pos'),
            'daerah' => $this->request->getPost('daerah'),
            'cabang' => $this->request->getPost('cabang'),
            'email' => $this->request->getPost('email'),
            'nomor_hp' => $this->request->getPost('nomor_hp'),
            'profesi' => $this->request->getPost('profesi'),
            'profesi_lainnya' => $this->request->getPost('profesi_lainnya'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'tempat_kerja' => $this->request->getPost('tempat_kerja'),
            'pendidikan_terakhir' => $this->request->getPost('pendidikan_terakhir'),
            'riwayat_sd' => $this->request->getPost('riwayat_sd'),
            'riwayat_smp' => $this->request->getPost('riwayat_smp'),
            'riwayat_sma' => $this->request->getPost('riwayat_sma'),
            'riwayat_diploma' => $this->request->getPost('riwayat_diploma'),
            'riwayat_s1' => $this->request->getPost('riwayat_s1'),
            'riwayat_s2' => $this->request->getPost('riwayat_s2'),
            'riwayat_s3' => $this->request->getPost('riwayat_s3'),
            'pernah_belajar_ponpes' => $this->request->getPost('pernah_belajar_ponpes'),
            'bahasa_indonesia' => $this->request->getPost('bahasa_indonesia'),
            'bahasa_arab' => $this->request->getPost('bahasa_arab'),
            'bahasa_inggris' => $this->request->getPost('bahasa_inggris'),
            'bahasa_lainnya' => $this->request->getPost('bahasa_lainnya'),
            'organisasi_lain' => $this->request->getPost('organisasi_lain'),
        ];

        // Update data utama berdasarkan NIK
        $KtamModel->update($nik, $dataFormKtam);

        // Update data organisasi
        $organisasiModel = new OrganisasiModel();
        $OrganisasiAnggotaModel = new OrganisasiAnggotaModel();
        $organisasiList = $organisasiModel->getOrganisasi();

        // Hapus data organisasi lama
        $OrganisasiAnggotaModel->where('nik', $nik)->delete();

        $dataOrganisasiAnggota = [];
        if (!empty($organisasiList)) {
            foreach ($organisasiList as $organisasi) {
                $pusat = $this->request->getPost($organisasi['org_id'].'_pusat') ?? 0;
                $wilayah = $this->request->getPost($organisasi['org_id'].'_wilayah') ?? 0;
                $daerah = $this->request->getPost($organisasi['org_id'].'_daerah') ?? 0;
                $cabang = $this->request->getPost($organisasi['org_id'].'_cabang') ?? 0;
                $ranting = $this->request->getPost($organisasi['org_id'].'_ranting') ?? 0;

                $dataOrganisasiAnggota[] = [
                    'nik'     => $nik,
                    'org_id'  => $organisasi['org_id'],
                    'pusat'   => $pusat,
                    'wilayah' => $wilayah,
                    'daerah'  => $daerah,
                    'cabang'  => $cabang,
                    'ranting' => $ranting,
                ];
            }
        }

        if (!empty($dataOrganisasiAnggota)) {
            $OrganisasiAnggotaModel->insertBatch($dataOrganisasiAnggota);
        }

        return redirect()->to('ktam_list')->with('success', 'Data berhasil Diperbaharui!');
    }

    public function delete($nik)
    {
        $model = new KtamModel();
        $model->delete($nik);

        if($model){
            $OrganisasiAnggotaModel = new OrganisasiAnggotaModel();
            $OrganisasiAnggotaModel->where('nik', $nik)->delete();
        }else{
            return $this->response->setJSON(['status' => 'failed']);
        }

        return $this->response->setJSON(['status' => 'deleted']);
    }

    
}

