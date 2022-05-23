                    <!-- start page title -->
                    <div class="row">
                    	<div class="col-12">
                    		<div class="page-title-box d-flex align-items-center justify-content-between">
                    			<h4 class="page-title mb-0 font-size-18">verivikasi Perjamuan</h4>

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
                    				<h4 class="card-title mb-4">Verifikasi Perjamuan
                    				</h4>
                    			</div>
                    			<div class="card-body">
                    				<form action="<?php echo site_url('admin/atur_verifikasiperjamuan');?>"
                    					method="post">

                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Pilih Nama</label>
                    						<div class="col-md-9">
                    							<select class="form-control select2" name="id_perjamuan" id="pilih_perjamuan">
													<option selected>Pilih</option>
                    								<?php if($perjamuan != false){ foreach ($perjamuan as $key) {?>
                    								<option value="<?= $key->id_perjamuan;?>"> <?= $key->nama;?>
                    								</option>
                    								<?php }}?>
                    							</select>
                    						</div>
                    					</div>

                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Alamat</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" id="alamat" value="" readonly>
                    						</div>
                    					</div>
                                        <div class="form-group row">
                    						<label class="col-md-3 col-form-label">No HandPhone</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" id="no_hp" value="" readonly>
                    						</div>
                    					</div>
										<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Ganti Status</label>
                    						<div class="col-md-9">
                    							<select class="form-control" name="status" readonly>
                    								<option value="1">Aktif</option>
                    							</select>
                    						</div>
                    					</div>
										<hr>
                    					<div class="form-group row">
                    						<div class="col-md-3"></div>
                    						<div class="col-md-9">
                    							<a href="<?= site_url('admin/perjamuan_admin')?>"
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

                    		$("#pilih_perjamuan").change(
                    	function () { // Ketika user mengganti atau memilih data provinsi
                                // console.log($("#pilih_perjamuan").val());
                    			$.ajax({
                    				type: "POST", // Method pengiriman data bisa dengan GET atau POST
                    				url: "<?php echo site_url("admin/listperjamuan_admin"); ?>", // Isi dengan url/path file php yang dituju
                    				data: {
                    					id_perjamuan: $("#pilih_perjamuan").val()
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
                    					$("#alamat").val(response.address);
                    					$("#no_hp").val(response.hp);
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