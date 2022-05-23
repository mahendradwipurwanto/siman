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
                    <div class="row">
                    	<div class="col-lg-12">
                    		<div class="card">
                    			<div class="card-body">
                                <h4> <strong>DETAIL DATA BAPTIS </strong> </h4>
                    			</div>
                    		</div>
                    	</div>
                    </div>                                       				                  			
                    <!-- end row -->
                    <form action="<?php echo site_url('admin/detail/'.$detail->id_baptis);?>" method="post" class="card card-body">
                                <table class="table">
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td><?php echo $detail->nama?></td>
                                    </tr>
                                    <tr>
                                        <th>No Hp</th>
                                        <td><?php echo $detail->no_hp?></td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td><?php echo $detail->tempat_lahir?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td><?php echo $detail->tgl_lahir?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Ayah</th>
                                        <td><?php echo $detail->nama_ayah?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Ibu</th>
                                        <td><?php echo $detail->nama_ibu?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal di Baptis</th>
                                        <td><?php echo $detail->tgl_baptis?></td>
                                    </tr>
                                    <tr>
                                        <th>Gereja</th>
                                        <td><?php echo $detail->gereja?></td>
                                    </tr>
                                    <tr>
                                        <th>Pendeta Yang Membaptis</th>
                                        <td><?php echo $detail->pendeta?></td>
                                    </tr>
                                    <tr>
                                        <th>Status Verifikasi</th>
                                        <td><?php echo $detail->status_verifikasi?></td>
                                    </tr>
                                </table>
                            </form>