<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">Rekap Presensi Jemaat <?php if (!empty($filter)) {
                                                                                echo ' - Kegiatan: Minggu ke - ' . $minggu->minggu . ' jenis: ' . $minggu->jenis_ibadah;
                                                                            } ?></h4>

            <div class="page-title-right">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-8">
                            <select name="filter" class="form-control form-control-sm select2" style="width: 200px">
                                <option selected>- Pilih Kegiatan -</option>
                                <?php foreach ($mingguan as $key) : ?>
                                    <option value="<?= $key->id_minggu; ?>">Minggu ke -
                                        <b><?php echo $key->minggu; ?></b>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">filter</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<?php if (!empty($filter)) : ?>
    <div class="row mb-2">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-0">Jumlah Jemaat <h3 class="m-0 float-right"><?= $jml_jemaat; ?></h3>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-0">Jumlah Absensi <h3 class="m-0 float-right"><?= $jml_absensi; ?></h3>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="m-0">Status kegiatan <h3 class="m-0">
                            <?php if ($minggu->status == 0) {
                                echo '<span class="badge badge-soft-warning font-size-12">Belum aktif</span></td>';
                            } elseif ($minggu->status == 1) {
                                echo '<span class="badge badge-soft-success font-size-12">Aktif</span></td>';
                            } else {
                                echo '<span class="badge badge-soft-secondary font-size-12">Sudah selesai</span></td>';
                            } ?></h3>
                    </h4>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTables" class="table table-centered table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kegiatan</th>
                                <th scope="col">Waktu kegiatan</th>
                                <th scope="col">Status Kegiatan</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Waktu Presensi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($rekap != false) {
                                $no = 1;
                                foreach ($rekap as $data) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td>Minggu ke - <b><?php echo $data->minggu; ?></b> -
                                            <i><?php echo $data->jenis_ibadah; ?></i>
                                        </td>
                                        <td><?= $data->tanggal; ?> - <?= $data->jam_mulai; ?> WIB s/d
                                            <?= $data->jam_berakhir; ?> WIB</td>
                                        <!-- gk usah hee kode user wkwk, gk boleh ditampilin kode user kalau di etika developer wkwk -->
                                        <td>
                                            <?php if ($data->status == 0) {
                                                echo '<span class="badge badge-soft-warning font-size-12">Belum aktif</span></td>';
                                            } elseif ($data->status == 1) {
                                                echo '<span class="badge badge-soft-success font-size-12">Aktif</span></td>';
                                            } else {
                                                echo '<span class="badge badge-soft-secondary font-size-12">Sudah selesai</span></td>';
                                            } ?>
                                        </td>
                                        <td><?php echo empty($data->nama) ? ' - ' : $data->nama; ?></td>
                                        <td><?php echo empty($data->waktu) ? ' - ' : date("d F Y - H:i", $data->waktu); ?></td>
                                    </tr>
                            <?php
                                }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>