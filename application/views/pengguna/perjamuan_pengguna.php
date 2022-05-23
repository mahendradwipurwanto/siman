
                    <!-- end row -->
                    <!-- start page title -->
                    <div class="row">
                    	<div class="col-12">
                    		<div class="page-title-box d-flex align-items-center justify-content-between">
                    			<h4 class="page-title mb-0 font-size-18">Daftar Perjamuan Keliling</h4>

                    			<div class="page-title-right">
                    				<ol class="breadcrumb m-0">
                    					<li class="breadcrumb-item active">Welcome to Siman</li>
                    				</ol>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    <!-- end page title -->

                    <div class="row justify-content-center">
                    	<div class="col-8">
                    		<div class="card">
                    			<div class="card-header">
                    				<h4 class="card-title mb-4">Form Perjamuan
                    				</h4>
                    			</div>
                    			<div class="card-body">
                                    
                    				<form action="<?php echo site_url('pengguna/daftar_perjamuan');?>" method="post">

                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Nama Lengkap</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="nama" value="<?= $jemaat->nama ?>">
                    						</div>
                    					</div>

                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Alamat</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="alamat" value="<?= $jemaat->alamat ?>" >
                    						</div>
                    					</div>
										<div class="form-group row">
                    						<label class="col-md-3 col-form-label">No HandPhone </label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="no_hp" value="<?= $jemaat->no_hp ?>" >
                    						</div>
                    					</div>
										<hr>
                    					<div class="form-group row">
                    						<div class="col-md-3"></div>
                    						<div class="col-md-9">
                    							<a href="<?= site_url('pengguna/perjamuan_pengguna')?>"
                    								class="btn btn-secondary waves-effect waves-light">batal</a>
                    							<button type="submit"
                    								class="btn btn-info waves-effect waves-light">Daftar</button><br>
                    							 
                    						</div>
                    					</div>
                    				</form>

                    			</div>
                    		</div>
                    	</div>
                    	<!-- end col -->
                    </div>
                    <!-- end row -->

                    