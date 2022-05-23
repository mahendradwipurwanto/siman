
                    <!-- end row -->
                    <!-- start page title -->
                    <div class="row">
                    	<div class="col-12">
                    		<div class="page-title-box d-flex align-items-center justify-content-between">
                    			<h4 class="page-title mb-0 font-size-18">Daftar baptis jemaat</h4>

                    			<div class="page-title-right">
                    				<ol class="breadcrumb m-0">
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    <!-- end page title -->

                    <div class="row justify-content-center">
                    	<div class="col-8">
                    		<div class="card">
                    			<div class="card-header">
                    				<h4 class="card-title mb-4">Form Daftar Baptis
                    				</h4>
                    			</div>
                    			<div class="card-body">
                                    
                    				<form action="<?php echo site_url('pengguna/daftar_baptis');?>" method="post">

                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Nama Lengkap</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="nama" value="<?= $jemaat->nama ?>">
                    						</div>
                    					</div>

                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Tempat Lahir</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="tempat_lahir" value="<?= $jemaat->tempat_lahir ?>" >
                    						</div>
                    					</div>
                                        <div class="form-group row">
                    						<label class="col-md-3 col-form-label">Tanggal Lahir</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="tgl_lahir" value="<?= $jemaat->tgl_lahir ?>" >
                    						</div>
                    					</div>
										<div class="form-group row">
                    						<label class="col-md-3 col-form-label">No HandPhone </label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="no_hp" value="<?= $jemaat->no_hp ?>" >
                    						</div>
                    					</div>
                                        <div class="form-group row">
                    						<label class="col-md-3 col-form-label">Nama Ayah</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="nama_ayah">
                    						</div>
                    					</div>
										<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Nama Ibu</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" name="nama_ibu">
                    						</div>
                    					</div>
										<hr>
                    					<div class="form-group row">
                    						<div class="col-md-3"></div>
                    						<div class="col-md-9">
                    							<a href="<?= site_url('pengguna/baptis_pengguna')?>"
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

                   <!--  <script>
                    	$(document).ready(function () { // Ketika halaman sudah siap (sudah selesai di load)
                    		// Kita sembunyikan dulu untuk loadingnya

                    		$("#pilih_jemaat").change(
                    	function () { // Ketika user mengganti atau memilih data provinsi

                    			$.ajax({
                    				type: "POST", // Method pengiriman data bisa dengan GET atau POST
                    				url: "<?php echo site_url("pengguna/listBaptisPengguna"); ?>", // Isi dengan url/path file php yang dituju
                    				data: {
                    					id_baptis: $("#pilih_jemaat").val()
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
                    					$("#tgl_lahir").val(response.tgl);
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

                    </script> -->