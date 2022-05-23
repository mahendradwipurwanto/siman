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
                    			<h4 class="card-title mb-4">List Baptis Jemaat
									
                                    <br/><br/>
                    				<a href="<?php echo site_url('admin/baptis_admin');?>"
                    					></a>
                    			</h4>

                    			<div class="table-responsive">
                    				<table id="dataTables" class="table table-centered table-bordered">
                    					<thead>
                    						<tr>
                    							<th scope="col">No</th>
                    							<th scope="col">Nama</th>
												<th scope="col">No HandPhone</th>
												<th scope="col">Status Verifikasi</th>
												<th scope="col">Aksi</th>
                    						</tr>
                    					</thead>
                    					<tbody>
                                                <?php if($baptis != false){ $id_baptis = 1; foreach ($baptis as $data) { ?>
                                                <tr>
													<td><?php echo $id_baptis;?></td>
                                                    <td><?php echo $data->nama;?></td>
                                                    <td><?php echo $data->no_hp;?></td>
													

													<td>
                    								<?php if ($data->status_verifikasi == 0) {
                                                            echo '<span class="badge badge-soft-warning font-size-12">Belum selesai</span></td>';
                                                        } elseif($data->status_verifikasi == 1) {
                                                            echo '<span class="badge badge-soft-success font-size-12">Selesai</span></td>';
                                                        }else{
                                                            echo '<span class="badge badge-soft-secondary font-size-12">Sudah selesai</span></td>';
                                                        }?>
                    								</td>
													<td>
														<a href="<?php echo site_url('admin/detail/'.$data->id_baptis);?>"
                    									class="btn btn-info btn-sm  waves-effect waves-light">Detail</a>
													</td>
                                                </tr>

                                                <?php $id_baptis++; }}?>
                                            </tbody>
                    				</table>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    </div>
                    <!-- end row -->
