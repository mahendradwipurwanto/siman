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
				</br>
				</br>

                    <div class="col-lg-12">
                    	<div class="card">
                    		<div class="card-body">
                    			<h4 class="card-title mb-4">
                    				<a href="<?php echo site_url('admin/perjamuan_admin');?>"
                    					class=""></a>
                    			</h4>

                    			<div class="table-responsive">
                    				<table id="dataTables" class="table table-centered table-bordered">
                    					<thead>
                    						<tr>
                    							<th scope="col">No</th>
                    							<th scope="col">Nama</th>
                                                <th scope="col">Alamat</th>
												<th scope="col">No HandPhone</th>
												<th scope="col">Status</th>
                    						</tr>
                    					</thead>
                    					<tbody>
                                                <?php if($perjamuan != false){ $id_perjamuan = 1; foreach ($perjamuan as $data) { ?>
                                                <tr>
                                                    <td><?php echo $id_perjamuan;?></td>
                                                    <td><?php echo $data->nama;?></td>
                                                    <td><?php echo $data->alamat;?></td>
                                                    <td><?php echo $data->no_hp;?></td>

													<td>
                    								<?php if ($data->status == 0) {
                                                            echo '<span class="badge badge-soft-warning font-size-12">Belum aktif</span></td>';
                                                        } elseif($data->status == 1) {
                                                            echo '<span class="badge badge-soft-success font-size-12">selesai</span></td>';
                                                        }else{
                                                            echo '<span class="badge badge-soft-secondary font-size-12">Sudah selesai</span></td>';
                                                        }?>
                    							</td>
                                                </tr>

                                                <?php $id_perjamuan++; }}?>
                                            </tbody>
                    				</table>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    </div>
                    <!-- end row -->
