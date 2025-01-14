
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">ST Pembimbing Skripsi/Tugas Akhir</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">ST Pembimbing Skripsi/Tugas Akhir</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">Good Morning, Saptono!</h4>
                                        <p class="text-muted mb-0">Here's what's happening with your store today.</p>
                                    </div>

                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

						<!--begin::Content form-->
						<div id="formpage" class="" style="display: none;">
							<!--begin::Content container-->
						        <div class="row">
							        <div class="col-lg-12">
							            <div class="card">
							                <div class="card-header align-items-center d-flex bg-light">
							                    <h4 class="card-title mb-0 flex-grow-1">Input ST Pembimbing Skripsi/Tugas Akhir</h4>
							                </div><!-- end card header -->
							                <div class="card-body">
							                    <div class="live-preview">
							                        <div class="row gy-2">
							                        	<form method="post" id="fmutama">
							                        		<input type="hidden" id="ref">
							                        		<input type="hidden" id="savemode">

															<div class="row g-2">
																<div class="col-xxl-6 col-md">
									                                <div class="form-floating mb-2">
									                                  <input type="text" class="form-control" id="nim" placeholder="" value="">
									                                  <label for="nim">N I M</label>
									                                </div>
															 	</div>
																<div class="col-xxl-6 col-md">
									                                <div class="form-floating mb-2">
									                                  <input type="text" class="form-control" id="namamhs" placeholder="" value="">
									                                  <label for="namamhs">Nama Mahasiswa</label>
									                                </div>
															 	</div>
																<div class="col-xxl-6 col-md">
									                                <div class="form-floating mb-2">
									                                  <input type="text" class="form-control" id="prodi" placeholder="" value="">
									                                  <label for="prodi">Program Studi</label>
									                                </div>
															 	</div>
									                            <div class="col-xxl-6 col-md-6">
									                                <div class="form-floating mb-2">
									                                    <textarea class="form-control" placeholder="Judul Skripsi" id="jdlskripsi"></textarea>
									                                    <label for="jdlskripsi">Judul Skrpisi</label>
									                                </div> 
									                            </div>
																<div class="col-xxl-6 col-md">
									                                <div class="form-floating mb-2">
									                                  <input type="text" class="form-control" id="dospem" placeholder="" value="">
									                                  <label for="dospem">Dosen Pembimbing</label>
									                                </div>
															 	</div>                                             
															</div> 
								                        </div>

								                        <div class="progress mb-2 progress-sm gap-3 mt-3">
								                            <div class="progress-bar bg-primary" role="progressbar" style="width: 5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								                        </div>
								                        <div class="d-flex align-items-start gap-3 mt-3" style="display: block;">
								                            <div class="hstack gap-2 justify-content-end">
								                                <button type="button" class="btn btn-light btbatal" data-bs-dismiss="modal">Cancel</button>
								                                <button type="submit" class="btn btn-success" id="add-btn">Save</button>
								                            </div>
								                        </div>
													</form>
							                        <!--end row-->
							                    </div>
							                </div>
							            </div>
							        </div>
							        <!--end col-->
							    </div>
						    </div>
						    <!--end row-->
						</div>
					</div>
				</div>
			</div>



<div id="gridpage" class="">

<!--begin::Content datatable-->
<div class="row">
    <div class="col">
            
			<div class="alert alert-primary" role="alert">
		        This is <strong>Datatable</strong> page in wihch we have used <b>jQuery</b> with cnd link!
		    </div>

		    <div class="row">
		        <div class="col-lg-12">
		            <div class="card">
						<div class="card-header align-items-center bg-light d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">ST Pembimbing Skripsi/Tugas Akhir</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <button type="button" class="btn btaddnew btn-primary"><i class="las la-plus align-middle me-1"></i> Tambah Data</button>
                                </div>
                            </div>
                        </div>                                                    
		                <div class="card-body table-responsive">
		                    <table id="tabelutama" class="table table-bordered nowrap table-striped align-middle" style="width:100%">
		                        <thead>
		                            <tr>
		                                <th scope="col" style="width: 46px;">Action</th>
		                                <th>NIM</th>
		                                <th>Nama Mahasiswa</th>               
		                                <th>Prodi</th>
		                                <th>Judul Skripsi/TA</th>
		                                <th>Dosen Pembimbing</th>
		                                <!--th>Action</th-->
		                            </tr>
		                        </thead>
		                        <tbody>			                                                 					                            
		                                                                                                                                         
		                        </tbody>
		                    </table>
		                </div>
		            </div>
		        </div><!--end col-->
		    </div><!--end row-->
        </div> <!-- end .h-100-->

    </div> 
    
</div>