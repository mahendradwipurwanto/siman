<script src="https://unpkg.com/html5-qrcode@2.1.2/html5-qrcode.min.js" type="text/javascript"></script>

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">Presensi</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Welcome to Siman</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<?php if ($cek_absen == false) : ?>
    <!-- end page title -->
    <div class="row justify-content-md-center">
        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-info mb-0">
                        Mohon maaf, saat ini tidak terdapat kegiatan yang memerlukan absensi.
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>
    <?php if ($cek_absenku != false) : ?>
        <!-- end page title -->
        <div class="row justify-content-md-center">
            <div class="col-lg-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-info mb-0">
                            Anda telah melakukan absensi untuk kegiatan <b><?= $cek_absenku->jenis_ibadah; ?> - minggu ke <?= $cek_absenku->minggu; ?></b> pada <i><?= date("d F Y, H:i:s", $cek_absenku->waktu); ?></i> WIB.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <!-- end page title -->
        <div class="row justify-content-md-center" id="scanner">
            <div class="col-lg-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Scan QR Code Absensi</h4>
                        <div class="alert alert-info">
                            ijinkan website mengakses kamera anda dengan menekan tombol <i>Request Camera Permissions</i>, kemudian arahkan ke QR code pada device panitia.
                        </div>
                        <div id="qr-reader" style="width:100%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center d-none" id="absen">
            <div class="col-lg-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4 text-center">Absensi kegiatan</h4>
                        <div class="alert alert-info" id="message">

                        </div>
                        <div id="qr-reader-results"></div>
                        <form action="<?= site_url('presensi_pengguna/absen_sekarang'); ?>" method="post">
                            <input type="hidden" class="form-control" id="id_minggu" name="id_minggu" required>
                            <button type="submit" class="btn btn-primary btn-sm mt-3 btn-block" id="btn-absen" disabled>absen sekarang !</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var resultContainer = document.getElementById('qr-reader-results');
            var lastResult, countResults = 0;

            function onScanSuccess(decodedText, decodedResult) {
                if (decodedText !== lastResult) {
                    ++countResults;
                    lastResult = decodedText;
                    // Handle on success condition with the decoded message.
                    console.log(`Scan result ${decodedText}`, decodedResult);
                    $("#id_minggu").val(decodedText);
                    $("#btn-absen").prop('disabled', false);
                    $("#message").html("Berhasil memindai QR CODE, harap tekan tombol absen sekarang!");
                    $("#scanner").addClass("d-none");
                    $("#absen").removeClass("d-none");
                }
            }

            var html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", {
                    fps: 10,
                    qrbox: 250
                });
            html5QrcodeScanner.render(onScanSuccess);
        </script>
    <?php endif; ?>
<?php endif; ?>