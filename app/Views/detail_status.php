<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.png'); ?>">

    <title>Pendaftaran KTMA Universitas Saintek Muhamadiyah</title>

    <!-- vendor css -->
    <link href="<?= base_url('assets/libs/@fortawesome/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/libs/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/libs/prismjs/themes/prism-tomorrow.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/libs/select2/css/select2.min.css'); ?>" rel="stylesheet">

    <!-- Sweet Alert css-->
    <link href="<?php echo base_url() ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- Layout config Js -->
    <script src="<?php echo base_url() ?>assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url() ?>assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    

    <!-- template css -->
    <!-- App Css-->
    <link href="<?php echo base_url() ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet" type="text/css" />

    <!-- template css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/cassie.css'); ?>">
    <style type="text/css">
        .status-badge {
            text-transform: capitalize;
        }
        
    </style>
  </head>
  <body class="bg-gray-100">
    <nav class="navbar bg-white shadow-base">
      <a class="navbar-brand tx-bold tx-spacing--2 tx-color-01" href="#">LOGO</a>
    </nav>

    
      <div class="container mt-5">
        <div class="card bg-white">
            <div class="card-body">
                <h2>Pendaftar</h2>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-start">
                                    <?php if (!empty($anggota['pas_foto'])){ ?>
                                        
                                        <img src="<?= base_url($anggota['pas_foto']); ?>" alt="Profile" class="profile-img me-2">
                                        
                                    <?php } else { ?>
                                        <img src="<?= base_url('assets/images/avatar-150.png'); ?>" alt="Profile" class="profile-img me-2">
                                    <?php } ?>
                                    
                                    <div>
                                        <h5><?= $anggota['nama_lengkap'] ?></h5>
                                        <p><?= $anggota['kota'] ?> - <?= $anggota['kecamatan'] ?></p>
                                        <a class="btn btn-secondary btn-sm btn-custom" href="<?= base_url('/formKtam/update') ?>">
                                            <i class="bi bi-file-earmark-text"></i> Update Data
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <?php if ($anggota['status_approve'] == 'pending') { ?>
                                    <span class="status-badge bg-warning"><?= $anggota['status_approve']; ?></span>

                                <?php } elseif ($anggota['status_approve'] == 'approved') { ?>
                                    <span class="status-badge bg-success"><?= $anggota['status_approve']; ?></span>

                                <?php } elseif ($anggota['status_approve'] == 'rejected') { ?>
                                    <span class="status-badge bg-danger"><?= $anggota['status_approve']; ?></span>

                                <?php } else { ?>
                                    <span class="status-badge bg-secondary">-</span>
                                <?php } ?>
                                
                            </td>
                            <td>
                                <a class="btn btn-secondary btn-sm btn-custom" href="<?= base_url('/ktam/cetak-berkas') ?>" target="_blank">
                                    <i class="bi bi-file-earmark-text"></i> CETAK BERKAS
                                </a>
                                <button class="btn btn-primary btn-sm btn-custom" data-bs-toggle="modal" data-bs-target="#modal_document">
                                    <i class="bi bi-cloud-upload"></i> UPLOAD DOKUMEN
                                </button>
                            </td>
                        </tr>
                    </tbody>

                </table>
                <p><strong>NIK:</strong> <span><?= $anggota['nik']; ?></span></p>
                <p><strong>Nama:</strong> <span><?= $anggota['nama_lengkap']; ?></span></p>
                <p><strong>email:</strong> <span><?= $anggota['email']; ?></span></p>
                
                <p><strong>Tanggal Daftar:</strong> <?= $anggota['created_at'] ?></p>
                <p><strong>Terakhir Update Data:</strong> <?= $anggota['updated_at'] ?></p>
                <p><strong>Terakhir Update Document:</strong> <?= $anggota['doc_updated_at'] ?></p>

                <a class="btn btn-secondary btn-sm btn-custom" href="<?= base_url('/') ?>">
                    <i class="bi bi-file-earmark-text"></i> Kembali
                </a>
            </div>
        </div>
    
    <script src="<?= base_url('assets/libs/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/jqueryui/jquery-ui.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/feather-icons/feather.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/prismjs/prism.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/parsleyjs/parsley.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/jquery-steps/build/jquery.steps.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/js-cookie/js.cookie.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/select2/js/select2.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/flatpickr/flatpickr.min.js'); ?>"></script>
    <script>
      $(function(){

        'use strict'

        feather.replace();

      });
    </script>
    
    <!-- Modal -->
    <div class="modal fade" id="modal_document" tabindex="-1" aria-labelledby="modal_document_label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload Dokumen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form action="<?= site_url('formKtam/upload-document') ?>" method="post" enctype="multipart/form-data">
                        <!-- Upload Foto Formal -->
                        <div class="mb-3">
                            <label for="fotoFormal" class="form-label">Foto Formal (JPG, PNG, Max 2MB)</label>
                            <input type="file" class="form-control" id="fotoFormal" name="fotoFormal" accept=".jpg, .jpeg, .png">

                            <?php if (!empty($anggota['pas_foto'])): ?>
                                <div class="mt-2">
                                    <img src="<?= base_url($anggota['pas_foto']); ?>" class="img-thumbnail" alt="Foto Formal" width="100%">
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Upload Bukti Bayar -->
                        <div class="mb-3">
                            <label for="buktiBayar" class="form-label">Bukti Bayar (JPG, PNG, Max 2MB)</label>
                            <input type="file" class="form-control" id="buktiBayar" name="buktiBayar" accept=".jpg, .jpeg, .png">

                            <?php if (!empty($anggota['bukti_bayar'])): ?>
                                <div class="mt-2">
                                    <img src="<?= base_url($anggota['bukti_bayar']); ?>" class="img-thumbnail" alt="Bukti Bayar" width="100%">
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Upload Surat Rekomendasi Cabang -->
                        <div class="mb-3">
                            <label for="suratRekomendasi" class="form-label">Surat Rekomendasi Cabang (PDF, Max 2MB)</label>
                            <input type="file" class="form-control" id="suratRekomendasi" name="suratRekomendasi" accept=".pdf">

                            <?php if (!empty($anggota['surat_rekomendasi'])): ?>
                                <div class="mt-2">
                                    <a href="<?= base_url($anggota['surat_rekomendasi']); ?>" class="pdf-thumbnail" target="_blank"><i class="fas fa-file-pdf"></i>Lihat Surat Rekomendasi</a>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>