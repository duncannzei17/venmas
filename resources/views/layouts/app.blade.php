<!doctype html>
<html lang="en">

<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Duncan Nzei" />
		<link rel="shortcut icon" href="{{url('storage/user.jpg')}}" />
		<title>Venmas</title>
		
		<!--
			**********************
			**********************
			Common CSS files
			**********************
			**********************
		-->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" />
      
		<!-- Icomoon Icons CSS -->
		<link rel="stylesheet" href=" {{url('fonts/icomoon/icomoon.css')}}" />

		<!-- Master CSS -->
		<link rel="stylesheet" href="{{url('css/main.css')}}" />

		<!-- Daterange CSS 
		<link rel="stylesheet" href="vendor/daterange/daterange.css" />
        -->
		<!--
			**********************
			**********************
			Optional CSS files
			**********************
			**********************
		-->

	</head>
	<body>

		<!-- Loading starts -->
		<div id="loading-wrapper">
			<div id="loader">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
				<div class="line4"></div>
				<div class="line5"></div>
				<div class="line6"></div>
			</div>
		</div>
		<!-- Loading ends -->
		

		<!-- BEGIN .app-wrap -->
		<div class="app-wrap">

			<!-- BEGIN .app-heading -->
			<header class="app-header">
				<div class="container-fluid">
					<div class="row gutters">
						<div class="col-xl-6 col-lg-7 col-md-7 col-sm-6 col-7">
							
							<!-- Toggle button start, Only visible when the screen size is less than 992px -->
							<a class="hoverable-toggler" href="#" id="app-side-hoverable-toggler">
								<i class="icon-menu5"></i>
							</a>

							<a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler onoffcanvas-nav" aria-expanded="true">
								<i class="icon-menu5"></i>
							</a>
							<!-- Toggle button end -->

							<!-- Logo start -->
							<a class="logo" href="index-2.html">
								<img src="{{url('storage/user.jpg')}}" alt="Logo" /> <strong>Venmas</strong>
							</a>
							<!-- Logo end -->

						</div>

						<div class="col-xl-6 col-lg-5 col-md-5 col-sm-6 col-5">
							
							<!-- Header actions start -->
							<ul class="header-actions">
								<li class="dropdown">
									<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-notifications_none"></i>
										<span class="count-label">7</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="notifications">
										<ul class="imp-notify">
											<li class="clearfix">
												<div class="avatar">
													<img src="#" alt="avatar" />
													<span class="notify-iocn icon-drafts text-danger"></span>
												</div>
												<div class="details">
													<h6>Wilson</h6>
													<p>The best Dashboard design I have seen ever.</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="avatar">
													<img src="#" alt="avatar" />
													<span class="notify-iocn icon-sphere text-info"></span>
												</div>
												<div class="details">
													<h6>John Smith</h6>
													<p>Jhonny sent you a message. Read now!</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="avatar">
													<img src="#" alt="avatar" />
													<span class="notify-iocn icon-cake2 text-danger"></span>
												</div>
												<div class="details">
													<h6>Justin Mezzell</h6>
													<p>Stella, Added you as a Friend. Accept it!</p>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<a href="#" id="todos" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-person_outline"></i>
										<span class="count-label red">5</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="todos">
										<ul class="stats-widget">
											<li>
												<h4>$8500</h4>
												<p>Revenue <span>+18%</span></p>
												<div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
														<span class="sr-only">87% Complete (success)</span>
													</div>
												</div>
											</li>
											<li>
												<h4>4750</h4>
												<p>Downloads <span>+56%</span></p>
												<div class="progress">
													<div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
														<span class="sr-only">65% Complete (success)</span>
													</div>
												</div>
											</li>
											<li>
												<h4>2500</h4>
												<p>Uploads <span class="text-secondary">-3%</span></p>
												<div class="progress">
													<div class="progress-bar bg-danger" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%">
														<span class="sr-only">42% Complete (success)</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</li>
							</ul>
							<!-- Header actions end -->

						</div>
					</div>
				</div>
			</header>
			<!-- END: .app-heading -->

			<!-- BEGIN .app-container -->
			<div class="app-container">

				<!-- BEGIN .app-side -->
				<aside class="app-side" id="app-side">

					<!-- BEGIN .side-content -->
					<div class="side-content">

						<!-- User details start -->
						<div class="user-details">
                            <img src="{{ url('storage/user.jpg')}}" class="thumb" alt="Milestone Admin" />
							<h5 class="username">Venmas Shop</h5>	
						</div>
						<!-- User details end -->

						<!-- BEGIN .side-nav -->
						<nav class="side-nav">

							<div class="sidebarNavScroll">
								<!-- BEGIN: side-nav-content -->
								<ul class="customSidebarMenu" id="customSidebarMenu">
									<li>
										<a href="index-2.html">
											<span class="has-icon">
												<i class="icon-av_timer"></i>
											</span>
											<span class="nav-title">Inventory</span>
										</a>
										<ul aria-expanded="false">
											<li>
												<a href="{{action('PagesController@viewInventory')}}">View Inventory</a>
											</li>
											<li>
												<a href="{{action('PagesController@addInventory1')}}">Add Inventory</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="index-2.html">
											<span class="has-icon">
												<i class="icon-av_timer"></i>
											</span>
											<span class="nav-title">Transaction</span>
										</a>
									</li>
								<!-- END: side-nav-content -->
							</div>


						</nav>
						<!-- END: .side-nav -->


					</div>
					<!-- END: .side-content -->


				</aside>
				<!-- END: .app-side -->


				<!-- BEGIN .app-main -->
				<div class="app-main">


					<!-- BEGIN .main-heading -->
					<header class="main-heading">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-6 col-sm-6">
									<ol class="breadcrumb">
										<li class="breadcrumb-item home">
											<a href="index-2.html">
												<i class="icon-home"></i>
											</a>
										</li>
										<li class="breadcrumb-item">Pages</li>
										<!--
										<li class="breadcrumb-item active" aria-current="page">Default Layout</li>
										-->
									</ol>
								</div>
							</div>
						</div>
					</header>
					<!-- END: .main-heading -->


                    <!-- BEGIN .main-content -->
                    <div class="main-content">
                        @yield('content')
                    </div>
					<!-- END: .main-content -->


					<!-- BEGIN .main-footer -->
					<footer class="main-footer fixed-btm">
						Copyright Venmas 2019.
					</footer>
					<!-- END: .main-footer -->


				</div>
				<!-- END: .app-main -->

			</div>
			<!-- END: .app-container -->

		</div>
		<!-- END: .app-wrap -->

		<!-- jQuery first, then Tether, then other JS. -->
		<script src="{{url('js/jquery.js')}}"></script>

		<!-- jQuery UI is Required only if you use jQuery Related Plugins -->
		<script src="{{url('js/jquery-ui.min.js')}}"></script>

        <!-- Custom javascript file	-->
        <script src="{{url('js/main.js')}}"></script>

		<script src="{{url('js/tether.min.js')}}"></script>
		<script src="{{url('js/bootstrap.min.js')}}"></script>
		<script src="{{url('vendor/MilestoneNav/MilestoneNav.js')}}"></script>
		<script src="{{url('vendor/onoffcanvas/onoffcanvas.js')}}"></script>
		<script src="{{url('js/moment.js')}}"></script>

		<!-- Daterange JS -->
		<script src="{{url('vendor/daterange/daterange.js')}}"></script>
		<script src="{{url('vendor/daterange/custom-daterange.js')}}"></script>

		<!-- Slimscroll JS -->
		<script src="{{url('vendor/slimscroll/slimscroll.min.js')}}"></script>
		<script src="{{url('vendor/slimscroll/custom-scrollbar.js')}}"></script>


		<!--
			**********************
			**********************
			Optional JS files - Plugns
			**********************
			**********************
		-->
		<!--Add units-->
		<script type="text/javascript">
		var units = [];

        function addUnits() {
          unitsvalue = document.getElementById('box').value;
          items.push(boxvalue);
          console.log(items);
        }
		</script>

		<!-- Common JS -->
		<script src="{{url('js/common.js')}}"></script>
		
	</body>

</html>
