                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18">Data Jemaat GKT Antiokhia</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">Welcome to Siman</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="col-lg-12">
  	<div class="card">
  		<div class="card-body">
  			<h4 class="card-title mb-4">Persebaran umur jemaat</h4>
                <?php
                $anak = 0;
                $remaja = 0;
                $dewasa = 0;
                $lansia = 0;    
                ?>
            <?php foreach($umur_jemaat as $key){?>
                <?php
                $umur = $key->age;
                if ($umur < 12) {
                    $anak = $anak+1;
                }elseif ($umur >= 12 && $umur <= 25) {
                    $remaja = $remaja+1;
                }elseif ($umur > 25 && $umur <= 45) {
                    $dewasa = $dewasa+1;
                }elseif ($umur > 45) {
                    $lansia = $lansia+1;
                }
                ?>
            <?php }?>
            <div id="chartTimKategori"></div>
  		</div>
  	</div>
  </div>
  <script>
    $(document).ready(function(){
        var optChart = {   
            chart: {
                type: 'bar',
                height: '400px'
            },
            series: [{
                name: 'Jml Tim',
                data: [<?= $anak;?>, <?= $remaja;?>, <?= $dewasa;?>, <?= $lansia;?>]
            }],
            xaxis: {
                categories: ['Anak-Anak', 'Remaja', 'Dewasa', 'Lansia']
            },
            colors: ['rgba(0,201,167)']
        }

        var optChart = new ApexCharts(document.querySelector("#chartTimKategori"), optChart);

        optChart.render();
    })
    
</script>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Data Jemaat
                                        <!-- gk usah tambah data -,- -->
                                        <a href="<?php echo site_url('admin/tambah_datajemaat');?>" 
                                        class="btn btn-primary btn-sm float-right">Tambah Data</a>
                                    </h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-bordered datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id Jemaat</th>
                                                    <th scope="col">Nama Lengkap</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">Tanggal Lahir</th>
                                                    <th scope="col">Tempat Lahir</th>
                                                    <th scope="col">No HandPhone</th>
                                                    <th scope="col">Status Keanggotaan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($datajemaat != false){ $id_jemaat = 1; foreach ($datajemaat as $data) { ?>
                                                <tr>
                                                    <td><?php echo $id_jemaat;?></td>
                                                    <td><?php echo $data->nama;?></td>
                                                    <td><?php echo $data->alamat;?></td>
                                                    <td><?php echo $data->tgl_lahir;?></td>
                                                    <td><?php echo $data->tempat_lahir;?></td>
                                                    <td><?php echo $data->no_hp;?></td>
                                                    <td><?php echo $data->status_keanggotaan;?></td>
                                                </tr>
                                                <?php $id_jemaat++; }}?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    <!-- end row -->
    