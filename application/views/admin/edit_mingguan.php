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
                    				<h4 class="card-title mb-4">Tambah data mingguan
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

                    				<!-- edit sama kayak tambah data cuman ditambahi value="" disetiap formnya sesuai didatabase -->

                    				<!--  $mingguan diambil dari controller diawal, buat ngambil detail mingguan yang mau diedit, ->minggu nama kolom di tabelnya harus sama besar kecilnya juga -->

                    				<!-- ganti linknya ke yang edit wkwk, harus sama id_minggu -->
                    				<form
                    					action="<?php echo site_url('admin/edit_aksiMingguan/'.$mingguan->id_minggu);?>"
                    					method="post">
                    					<div class="form-group row">
                    						<label for="example-text-input" class="col-md-2 col-form-label">Minggu
                    							ke</label>
                    						<div class="col-md-10">
                    							<input class="form-control" type="text" id="example-text-input"
                    								name="minggu" value="<?php echo $mingguan->minggu;?>">
                    						</div>
                    					</div>
                    					<div class="form-group row">
                    						<label for="example-text-input" class="col-md-2 col-form-label">Jenis
                    							Ibadah</label>
                    						<div class="col-md-10">
                    							<input class="form-control" type="text" id="example-text-input"
                    								name="jenis_ibadah" value="<?php echo $mingguan->jenis_ibadah;?>">
                    						</div>
                    					</div>
                    					<div class="form-group row">
                    						<label for="example-text-input"
                    							class="col-md-2 col-form-label">Tanggal</label>
                    						<div class="col-md-10">
                    							<input class="form-control" type="date" id="example-text-input"
                    								name="tanggal" value="<?php echo $mingguan->tanggal;?>">
                    						</div>
                    					</div>
                    					<div class="row">
                    						<div class="col-6">
                    							<div class="form-group row">
                    								<label for="example-text-input" class="col-md-4 col-form-label">Jam
                    									Mulai</label>
                    								<div class="col-md-8">
                    									<input class="form-control" type="time" id="example-text-input"
                    										name="jam_mulai" value="<?php echo $mingguan->jam_mulai;?>">
                    								</div>
                    							</div>
                    						</div>
                    						<div class=" col-6">
                    							<div class="form-group row">
                    								<label for="example-text-input" class="col-md-4 col-form-label">Jam
                    									Berakhir</label>
                    								<div class="col-md-8">
                    									<input class="form-control" type="time" id="example-text-input"
                    										name="jam_berakhir"
                    										value="<?php echo $mingguan->jam_berakhir;?>">
                    								</div>
                    							</div>
                    						</div>
                    					</div>
                    					<a href="<?= site_url('admin/data_mingguan')?>"
                    						class="btn btn-secondary waves-effect waves-light">batal</a>
                    					<button type="submit"
                    						class="btn btn-primary waves-effect waves-light">Edit</button>
                    				</form>
                    			</div>
                    		</div>
                    	</div>
                    	<!-- end col -->
                    </div>
                    <!-- end row -->
