                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">Welcome to Siman</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Edit Visitasi
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <!-- edit sama kayak tambah data cuman ditambahi value="" disetiap formnya sesuai didatabase -->

                                    <!--  $mingguan diambil dari controller diawal, buat ngambil detail mingguan yang mau diedit, ->minggu nama kolom di tabelnya harus sama besar kecilnya juga -->

                                    <!-- ganti linknya ke yang edit wkwk, harus sama id_minggu -->
                                    <form action="<?php echo site_url('admin/edit_aksivisitasi/'.$jadwal->id_jadwal);?>" method="post">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Tanggal</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="date" id="example-text-input" name="tanggal">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Hari</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="example-text-input" name="hari">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Rumah Jemaat</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="example-text-input" name="rumah_jemaat">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Pelayan</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="example-text-input" name="pelayan">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Edit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->