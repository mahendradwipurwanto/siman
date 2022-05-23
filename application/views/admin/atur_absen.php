                    <!-- start page title -->
                    <div class="row">
                    	<div class="col-12">
                    		<div class="page-title-box d-flex align-items-center justify-content-between">
                    			<h4 class="page-title mb-0 font-size-18">Atur Absen Mingguan</h4>

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
                    	<div class="col-md-8">
                    		<div class="card">
                    			<div class="card-header">
                    				<h4 class="card-title mb-4">Atur absen mingguan
                    				</h4>
                    			</div>
                    			<div class="card-body">

                    				<!-- edit sama kayak tambah data cuman ditambahi value="" disetiap formnya sesuai didatabase -->

                    				<!--  $absen_aktif diambil dari controller diawal, buat ngambil detail mingguan yang mau diedit, ->minggu nama kolom di tabelnya harus sama besar kecilnya juga -->

                    				<!-- ganti linknya ke yang edit wkwk, harus sama id_minggu -->
                    				<?php if($absen_aktif != false){?>
                    				<div class="row justify-content-center text-center">
                    					<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?= $absen_aktif->id_minggu;?>&choe=UTF-8"
                    						title="<?= $absen_aktif->id_minggu;?>" />
                    				</div>
                    				<div class="row justify-content-center text-center" style="margin-top: -25px;">
                    					<small class="text-muted">qr code absen (aktif)</small>
                    				</div>
                    				<hr>
                    				<form
                    					action="<?php echo site_url('presensi/atur_aksiabsenMingguan/'.$absen_aktif->id_minggu);?>"
                    					method="post">
                    					<p>Atur absen data minggu ke <b><?= $absen_aktif->minggu;?></b> - Tanggal,
                    						<?= date("d F Y", strtotime($absen_aktif->tanggal));?></p>
                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Ganti Status</label>
                    						<div class="col-md-9">
                    							<select class="form-control" name="status" readonly>
                    								<option value="2">Sudah selesai</option>
                    							</select>
                    							status saat ini:
                    							<?php if ($absen_aktif->status == 0) {
                                            echo '<span class="badge badge-soft-warning font-size-12">Belum aktif</span></td>';
                                        } elseif($absen_aktif->status == 1) {
                                            echo '<span class="badge badge-soft-success font-size-12">Aktif</span></td>';
                                        }else{
                                            echo '<span class="badge badge-soft-secondary font-size-12">Sudah selesai</span></td>';
                                        }?>
                    						</div>
                    					</div>
                    					<div class="form-group row">
                    						<div class="col-md-3"></div>
                    						<div class="col-md-9">
                    							<button type="submit"
                    								class="btn btn-info waves-effect waves-light">Acara
                    								selesai</button><br>
                    							<small class="text-muted">Setelah acara selesai, harap ubah status
                    								minggu ke
                    								<?= $absen_aktif->minggu;?> menjadi sudah selesai</small>
                    						</div>
                    					</div>
                    				</form>
                    				<?php }else{?>
                    				<p>Belum ada absensi dari data mingguan yang aktif, harap atur absen untuk data
                    					minggu yang diinginkan terlebih dahulul.</p>
                    				<form action="<?php echo site_url('presensi/atur_aksiabsenMingguanBaru');?>"
                    					method="post">

                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Pilih minggu ke</label>
                    						<div class="col-md-9">
                    							<select class="form-control" name="id_minggu" id="pilih_minggu">
													<option selected>Pilih</option>
                    								<?php if($mingguan != false){ foreach ($mingguan as $key) {?>
                    								<option value="<?= $key->id_minggu;?>">minggu ke <?= $key->minggu;?>
                    								</option>
                    								<?php }}?>
                    							</select>
                    						</div>
                    					</div>

                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Jenis Ibadah</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" id="jenis" value="" readonly>
                    						</div>
                    					</div>

                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Jam Mulai</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" id="jam_mulai" value="" readonly>
                    						</div>
                    					</div>

                    					<div class="form-group row">
                    						<label class="col-md-3 col-form-label">Jam Berakhir</label>
                    						<div class="col-md-9">
                    							<input type="text" class="form-control" id="jam_berakhir" value="" readonly>
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
                    					<div class="form-group row">
                    						<div class="col-md-3"></div>
                    						<div class="col-md-9">
                    							<a href="<?= site_url('admin/data_mingguan')?>"
                    								class="btn btn-secondary waves-effect waves-light">batal</a>
                    							<button type="submit"
                    								class="btn btn-info waves-effect waves-light">Aktifkan
                    								Absen</button><br>
                    							<small class="text-muted">Setelah mengatur absen data mingguan yang
                    								dipilih menjadi status aktif maka otomatis akan
                    								memiliki qr
                    								code</small>
                    						</div>
                    					</div>
                    				</form>
                    				<?php }?>
                    			</div>
                    		</div>
                    	</div>
                    	<!-- end col -->
                    </div>
                    <!-- end row -->

                    <script>
                    	$(document).ready(function () { // Ketika halaman sudah siap (sudah selesai di load)
                    		// Kita sembunyikan dulu untuk loadingnya

                    		$("#pilih_minggu").change(
                    	function () { // Ketika user mengganti atau memilih data provinsi

                    			$.ajax({
                    				type: "POST", // Method pengiriman data bisa dengan GET atau POST
                    				url: "<?php echo site_url("presensi/listMingguan"); ?>", // Isi dengan url/path file php yang dituju
                    				data: {
                    					id_minggu: $("#pilih_minggu").val()
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
                    					$("#jenis").val(response.jenis);
                    					$("#jam_mulai").val(response.mulai);
                    					$("#jam_berakhir").val(response.berakhir);
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