                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18"></h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active"></li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="col-lg-12">
                    	<div class="card">
                    		<div class="card-body">
                            <center><span style="font-size: 28px; font-family: arial">Laporan Perjamuan Keliling </span></center>
							<center><span style="font-size: 28px; font-family: arial">GKT Antiokhia Tidar Malang</span></center>		
                                    <br/><br/>
                    				<a href="<?php echo site_url('admin/laporan_perjamuan_admin');?>"
                    					></a>
                    			</h4>
                                <form action="" method="post">
								<input type="month" name="bulan">
								<input type="submit">
								</form>
                                <button type="button" onclick="printpage()" class="btn btn-danger btn-rounded waves-effect waves-light">Cetak</button>
                                <script>
                                    function printpage(){window.print();}
                                </script>
                                <br/>

                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" >
                                
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Hari</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Jam</th>
                                                    <th scope="col">Rumah Jemaat</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">Pelayan</th>
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
                                                    <td><?php echo $data->alamat;?></td>
                                                    <td><?php echo $data->pelayan;?></td>
                                                </tr>

                                                <?php $id_jadwalperjamuan++; }}?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>