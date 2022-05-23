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
                                    <h4 class="card-title mb-4">Tambah data pengurus
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    </br>
                    </br>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?php echo site_url('admin/tambah_aksipengurus');?>" method="post">
                                    
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="example-text-input" name="nama_lengkap">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Jabatan</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="example-text-input" name="jabatan">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Tambah</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->