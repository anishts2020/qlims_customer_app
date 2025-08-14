<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta content="Qlims Customer App" name="description">
		<meta content="Qlims Customer App" name="author">
		<meta name="keywords" content="Qlims Customer App">

		<!-- Favicon-->
		<link rel="icon" href="<?php echo base_url(); ?>assets/images/brand/favicon.png" type="image/x-icon"/>

		<!-- Title -->
		<title>Dashboard - Qlims Customer App</title>

		<!-- Bootstrap css -->
		<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Style css -->
		<link  href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/css/dark-boxed.css" rel="stylesheet" />

		<!-- Default css -->
		<link href="<?php echo base_url(); ?>assets/css/default.css" rel="stylesheet">

		<!-- Owl-carousel css-->
		<link href="<?php echo base_url(); ?>assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!-- Bootstrap-daterangepicker css -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css">

		<!-- Bootstrap-datepicker css -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css">

		<!-- Custom scroll bar css -->
		<link href="<?php echo base_url(); ?>assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!-- Horizontal css -->
        <link id="effect" href="<?php echo base_url(); ?>assets/plugins/horizontal-menu/dropdown-effects/fade-up.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/plugins/horizontal-menu/horizontal.css" rel="stylesheet" />

		<!-- P-scroll css -->
		<link href="<?php echo base_url(); ?>assets/plugins/p-scroll/p-scroll.css" rel="stylesheet" type="text/css">

		<!-- Font-icons css -->
		<link  href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet">

		<!-- Rightsidebar css -->
		<link href="<?php echo base_url(); ?>assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- Nice-select css  -->
		<link href="<?php echo base_url(); ?>assets/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet"/>



		<!-- Color-palette css-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins.css"/>


		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

		<style>
			/* Custom modal size */
			.custom-modal {
				max-width: 900px; /* adjust width */
				width: 90%;
				height: 75%;
			}

			.custom-modal .modal-content {
				height: 100%;
				overflow-y: auto;
			}

			.dark-mode .modal .close span {
				color: #fff;
			}

			.custom-modal-width {
				max-width: 70%;
				width: 70%;
			}

		</style>
		

	</head>
	<body class="app dark-mode">

			<div class="modal fade" id="sample_model" tabindex="-1" role="dialog"  aria-hidden="true" data-backdrop="static" data-keyboard="false">
				<div class="modal-dialog custom-modal-width" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#003366;color:#fff;">
							<h5 class="modal-title" id="example-Modal3">Add New Sample</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
						
								<div class="row" style="padding-top:5px;">
									<div class="col-lg-12">
										<table class="table" id="table_executive_followup" style="width: 100%;">
											<thead style="background-color: #336699;"> 
												<tr>
													<th scope="col">Contacted Person</th>
													<th scope="col">Follow-up Time</th>
													<th scope="col">Follow-up Type</th>
													<th scope="col">Next Follow-up Time</th>
													<th scope="col">Disposition</th>
													<th scope="col">Remarks</th>
												</tr>
											</thead>
											<tbody>

											</tbody>
										</table>
									</div>
								</div>
						</div>
						
					</div>
				</div>
			</div>

			<div class="modal fade" id="analytical_report_modal" tabindex="-1" role="dialog"  aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
				<div class="modal-dialog custom-modal-width" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#003366;color:#fff;">
							<h5 class="modal-title" id="example-Modal3">Analytical Report</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
						
								<div class="row" style="padding-top:5px;">
									<div class="col-lg-12">
										<table class="table" id="table_analytical_report" style="width: 100%;">
												<thead style="background-color: #003366; color:#fff;">
													<tr>
														<th class="border-bottom-0">Delivery ID</th>
														<th class="border-bottom-0">Report Date</th>
														<th class="border-bottom-0">Ref No</th>
														<th class="border-bottom-0">Report Status</th>
														<th class="border-bottom-0">Despatch Info</th>
														<th class="border-bottom-0">Despatch Status</th>
														<th class="border-bottom-0">Despatch Date</th>
														<th class="border-bottom-0">SR_Ref Application No</th>
														<th class="border-bottom-0">SR_ApplicationId</th>
														
													</tr>
												</thead>
											<tbody>

											</tbody>
										</table>
									</div>
								</div>
						</div>
						
					</div>
				</div>
			</div>

			<div class="modal fade" id="sample_report_modal" tabindex="-1" role="dialog"  aria-hidden="true" data-backdrop="static" data-keyboard="false"> 
				<div class="modal-dialog custom-modal-width" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#003366;color:#fff;">
							<h5 class="modal-title" id="example-Modal3">Sample Report</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
						
								<div class="row" style="padding-top:5px;">
									<div class="col-lg-12">
										<table class="table" id="table_sample_report" style="width: 100%;">
												<thead style="background-color: #003366; color:#fff;">
													<tr>
														<th class="border-bottom-0">Delivery ID</th>
														<th class="border-bottom-0">Report Date</th>
														<th class="border-bottom-0">Ref No</th>
														<th class="border-bottom-0">Report Status</th>
														<th class="border-bottom-0">Despatch Info</th>
														<th class="border-bottom-0">Despatch Status</th>
														<th class="border-bottom-0">Despatch Date</th>
														<th class="border-bottom-0">SR_Ref Application No</th>
														<th class="border-bottom-0">SR_ApplicationId</th>
														
													</tr>
												</thead>
											<tbody>

											</tbody>
										</table>
									</div>
								</div>
						</div>
						
					</div>
				</div>
			</div>

		<!-- Loader -->
		<div id="loading">
			<img src="<?php echo base_url(); ?>assets/images/other/loader-dark.svg" class="loader-img" alt="Loader">
		</div>

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!-- Top-header opened -->
				<div class="header-main header sticky">
					<div class="app-header header top-header navbar-collapse ">
						<div class="container">
							<a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a><!-- sidebar-toggle-->
							<div class="d-flex">
								<a class="header-brand" href="#">
									<!--<img src="<?php echo base_url(); ?>assets/images/brand/logo.png" class="header-brand-img desktop-logo " alt="Dashlot logo">
									<img src="<?php echo base_url(); ?>assets/images/brand/logo1.png" class="header-brand-img desktop-logo-1 " alt="Dashlot logo">
									<img src="<?php echo base_url(); ?>assets/images/brand/favicon.png" class="mobile-logo" alt="Dashlot logo">
									<img src="<?php echo base_url(); ?>assets/images/brand/favicon1.png" class="mobile-logo-1" alt="Dashlot logo">-->

									<h3>Qlims Customer App</h3>
								</a>
								
								<div class="d-flex header-right ml-auto">
							
									<div class="dropdown drop-profile">
										<a class="nav-link pr-0 leading-none" href="#" data-toggle="dropdown" aria-expanded="false">
											<div class="profile-details mt-1">
												<span class="mr-3 mb-0  fs-15 font-weight-semibold"><?php echo $this->session->userdata('username'); ?></span>
												<!--<small class="text-muted mr-3">appdeveloper</small>-->
											</div>
											<img class="avatar avatar-md brround" src="<?php echo base_url(); ?>assets/images/users/user.png" alt="image">
										 </a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated bounceInDown w-250">
											<div class="user-profile bg-header-image border-bottom p-3">
												<div class="user-image text-center">
													<img class="user-images" src="<?php echo base_url(); ?>assets/images/users/user.png" alt="image">
												</div>
												<div class="user-details text-center">
													<h4 class="mb-0"><?php echo $this->session->userdata('username'); ?></h4>
													<!--<p class="mb-1 fs-13 text-white-50"></p>-->
												</div>
											</div>
										
											<a class="dropdown-item mb-1" href="<?php echo site_url('logout'); ?>">
												<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Top-header closed -->

				<!-- Horizontal-menu -->
				<div class="horizontal-main hor-menu clearfix">
					<div class="horizontal-mainwrapper container clearfix">
						<nav class="horizontalMenu clearfix">
							<ul class="horizontalMenu-list">
								<li aria-haspopup="true"><a href="#" class="sub-icon  active"><svg xmlns="http://www.w3.org/2000/svg"  class="icon_img" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 365.001 365.001" xml:space="preserve"><g><g>
										<g>
											<path d="M360.74,155.711l-170-149c-4.717-4.133-11.764-4.133-16.48,0l-170,149c-5.191,4.55-5.711,12.448-1.161,17.641    c4.55,5.19,12.449,5.711,17.64,1.16l13.163-11.536V348.89c0,6.903,5.596,12.5,12.5,12.5h94.733h82.73h94.732   c6.904,0,12.5-5.597,12.5-12.5V162.977l13.163,11.537c2.373,2.078,5.311,3.1,8.234,3.1c3.476,0,6.934-1.441,9.405-4.261    C366.452,168.159,365.932,160.262,360.74,155.711z M153.635,336.39V233.418h57.729v102.973L153.635,336.39L153.635,336.39z     M306.099,141.161V336.39h-69.732V220.918c0-6.903-5.598-12.5-12.5-12.5h-82.73c-6.903,0-12.5,5.597-12.5,12.5v115.473H58.903    V141.161c0-0.032-0.004-0.062-0.004-0.093L182.5,32.733l123.603,108.334C306.104,141.1,306.099,141.129,306.099,141.161z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
											<path d="M154.5,120.738c0,6.904,5.596,12.5,12.5,12.5h31c6.903,0,12.5-5.596,12.5-12.5s-5.597-12.5-12.5-12.5h-31    C160.097,108.238,154.5,113.834,154.5,120.738z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
										</g>
									</g></g> </svg> Dashboard <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="<?=site_url('dashboard'); ?>" class="slide-item">Home</a></li>
									</ul>
								</li>
								
								<li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" id="Capa_1"  class="icon_img" enable-background="new 0 0 512 512"  viewBox="0 0 512 512"><g><path d="m472 216.061v-100c0-22.056-17.944-40-40-40h-352c-22.056 0-40 17.944-40 40v200c0 22.056 17.944 40 40 40h352c22.056 0 40-17.944 40-40 0-11.046 8.954-20 20-20s20 8.954 20 20c0 44.112-35.888 80-80 80h-156v39.878h70c11.046 0 20 8.954 20 20s-8.954 20-20 20h-180c-11.046 0-20-8.954-20-20s8.954-20 20-20h70v-39.878h-156c-44.112 0-80-35.888-80-80v-200c0-44.112 35.888-80 80-80h352c44.112 0 80 35.888 80 80v100c0 11.046-8.954 20-20 20s-20-8.954-20-20zm-82-71h-119c-11.046 0-20 8.954-20 20s8.954 20 20 20h119c11.046 0 20-8.954 20-20s-8.954-20-20-20zm-163.261-39.419c-8.515-7.035-21.121-5.835-28.157 2.68l-43.205 52.293-17.048-17.507c-7.708-7.915-20.369-8.083-28.282-.376-7.914 7.706-8.083 20.368-.376 28.282l21.454 22.033c.177.182.357.36.541.534 6.483 6.17 15.136 9.604 24.038 9.604.765 0 1.532-.025 2.3-.077 9.644-.643 18.65-5.31 24.737-12.811l46.678-56.497c7.035-8.516 5.835-21.122-2.68-28.158zm163.261 162.419h-119c-11.046 0-20 8.954-20 20s8.954 20 20 20h119c11.046 0 20-8.954 20-20s-8.954-20-20-20zm-163.261-39.543c-8.515-7.035-21.121-5.835-28.157 2.68l-43.216 52.307-17.076-17.438c-7.729-7.893-20.391-8.026-28.283-.296-7.892 7.728-8.024 20.391-.296 28.283l21.454 21.909c.164.167.331.332.5.493 6.483 6.171 15.136 9.604 24.039 9.604.765 0 1.533-.026 2.3-.077 9.644-.643 18.65-5.31 24.737-12.811l46.678-56.497c7.035-8.515 5.835-21.121-2.68-28.157z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/></g> </svg>
									Samples <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="analytics.html" class="slide-item">Add New</a></li>
									</ul>
								</li>
								
								<li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon_img" viewBox="0 0 512 512"><g><path d="m199.945312 359.898438h67.980469v39.988281h-67.980469zm-74.980468-4.996094c-13.804688 0-24.992188 11.1875-24.992188 24.992187 0 13.800781 11.1875 24.992188 24.992188 24.992188 13.804687 0 24.992187-11.191407 24.992187-24.992188 0-13.804687-11.1875-24.992187-24.992187-24.992187zm276.921875-121.96875h-201.941407v39.988281h201.941407zm-276.921875-4.996094c-13.804688 0-24.992188 11.1875-24.992188 24.992188 0 13.804687 11.1875 24.992187 24.992188 24.992187 13.804687 0 24.992187-11.1875 24.992187-24.992187 0-13.804688-11.1875-24.992188-24.992187-24.992188zm276.921875-114.96875h-201.941407v39.988281h201.941407zm-276.921875-5c-13.804688 0-24.992188 11.191406-24.992188 24.992188 0 13.804687 11.1875 24.996093 24.992188 24.996093 13.804687 0 24.992187-11.191406 24.992187-24.996093 0-13.800782-11.1875-24.992188-24.992187-24.992188zm-84.976563 343.90625v-391.890625c0-11.027344 8.96875-19.996094 19.996094-19.996094h391.890625c11.023438 0 19.992188 8.96875 19.992188 19.996094v225.9375h39.988281v-225.9375c0-33.074219-26.90625-59.984375-59.980469-59.984375h-391.890625c-33.074219 0-59.984375 26.910156-59.984375 59.984375v391.890625c0 33.074219 26.910156 59.980469 59.984375 59.980469h230.933594v-39.988281h-230.933594c-11.027344 0-19.996094-8.96875-19.996094-19.992188zm443.734375 60.125-39.820312-39.820312c-13.472656 8.050781-29.210938 12.683593-46.011719 12.683593-49.613281 0-89.976563-40.363281-89.976563-89.972656 0-49.613281 40.363282-89.976563 89.976563-89.976563 49.609375 0 89.972656 40.363282 89.972656 89.976563 0 18.355469-5.53125 35.441406-15.003906 49.691406l39.140625 39.140625zm-85.832031-67.125c27.5625 0 49.984375-22.421875 49.984375-49.984375s-22.421875-49.988281-49.984375-49.988281-49.988281 22.425781-49.988281 49.988281 22.425781 49.984375 49.988281 49.984375zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/></g> </svg>
									Reports <i class="fa fa-angle-down horizontal-icon"></i> </a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="analytics.html" class="slide-item">Analytical Report</a></li>
										<li aria-haspopup="true"><a href="analytics.html" class="slide-item">Sample Receipt Report</a></li>
									</ul>
								
								</li>
								
							</ul>
						</nav>
						<!--Nav end -->
					</div>
				</div>
				<!-- Horizontal-menu end -->

				<!-- App-content opened -->
				<div class="app-content">
					<div class="container-fluid">

						<!-- Page-header opened -->
						<div class="page-header hor-pageheader">
							<div class="page-leftheader">
								<h4 class="page-title mb-0" style="color:#99ccff;">QLIMS, Customer Dashboard</h4>
								<small class="text-muted mt-0 fs-14">QLIMS Customer Dashboard Views</small>
							</div>
							<div class="page-rightheader">
								<div class="ml-3 ml-auto d-flex">
									<!--<div class="mt-3 mt-md-0">
										<div class="border-right pr-4 mt-1 d-xl-block">
											<p class="text-muted mb-2">Category</p>
											<h6 class="font-weight-semibold mb-0">All Categories</h6>
										</div>
									</div>
									<div class="mt-3 mt-md-0">
										<div class="border-right pl-0 pl-md-4 pr-4 mt-1 d-xl-block">
											<p class="text-muted mb-1">Customer Rating</p>
											<div class="wideget-user-rating">
												<a href="#">
													<i class="fa fa-star text-warning"></i>
												</a>
												<a href="#">
													<i class="fa fa-star text-warning"></i>
												</a>
												<a href="#">
													<i class="fa fa-star text-warning"></i>
												</a>
												<a href="#">
													<i class="fa fa-star text-warning"></i>
												</a>
												<a href="#">
													<i class="fa fa-star-o text-warning mr-1"></i>
												</a>
												<span class="">(4.5/5)</span>
											</div>
										</div>
									</div>-->
									<span class="mt-3 mt-md-0 pg-header">
										<a href="#" class="btn btn-info ml-0 ml-md-4 mt-1 " data-toggle="modal" data-target="#sample_model"><i class="typcn typcn-shopping-cart mr-1"></i>Add New Sample</a>
									</span>
								</div>
							</div>
						</div>
						<!-- Page-header closed -->

						<!-- Banner opened -->
					
						<!-- Banner opened -->

						<!-- row opened -->
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="card overflow-hidden">
									<div class="card-body">
										<div class="d-flex">
											<div class="">
												<p class="mb-2 h6">Analytical Report</p>
												<h2 class="mb-1 "><?php echo count($a_report); ?></h2>
												<button type="button" class="btn btn-primary btn-sm" id="btn_analytical_report">View</button>
											</div>
											<div class=" my-auto ml-auto">
												<div class="chart-wrapper text-center">
													<canvas id="areaChart1" class="areaChart2 chartjs-render-monitor chart-dropshadow-primary overflow-hidden mx-auto"></canvas>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
								<div class="card overflow-hidden">
									<div class="card-body">
										<div class="d-flex">
											<div class="">
												<p class="mb-2 h6">Sample Receipt Report</p>
												<h2 class="mb-1 "><?php echo count($s_report); ?></h2>
												<button type="button" class="btn btn-primary btn-sm" id="btn_sample_report">View</button>
											</div>
											<div class=" my-auto ml-auto">
												<div class="chart-wrapper text-center">
													<canvas id="areaChart1" class="areaChart2 chartjs-render-monitor chart-dropshadow-primary overflow-hidden mx-auto"></canvas>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							
						</div>
						<!-- row closed -->

						<!-- row opened -->

						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title" style="color:#99ccff;">Analytical Report</div>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="tbl_analytical_report" class="table table-striped table-bordered text-nowrap">
												<thead style="background-color: #003366; color:#fff;">
													<tr>
														<th class="border-bottom-0">Delivery ID</th>
														<th class="border-bottom-0">Report Date</th>
														<th class="border-bottom-0">Ref No</th>
														<th class="border-bottom-0">Report Status</th>
														<th class="border-bottom-0">Despatch Info</th>
														<th class="border-bottom-0">Despatch Status</th>
														<th class="border-bottom-0">Despatch Date</th>
														<th class="border-bottom-0">SR_Ref Application No</th>
														<th class="border-bottom-0">SR_ApplicationId</th>
														
													</tr>
												</thead>
												<tbody>
													<?php if (!empty($a_report) && is_array($a_report)) {
														foreach ($a_report as $key => $vals) { ?>
															<tr>
																<td><?php echo $vals['PRDH_DeliveryID']; ?></td>
																<td><?php echo $vals['ReportDate']; ?></td>
																<td><?php echo $vals['ReportRefNo']; ?></td>
																<td><?php echo $vals['ReportStatus']; ?></td>
																<td><?php echo $vals['DespatchInfo']; ?></td>
																<td><?php echo $vals['DespatchStatus']; ?></td>
																<td><?php echo $vals['DespatchDate']; ?></td>
																<td><?php echo $vals['SR_RefApplicationNo']; ?></td>
																<td><?php echo $vals['SR_ApplicationId']; ?></td>
															</tr>
													<?php }
													} else {
														echo '<tr><td colspan="9">No report data available.</td></tr>';
													} ?>
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>

						
						<!-- row closed -->
	`					<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title" style="color:#99ccff;">Sample Receipt Report</div>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="tbl_sample_report" class="table table-striped table-bordered text-nowrap">
												<thead style="background-color: #003366; color:#fff;">
													<tr>
														<th class="border-bottom-0">SR Application Id</th>
														<th class="border-bottom-0">SR RefApplication No</th>
														<th class="border-bottom-0">SR Receipt Date</th>
														<th class="border-bottom-0">SR Cust Reference</th>
														<th class="border-bottom-0">Receipt Status</th>
														<th class="border-bottom-0">Aps ID</th>
														
													</tr>
												</thead>
												<tbody>
													<?php if (!empty($s_report) && is_array($a_report)) {
														foreach ($s_report as $key => $vals) { ?>
															<tr>
																<td><?php echo $vals['SR_ApplicationId']; ?></td>
																<td><?php echo $vals['SR_RefApplicationNo']; ?></td>
																<td><?php echo $vals['SR_ReceiptDate']; ?></td>
																<td><?php echo $vals['SR_CustReference']; ?></td>
																<td><?php echo $vals['ReceiptStatus']; ?></td>
																<td><?php echo $vals['Aps_ID']; ?></td>
															</tr>
													<?php }
													} else {
														echo '<tr><td colspan="6">No report data available.</td></tr>';
													} ?>
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- row opened -->
						
						<!-- row closed -->

						<!-- row opened -->
						
						<!-- row closed -->
					</div>
				</div>
				<!-- App-content closed -->
			</div>

			<!-- Right-sidebar-->
		
			<!-- Right-sidebar-closed -->

			<!-- Footer opened -->
			<footer class="footer-main">
				<div class="container">
					<div class="  mt-2 mb-2 text-center">
						Copyright © 2025 <a href="#" class="fs-14 text-primary">QLIMS APP</a>. Designed by <a href="https://megatrendkms.co.in/" class="fs-14 text-primary">Megatrend Knowledge Management Systems Pvt Ltd</a> All rights reserved.
					</div>
				</div>
			</footer>
			<!-- Footer closed -->
		</div>

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>

		<!-- Jquery-scripts -->
		<script src="<?php echo base_url(); ?>assets/js/vendors/jquery-3.2.1.min.js"></script>

		<!-- Moment js-->
        <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>

		<!-- Bootstrap-scripts js -->
		<script src="<?php echo base_url(); ?>assets/js/vendors/bootstrap.bundle.min.js"></script>

		<!-- Sparkline JS-->
		<script src="<?php echo base_url(); ?>assets/js/vendors/jquery.sparkline.min.js"></script>

		<!-- Bootstrap-daterangepicker js -->
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

		<!-- Bootstrap-datepicker js -->
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

		<!-- Chart-circle js -->
		<script src="<?php echo base_url(); ?>assets/js/vendors/circle-progress.min.js"></script>

		<!-- Rating-star js -->
		<script src="<?php echo base_url(); ?>assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- Clipboard js -->
		<script src="<?php echo base_url(); ?>assets/plugins/clipboard/clipboard.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/clipboard/clipboard.js"></script>

		<!-- Prism js -->
		<script src="<?php echo base_url(); ?>assets/plugins/prism/prism.js"></script>

		<!-- Custom scroll bar js-->
		<script src="<?php echo base_url(); ?>assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Nice-select js-->
		<script src="<?php echo base_url(); ?>assets/plugins/jquery-nice-select/js/jquery.nice-select.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jquery-nice-select/js/nice-select.js"></script>

        <!-- P-scroll js -->
		<script src="<?php echo base_url(); ?>assets/plugins/p-scroll/p-scroll.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/p-scroll/p-scroll-horizontal.js"></script>

		<!-- JQVMap -->
		<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.sampledata.js"></script>

		<!-- Apexchart js-->
		<script src="<?php echo base_url(); ?>assets/js/apexcharts.js"></script>

		<!-- Chart js-->
		<script src="<?php echo base_url(); ?>assets/plugins/chart/chart.min.js"></script>

		<!-- Index js -->
		<script src="<?php echo base_url(); ?>assets/js/index-dark.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/index-map.js"></script>

		<!-- Horizontal js-->
		<script src="<?php echo base_url(); ?>assets/plugins/horizontal-menu/horizontal.js"></script>

		<!-- Rightsidebar js -->
		<script src="<?php echo base_url(); ?>assets/plugins/sidebar/sidebar.js"></script>



		<!-- Custom js -->
		<script src="<?php echo base_url(); ?>assets/js/custom-dark.js"></script>

	</body>
</html>

<script>
$(document).ready(function() {
    $('#tbl_analytical_report').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'pdfHtml5',
                title: 'Analytical Report',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'excelHtml5',
                title: 'Analytical Report',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'print',
                title: 'Report Data',
                exportOptions: {
                    columns: ':visible'
                }
            }
        ]
    });
});
</script>
<script>
$(document).ready(function() {
    $('#tbl_sample_report').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'pdfHtml5',
                title: 'Report Data',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'excelHtml5',
                title: 'Sample Receipt Report',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'print',
                title: 'Sample Receipt Report',
                exportOptions: {
                    columns: ':visible'
                }
            }
        ]
    });
});
</script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    $(document).on('click', '#btn_analytical_report', function(e) {
        e.preventDefault();
		analytical_report_datatable();
    });
	function analytical_report_datatable(){
		if ($.fn.DataTable.isDataTable('#table_analytical_report')) {
            $('#table_analytical_report').DataTable().destroy();
        }
        var table = $('#table_analytical_report').DataTable({
            'processing': true,
            'serverSide': true,
            'serverMethod': 'post',
            'ajax': {
                'url': '<?=site_url('Dashboard/analytical_report_form');?>',
            },
            'columns': [
            
            {
                data: 'PRDH_DeliveryID'
            },
			{
                data: 'ReportDate'
            },
			{
                data: 'ReportRefNo'
            },
			{
                data: 'ReportStatus'
            },
			{
                data: 'DespatchInfo'
            },
			{
                data: 'DespatchStatus'
            },
			{
                data: 'DespatchDate'
            },
			{
                data: 'SR_RefApplicationNo'
            },
			{
                data: 'SR_ApplicationId'
            }
            ],
			paging: true, // Ensure paging is enabled
    		pageLength: 10, // Number of rows per page
    		lengthMenu: [5, 10, 25, 50], // Options for rows per page
    		order: [[0, 'asc']] // Default sorting
        });
        $('#analytical_report_modal').modal('show');
	}
</script>
<script type="text/javascript">
    $(document).on('click', '#btn_sample_report', function(e) {
        e.preventDefault();
		analytical_report_datatable();
    });
	function analytical_report_datatable(){
		if ($.fn.DataTable.isDataTable('#table_sample_report')) {
            $('#table_sample_report').DataTable().destroy();
        }
        var table = $('#table_sample_report').DataTable({
            'processing': true,
            'serverSide': true,
            'serverMethod': 'post',
            'ajax': {
                'url': '<?=site_url('Dashboard/sample_report_form');?>',
            },
            'columns': [
            
            {
                data: 'PRDH_DeliveryID'
            },
			{
                data: 'ReportDate'
            },
			{
                data: 'ReportRefNo'
            },
			{
                data: 'ReportStatus'
            },
			{
                data: 'DespatchInfo'
            },
			{
                data: 'DespatchStatus'
            },
			{
                data: 'DespatchDate'
            },
			{
                data: 'SR_RefApplicationNo'
            },
			{
                data: 'SR_ApplicationId'
            }
            ],
			paging: true, // Ensure paging is enabled
    		pageLength: 10, // Number of rows per page
    		lengthMenu: [5, 10, 25, 50], // Options for rows per page
    		order: [[0, 'asc']] // Default sorting
        });
        $('#sample_report_modal').modal('show');
	}
</script>

