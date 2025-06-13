<?php

namespace App\Controllers;
use App\Models\KtamModel;
use App\Models\AnggotaModel;
use App\Models\CabangModel;
use App\Models\OrganisasiModel;
use App\Models\OrganisasiAnggotaModel;
use App\Models\UploadDocModel;
use CodeIgniter\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;

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
        $CabangModel = new CabangModel();
        $id_cabang = $CabangModel->select('id')
            ->where('daerah', $daerah)
            ->where('nama_cabang', $cabang)
            ->first();

        $ktamModel = new KtamModel();

        $dataFormKtam = [
            'nik' => $this->request->getPost('nik'),
            'id_cabang' => $id_cabang['id'],
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
        $email = $this->request->getPost('email');
        
        // Validasi input NIK
        if (!$nik) {
            return redirect()->to('/')->with('error', 'Harap masukkan NIK.');
        }

        if (!$email) {
            return redirect()->to('/')->with('error', 'Harap masukkan Email.');
        }

        $KtamModel = new KtamModel();
        $anggota = $KtamModel->select('ktam.*, cabang_muhammadiyah.nama_cabang, cabang_muhammadiyah.daerah')
                  ->join('cabang_muhammadiyah', 'cabang_muhammadiyah.id = ktam.id_cabang')
                  ->where('ktam.nik', $nik)
                  ->where('ktam.email', $email)
                  ->first();

        if ($anggota) {
            session()->set('anggota_data', $anggota);
            return redirect()->to('/ktam/detail');
        } else {
            return redirect()->to('/')->with('error', 'NIK atau Email tidak ditemukan.');
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

    public function cetakBerkas()
    {
        
        $anggota = session()->get('anggota_data');
        if (!$anggota) {
            return redirect()->to('/')->with('error', 'Data anggota tidak ditemukan.');
        }

        $nik = $anggota['nik'];

        $organisasiModel = new OrganisasiModel();
        $organisasiList = $organisasiModel->getOrganisasi();

        $organisasiAnggotaModel = new OrganisasiAnggotaModel();
        $organisasiAnggota = $organisasiAnggotaModel->where('nik', $nik)->findAll();
        
        $imagePath = FCPATH . 'assets/images/logo-muhammadiyah.png';
        $base64 = '';
        if (file_exists($imagePath)) {
            $type = pathinfo($imagePath, PATHINFO_EXTENSION);
            $data = file_get_contents($imagePath);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        }

        // return view ('ktam/formulir_muhammadiyah', ['logo' => $base64, 'anggota' => $anggota, 'organisasiList' => $organisasiList, 'organisasiAnggota' => $organisasiAnggota]);
        $html = view('ktam/formulir_muhammadiyah', ['logo' => $base64, 'anggota' => $anggota, 'organisasiList' => $organisasiList, 'organisasiAnggota' => $organisasiAnggota]); // load view

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream('formulir_muhammadiyah.pdf', ['Attachment' => false]); // tampilkan langsung di browser
    }

    public function loadDataUpdate()
    {
        // Ambil data dari session
        $anggota = session()->get('anggota_data');
        $nik = $anggota['nik'];

        $KtamModel = new KtamModel();
        $anggota = $KtamModel->select('ktam.*, cabang_muhammadiyah.nama_cabang, cabang_muhammadiyah.daerah')
                  ->join('cabang_muhammadiyah', 'cabang_muhammadiyah.id = ktam.id_cabang')
                  ->where('ktam.nik', $nik)
                  ->first();
        session()->set('anggota_data', $anggota);

        $daerahModel = new CabangModel();
        $daerahList = $daerahModel->getDaerah(); // Ambil daftar daerah

        $organisasiModel = new OrganisasiModel();
        $organisasiList = $organisasiModel->getOrganisasi();

        $organisasiAnggotaModel = new OrganisasiAnggotaModel();
        $organisasiAnggota = $organisasiAnggotaModel->where('nik', $nik)->findAll();

        return view('form_ktam_update', ['daerahList' => $daerahList, 'organisasiList' => $organisasiList, 'anggota' => $anggota, 'organisasiAnggota' => $organisasiAnggota]);
        
    }
    
    public function update()
    {
        // Ambil data dari session
        $anggota = session()->get('anggota_data');
        $nik = $anggota['nik'];

        $daerah = $this->request->getPost('daerah');
        $cabang = $this->request->getPost('cabang');

        $CabangModel = new CabangModel();
        $id_cabang = $CabangModel->select('id')
            ->where('daerah', $daerah)
            ->where('nama_cabang', $cabang)
            ->first();

        $ktamModel = new KtamModel();

        $dataFormKtam = [
            'id_cabang' => $id_cabang['id'],
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
        $ktamModel->update($nik, $dataFormKtam);

        // Update data organisasi
        $organisasiModel = new OrganisasiModel();
        $organisasiAnggotaModel = new OrganisasiAnggotaModel();
        $organisasiList = $organisasiModel->getOrganisasi();

        // Hapus data organisasi lama
        $organisasiAnggotaModel->where('nik', $nik)->delete();

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
            $organisasiAnggotaModel->insertBatch($dataOrganisasiAnggota);
        }

        return redirect()->to('ktam/detail')->with('success', 'Data berhasil diperbarui!');
    }

    public function uploadDoc()
    {
        // Ambil data dari session
        $anggota = session()->get('anggota_data');
        $nik = $anggota['nik'];

        $model = new UploadDocModel();
        $filePathFoto = 'uploads/foto/';
        $filePathTrx = 'uploads/trx/';
        $filePathDoc = 'uploads/document/';

        // Ambil data lama dari database
        $existingData = $model->where('nik', $nik)->first();

        // Simpan file ke folder uploads
        $updateData = [];

        // Validasi dan Simpan File Foto Formal
        if ($this->request->getFile('fotoFormal')->isValid()) {
            // Hapus file lama jika ada
            if (!empty($existingData['pas_foto']) && file_exists($existingData['pas_foto'])) {
                unlink($existingData['pas_foto']);
            }

            $fotoFormal = $this->request->getFile('fotoFormal');
            $fotoName = $fotoFormal->getRandomName();
            $fotoFormal->move($filePathFoto, $fotoName);
            $updateData['pas_foto'] = $filePathFoto . $fotoName;
        }

        // Validasi dan Simpan File Bukti Bayar
        if ($this->request->getFile('buktiBayar')->isValid()) {
            if (!empty($existingData['bukti_bayar']) && file_exists($existingData['bukti_bayar'])) {
                unlink($existingData['bukti_bayar']);
            }

            $buktiBayar = $this->request->getFile('buktiBayar');
            $buktiName = $buktiBayar->getRandomName();
            $buktiBayar->move($filePathTrx, $buktiName);
            $updateData['bukti_bayar'] = $filePathTrx . $buktiName;
        }

        // Validasi dan Simpan File Surat Rekomendasi
        if ($this->request->getFile('suratRekomendasi')->isValid()) {
            if (!empty($existingData['surat_rekomendasi']) && file_exists($existingData['surat_rekomendasi'])) {
                unlink($existingData['surat_rekomendasi']);
            }

            $suratRekomendasi = $this->request->getFile('suratRekomendasi');
            $suratName = $suratRekomendasi->getRandomName();
            $suratRekomendasi->move($filePathDoc, $suratName);
            $updateData['surat_rekomendasi'] = $filePathDoc . $suratName;
        }

        $updateData['doc_updated_at'] = date('Y-m-d H:i:s');

        if (!empty($updateData)) {
            $model->update($nik, $updateData);

            // Perbarui data session
            $anggota = $model->where('nik', $nik)->first();
            session()->set('anggota_data', $anggota);
        }

        return redirect()->to('/ktam/detail')->with('success', 'Dokumen berhasil diupload!');
    }

}
