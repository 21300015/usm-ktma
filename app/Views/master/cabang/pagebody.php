<?= $this->include('construct/header'); ?>
<?= $this->include('construct/sidebar'); ?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Master Data Cabang Anggota Muhammadiyah</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">KTAM</a></li>
                                <li class="breadcrumb-item active">Master Data Cabang Anggota Muhammadiyah</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div id="formpage" class="" style="display: none;">
            <!--begin::Content container-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex bg-light">
                                <h4 class="card-title mb-0 flex-grow-1"><span id="mode"></span> Data Cabang</h4>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">
                                    <form id="cabang-form" method="POST">
                                        <div class="row row-sm">
                                            <div class="col-md-6 mb-3">
                                            <label class="form-control-label">Provinsi : <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" id="provinsi" name="provinsi">
                                                <option label="Choose one"></option>
                                            </select>
                                            </div><!-- col -->
                                            <div class="col-md-6 mb-3">
                                            <label class="form-control-label">Kabupaten/Kota : <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" id="kota" name="kota">
                                                <option label="Choose one"></option>
                                            </select>
                                            </div><!-- col -->
                                        </div>

                                        <div class="row row-sm">
                                            <div class="col-md-6 mb-3">
                                            <label class="form-control-label">Kecamatan : <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" id="kecamatan" name="kecamatan">
                                                <option label="Choose one"></option>
                                            </select>
                                            </div><!-- col -->
                                            <div class="col-md-6 mb-3">
                                            <label class="form-control-label">Desa/Kelurahan : <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" id="kelurahan" name="kelurahan">
                                                <option label="Choose one"></option>
                                            </select>
                                            </div><!-- col -->
                                        </div>

                                        <div class="row row-sm">
                                            <div class="col-md-8 mb-3">
                                            <label class="form-control-label">Alamat : <span class="tx-danger">*</span></label>
                                            <textarea id="alamat" name="alamat" class="form-control" rows="2" placeholder="Alamat Lengkap" required></textarea>
                                            </div><!-- col -->
                                        </div>

                                        <div class="row row-sm">
                                            <div class="col-md-6 mb-3">
                                            <label>Cabang <span class="tx-danger">*</span></label>
                                            <select class="form-control select2-no-search" id="cabang" name="cabang" required="">
                                                <option value="">-- Pilih Cabang --</option> 
                                                <option value="Pusat">Pusat</option>
                                                <option value="Wilayah">Wilayah</option>
                                                <option value="Daerah">Daerah</option>
                                                <option value="Cabang">Cabang</option>
                                                <option value="Rating">Rating</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="row row-sm">
                                            <div class="col-md-6 mb-3">
                                            <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                            <input type="email" id="email" class="form-control" name="email" placeholder="" type="text" value="" required>
                                            </div><!-- col -->

                                            <div class="col-md-6 mb-3">
                                            <label class="form-control-label">Nomor Telp./HP: <span class="tx-danger">*</span></label>
                                            <input id="nomor_hp" class="form-control" name="nomor_hp" placeholder="" type="text" value="" required>
                                            </div><!-- col -->
                                        </div>

                                        <div class="text-center gap-3 mt-3">
                                            <div class="hstack gap-2 justify-content-center" id="btnAction">
                                                <button type="button" class="btn btn-light btbatal" onclick="listView()">Kembali</button>
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            <!--end row-->
        </div>

        <div id="gridpage">
            <div class="row">
                <div class="col">
                    <!-- <div class="alert alert-primary" role="alert">
                        <i class="las la-info-circle"></i> <strong>Nilai</strong> hasil sidang Skripsi akan ditampilkan apabila mahasiswa sudah mengumpulkan <strong>Hardcover Skripsi/TA</strong>
                    </div>  -->

                    <div class="card">
                        <div class="card-header align-items-center bg-light d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Master Data Cabang Anggota Muhammadiyah</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <button type="button" class="btn btaddnew btn-primary" onClick="addData()"><i class="las la-plus align-middle me-1"></i> Tambah Data</button>
                                </div>
                            </div>
                        </div>                                                    
                        <div class="card-body table-responsive">
                            <table class="table table-bordered" id="cabang_list">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Daerah</th>
                                        <th>Cabang</th>
                                        <th>No. HP</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>

        <div id="detailpage" class="" style="display: none;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex bg-light">
                            <h4 class="card-title mb-0 flex-grow-1">Detail Data Cabang</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Provinsi :</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_provinsi" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Kabupaten/Kota :</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_kota" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Kecamatan :</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_kecamatan" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Desa/Kelurahan :</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_kelurahan" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Alamat :</label>
                                        <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="static_alamat" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Cabang :</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_cabang" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Email :</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_email" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label class="col-sm-4 col-form-label">Nomor Telp./HP :</label>
                                        <div class="col-sm-8">
                                        <input type="text" readonly class="form-control-plaintext" id="static_nomor_hp" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center gap-3 mt-3">
                                <div class="hstack gap-2 justify-content-center" id="btnActionDetail">
                                    <button type="button" class="btn btn-light btbatal" onclick="listView()">Kembali</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div><!-- content -->
</div>


<?= $this->include('construct/footer'); ?>

<script>

    (function($) {

        'use strict'

        var Defaults = $.fn.select2.amd.require('select2/defaults');

        $.extend(Defaults.defaults, {
        searchInputPlaceholder: ''
        });

        var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

        var _renderSearchDropdown = SearchDropdown.prototype.render;

        SearchDropdown.prototype.render = function(decorated) {

        // invoke parent method
        var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

        this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

        return $rendered;
        };

    })(window.jQuery);

    $(function(){

        'use strict'

        $('[data-provider="flatpickr"]').flatpickr();

        // Basic with search
        $('.select2').select2({
            placeholder: 'Choose one',
            searchInputPlaceholder: 'Search options'
        });

        // Disable search
        $('.select2-no-search').select2({
            minimumResultsForSearch: Infinity,
            placeholder: 'Choose one'
        });

    });

    function cleanedString(text){
        return text.replace(/[_\W]+/g, "_").toLowerCase();
    }

    $(document).ready(function() {
        let table = $('#cabang_list').DataTable({
            ajax: "<?= site_url('cabang/getData'); ?>",
            autoWidth: false,
            columns: [
                {
                    data: null,
                    title: 'No',
                    render: function (data, type, row, meta) {
                        return meta.row + 1;
                    },
                    searchable: false,
                    width: '50px'
                },
                { data: 'daerah' },
                { data: 'nama_cabang' },
                { data: 'kontak' },
                { data: 'email' },
                {
                    data: 'id',
                    render: function(data) {
                        return `
                            
                            <button class='btn btn-info btn-sm detail' onClick='detailData(${data})'>Detail</button>
                            <button class='btn btn-info btn-sm edit' onClick='editData(${data})'>Edit</button>
                            <button class='btn btn-danger btn-sm delete' onClick='hapusData(${data})'>Hapus</button>
                        `;
                    },
                    width: '150px'
                }
            ],
            order: [[1, 'asc']]
        });

        $('#daerah').change(function() {
            var daerah = $(this).val();

            if (daerah !== '') {
                $.ajax({
                    url: "<?= site_url('formKtam/get-by-daerah') ?>",
                    type: "GET",
                    data: { daerah: daerah },
                    dataType: "json",
                    success: function(response) {
                        $('#cabang').empty().append('<option value="">-- Pilih Cabang --</option>');
                        $.each(response, function(index, item) {
                            $('#cabang').append('<option value="' + item.nama_cabang + '">' + item.nama_cabang + '</option>');
                        });
                    }
                });
            } else {
                $('#cabang').empty().append('<option value="">-- Pilih Cabang --</option>');
            }
        });

        $.ajax({
            url: "<?= base_url('assets/json/alamat/provinces.json') ?>",
            type: "GET",
            dataType: "json",
            success: function (data) {
                $.each(data, function (index, provinsi) {
                    $("#provinsi").append(`<option value="${provinsi.name}" json-id="${provinsi.id}">${provinsi.name}</option>`);
                });
            },
            error: function () {
                alert("Gagal memuat data provinsi.");
            }
        });

        // Event saat provinsi dipilih
        $("#provinsi").change(function () {
            let provinsiId = $(this).children(":selected").attr("json-id");
            $("#kota").html('<option value="">-- Pilih Kota/Kabupaten --</option>'); // Reset kota
            $("#kecamatan").html('<option value="">-- Pilih Kecamatan --</option>'); // Reset kecamatan

            if (provinsiId) {
                $.ajax({
                    url: `<?= base_url('assets/json/alamat/regencies/'); ?>${provinsiId}.json`,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $.each(data, function (index, kota) {
                            $("#kota").append(`<option value="${kota.name}" json-id="${kota.id}">${kota.name}</option>`);
                        });
                    },
                    error: function () {
                        alert("Gagal memuat data kota/kabupaten.");
                    }
                });
            }
        });

        // Event saat kota/kabupaten dipilih
        $("#kota").change(function () {
            let kotaId = $(this).children(":selected").attr("json-id");
            $("#kecamatan").html('<option value="">-- Pilih Kecamatan --</option>'); // Reset kecamatan

            if (kotaId) {
                $.ajax({
                    url: `<?= base_url('assets/json/alamat/districts/'); ?>${kotaId}.json`,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $.each(data, function (index, kecamatan) {
                            $("#kecamatan").append(`<option value="${kecamatan.name}" json-id="${kecamatan.id}">${kecamatan.name}</option>`);
                        });
                    },
                    error: function () {
                        alert("Gagal memuat data kecamatan.");
                    }
                });
            }
        });

        // Event saat kecamatan dipilih
        $("#kecamatan").change(function () {
            let kecamatanId = $(this).children(":selected").attr("json-id");
            $("#kelurahan").html('<option value="">-- Pilih Kelurahan/Desa --</option>'); // Reset kelurahan

            if (kecamatanId) {
                $.ajax({
                    url: `<?= base_url('assets/json/alamat/villages/'); ?>${kecamatanId}.json`,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $.each(data, function (index, kelurahan) {
                            $("#kelurahan").append(`<option value="${kelurahan.name}" json-id="${kelurahan.id}">${kelurahan.name}</option>`);
                        });
                    },
                    error: function () {
                        alert("Gagal memuat data kelurahan/desa.");
                    }
                });
            }
        });
    });
    
    let mode = "";
    let actionUrl = '';

    function getMode(id = '') {
        
        if (mode === 'add') {
            actionUrl = '/Datacabang/store';
            $('#mode').html('Input');
        } else if (mode === 'edit') {
            actionUrl = '/Datacabang/update/' + id;
            $('#mode').html('Edit');
        } else if (mode === 'detail'){

        }

        $('#cabang-form').attr('action', actionUrl);
    }
    

    function addData(){
        mode = "add";
        getMode();
       
        $('#formpage').show(500, 'swing');
        $('#detailpage').hide(500, 'swing');
        $('#gridpage').hide(500, 'swing');
    }

    function detailData(id){
        $.ajax({
            url: '/Datacabang/loadDataUpdate/' + id,
            method: 'GET',
            success: function(response) {
                console.log('Raw response:', response);
                try {
                    let data = typeof response === 'string' ? JSON.parse(response) : response;
                    console.log('Parsed JSON:', data);
                    $('#static_provinsi').val(data.cabang.provinsi);
                    $('#static_kota').val(data.cabang.daerah);
                    $('#static_kecamatan').val(data.cabang.kecamatan);
                    $('#static_kelurahan').val(data.cabang.kelurahan);
                    $('#static_alamat').val(data.cabang.alamat);
                    $('#static_cabang').val(data.cabang.nama_cabang);
                    $('#static_email').val(data.cabang.email);
                    $('#static_nomor_hp').val(data.cabang.kontak);
                    

                    $('#btnActionDetail').html(`
                            <button type="button" class="btn btn-light btbatal" onClick="listView()">Kembali</button>
                            <button type="button" class="btn btn-info btbatal" onClick="editData(${id})">Edit</button>
                    `);

                } catch (e) {
                    console.error('JSON parse error:', e.message);
                }
            },
            error: function(xhr) {
                console.error('AJAX error:', xhr.responseText);
            }
        });

        $('#detailpage').show(500, 'swing');
        $('#formpage').hide(500, 'swing');
        $('#gridpage').hide(500, 'swing');
    }

    function editData(id){
        mode = "edit";
        getMode(id);

        $.ajax({
            url: '/Datacabang/loadDataUpdate/' + id,
            method: 'GET',
            success: function(response) {
                console.log('Raw response:', response);
                try {
                    let data = typeof response === 'string' ? JSON.parse(response) : response;
                    console.log('Parsed JSON:', data);
                    $('#email').val(data.cabang.email);
                    $('#nomor_hp').val(data.cabang.kontak);
                    $('#alamat').val(data.cabang.alamat);
                    
                    const selectedCabang = data.cabang.nama_cabang;
                    const selectedProvinsi = data.cabang.provinsi;
                    const selectedKota = data.cabang.daerah;
                    const selectedKecamatan =  data.cabang.kecamatan;
                    const selectedKelurahan = data.cabang.kelurahan;


                    $.ajax({
                        url: "<?= base_url('assets/json/alamat/provinces.json') ?>",
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $.each(data, function (index, provinsi) {
                            if(provinsi.name == selectedProvinsi){
                                $("#provinsi").append(`<option value="${provinsi.name}" json-id="${provinsi.id}" selected="selected">${provinsi.name}</option>`);
                                var provinsiId = $("#provinsi option:selected").attr("json-id");
                                if (provinsiId) {
                                    $.ajax({
                                        url: `<?= base_url('assets/json/alamat/regencies/'); ?>${provinsiId}.json`,
                                        type: "GET",
                                        dataType: "json",
                                        success: function (data) {
                                            $.each(data, function (index, kota) {
                                                if(kota.name == selectedKota){
                                                    $("#kota").append(`<option value="${kota.name}" json-id="${kota.id}" selected="selected">${kota.name}</option>`);
                                                    let kotaId = $("#kota option:selected").attr("json-id");
                                                    if (kotaId) {
                                                        $.ajax({
                                                            url: `<?= base_url('assets/json/alamat/districts/'); ?>${kotaId}.json`,
                                                            type: "GET",
                                                            dataType: "json",
                                                            success: function (data) {
                                                                $.each(data, function (index, kecamatan) {
                                                                    if(kecamatan.name == selectedKecamatan){
                                                                        $("#kecamatan").append(`<option value="${kecamatan.name}" json-id="${kecamatan.id}" selected="selected">${kecamatan.name}</option>`);
                                                                        let kecamatanId = $("#kecamatan option:selected").attr("json-id");
                                                                        if (kecamatanId) {
                                                                            $.ajax({
                                                                                url: `<?= base_url('assets/json/alamat/villages/'); ?>${kecamatanId}.json`,
                                                                                type: "GET",
                                                                                dataType: "json",
                                                                                success: function (data) {
                                                                                    $.each(data, function (index, kelurahan) {
                                                                                        if(kelurahan.name == selectedKelurahan){
                                                                                            $("#kelurahan").append(`<option value="${kelurahan.name}" json-id="${kelurahan.id}" selected="selected">${kelurahan.name}</option>`);
                                                                                        }else{
                                                                                            $("#kelurahan").append(`<option value="${kelurahan.name}" json-id="${kelurahan.id}">${kelurahan.name}</option>`);
                                                                                        }
                                                                                    });
                                                                                },
                                                                                error: function () {
                                                                                    alert("Gagal memuat data kelurahan/desa.");
                                                                                }
                                                                            });
                                                                        }
                                                                    }else{
                                                                        $("#kecamatan").append(`<option value="${kecamatan.name}" json-id="${kecamatan.id}">${kecamatan.name}</option>`);
                                                                    }
                                                                    
                                                                });
                                                            },
                                                            error: function () {
                                                                alert("Gagal memuat data kecamatan.");
                                                            }
                                                        });
                                                    }
                                                }else{
                                                    $("#kota").append(`<option value="${kota.name}" json-id="${kota.id}">${kota.name}</option>`);
                                                }
                                                
                                            });
                                        },
                                        error: function () {
                                            alert("Gagal memuat data kota/kabupaten.");
                                        }
                                    });
                                }
                            }else{
                                $("#provinsi").append(`<option value="${provinsi.name}" json-id="${provinsi.id}">${provinsi.name}</option>`);
                            }
                            
                                
                            });
                            
                        },
                        error: function () {
                            alert("Gagal memuat data provinsi.");
                        }
                    });

                    if (selectedCabang) {
                        $('#cabang').val(selectedCabang).trigger('change');
                    }

                } catch (e) {
                    console.error('JSON parse error:', e.message);
                }
            },
            error: function(xhr) {
                console.error('AJAX error:', xhr.responseText);
            }
        });
        $('#formpage').show(500, 'swing');
        $('#detailpage').hide(500, 'swing');
        $('#gridpage').hide(500, 'swing');
    }

    function hapusData(id){
        
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            $.ajax({
                url: '/cabang/delete/' + nik,
                type: 'DELETE',
                success: function(response) {
                    alert('Data berhasil dihapus!');
                    $('#cabang_list').DataTable().ajax.reload(); // Reload DataTable setelah penghapusan
                },
                error: function(xhr) {
                    console.error('Error deleting data:', xhr.responseText);
                    alert('Gagal menghapus data!');
                }
            });
        }
    }

    function listView(){
        $('#cabang-form')[0].reset();

        $('.select2').val('').trigger('change');
        $('.select2-no-search').val('').trigger('change');

        $('#gridpage').show(500, 'swing');
        $('#detailpage').hide(500, 'swing');
        $('#formpage').hide(500, 'swing');
    }
</script>