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
                                    <h4 class="card-title mb-4">Tambah data jadwal perjamuan
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
                                    <form action="<?php echo site_url('admin/tambah_aksi_jadwalperjamuan');?>" method="post">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Hari</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" id="example-text-input" name="hari">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Tanggal</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="date" id="example-text-input" name="tanggal">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Jam</label>
                                        <div class="col-md-6">
                                            <input class="form-control" type="time" id="example-text-input" name="jam">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Rumah Jemaat</label>
                    						<div class="col-md-6">
                    							<select class="form-control select2" name="rumah" id="pilih_nama">
													<option selected>Pilih</option>
                    								<?php if($perjamuan != false){ foreach ($perjamuan as $key) {?>
                    								<option value="<?= $key->id_jemaat;?>"> <?= $key->nama;?>
                    								</option>
                    								<?php }}?>
                    							</select>
                    						</div>
                    					</div>
                                    <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Pelayan</label>
											<div class="col-md-6">
                                   
                                    			<select class="form-control" name="pelayan">
                                   				 	<option>Pilih Pengurus</option>
                                        				<?php foreach($jadwal as $row): ?>
                                            		<option value="<?= $row['nama_lengkap']; ?>"><?= $row['nama_lengkap']; ?></option>
                                           			 	<?php endforeach; ?>
                                       			 </select>
                                   			 </div>
										</div>

                                    <a href="<?= site_url('admin/jadwal_perjamuan_admin')?>"
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
                    <script>
                    	$(document).ready(function () { // Ketika halaman sudah siap (sudah selesai di load)
                    		// Kita sembunyikan dulu untuk loadingnya

                    		$("#pilih_nama").change(
                    	function () { // Ketika user mengganti atau memilih data provinsi

                    			$.ajax({
                    				type: "POST", // Method pengiriman data bisa dengan GET atau POST
                    				url: "<?php echo site_url("admin/listjadwalperjamuan"); ?>", // Isi dengan url/path file php yang dituju
                    				data: {
                    					id_jemaat: $("#pilih_nama").val()
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
                    					$("#alamat").val(response.alamat);
                    				},
                    				error: function (xhr, ajaxOptions,
                    				thrownError) { // Ketika ada error
                    					Swal.fire({
                    						icon: 'info',
                    						title: (xhr.status + "\n" + xhr
                    								.responseText + "\n" + thrownError
                    								),
                    					})
                    				}
                    			});
                    		});
                    	});

                    </script>