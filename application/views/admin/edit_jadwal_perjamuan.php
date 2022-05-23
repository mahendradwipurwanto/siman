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
                    				<h4 class="card-title mb-4">Edit Jadwal Perjamuan
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
                    					action="<?php echo site_url('admin/edit_jadwalperjamuan/'.$jadwalperjamuan->id_jadwalperjamuan);?>"
                    					method="post">
                    					<div class="form-group row">
                    						<label for="example-text-input" class="col-md-2 col-form-label">Hari</label>
                    						<div class="col-md-10">
                    							<input class="form-control" type="text" id="example-text-input"
                    								name="hari" value="<?php echo $jadwalperjamuan->hari?>">
                    						</div>
                    					</div>
                    					<div class="form-group row">
                    						<label for="example-text-input"
                    							class="col-md-2 col-form-label">Tanggal</label>
                    						<div class="col-md-10">
                    							<input class="form-control" type="date" id="example-text-input"
                    								name="tanggal" value="<?php echo $jadwalperjamuan->tanggal?>">
                    						</div>
                    					</div>
                    					<div class="form-group row">
                    						<label for="example-text-input" class="col-md-2 col-form-label">Jam</label>
                    						<div class="col-md-10">
                    							<input class="form-control" type="time" id="example-text-input"
                    								name="jam" value="<?php echo $jadwalperjamuan->jam?>">
                    						</div>
                    					</div>
                    					<div class="form-group row">
                    						<label for="example-text-input" class="col-md-2 col-form-label">Rumah
                    							Jemaat</label>
                    						<div class="col-md-6">
                    							<select class="form-control select2" name="rumah" id="pilih_nama">
                    								<option value="<?= $jadwalperjamuan->rumah;?>">
                    									<?php echo $jadwalperjamuan->nama?></option>
                    								<?php if($perjamuan != false){ foreach ($perjamuan as $key) {?>
                    								<option value="<?= $key->id_jemaat;?>"> <?= $key->nama;?>
                    								</option>
                    								<?php }}?>
                    							</select>
                    						</div>
                    					</div>
                    					<div class="form-group row">
                    						<label for="example-text-input"
                    							class="col-md-2 col-form-label">Pelayan</label>
                    						<div class="col-md-6">

                    							<select class="form-control" name="pelayan">
                    								<option value="<?= $jadwalperjamuan->pelayan;?>">
                    									<?php echo $jadwalperjamuan->pelayan?></option>
                    								<?php foreach($jadwal as $row): ?>
                    								<option value="<?= $row['nama_lengkap']; ?>">
                    									<?= $row['nama_lengkap']; ?></option>
                    								<?php endforeach; ?>
                    							</select>
                    						</div>
                    					</div>
                    					<a href="<?= site_url('admin/jadwal_perjamuan_admin')?>"
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
