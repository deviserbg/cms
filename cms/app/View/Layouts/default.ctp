<!DOCTYPE html>
<html>
    <head>
<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Appcorner</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gozha.net">

    
    <!-- Mobile Specific Metas-->
    	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <!-- SourceSansPro -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic' rel='stylesheet' type='text/css'>  
        <!-- Icomoon -->
        <link href="/css/icomoon.css" rel="stylesheet" />

    
    <!-- Stylesheets -->
    	
        <!-- Bootstrap 3 -->
    	  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Mobile navigation menu-->
        <link href="/css/gozha-nav.css" rel="stylesheet" />

      <!-- Page specific Stylesheets-->
        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="/rs-plugin/css/settings.css" media="screen" />
        <!-- Swipebox (popup) -->
        <link href="/css/swipebox.css" rel="stylesheet" />
        

        <!-- Custom -->
        <link href="/css/base.css?v=1" rel="stylesheet" />
        <link href="/css/style.css?v=1" rel="stylesheet" />
		
		<!-- Basic JavaScript-->
		<!-- Modernizr -->
		<script src="/js/modernizr.custom.05768.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]> 
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
		<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>		
    <![endif]-->

    <!--[if IE 9]>
    <link href="/css/ie9.css?v=1" rel="stylesheet" />
    <![endif]-->
    </head>
    <body class="home">
        <div class='wrapper'>
        <!-- Header -->
        <?php echo $this->element("header"); ?>
        <!-- Header -->

        <!-- Main -->
  
                    <?php echo $this->Session->flash(); ?>

                    <?php echo $this->fetch('content'); ?>
              
        <!-- Main -->
        
        <!-- Footer -->
        <?php echo $this->element("footer"); ?>
        <!-- Footer -->
        
        </div>
        <?php // echo $this->element('sql_dump'); ?>
        
        <!-- JavaScript-->
        <!-- jQuery 1.9.1--> 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
        <!-- Event that will trigger when the element is scrolled in to the viewport.--> 
        <script type="text/javascript" src="/js/jquery.inview.js"></script>
        <!-- jQuery REVOLUTION Slider  -->
        <script type="text/javascript" src="/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <!-- Image loader (gallery) -->
        <script src="/js/jquery.loadImage.js"></script>
        <!-- Animated gallery -->
        <script src="/js/animated-gallery.js"></script>
        <!-- Swipebox (popup) -->
        <script src="/js/jquery.swipebox.js"></script>
        <!-- Mobile navigation menu-->
        <script src="/js/jquery.mobile.menu.js"></script>
        <!-- Form -->
        <script src="/js/jquery.form.js"></script>
        <!-- Waypoint -->
        <script src="/js/waypoints.min.js"></script>

    <!-- Page specific scritpts-->        
        <!-- Animated progress bar -->
        <script src="/js/jquery.donutchart.js"></script>

        <!-- Custom -->
        <script src="/js/custom.js"></script>

        		
		<script type="text/javascript">
        $(document).ready(function() {
            initHome();
            initSliderRev();

        });
		</script>
    </body>
</html>
