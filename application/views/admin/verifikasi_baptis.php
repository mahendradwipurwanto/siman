                    <!-- start page title -->
                    <div class="row">
                    	<div class="col-12">
                    		<div class="page-title-box d-flex align-items-center justify-content-between">
                    			<h4 class="page-title mb-0 font-size-18">verivikasi baptis jemaat</h4>

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
                    				<h4 class="card-title mb-4">Verifikasi Baptis
                    				</h4>
                    			</div>
                    			<div class="card-body">

                    				<!-- edit sama kayak tambah data cuman ditambahi value="" disetiap formnya sesuai didatabase -->

                    				<!--  $absen_aktif diambil dari controller diawal, buat ngambil detail mingguan yang mau diedit, ->minggu nama kolom di tabelnya harus sama besar kecilnya juga -->

                    				<!-- ganti linknya ke yang edit wkwk, harus sama id_minggu -->
                    				<form action="<?php echo site_url('admin/atur_verifikasibaptis');?>"
                    					method="post">

                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Pilih Nama</label>
                    						<div class="col-md-9">
                    							<select class="form-control select2" name="id_baptis" id="pilih_jamaat">
													<option selected>Pilih</option>
                    								<?php if($baptis != false){ foreach ($baptis as $key) {?>
                    								<option value="<?= $key->id_baptis;?>"> <?= $key->nama;?>
                    								</option>
                    								<?php }}?>
                    							</select>
                    						</div>
                    					</div>

                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">No HandPhone </label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" id="no_hp" value="" readonly>
                    						</div>
                    					</div>

                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Tempat Lahir</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" id="tempat_lahir" value="" readonly>
                    						</div>
                    					</div>

                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Tanggal Lahir</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" id="tanggal_lahir" value="" readonly>
                    						</div>
                    					</div>
                                        <div class="form-group row">
                    						<label class="col-md-3 col-form-label">Nama Ayah</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" id="ayah" value="" readonly>
                    						</div>
                    					</div>
                                        <div class="form-group row">
                    						<label class="col-md-3 col-form-label">Nama Ibu</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" id="ibu" value="" readonly>
                    						</div>
                    					</div>
										<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Tanggal Baptis</label>
                    						<div class="col-md-9">
                    							<input type="date" class="form-control" name="tgl_baptis">
                    						</div>
                    					</div>
										<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Nama Gereja</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="gereja">
                    						</div>
                    					</div>
										<div class="form-group row">
										<label class="col-md-3 col-form-label">Pendeta</label>
											<div class="col-md-9">
                                   
                                    			<select class="form-control" name="pendeta">
                                   				 	<option>Pilih Pengurus</option>
                                        				<?php foreach($verifikasi as $row): ?>
                                            		<option value="<?= $row['nama_lengkap']; ?>"><?= $row['nama_lengkap']; ?></option>
                                           			 	<?php endforeach; ?>
                                       			 </select>
                                   			 </div>
										</div>
			
										<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Ganti Status</label>
                    						<div class="col-md-9">
                    							<select class="form-control" name="status_verifikasi" readonly>
                    								<option value="1">Aktif</option>
                    							</select>
                    						</div>
                    					</div>
										<hr>
                    					<div class="form-group row">
                    						<div class="col-md-3"></div>
                    						<div class="col-md-9">
                    							<a href="<?= site_url('admin/baptis_admin')?>"
                    								class="btn btn-secondary waves-effect waves-light">batal</a>
                    							<button type="submit"
                    								class="btn btn-info waves-effect waves-light">Proses</button><br>
                    							 
                    						</div>
                    					</div>
                    				</form>
                    			</div>
                    		</div>
                    	</div>
                    	<!-- end col -->
                    </div>
                    <!-- end row -->

                    <script>
                    	$(document).ready(function () { // Ketika halaman sudah siap (sudah selesai di load)
                    		// Kita sembunyikan dulu untuk loadingnya

                    		$("#pilih_jamaat").change(
                    	function () { // Ketika user mengganti atau memilih data provinsi

                    			$.ajax({
                    				type: "POST", // Method pengiriman data bisa dengan GET atau POST
                    				url: "<?php echo site_url("admin/listBaptis"); ?>", // Isi dengan url/path file php yang dituju
                    				data: {
                    					id_baptis: $("#pilih_jamaat").val()
                    				}, // data yang akan dikirim ke file yang dituju
                    				dataType: "json",
                    				beforeSend: function (e) {
                    					if (e && e.overrideMimeType) {
                    						e.overrideMimeType(
                    							"application/json;charset=UTF-8");
                    					}
                    				},
                    				success: function (
                    				response) { // Ketika proses pengiriman berhasil
                    					$("#no_hp").val(response.hp);
                    					$("#tempat_lahir").val(response.tempat);
                    					$("#tanggal_lahir").val(response.tanggal);
                    					$("#ayah").val(response.ayah);
                    					$("#ibu").val(response.ibu);
                    				},
                    				error: function (xhr, ajaxOptions,
                    				thrownError) { // Ketika ada error
                    					Swal.fire({
                    						icon: 'danger',
                    						title: (xhr.status + "\n" + xhr
                    								.responseText + "\n" + thrownError
                    								),
                    					})
                    				}
                    			});
                    		});
                    	});

                    </script>