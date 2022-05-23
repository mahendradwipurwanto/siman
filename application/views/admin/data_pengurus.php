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
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Data Pengurus Gereja
                                        <!-- gk usah tambah data -,- -->
                                        <a href="<?php echo site_url('admin/tambah_pengurus');?>" 
                                        class="btn btn-primary btn-sm float-right">Tambah Data</a>
                                        
                                    </h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-bordered datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id Pengurus</th>
                                                    <th scope="col">Nama Lengkap</th>
                                                    <th scope="col">Jabatan</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($datapengurus != false){ $id_pengurus = 1; foreach ($datapengurus as $data) { ?>
                                                <tr>
                                                    <td><?php echo $id_pengurus;?></td>
                                                    <!-- gk usah hee kode user wkwk, gk boleh ditampilin kode user kalau di etika developer wkwk -->
                                                    <td><?php echo $data->nama_lengkap;?></td>
                                                    <td><?php echo $data->jabatan;?></td>

                                                    <td>
                    								
                    								<a href="<?php echo site_url('admin/edit_pengurus/'.$data->id_pengurus);?>"
                    									class="btn btn-primary btn-sm waves-effect waves-light">edit</a>
                    								<a href="<?php echo site_url('admin/hapus_pengurus/'.$data->id_pengurus);?>"
                    									class="btn btn-danger btn-sm waves-effect waves-light">hapus</a>
                    							    </td>
                                                </tr>

                                                <?php $id_pengurus++; }}?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>