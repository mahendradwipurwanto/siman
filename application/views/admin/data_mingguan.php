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
                    			<h4 class="card-title mb-4">Data mingguan
                    				<a href="<?php echo site_url('admin/tambah_mingguan'); ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                    			</h4>

                    			<div class="table-responsive">
                    				<table id="dataTables" class="table table-centered table-bordered">
                    					<thead>
                    						<tr>
                    							<th scope="col">No</th>
                    							<th scope="col">Minggu</th>
                    							<th scope="col">Jenis Ibadah</th>
                    							<th scope="col">Jam Mulai</th>
                    							<th scope="col">Jam Berakhir</th>
                    							<th scope="col">Status</th>
                    							<th scope="col">Aksi</th>
                    						</tr>
                    					</thead>
                    					<tbody>
                    						<?php if ($mingguan != false) {
												$no = 1;
												foreach ($mingguan as $data) { ?>
                    								<tr>
                    									<td><?php echo $no; ?></td>
                    									<td><?php echo $data->minggu; ?> - <?php echo $data->tanggal; ?></td>
                    									<td><?php echo $data->jenis_ibadah; ?></td>
                    									<td><?php echo $data->jam_mulai; ?></td>
                    									<td><?php echo $data->jam_berakhir; ?></td>
                    									<td>
                    										<?php if ($data->status == 0) {
																echo '<span class="badge badge-soft-warning font-size-12">Belum aktif</span></td>';
															} elseif ($data->status == 1) {
																echo '<span class="badge badge-soft-success font-size-12">Aktif</span></td>';
															} else {
																echo '<span class="badge badge-soft-secondary font-size-12">Sudah selesai</span></td>';
															} ?>
                    									</td>

                    									<td>

                    										<a href="<?php echo site_url('admin/edit_mingguan/' . $data->id_minggu); ?>" class="btn btn-primary btn-sm waves-effect waves-light">edit</a>
                    										<a href="<?php echo site_url('admin/hapus_mingguan/' . $data->id_minggu); ?>" class="btn btn-danger btn-sm waves-effect waves-light">hapus</a>
                    									</td>
                    								</tr>
                    						<?php $no++;
												}
											} ?>
                    					</tbody>
                    				</table>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    </div>
                    <!-- end row -->