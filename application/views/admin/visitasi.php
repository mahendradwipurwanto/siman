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
                                    <h4 class="card-title mb-4">
                                     
                                    <a href="<?php echo site_url('admin/tambah_visitasi');?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                                    </h4>
                                    <br/>

                                    <div class="table-responsive">
                                    <table id="dataTables" class="table table-centered table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Hari</th>
                                                    <th scope="col">Rumah Jemaat</th>
                                                    <th scope="col">Pelayan</th>
                                                    <th scope="col">Aksi</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($jadwal != false){ $id = 1; foreach ($jadwal as $data) { ?>
                                                <tr>
                                                    <td><?php echo $data['id_jadwal'];?></td>
                                                    <td><?php echo $data['tanggal'];?></td>
                                                    <td><?php echo $data['hari'];?></td>
                                                    <td><?php echo $data['rumah_jemaat'];?></td>
                                                    <td><?php echo $data['pelayan'];?></td>
                                                    <!-- hati hati sama buka tutup setiap tag, ilang satu buyar tampilam -->
                                                    <td>
                                                        <!-- tempat tombol aksi, copas dari template buat tombolnya -->

                                                        <!-- setiap edit sama hapus, harus mengirim id dari data yang pengen dihapus didalam link -->
                                                        <!-- <a href="<?php echo site_url('admin/edit_visitasi/'.$data['id_jadwal']);?>" class="btn btn-primary btn-sm btn-block waves-effect waves-light">edit</a> -->
                                                        <a href="<?php echo site_url('admin/hapus_visitasi/'.$data['id_jadwal']);?>" class="btn btn-danger btn-sm btn-block waves-effect waves-light">hapus</a>
                                                    </td>
                                                </tr>
                                                <?php $id++; }}?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="mt-3">
                                        <ul class="pagination pagination-rounded justify-content-center mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="#">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                <center><span style="font-size: 28px; font-family: arial">Laporan Visitasi Jemaat </span></center>
							    <center><span style="font-size: 28px; font-family: arial">GKT Antiokhia Tidar Malang</span></center>		
                                    <br/><br/>
                                <form action="" method="post">
								<input type="month" name="bulan">
								<input type="submit">
                                <br/>
								</form>

                                    <div class="table-responsive">
                                    <table id="dataTables" class="table table-centered table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Hari</th>
                                                    <th scope="col">Rumah Jemaat</th>
                                                    <th scope="col">Pelayan</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if($visitasi != false){ $id_jadwal = 1; foreach ($visitasi as $data) { ?>
                                                <tr>
                                                    <td><?php echo $id_jadwal;?></td>
                                                    <td><?php echo $data->tanggal;?></td>
                                                    <td><?php echo $data->hari;?></td>
                                                    <td><?php echo $data->rumah_jemaat;?></td>
                                                    <td><?php echo $data->pelayan;?></td>
                                                    <!-- hati hati sama buka tutup setiap tag, ilang satu buyar tampilam -->
                                                </tr>
                                                <?php $id_jadwal++; }}?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="mt-3">
                                        <ul class="pagination pagination-rounded justify-content-center mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="#">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->