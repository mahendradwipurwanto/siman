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
										<?php if ($cek_absen != false) : ?>
										<div class="row">
											<div class="col-12">
												<div class="alert alert-info">
													Absensi untuk kegiatan <b><?= $cek_absen->jenis_ibadah; ?> - minggu ke <?= $cek_absen->minggu; ?></b> tanggal <i><?= $cek_absen->tanggal; ?></i> sedang berlangsung ! ayo absen <a href="<?= site_url('presensi_pengguna/presensi_sekarang'); ?>"><b>sekarang !</b></a>
												</div>
											</div>
										</div>
										<?php endif; ?>
                    <div class="row">
                    	<div class="col-lg-4">
                    		<div class="card">
                    			<div class="card-body">
                    				<h4 class="card-title mb-4">Warta</h4>

                    				<ul class="inbox-wid list-unstyled">
                    					<?php if ($pengumuman != false) {
												$id = 1;
												foreach ($pengumuman as $data) { ?>
                    					<li class="inbox-list-item">
                    						<a data-toggle="modal" data-target="#baca-<?= $data->id_warta; ?>">
                    								<div class="media">
                    								<div class="mr-3 align-self-center">
                    									<img src="<?php echo base_url('assets/images/users/gkt.png'); ?>"
                    										alt="" class="avatar-sm rounded-circle">
                    								</div>
                    								<div class="media-body overflow-hidden">
                    									<h5 class="font-size-16 mb-1"><?php echo $data->judul_warta; ?>
                    									</h5>
                    									<p class="text-truncate mb-0">
                    										<?php echo substr($data->isi_warta, 0, 20); ?>...</p>
                    								</div>
                    								<div class="font-size-12 ml-2">
                    									<?php echo $data->tanggal; ?>
                    								</div>
													
                    							</div>
                    						</a>
                    					</li>

                    					<div id="baca-<?= $data->id_warta; ?>" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                    						aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    						<div class="modal-dialog modal-dialog-centered">
                    							<div class="modal-content">
                    								<div class="modal-header">
                    									<h5 class="modal-title mt-0">Warta- <?= $data->judul_warta; ?></h5>
                    									<button type="button" class="close" data-dismiss="modal"
                    										aria-label="Close">
                    										<span aria-hidden="true">&times;</span>
                    									</button>
                    								</div>
                    								<div class="modal-body">
                    									<p><?= $data->isi_warta; ?></p>
														<img src="<?php echo base_url();?>foto/<?php echo $data->image;?>" style="width 300px; height:270px;"/>
                    								</div>
                    							</div>
                    							<!-- /.modal-content -->
                    						</div>
                    						<!-- /.modal-dialog -->
                    					</div>

                    					<?php $id++;
																							}
																						} ?>

                    				</ul>

                    				<div class="text-center">
                    					<!-- <a href="#" class="btn btn-primary btn-sm">Load more</a> -->
                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    	<!-- end row -->
                    	<div class="col-lg-8">
                    		<div class="card">
                    			<div class="card-body">
                    				<h4 class="card-title mb-4">Jadwal Visitasi
                    					<a href="<?php echo site_url('pengguna/dashboard'); ?>" class=""></a>
                    				</h4>

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
                    							<?php if ($jadwal != false) {
												$id = 1;
												foreach ($jadwal as $data) { ?>
                    							<tr>
                    								<td><?php echo $id; ?></td>
                    								<td><?php echo $data->tanggal; ?></td>
                    								<td><?php echo $data->hari; ?></td>
                    								<td><?php echo $data->pelayan; ?></td>
                    								<td><?php echo $data->rumah_jemaat; ?></td>
                    								
                    							</tr>
                    							<?php $id++;
												}
											} ?>
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
