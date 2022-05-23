                    <!-- start page title -->
                    <div class="row">
                    	<div class="col-12">
                    		<div class="page-title-box d-flex align-items-center justify-content-between">
                    			<h4 class="page-title mb-0 font-size-18"></h4>

                    			<div class="page-title-right">
                    				<ol class="breadcrumb m-0">
                    					<li class="breadcrumb-item active">Welcome to Siman</li>
                    				</ol>
                    			</div>

                    		</div>
                    	</div>
                    </div>
                    <!-- end page title -->
					<br>
                    <div class="col-lg-12">
                    	<div class="card">
                    		<div class="card-body">
								<center><span style="font-size: 32px; font-family: arial">Laporan Baptis Dewasa Jemaat</span></center>	
								<center><span style="font-size: 32px; font-family: arial">GKT Antiokhia Tidar Malang</span></center>
                                    <br/>
                    				<a href="<?php echo site_url('pengguna/laporan_baptis');?>"
                    					></a>
                    			</h4>
								<form action="" method="post">
								<input type="month" name="bulan">
								<input type="submit">
								</form>

                    			<div class="table-responsive">
                    				<table  class="table mb-0">
                    					<thead>
                    						<tr>
                    							<th scope="col">No</th>
                    							<th scope="col">Nama</th>
												<th scope="col">Tempat Lahir</th>
												<th scope="col">Tanggal Lahir</th>
												<th scope="col">Tanggal Baptis</th>
												<th scope="col">Nama Gereja</th>
												<th scope="col">Pendeta</th>
                                                <th scope="col">Status Verifikasi</th>
                    						</tr>
                    					</thead>
                    					<tbody>
                                                <?php if($databaptis != false){ $id_baptis = 1; foreach ($databaptis as $data) { ?>
                                                <tr>
													<td><?php echo $id_baptis;?></td>
                                                    <td><?php echo $data->nama;?></td>
                                                    <td><?php echo $data->tempat_lahir;?></td>
                                                    <td><?php echo $data->tgl_lahir;?></td>
                                                    <td><?php echo $data->tgl_baptis;?></td>
                                                    <td><?php echo $data->gereja;?></td>
													<td><?php echo $data->pendeta;?></td>

													<td>
                    								<?php if ($data->status_verifikasi == 0) {
                                                            echo '<span class="badge badge-soft-warning font-size-12">Belum selesai</span></td>';
                                                        } elseif($data->status_verifikasi == 1) {
                                                            echo '<span class="badge badge-soft-success font-size-12">Selesai</span></td>';
                                                        }else{
                                                            echo '<span class="badge badge-soft-secondary font-size-12">Sudah selesai</span></td>';
                                                        }?>
                    								</td>
                                                </tr>

                                                <?php $id_baptis++; }}?>
                                            </tbody>
                    				</table>
									<br>
									<div align="right">  Yang Mengetahui </div>
									<br>
									<div align="right">  <img src=" <?php echo base_url()?>/foto/tanda.png" alt=""> </div>
									<br>
									<div align="right">  Pdt.Handoko S.Th </div>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    </div>
                    <!-- end row -->
