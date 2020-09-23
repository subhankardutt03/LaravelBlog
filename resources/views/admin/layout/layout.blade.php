<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{config('constants.site_name')}}</title>

	<!-- Bootstrap -->
	<link href="{{asset('admin_assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="{{asset('admin_assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- NProgress -->
	<link href="{{asset('admin_assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
	<!-- iCheck -->
	<link href="{{asset('admin_assets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="{{asset('admin_assets/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
	<!-- Select2 -->
	<link href="{{asset('admin_assets/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
	<!-- Switchery -->
	<link href="{{asset('admin_assets/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
	<!-- starrr -->
	<link href="{{asset('admin_assets/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="{{asset('admin_assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="{{asset('admin_assets/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>My Blog</span></a>
					</div>

					<div class="clearfix"></div>

				

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>MENU</h3>
							<ul class="nav side-menu">
								<li><a href="{{url('/admin/post/list')}}"><i class="fa fa-clipboard" aria-hidden="true"></i> post</a>
									
								</li>
								

								<li><a href="{{url('/admin/page/list')}}"><i class="fa fa-columns" aria-hidden="true"></i> page</a>
									
								</li>

								<li><a href="{{url('admin/contact/list')}}"><i class="fa fa-phone" aria-hidden="true"></i> contact us</a>
									
								</li>

								


							</ul>
						</div>
						

					</div>
					<!-- /sidebar menu -->


				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px;">
								<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
									id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
									<!-- <img src="images/img.jpg" alt="">John Doe -->
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right"
									aria-labelledby="navbarDropdown">

									<a class="dropdown-item text-danger" href="{{url('/')}}"><i class="fa fa-sign-out pull-right"></i>
										Log Out</a>
								</div>
							</li>

							<li role="presentation" class="nav-item dropdown open">

								<p> welcome  <span class="text-info font-weight-bold">{{session('BLOG_USER_NAME')}}</span></p>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
                    @section('container')
                    @show
				</div>
			</div>

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->

			</div>
			</div>
		







			<!-- jQuery -->
			<script src="{{asset('admin_assets/vendors/jquery/dist/jquery.min.js')}}"></script>
			<!-- Bootstrap -->
			<script src="{{asset('admin_assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
			<!-- FastClick -->
			<script src="{{asset('admin_assets/vendors/fastclick/lib/fastclick.js')}}"></script>
			<!-- NProgress -->
			<script src="{{asset('admin_assets/vendors/nprogress/nprogress.js')}}"></script>
			<!-- bootstrap-progressbar -->
			<script src="{{asset('admin_assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
			<!-- iCheck -->
			<script src="{{asset('admin_assets/vendors/iCheck/icheck.min.js')}}"></script>
			<!-- bootstrap-daterangepicker -->
			<script src="{{asset('admin_assets/vendors/moment/min/moment.min.js')}}"></script>
			<script src="{{asset('admin_assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
			<!-- bootstrap-wysiwyg -->
			<script src="{{asset('admin_assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
			<script src="{{asset('admin_assets/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
			<script src="{{asset('admin_assets/vendors/google-code-prettify/src/prettify.js')}}"></script>
			<!-- jQuery Tags Input -->
			<script src="{{asset('admin_assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
			<!-- Switchery -->
			<script src="{{asset('admin_assets/vendors/switchery/dist/switchery.min.js')}}"></script>
			<!-- Select2 -->
			<script src="{{asset('admin_assets/vendors/select2/dist/js/select2.full.min.js')}}"></script>
			<!-- Parsley -->
			<script src="{{asset('admin_assets/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
			<!-- Autosize -->
			<script src="{{asset('admin_assets/vendors/autosize/dist/autosize.min.js')}}"></script>
			<!-- jQuery autocomplete -->
			<script src="{{asset('admin_assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
			<!-- starrr -->
			<script src="{{asset('admin_assets/vendors/starrr/dist/starrr.js')}}"></script>
			<!-- Custom Theme Scripts -->
			<script src="{{asset('admin_assets/build/js/custom.min.js')}}"></script>

</body>

</html>