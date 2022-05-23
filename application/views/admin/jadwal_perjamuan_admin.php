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
                                    <h4 class="card-title mb-4">Jadwal Perjamuan
                                        <!-- gk usah tambah data -,- -->
                                        <a href="<?php echo site_url('admin/tambah_jadwal_perjamuan');?>" 
                                        class="btn btn-primary btn-sm float-right">Tambah Data</a>
                                        
                                    </h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-bordered datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Hari</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Jam</th>
                                                    <th scope="col">Rumah Jemaat</th>
                                                    <th scope="col">Pelayan</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($jadwal_perjamuan != false){ $id_jadwalperjamuan = 1; foreach ($jadwal_perjamuan as $data) { ?>
                                                <tr>
                                                    <td><?php echo $id_jadwalperjamuan;?></td>
                                                    <td><?php echo $data->hari;?></td>
                                                    <td><?php echo $data->tanggal;?></td>
                                                    <td><?php echo $data->jam;?></td>
                                                    <td><?php echo $data->nama;?></td>
                                                    <td><?php echo $data->pelayan;?></td>

                                                    <td>
                    								
                    								<a href="<?php echo site_url('admin/edit_jadwal_perjamuan/'.$data->id_jadwalperjamuan);?>"
                    									class="btn btn-primary btn-sm waves-effect waves-light">edit</a>
                    								<a href="<?php echo site_url('admin/hapus_jadwal_perjamuan/'.$data->id_jadwalperjamuan);?>"
                    									class="btn btn-danger btn-sm waves-effect waves-light">hapus</a>
                    							    </td>
                                                </tr>

                                                <?php $id_jadwalperjamuan++; }}?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>