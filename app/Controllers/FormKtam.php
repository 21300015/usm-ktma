<?php

namespace App\Controllers;
use App\Models\KtamModel;
use App\Models\AnggotaModel;
use App\Models\CabangModel;
use App\Models\OrganisasiModel;
use App\Models\OrganisasiAnggotaModel;
use App\Models\UploadDocModel;
use CodeIgniter\Controller;

class FormKtam extends BaseController
{
    public function index(): string
    {
        $daerahModel = new CabangModel();
        $daerahList = $daerahModel->getDaerah(); // Ambil daftar daerah

        $organisasiModel = new OrganisasiModel();
        $organisasiList = $organisasiModel->getOrganisasi();

        return view('form_ktam', ['daerahList' => $daerahList, 'organisasiList' => $organisasiList]);
    }

    public function getCabangByDaerah()
    {
        $daerah = $this->request->getGet('daerah');
        $model = new CabangModel();
        $cabang = $model->getCabangByDaerah($daerah);

        return $this->response->setJSON($cabang);
    }

    public function store()
    {

        $ktamModel = new KtamModel();

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

        $ktamModel->insert($dataFormKtam);
            $orgNik = $this->request->getPost('nik');
            $organisasiModel = new OrganisasiModel();
            $organisasiAnggotaModel = new OrganisasiAnggotaModel();
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
                if($organisasiAnggotaModel->insertBatch($dataOrganisasiAnggota)){
                    return redirect()->to('')->with('success', 'Pendaftaran berhasil!');
                }
            }else{
                return redirect()->to('')->with('success', 'Pendaftaran berhasil!');
            }
        
    }

    public function cekStatus()
    {
        $nik = $this->request->getPost('nik');
        
        // Validasi input NIK
        if (!$nik) {
            return redirect()->to('/')->with('error', 'Harap masukkan NIK.');
        }

        $model = new AnggotaModel();
        $anggota = $model->where('nik', $nik)->first();

        if ($anggota) {
            session()->set('anggota_data', $anggota);
            return redirect()->to('/ktam/detail');
        } else {
            return redirect()->to('/')->with('error', 'NIK tidak ditemukan.');
        }
    }

    public function detail()
    {
        // Ambil data dari session
        $anggota = session()->get('anggota_data');

        if (!$anggota) {
            return redirect()->to('/')->with('error', 'Data anggota tidak ditemukan.');
        }

        return view('detail_status', ['anggota' => $anggota]);
    }

    public function loadDataUpdate()
    {
        // Ambil data dari session
        $anggota = session()->get('anggota_data');
        $nik = $anggota['nik'];

        $anggotaModel = new AnggotaModel();
        $anggota = $anggotaModel->where('nik', $nik)->first();
        session()->set('anggota_data', $anggota);

        $daerahModel = new CabangModel();
        $daerahList = $daerahModel->getDaerah(); // Ambil daftar daerah

        $organisasiModel = new OrganisasiModel();
        $organisasiList = $organisasiModel->getOrganisasi();

        var_dump($anggota);
        return view('form_ktam_update', ['daerahList' => $daerahList, 'organisasiList' => $organisasiList, 'anggota' => $anggota]);
        
    }

    public function uploadDoc()
    {
        // Ambil data dari session
        $anggota = session()->get('anggota_data');
        $nik = $anggota['nik'];

        $model = new UploadDocModel();
        $filePath = 'uploads/';

        // Simpan file ke folder uploads
        $updateData = [];

        // Validasi dan Simpan File
        if ($this->request->getFile('fotoFormal')->isValid()) {
            $fotoFormal = $this->request->getFile('fotoFormal');
            $fotoName = $fotoFormal->getRandomName();
            $fotoFormal->move($filePath, $fotoName);
            $updateData['pas_foto'] = $filePath . $fotoName;
        }

        if ($this->request->getFile('buktiBayar')->isValid()) {
            $buktiBayar = $this->request->getFile('buktiBayar');
            $buktiName = $buktiBayar->getRandomName();
            $buktiBayar->move($filePath, $buktiName);
            $updateData['bukti_bayar'] = $filePath . $buktiName;
        }

        if ($this->request->getFile('suratRekomendasi')->isValid()) {
            $suratRekomendasi = $this->request->getFile('suratRekomendasi');
            $suratName = $suratRekomendasi->getRandomName();
            $suratRekomendasi->move($filePath, $suratName);
            $updateData['surat_rekomendasi'] = $filePath . $suratName;
        }

        if (!empty($updateData)) {
            $model = new AnggotaModel();
            $model->update($nik, $updateData);

            $anggota = $model->where('nik', $nik)->first();
            session()->set('anggota_data', $anggota);
        }

        return redirect()->to('/ktam/detail')->with('success', 'Dokumen berhasil diupload!');
    }
}
