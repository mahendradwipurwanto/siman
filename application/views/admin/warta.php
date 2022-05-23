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
                    			<h4 class="card-title mb-4">Warta
                    				<a href="<?php echo site_url('admin/tambah_warta');?>"
                    					class="btn btn-primary btn-sm float-right">Tambah Data</a>
                    			</h4>
                    			<div class="table-responsive">
                    				<table id="dataTables" class="table table-centered nowrap table-bordered">
                    					<thead>
                    						<tr>
                    							<th scope="col">No</th>
                    							<th scope="col">Judul Warta</th>
                    							<th scope="col">Tanggal</th>
												<th scope="col">Foto</th>
                    							<th scope="col">Aksi</th>
                    						</tr>
                    					</thead>
                    					<tbody>
                    						<?php if($pengumuman != false){ $id = 1; foreach ($pengumuman as $data) { ?>
                    						<tr>
                    							<td><?php echo $id;?></td>
                    							<td><?php echo $data->judul_warta;?></td>
                    							<td><?php echo date("d F Y", strtotime($data->tanggal));?></td>
                    							<td><img src="<?php echo base_url();?>foto/<?php echo $data->image;?>" style="width 50px; height:50px;"/></td>
                    							<td>
                    								<!-- tempat tombol aksi, copas dari template buat tombolnya -->

                    								<!-- setiap edit sama hapus, harus mengirim id dari data yang pengen dihapus didalam link -->
                    								<button type="button"
                    									class="btn btn-info btn-sm  waves-effect waves-light"
                    									data-toggle="modal"
                    									data-target="#detail_warta<?php echo $id;?>">detail</button>
                    								<a href="<?php echo site_url('admin/edit_warta/'.$data->id_warta);?>"
                    									class="btn btn-primary btn-sm  waves-effect waves-light">edit</a>
                    								<a href="<?php echo site_url('admin/hapus_warta/'.$data->id_warta);?>"
                    									class="btn btn-danger btn-sm  waves-effect waves-light">hapus</a>
                    							</td>
                    						</tr>

                    						<div class="modal fade" id="detail_warta<?php echo $id;?>" tabindex="-1"
                    							role="dialog" aria-labelledby="exampleModalScrollableTitle"
                    							aria-hidden="true">
                    							<div class="modal-dialog modal-dialog-scrollable">
                    								<div class="modal-content">
                    									<div class="modal-header">
                    										<h5 class="modal-title mt-0"
                    											id="exampleModalScrollableTitle">Detail Warta</h5>
                    										<button type="button" class="close" data-dismiss="modal"
                    											aria-label="Close">
                    											<span aria-hidden="true">&times;</span>
                    										</button>
                    									</div>
                    									<div class="modal-body">
                    										<div class="from-group mb-3">
                    											<b>Judul: </b> <?php echo $data->judul_warta;?>
                    										</div>
                    										<div class="from-group">
                    											<b>Isi warta: </b> <br><?php echo $data->isi_warta;?>
                    										</div>
															<div class="from-group">
                    											<b>Foto </b> <br><?php echo $data->image;?>" style="width 50px; height:50px;"/></td>
                    										</div>
                    									</div>
                    									<div class="modal-footer">
                    										<button type="button" class="btn btn-secondary"
                    											data-dismiss="modal">Tutup</button>
                    									</div>
                    								</div>
                    								<!-- /.modal-content -->
                    							</div>
                    							<!-- /.modal-dialog -->
                    						</div>

                    						<?php $id++; }}?>
                    					</tbody>
                    				</table>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    </div>
                    <!-- end row -->
