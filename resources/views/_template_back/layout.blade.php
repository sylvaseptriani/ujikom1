
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> Dashboard </title>

		<!--- Favicon --->
		<link rel="icon" href="{{ asset('assets') }}/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="{{ asset('assets') }}/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

		<!--- Style css --->
		<link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
		<link href="{{ asset('assets') }}/css/plugins.css" rel="stylesheet">

		<!--- Icons css --->
		<link href="{{ asset('assets') }}/css/icons.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="{{ asset('assets') }}/css/animate.css" rel="stylesheet">

	</head>

	<body class="main-body app sidebar-mini ltr">

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{ asset('assets') }}/img/loaders/loader-5.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- page -->
	   <div class="page custom-index">
        @include('_template_back.navheader')
        @include('_template_back.sidebar')

        <!-- main-content -->
        <div class="main-content app-content">
            <!-- container -->
            <div class="main-container container-fluid">
                <div id="content">
                    @yield('content')
                </div>
            </div>
            <!-- /container -->
        </div>
        <!-- /main-content -->
					
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Sidebar-right-->

		<!-- Footer opened -->
		<div class="main-footer ht-45">
			<div class="container-fluid pd-t-0-f ht-100p">
				<span> Copyright © 2022 <a href="javascript:void(0);" class="text-primary">Azira</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> Spruko </a> All rights reserved.</span>
			</div>
		</div>
		<!-- Footer closed -->
	</div>
		<!-- page closed -->

		<!--- Back-to-top --->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!--- JQuery min js --->
		<script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script>

		<!--- Datepicker js --->
		<script src="{{ asset('assets') }}/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!--- Bootstrap Bundle js --->
		<script src="{{ asset('assets') }}/plugins/bootstrap/popper.min.js"></script>
		<script src="{{ asset('assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--- Ionicons js --->
		<script src="{{ asset('assets') }}/plugins/ionicons/ionicons.js"></script>

		<!--- Chart bundle min js --->
		<script src="{{ asset('assets') }}/plugins/chart.js/Chart.bundle.min.js"></script>

		<!--- JQuery sparkline js --->
		<script src="{{ asset('assets') }}/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--- Internal Sampledata js --->
		<script src="{{ asset('assets') }}/js/chart.flot.sampledata.js"></script>

		<!--- Eva-icons js --->
		<script src="{{ asset('assets') }}/js/eva-icons.min.js"></script>

		<!--- Moment js --->
		<script src="{{ asset('assets') }}/plugins/moment/moment.js"></script>

		<!--- Perfect-scrollbar js --->
		<script src="{{ asset('assets') }}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="{{ asset('assets') }}/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!--- Sidebar js --->
		<script src="{{ asset('assets') }}/plugins/side-menu/sidemenu.js"></script>

		<!--- sticky js --->
		<script src="{{ asset('assets') }}/js/sticky.js"></script>

		<!-- right-sidebar js -->
		<script src="{{ asset('assets') }}/plugins/sidebar/sidebar.js"></script>
		<script src="{{ asset('assets') }}/plugins/sidebar/sidebar-custom.js"></script>

		<!-- Morris js -->
		<script src="{{ asset('assets') }}/plugins/raphael/raphael.min.js"></script>
		<script src="{{ asset('assets') }}/plugins/morris.js/morris.min.js"></script>

		<!--- Scripts js --->
		<script src="{{ asset('assets') }}/js/script.js"></script>

		<!--- Index js --->
		<script src="{{ asset('assets') }}/js/index.js"></script>

		<!--themecolor js-->
		<script src="{{ asset('assets') }}/js/themecolor.js"></script>

		<!--swither-styles js-->
		<script src="{{ asset('assets') }}/js/swither-styles.js"></script>

		<!--- Custom js --->
		<script src="{{ asset('assets') }}/js/custom.js"></script>

	</body>
</html>