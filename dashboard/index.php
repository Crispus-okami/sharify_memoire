<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="http://pearl-admin-dashboard.multipurposethemes.com/images/favicon.ico">

	<title>Dashboard</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="./assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="./assets/vendor_components/datatable/datatables.min.css" />

	<!-- theme style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Admin skins -->
	<link rel="stylesheet" href="css/skin_color.css">


</head>

<body class="hold-transition light-skin sidebar-mini theme-blackberry">
	<div class="wrapper">



		<?php
		require('nav.php');
	
		?>


		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container-full">
				<!-- Content Header (Page header) -->
				<div class="content-header">
					<div class="d-flex align-items-center">
						<div class="mr-auto">
							<h3 class="page-title">Dashboard</h3>
							<div class="d-inline-block align-items-center">
								<nav>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
										<li class="breadcrumb-item" aria-current="page">Dashboard</li>
										<li class="breadcrumb-item active" aria-current="page">Profile</li>
									</ol>
								</nav>
							</div>
						</div>
						<!-- 	<div class="right-title">
					<div class="d-flex mt-10 justify-content-end">
						<div class="d-lg-flex mr-20 ml-10 d-none">
							<div class="chart-text mr-10">
								<h6 class="mb-0"><small>THIS MONTH</small></h6>
								<h4 class="mt-0 text-primary">$12,125</h4>
							</div>
							<div class="spark-chart">
								<div id="thismonth"><canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas></div>
							</div>
						</div>
						<div class="d-lg-flex mr-20 ml-10 d-none">
							<div class="chart-text mr-10">
								<h6 class="mb-0"><small>LAST YEAR</small></h6>
								<h4 class="mt-0 text-danger">$22,754</h4>
							</div>
							<div class="spark-chart">
								<div id="lastyear"><canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas></div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
					</div>

					<!-- Main content -->
					<section class="content">
						<?php
								require('../app/database/models.php');
		

	

								$id = $_SESSION['id'];
						
								$model = new model();
								$abo = $model->read_filter_once('abonnement', '*', 'compte', $id);
								$abo_info = $abo->fetch();

								$plan = $model->read_filter_once('plan_abonnement', '*', 'id', $abo_info['pack']);
								$plan_info = $plan->fetch();

								$user_annonce = $model->countAll('annonce', '*', 'compte_agence', $id)
						?>
						<h3>Votre forfait actuel : <?php echo ($plan_info['nom']) ?></h3>
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12 ">
								<div class="box box-inverse box-primary">
									<div class="box-body">
										<div class="flexbox">
											<h5>Date de d??but</h5>
											<div class="dropdown">
												<span class="dropdown-toggle no-caret" data-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
												<div class="dropdown-menu dropdown-menu-right">
												</div>
											</div>
										</div>

										<div class="text-center my-2">
											<div class="font-size-60"><h4><?php echo ($abo_info['debut']) ?></h4></div>

										</div>
									</div>
								</div>
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12 ">
								<div class="box box-inverse box-success">
									<div class="box-body">
										<div class="flexbox">
											<h5>Date de fin</h5>
											<div class="dropdown">
												<span class="dropdown-toggle no-caret" data-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
													<a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
													<a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
												</div>
											</div>
										</div>

										<div class="text-center my-2">
											<div class="font-size-60"><h4><?php echo ($abo_info['fin']) ?></h4></div>
											
										</div>
									</div>
								</div>
							</div>
							<!-- /.col -->

							<div class="col-xl-3 col-md-6 col-12">
								<div class="box box-inverse box-danger">
									<div class="box-body">
										<div class="flexbox">
											<h5>Nombre d'anonces</h5>
											<div class="dropdown">
												<span class="dropdown-toggle no-caret" data-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
													<a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
													<a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
												</div>
											</div>
										</div>

										<div class="text-center my-2">
											<div class="font-size-60"><h4><?php echo ($plan_info['nb_annonce']) ?></h4></div>
										
										</div>
									</div>

								</div>
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="box box-inverse box-warning">
									<div class="box-body">
										<div class="flexbox">
											<h5>Nombre d'annonce restant</h5>
											<div class="dropdown">
												<span class="dropdown-toggle no-caret" data-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
													<a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
													<a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
												</div>
											</div>
										</div>

										<div class="text-center my-2">
											<div class="font-size-60"><h4><?php echo ($plan_info['nb_annonce']-$user_annonce) ?></h4></div>
											
										</div>
									</div>
								</div>
							</div>
							<!-- /.col -->

						</div>


					</section>
					<!-- /.content -->
				</div>
			</div>
			<!-- /.content-wrapper -->


			<footer class="main-footer">
				<div class="pull-right d-none d-sm-inline-block">
					<ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
					</ul>
				</div>
				&copy; 2022 <a href="https://www.Sharify.com/">Sharify</a>. All Rights Reserved.
			</footer>
			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-light">

				<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div> <!-- Create the tabs -->
				<ul class="nav nav-tabs control-sidebar-tabs">
					<li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="mdi mdi-message-text"></i></a></li>
					<li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<!-- Home tab content -->
					<div class="tab-pane" id="control-sidebar-home-tab">
						<div class="flexbox">
							<a href="javascript:void(0)" class="text-grey">
								<i class="ti-more"></i>
							</a>
							<p>Users</p>
							<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
						</div>
						<div class="lookup lookup-sm lookup-right d-none d-lg-block">
							<input type="text" name="s" placeholder="Search" class="w-p100">
						</div>
						<div class="media-list media-list-hover mt-20">
							<div class="media py-10 px-0">
								<a class="avatar avatar-lg status-success" href="#">
									<img src="./images/avatar/1.jpg" alt="...">
								</a>
								<div class="media-body">
									<p class="font-size-16">
										<a class="hover-primary" href="#"><strong>Tyler</strong></a>
									</p>
									<p>Praesent tristique diam...</p>
									<span>Just now</span>
								</div>
							</div>

							<div class="media py-10 px-0">
								<a class="avatar avatar-lg status-danger" href="#">
									<img src="./images/avatar/2.jpg" alt="...">
								</a>
								<div class="media-body">
									<p class="font-size-16">
										<a class="hover-primary" href="#"><strong>Luke</strong></a>
									</p>
									<p>Cras tempor diam ...</p>
									<span>33 min ago</span>
								</div>
							</div>

							<div class="media py-10 px-0">
								<a class="avatar avatar-lg status-warning" href="#">
									<img src="./images/avatar/3.jpg" alt="...">
								</a>
								<div class="media-body">
									<p class="font-size-16">
										<a class="hover-primary" href="#"><strong>Evan</strong></a>
									</p>
									<p>In posuere tortor vel...</p>
									<span>42 min ago</span>
								</div>
							</div>

							<div class="media py-10 px-0">
								<a class="avatar avatar-lg status-primary" href="#">
									<img src="./images/avatar/4.jpg" alt="...">
								</a>
								<div class="media-body">
									<p class="font-size-16">
										<a class="hover-primary" href="#"><strong>Evan</strong></a>
									</p>
									<p>In posuere tortor vel...</p>
									<span>42 min ago</span>
								</div>
							</div>

							<div class="media py-10 px-0">
								<a class="avatar avatar-lg status-success" href="#">
									<img src="./images/avatar/1.jpg" alt="...">
								</a>
								<div class="media-body">
									<p class="font-size-16">
										<a class="hover-primary" href="#"><strong>Tyler</strong></a>
									</p>
									<p>Praesent tristique diam...</p>
									<span>Just now</span>
								</div>
							</div>

							<div class="media py-10 px-0">
								<a class="avatar avatar-lg status-danger" href="#">
									<img src="./images/avatar/2.jpg" alt="...">
								</a>
								<div class="media-body">
									<p class="font-size-16">
										<a class="hover-primary" href="#"><strong>Luke</strong></a>
									</p>
									<p>Cras tempor diam ...</p>
									<span>33 min ago</span>
								</div>
							</div>

							<div class="media py-10 px-0">
								<a class="avatar avatar-lg status-warning" href="#">
									<img src="./images/avatar/3.jpg" alt="...">
								</a>
								<div class="media-body">
									<p class="font-size-16">
										<a class="hover-primary" href="#"><strong>Evan</strong></a>
									</p>
									<p>In posuere tortor vel...</p>
									<span>42 min ago</span>
								</div>
							</div>

							<div class="media py-10 px-0">
								<a class="avatar avatar-lg status-primary" href="#">
									<img src="./images/avatar/4.jpg" alt="...">
								</a>
								<div class="media-body">
									<p class="font-size-16">
										<a class="hover-primary" href="#"><strong>Evan</strong></a>
									</p>
									<p>In posuere tortor vel...</p>
									<span>42 min ago</span>
								</div>
							</div>

						</div>

					</div>
					<!-- /.tab-pane -->
					<!-- Settings tab content -->
					<div class="tab-pane" id="control-sidebar-settings-tab">
						<div class="flexbox">
							<a href="javascript:void(0)" class="text-grey">
								<i class="ti-more"></i>
							</a>
							<p>Todo List</p>
							<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
						</div>
						<ul class="todo-list mt-20">
							<li class="py-15 px-5 by-1">
								<!-- checkbox -->
								<input type="checkbox" id="basic_checkbox_51" class="filled-in">
								<label for="basic_checkbox_51" class="mb-0 h-15"></label>
								<!-- todo text -->
								<span class="text-line">Nulla vitae purus</span>
								<!-- Emphasis label -->
								<small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
								<!-- General tools such as edit or delete-->
								<div class="tools">
									<i class="fa fa-edit"></i>
									<i class="fa fa-trash-o"></i>
								</div>
							</li>
							<li class="py-15 px-5">
								<!-- checkbox -->
								<input type="checkbox" id="basic_checkbox_52" class="filled-in">
								<label for="basic_checkbox_52" class="mb-0 h-15"></label>
								<span class="text-line">Phasellus interdum</span>
								<small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
								<div class="tools">
									<i class="fa fa-edit"></i>
									<i class="fa fa-trash-o"></i>
								</div>
							</li>
							<li class="py-15 px-5 by-1">
								<!-- checkbox -->
								<input type="checkbox" id="basic_checkbox_53" class="filled-in">
								<label for="basic_checkbox_53" class="mb-0 h-15"></label>
								<span class="text-line">Quisque sodales</span>
								<small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
								<div class="tools">
									<i class="fa fa-edit"></i>
									<i class="fa fa-trash-o"></i>
								</div>
							</li>
							<li class="py-15 px-5">
								<!-- checkbox -->
								<input type="checkbox" id="basic_checkbox_54" class="filled-in">
								<label for="basic_checkbox_54" class="mb-0 h-15"></label>
								<span class="text-line">Proin nec mi porta</span>
								<small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
								<div class="tools">
									<i class="fa fa-edit"></i>
									<i class="fa fa-trash-o"></i>
								</div>
							</li>
							<li class="py-15 px-5 by-1">
								<!-- checkbox -->
								<input type="checkbox" id="basic_checkbox_55" class="filled-in">
								<label for="basic_checkbox_55" class="mb-0 h-15"></label>
								<span class="text-line">Maecenas scelerisque</span>
								<small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
								<div class="tools">
									<i class="fa fa-edit"></i>
									<i class="fa fa-trash-o"></i>
								</div>
							</li>
							<li class="py-15 px-5">
								<!-- checkbox -->
								<input type="checkbox" id="basic_checkbox_56" class="filled-in">
								<label for="basic_checkbox_56" class="mb-0 h-15"></label>
								<span class="text-line">Vivamus nec orci</span>
								<small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
								<div class="tools">
									<i class="fa fa-edit"></i>
									<i class="fa fa-trash-o"></i>
								</div>
							</li>
							<li class="py-15 px-5 by-1">
								<!-- checkbox -->
								<input type="checkbox" id="basic_checkbox_57" class="filled-in">
								<label for="basic_checkbox_57" class="mb-0 h-15"></label>
								<!-- todo text -->
								<span class="text-line">Nulla vitae purus</span>
								<!-- Emphasis label -->
								<small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
								<!-- General tools such as edit or delete-->
								<div class="tools">
									<i class="fa fa-edit"></i>
									<i class="fa fa-trash-o"></i>
								</div>
							</li>
							<li class="py-15 px-5">
								<!-- checkbox -->
								<input type="checkbox" id="basic_checkbox_58" class="filled-in">
								<label for="basic_checkbox_58" class="mb-0 h-15"></label>
								<span class="text-line">Phasellus interdum</span>
								<small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
								<div class="tools">
									<i class="fa fa-edit"></i>
									<i class="fa fa-trash-o"></i>
								</div>
							</li>
							<li class="py-15 px-5 by-1">
								<!-- checkbox -->
								<input type="checkbox" id="basic_checkbox_59" class="filled-in">
								<label for="basic_checkbox_59" class="mb-0 h-15"></label>
								<span class="text-line">Quisque sodales</span>
								<small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
								<div class="tools">
									<i class="fa fa-edit"></i>
									<i class="fa fa-trash-o"></i>
								</div>
							</li>
							<li class="py-15 px-5">
								<!-- checkbox -->
								<input type="checkbox" id="basic_checkbox_60" class="filled-in">
								<label for="basic_checkbox_60" class="mb-0 h-15"></label>
								<span class="text-line">Proin nec mi porta</span>
								<small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
								<div class="tools">
									<i class="fa fa-edit"></i>
									<i class="fa fa-trash-o"></i>
								</div>
							</li>
						</ul>
					</div>
					<!-- /.tab-pane -->
				</div>
			</aside>
			<!-- /.control-sidebar -->

			<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
			<div class="control-sidebar-bg"></div>
		</div>
		<!-- ./wrapper -->

		<!-- jQuery 3 -->
		<script src="./assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

		<!-- fullscreen -->
		<script src="./assets/vendor_components/screenfull/screenfull.js"></script>

		<!-- popper -->
		<script src="./assets/vendor_components/popper/dist/popper.min.js"></script>

		<!-- Bootstrap 4.0-->
		<script src="./assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

		<!-- This is data table -->
		<script src="./assets/vendor_components/datatable/datatables.min.js"></script>

		<!-- SlimScroll -->
		<script src="./assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

		<!-- FastClick -->
		<script src="./assets/vendor_components/fastclick/lib/fastclick.js"></script>

		<!-- sparkline -->
		<script src="./assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js"></script>

		<!-- Pearl Admin App -->
		<script src="js/template.js"></script>

		<!-- Pearl Admin for demo purposes -->
		<script src="js/demo.js"></script>

		<!-- Pearl Admin for Data Table -->
		<script src="js/pages/data-table.js"></script>


</body>

</html>