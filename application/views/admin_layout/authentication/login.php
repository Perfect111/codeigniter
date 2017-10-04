<!DOCTYPE html>
<!--[if IE 8]>      <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>      <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html><!--<![endif]-->

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

    <script type="text/javascript">
      var site_url = "<?php echo site_url(); ?>";
    </script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->

</head>

<!-- Middle Content Start -->

  <div class="vd_content-wrapper">
    <div class="vd_container">
      <div class="vd_content clearfix text-center">
        
        <div class="login-section">
        <h1>Login</h1>
        <form action="<?php echo base_url()."admin/dashboard/index" ?>" id="" method="POST">
          <input type="text" name="email" placeholder="Username">
          <input type="password" name="password" placeholder="Password">
          <input type="submit" value="Login">
          <a href="#" class="fpassword">Forgot Password?</a></br>
        </form>
        </div>
      
      </div><!-- vd_content end -->
    </div><!-- vd_container end -->
    </div><!-- vd_content-wrapper end -->