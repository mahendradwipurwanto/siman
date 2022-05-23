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
                                    <h4 class="card-title mb-4">Tambah data visitasi
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
                                    <form action="<?php echo site_url('admin/tambah_aksivisitasi');?>" method="post">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Tanggal</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="date" id="example-text-input" name="tanggal">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Hari</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" id="example-text-input" name="hari">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Rumah Jemaat</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" id="example-text-input" name="rumah_jemaat">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Pelayan</label>
                                        <div class="col-md-6">
                                   
                                            <select class="form-control" name="pelayan">
                                                 <option>Pilih pelayan</option>
                                                     <?php foreach($visitasi as $row): ?>
                                                 <option value="<?= $row['nama_lengkap']; ?>"><?= $row['nama_lengkap']; ?></option>
                                                    <?php endforeach; ?>
                                            </select>
                                         </div>
                                     </div>
                                    </div>

                                    <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Tambah</button>
                                     </div>
                                     </br>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->