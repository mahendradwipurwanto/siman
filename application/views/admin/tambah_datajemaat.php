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

                    <div class="row">
                    	<div class="col-lg-12">
                    		<div class="card">
                    			<div class="card-body">
                    				<h4 class="card-title mb-4">Tambah Data Jemaat GKT Antiokhia
                    				</h4>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                    	<div class="col-12">
                    		<div class="card">
                    			<div class="card-body">
                    				<form action="<?php echo site_url('admin/tambah_aksidatajemaat');?>" method="post">
                                    <div class="form-group row">
                    						<label class="col-md-3 col-form-label">Kategori Persembahan</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="kategori_transfer">
                    						</div>
                    					</div>
                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Nama Lengkap</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="nama">
                    						</div>
                    					</div>
                                        <div class="form-group row">
                    						<label class="col-md-3 col-form-label">Alamat</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="nominal">
                    						</div>
                    					</div>
										<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Tanggal Lahir</label>
                    						<div class="col-md-9">
                    							<input type="date" class="form-control" name="tgl_lahir">
                    						</div>
                    					</div>
										<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Tempat Lahir</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="tempat_lahir">
                    						</div>
                    					</div>
                                        <div class="form-group row">
                    						<label class="col-md-3 col-form-label">No Hp</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="no_hp">
                    						</div>
                    					</div>
										<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Status Keanggotaan</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="status_keanggotaan">
                    						</div>
                    					</div>
                                        <a href="<?= site_url('admin/data_jemaat')?>"
                    						class="btn btn-secondary waves-effect waves-light">batal</a>
                    					<button type="submit"
                    						class="btn btn-primary waves-effect waves-light">Tambah</button>
                    				</form>
                    			</div>
                    		</div>
                    	</div>
                    	<!-- end col -->
                    </div>
                    <!-- end row -->
