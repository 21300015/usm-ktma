
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex bg-light">
                                                <h4 class="card-title mb-0 flex-grow-1">Input Data Pasien</h4>
                                            </div><!-- end card header -->
                                            <div class="card-body">
                                                <div class="live-preview">
                                                    <div class="row gy-2">
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div class="form-floating">
                                                              <select class="form-select" id="floatingJenSurat" aria-label="Floating Pilihan">
                                                                <option selected>Pilih jenis pasien</option>
                                                                <option value="1">PNS/ASN</option>
                                                                <option value="2">Pegawai Non-ASN</option>
                                                                <option value="3">Umum</option>          
                                                              </select>
                                                              <label for="floatingJenSurat">Jenis Pasien</label>
                                                            </div>                                                            
                                                        </div>
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div class="form-floating mb-1">
                                                              <input type="text" class="form-control" id="floatingKdReg" placeholder="RM-021010" value="RM-021010">
                                                              <label for="floatingKdReg">No. Reg</label>
                                                            </div>
                                                        </div>                                                                         
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div class="form-floating mb-1">
                                                              <input type="text" class="form-control" id="floatingJudul" placeholder="Judul">
                                                              <label for="floatingJudul">Nama Pasien</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div class="form-floating mb-1">
                                                              <input type="text" class="form-control" id="floatingJudul" placeholder="Judul">
                                                              <label for="floatingJudul">NIP/NIK/No. Peg</label>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div class="form-floating">
                                                              <select class="form-select" id="floatingJenSurat" aria-label="Floating Pilihan">
                                                                <option selected>Pilih jenis kelamin</option>
                                                                <option value="1">Laki-laki</option>
                                                                <option value="2">Perempuan</option>                 
                                                              </select>
                                                              <label for="floatingJenSurat">Jenis Kelamin</label>
                                                            </div>                                                            
                                                        </div>                                                        
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div class="form-floating mb-1">
                                                              <input type="text" class="form-control" id="floatingJudul" placeholder="Judul">
                                                              <label for="floatingJudul">Tempat, Tgl. Lahir</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div class="form-floating">
                                                                <textarea class="form-control" placeholder="Tulis deskripsi Informasi" id="floatingDesk"></textarea>
                                                                <label for="floatingDesk">Alamat</label>
                                                            </div> 
                                                        </div>                                                        
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div class="form-floating mb-1">
                                                              <input type="text" class="form-control" id="floatingJudul" placeholder="Judul">
                                                              <label for="floatingJudul">Nama Ibu Kandung</label>
                                                            </div>
                                                        </div>                            
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div class="form-floating mb-1">
                                                              <input type="text" class="form-control" id="floatingDesk" placeholder="Deskripsi">
                                                              <label for="floatingDesk">No. Hp</label>
                                                            </div>
                                                        </div>                                                                
                                                    </div>

                                                    <div class="progress mb-2 progress-sm gap-3 mt-3">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="d-flex align-items-start gap-3 mt-3" style="display: block;">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-success" id="add-btn">Save</button>
                                                        </div>
                                                    </div>

                                                    <!--end row-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->


                                <div class="alert alert-primary" role="alert">
                                    This is <strong>Datatable</strong> page in wihch we have used <b>jQuery</b> with cnd link!
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header bg-light">
                                                <h5 class="card-title mb-0">Data Pasien</h5>
                                            </div>                                           
                                            <div class="card-body">
                                                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No#</th>
                                                            <th data-ordering="false">No. RM</th>
                                                            <th data-ordering="false">Jenis Pasien</th>               
                                                            <th data-ordering="false">Nama Pasien</th>
                                                            <th data-ordering="false">NIP/NIK</th>
                                                            <th>Gender</th>                         
                                                            <th>Tempat, Tgl. Lahir</th>
                                                            <th>Alamat</th>
                                                            <th>Nama Ibu</th>
                                                            <th>No. Hp</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>
                                                                <button type="button" class="btn btn-soft-danger btn-sm fw-medium" data-bs-toggle="" data-bs-target="#!"> RM-019283</button>
                                                            </td>   
                                                            <td>Umum</td>
                                                            <td>Bontot</td>
                                                            <td>1234567890</td>
                                                            <td>Laki-laki</td>
                                                            <td>Brebes, 02 Oktober 1978</td>
                                                            <td>Pasar minggu</td>
                                                            <td>Warsih</td>
                                                            <td>0129121919</td>
                                                            <td>            
                                                                <div class="hstack gap-2">                
                                                                    <button class="btn btn-sm btn-soft-danger remove-list" data-bs-toggle="modal" data-bs-target="#removeTaskItemModal" data-remove-id="13"><i class="ri-delete-bin-5-fill align-bottom"></i></button>                
                                                                    <button class="btn btn-sm btn-soft-info edit-list" data-bs-toggle="modal" data-bs-target="#createTask" data-edit-id="13"><i class="ri-pencil-fill align-bottom"></i></button>            
                                                                </div>            
                                                            </td>                                                            
                                                        </tr>
                                                                                                                                                                     
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->                                

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->
                        
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->