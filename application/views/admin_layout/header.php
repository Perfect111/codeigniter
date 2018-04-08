<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html><!--<![endif]-->

<!-- Specific Page Data -->

<!-- End of Data -->

<head>
    <meta charset="utf-8" />
    <title>Multipurpose Dashboard - Responsive Multipurpose Admin Templates | Vendroid</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, " />
    <meta name="description" content="Responsive Admin Template for multipurpose use">
    <meta name="author" content="Venmond">

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" 
    href="<?php echo $this->assets_uri; ?>img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" 
    href="<?php echo $this->assets_uri; ?>img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" 
    href="<?php echo $this->assets_uri; ?>img/ico/apple-touch-icon-72-precomposed.png">

    <link rel="apple-touch-icon-precomposed" 
    href="<?php echo $this->assets_uri; ?>img/ico/apple-touch-icon-57-precomposed.png">

    <link rel="shortcut icon" 
    href="<?php echo $this->assets_uri; ?>img/ico/favicon.png">


    <!-- CSS -->

    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="<?php echo $this->assets_uri; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $this->assets_uri; ?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
    <link href="<?php echo $this->assets_uri; ?>css/font-entypo.css" rel="stylesheet" type="text/css">

    <!-- Fonts CSS -->
    <link href="<?php echo $this->assets_uri; ?>css/fonts.css"  rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo $this->assets_uri; ?>plugins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo $this->assets_uri; ?>plugins/prettyPhoto-plugin/css/prettyPhoto.css" rel="stylesheet" type="text/css">

    <link href="<?php echo $this->assets_uri; ?>plugins/isotope/css/isotope.css" rel="stylesheet" type="text/css">

    <link href="<?php echo $this->assets_uri; ?>plugins/pnotify/css/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">

	<link href="<?php echo $this->assets_uri; ?>plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">


    <link href="<?php echo $this->assets_uri; ?>plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">

    <link href="<?php echo $this->assets_uri; ?>plugins/tagsInput/jquery.tagsinput.css" rel="stylesheet" type="text/css">

    <link href="<?php echo $this->assets_uri; ?>plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" type="text/css">

    <link href="<?php echo $this->assets_uri; ?>plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">

    <link href="<?php echo $this->assets_uri; ?>plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo $this->assets_uri; ?>plugins/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css">

	<!-- Specific CSS -->
	<link href="<?php echo $this->assets_uri; ?>plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css">

	<link href="<?php echo $this->assets_uri; ?>plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css">

	<link href="<?php echo $this->assets_uri; ?>plugins/introjs/css/introjs.min.css" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?php echo $this->assets_uri; ?>css/theme.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="<?php echo $this->assets_uri; ?>css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->



    <!-- Responsive CSS -->
        	<link href="<?php echo $this->assets_uri; ?>css/theme-responsive.min.css" rel="stylesheet" type="text/css">




    <!-- for specific page in style css -->

    <!-- for specific page responsive in style css -->


    <!-- Custom CSS -->
    <link href="<?php echo $this->assets_uri; ?>custom/custom.css" rel="stylesheet" type="text/css">



    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="<?php echo $this->assets_uri; ?>js/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo $this->assets_uri; ?>js/mobile-detect.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->assets_uri; ?>js/mobile-detect-modernizr.js"></script>
	<script type="text/javascript" src="<?php echo $this->assets_uri; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $this->assets_uri; ?>js/bootstrap-tab.js"></script>



    <script type="text/javascript">
    	var site_url = "<?php echo site_url(); ?>";
    </script>

    <?php 
	if(isset($page_level_css)){
		$this->load->view($page_level_css);
	}
?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body id="dashboard" class="full-layout nav-right-hide nav-right-start-hide nav-top-fixed responsive clearfix" data-active="dashboard "  data-smooth-scrolling="1">
	<div class="vd_body">
	<!-- Header Start -->
	<header class="header-1" id="header">
		<div class="vd_top-menu-wrapper">
			<div class="container ">
				<div class="vd_top-nav vd_nav-width">
					<div class="vd_panel-header">
						<div class="logo">
							<a href="<?php echo site_url(); ?>"><img alt="logo" src="<?php echo $this->assets_uri; ?>img/logo.png"></a>
						</div>
						<div class="vd_panel-menu  hidden-sm hidden-xs" data-intro="<strong>Minimize Left Navigation</strong><br/>Toggle navigation size to medium or small size. You can set both button or one button only. See full option at documentation." data-step=1>
							<span class="nav-medium-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Medium Nav Toggle" data-action="nav-left-medium"><i class="fa fa-bars"></i></span>
							<span class="nav-small-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Small Nav Toggle" data-action="nav-left-small"><i class="fa fa-ellipsis-v"></i></span>
						</div>
						<div class="vd_panel-menu left-pos visible-sm visible-xs">
							<span class="menu" data-action="toggle-navbar-left"><i class="fa fa-ellipsis-v"></i></span>
						</div>
						<div class="vd_panel-menu visible-sm visible-xs">
							<span class="menu visible-xs" data-action="submenu"><i class="fa fa-bars"></i></span>
							<span class="menu visible-sm visible-xs" data-action="toggle-navbar-right"><i class="fa fa-comments"></i></span>
						</div>
					</div><!-- vd_panel-header end -->
				</div><!-- vd_top-nav end -->
				<div class="vd_container">
					<div class="row">
						<div class="col-sm-5 col-xs-12">
							<div class="vd_menu-search">
								<form id="search-box" method="post" action="#">
									<input type="text" name="search" class="vd_menu-search-text width-60" placeholder="Search">
									<div class="vd_menu-search-category">
										<span data-action="click-trigger">
											<span class="separator"></span>
											<span class="text">Category</span>
											<span class="icon"><i class="fa fa-caret-down"></i></span>
										</span>
										<div class="vd_mega-menu-content width-xs-2 center-xs-2 right-sm" data-action="click-target">
											<div class="child-menu">
												<div class="content-list content-menu content">
													<ul class="list-wrapper">
														<li>
															<label>
																<input type="checkbox" value="all-files">
																<span>All Files</span>
															</label>
														</li>
														<li>
															<label>
																<input type="checkbox" value="photos">
																<span>Photos</span>
															</label>
														</li>
														<li>
															<label>
																<input type="checkbox" value="illustrations">
																<span>Illustrations</span>
															</label>
														</li>
														<li>
															<label>
																<input type="checkbox" value="video">
																<span>Video</span>
															</label>
														</li>
														<li>
															<label>
																<input type="checkbox" value="audio">
																<span>Audio</span>
															</label>
														</li>
														<li>
															<label>
																<input type="checkbox" value="flash">
																<span>Flash</span>
															</label>
														</li>
													</ul>
												</div>
											</div>
										</div><!-- vd_mega-menu-content end -->
									</div><!-- vd_menu-search-category end -->
									<span class="vd_menu-search-submit"><i class="fa fa-search"></i></span>
								</form>
							</div><!-- vd_menu-search end -->
						</div>
						<div class="col-sm-7 col-xs-12">
							<div class="vd_mega-menu-wrapper">
								<div class="vd_mega-menu pull-right">
									<ul class="mega-ul">
										<li id="top-menu-profile" class="profile mega-li">
											<a href="#" class="mega-link"  data-action="click-trigger">
												<span  class="mega-image"><img src="<?php echo $this->assets_uri; ?>img/avatar/vint_cerf_thumb.jpg" alt="example image" /></span>
												<span class="mega-name">Vint Cerf<i class="fa fa-caret-down fa-fw"></i></span>
											</a>
											<div class="vd_mega-menu-content  width-xs-2  left-xs left-sm" data-action="click-target">
												<div class="child-menu">
													<div class="content-list content-menu">
														<ul class="list-wrapper pd-lr-10">
															<h4 class="vd_navbar vd_bg-grey">Profile</h4>
															<li><a href="profile.html"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">My Profile</div></a></li>

															

														</ul>
													</div>
												</div>
											</div>
										</li>
										<li id="top-menu-settings" class="one-big-icon hidden-xs hidden-sm mega-li" data-intro="<strong>Toggle Right Navigation </strong><br/>On smaller device such as tablet or phone you can click on the middle content to close the right or left navigation." data-step=2 data-position="left">
											<a href="#" class="mega-link"  data-action="toggle-navbar-right">
												<span class="mega-icon"><i class="fa fa-comments"></i></span>
												<span class="badge vd_bg-red">8</span>
											</a>
										</li>
									</ul><!-- mega-ul end -->
								</div><!-- vd_mega-menu end -->
							</div><!-- vd_mega-menu-wrapper end -->
						</div>
					</div><!-- row end -->
				</div><!-- vd_container end -->
			</div><!-- container end -->
		</div><!-- vd_primary-menu-wrapper end -->
	</header>
	<!-- Header Ends -->