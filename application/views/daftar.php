<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register | Qovex - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo base_url();?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Free Register</h5>
                                <p class="text-white-50 mb-0">Get your free Qovex account now</p>
                                <a href="index.html" class="logo logo-admin mt-4">
                                    <img src="<?php echo base_url();?>assets/images/logo-sm-dark.png" alt="" height="30">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <?php if ($this->session->flashdata('error')) { ?>
                                <div class="alert alert-warning">
                                    <?php echo $this->session->flashdata('error');?>
                                </div>
                            <?php }elseif($this->session->flashdata('success')) {?>
                                <div class="alert alert-success">
                                    <?php echo $this->session->flashdata('error');?>
                                </div>
                            <?php }?>
                            <div class="p-2">
                                <form class="form-horizontal" action="<?php echo site_url('login/daftar_proses');?>" method="post">

                                    <div class="form-group">
                                        <label for="useremail">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="useremail" placeholder="Enter name">
                                    </div>

                                    <div class="form-group">
                                        <label for="useremail">Nomor Telepon</label>
                                        <input type="phone" class="form-control" name="no_hp" id="useremail" placeholder="Enter phone">
                                    </div>

                                    <div class="form-group">
                                        <label for="useremail">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tgl_lahir" id="useremail" placeholder="Enter birth date">
                                    </div>
                                    <div class="form-group">
                                        <label for="useremail">Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempat_lahir" id="useremail" placeholder="Enter birth date">
                                    </div>

                                    <div class="form-group">
                                        <label for="useremail">Alamat</label>
                                        <textarea type="text" class="form-control" name="alamat" id="useremail" placeholder="Enter address"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="useremail">Status Keanggotaan</label>
                                        </br>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="status_keanggotaan" id="inlineRadio1" value="aktif">
                                          <label class="form-check-label" for="inlineRadio1">Tetap</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="status_keanggotaan" id="inlineRadio2" value="tidak aktif">
                                          <label class="form-check-label" for="inlineRadio2">Simpatisan</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Already have an account ? <a href="<?php echo site_url('login');?>" class="font-weight-medium text-primary"> Login</a> </p>
                        <p>© 2020 Qovex. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="<?php echo base_url();?>assets/libs/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/app.js"></script>

</body>

</html>