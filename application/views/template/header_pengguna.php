<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Dashboard | SIMAN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Themesbrand" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

	<!-- jquery.vectormap css -->
	<link href="<?php echo base_url();?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
		rel="stylesheet" type="text/css" />

    <!-- Sweet Alert-->
    <link href="<?php echo base_url();?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

	<!-- Bootstrap Css -->
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
		type="text/css" />
	<!-- Icons Css -->
	<link href="<?php echo base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="<?php echo base_url();?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

	<script src="<?php echo base_url();?>assets/libs/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- Sweet Alerts js -->
    <script src="<?php echo base_url();?>assets/libs/sweetalert2/sweetalert2.min.js"></script>
</head>

<body data-layout="detached" data-topbar="colored">

<?php if($this->session->flashdata('alert')){?>
<script>
    Swal.fire({
        icon: 'info',
        title: '<?= $this->session->flashdata('alert');?>',
    })
</script>
<?php }?>

	<div class="container-fluid">
		<!-- Begin page -->
		<div id="layout-wrapper">

			<header id="page-topbar">
				<div class="navbar-header">
					<div class="container-fluid">
						<div class="float-right">

							<div class="dropdown d-inline-block d-lg-none ml-2">
								<button type="button" class="btn header-item noti-icon waves-effect"
									id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									<i class="mdi mdi-magnify"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
									aria-labelledby="page-header-search-dropdown">

									<form class="p-3">
										<div class="form-group m-0">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search ..."
													aria-label="Recipient's username">
												<div class="input-group-append">
													<button class="btn btn-primary" type="submit"><i
															class="mdi mdi-magnify"></i></button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>

							<div class="dropdown d-none d-sm-inline-block">
								<button type="button" class="btn header-item waves-effect" data-toggle="dropdown"
									aria-haspopup="true" aria-expanded="false">
									<img class="" src="<?php echo base_url();?>assets/images/flags/gambar.png"
										alt="Header Language" height="16">
								</button>
								<div class="dropdown-menu dropdown-menu-right">

									<!-- item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
										<img src="<?php echo base_url();?>assets/images/flags/us.jpg" alt="user-image"
											class="mr-1" height="12"> <span class="align-middle">Indonesia</span>
									</a>

									<!-- item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
										<img src="<?php echo base_url();?>assets/images/flags/germany.jpg"
											alt="user-image" class="mr-1" height="12"> <span
											class="align-middle">German</span>
									</a>

									<!-- item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
										<img src="<?php echo base_url();?>assets/images/flags/italy.jpg"
											alt="user-image" class="mr-1" height="12"> <span
											class="align-middle">Italian</span>
									</a>

									<!-- item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
										<img src="<?php echo base_url();?>assets/images/flags/russia.jpg"
											alt="user-image" class="mr-1" height="12"> <span
											class="align-middle">Russian</span>
									</a>
								</div>
							</div>

							<div class="dropdown d-none d-lg-inline-block ml-1">
								<button type="button" class="btn header-item noti-icon waves-effect"
									data-toggle="fullscreen">
									<i class="mdi mdi-fullscreen"></i>
								</button>
							</div>


							<div class="dropdown d-inline-block">
								<button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
									<i class="mdi mdi-settings-outline"></i>
								</button>
							</div>

						</div>
						<div>
							<!-- LOGO -->
							<div class="navbar-brand-box">
								<a href="index.html" class="logo logo-dark">
									<span class="logo-sm">
										<img src="<?php echo base_url();?>assets/images/logo-sm.png" alt="" height="20">
									</span>
									<span class="logo-lg">
										<img src="<?php echo base_url();?>assets/images/logo-dark.png" alt=""
											height="17">
									</span>
								</a>

								<a href="index.html" class="logo logo-light">
									<span class="logo-sm">
										<img src="<?php echo base_url();?>assets/images/logo-sm.png" alt="" height="20">
									</span>
									<span class="logo-lg">
										<img src="<?php echo base_url();?>assets/images/logo-light.png" alt=""
											height="19">
									</span>
								</a>
							</div>

							<button type="button"
								class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
								id="vertical-menu-btn">
								<i class="fa fa-fw fa-bars"></i>
							</button>

							<!-- App Search-->
							
						</div>

					</div>
				</div>
			</header> <!-- ========== Left Sidebar Start ========== -->
			<div class="vertical-menu">

				<div class="h-100">

					<div class="user-wid text-center py-4">
						<div class="user-img">
							<img src="<?php echo base_url();?>assets/images/users/gkt.png" alt=""
								class="avatar-md mx-auto rounded-circle">
						</div>

						<div class="mt-3">

							<a href="#" class="text-dark font-weight-medium font-size-16">SIMAN</a>
							<p class="text-body mt-1 mb-0 font-size-13"></p>

						</div>
					</div>

					<!--- Sidemenu -->
					<div id="sidebar-menu">
						<!-- Left Menu Start -->
						<ul class="metismenu list-unstyled" id="side-menu">
							<li class="menu-title">Menu</li>

							<li>
								<a href="<?= site_url('pengguna');?>" class="waves-effect">
									<i class="mdi mdi-home-edit-outline"></i>
									<span>Dashboard</span>
								</a>
							</li>

							<li>
								<a href="javascript: void(0);" class="waves-effect">
									<i class="mdi mdi-cellphone-play"></i>
									<span>Presensi</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="<?php echo site_url('presensi_pengguna/presensi_sekarang')?>">Presensi
											Sekarang</a></li>
									<li><a href="<?php echo site_url('presensi_pengguna/laporan_presensi_pengguna')?>">Laporan
											presensi</a></li>
								</ul>
							</li>

							<li>
								<a href="javascript: void(0);" class="waves-effect">
									<i class="mdi mdi-account-badge-horizontal-outline"></i>
									<span>Baptis</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="<?php echo site_url('pengguna/baptis_pengguna')?>">Daftar Baptis</a></li>
									<li><a href="<?php echo site_url('pengguna/laporan_baptis')?>">Laporan Baptis</a></li>
								</ul>
							</li>

							<li>
								<a href="javascript: void(0);" class="waves-effect">
									<i class="fas fa-glass-martini-alt"></i>
									<span>Perjamuan Keliling</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="<?php echo site_url('pengguna/perjamuan_pengguna')?>">Daftar Perjamuan</a></li>
									<li><a href="<?php echo site_url('pengguna/jadwal_perjamuan')?>">Jadwal Perjamuan</a></li>
								</ul>
							</li>

							<li>
								<a href="<?php echo site_url('login/logout');?>" class="waves-effect">
									<i class="mdi mdi-reply-circle"></i>
									<span>Logout</span>
								</a>
							</li>

						</ul>
					</div>
					<!-- Sidebar -->
				</div>
			</div>
			<!-- Left Sidebar End -->

			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
			<div class="main-content">

				<div class="page-content">
