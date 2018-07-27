<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

<title>Special Offers</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="A small sentence describing your website's subject" />
	<meta name="keywords" content="some, keywords, separated, by, comas" />
	<meta name="Robots" content="index, follow" />
        
    <!-- Favicon -->
	<link rel="icon" type="image/png" href="../../../../special-events/wp-content/themes/specials/favicon.png" />
    
	<!-- Main CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/css/select_color.css" />
    <link rel="stylesheet" type="text/css" href="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/js/jquery.uniform/uniform.default.css"/>
	<link rel="stylesheet" type="text/css" href="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/js/jquery-ui-1.8.2.datepicker/smoothness/jquery-ui-1.8.2.custom.css" />
    <link rel="stylesheet" type="text/css" href="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/js/fancybox/jquery.fancybox-1.3.1.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/styles/turquoise/turquoise.css" class="changeme" />
	
	<!--[if IE 7]><link rel="stylesheet" type="text/css" href="./css/ie7.css" /><![endif]-->
    <!--[if IE 8]><link rel="stylesheet" type="text/css" href="./css/ie8.css" /><![endif]-->	

    <!-- Scripts -->
    <script type="text/javascript" src="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/js/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
    <script type="text/javascript" src="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/js/fancybox/jquery.fancybox-1.3.1.js"></script>
    <script type="text/javascript" src="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/js/jCarouselLite.js"></script>
	<script type="text/javascript" src="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/js/jquery.easing.1.1.js"></script>
    <script type="text/javascript" src="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/js/jquery-ui-1.8.2.datepicker/jquery-ui-1.8.2.custom.min.js"></script>
	<script type="text/javascript" src="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/js/jquery.tools.min.js"></script>
	<script type="text/javascript" src="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/js/jquery.uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/js/jquery.cookie.js"></script>

    
    <!-- Main JS -->
    <script type="text/javascript" src="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/js/main.js"></script> 
    <script type="text/javascript" src="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/js/main.js"></script> 


<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<body class="home">	
    	<div id="header">

            <div class="wrap">
            
                <h1 class="logo">
                    <a href="../../../../special-events/wp-content/themes/specials/spoonsbarbq.com">
                        <img src="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/images/logo.png" width="400" height="135" title="" alt="" />
                    </a>
                </h1>
                
               <a href="http://www.spoonsbarbq.com/book-a-table.html" title="Book A Table" class="book-a-table">Book A Table</a>
                
                
                <div id="main-navigation">
                    <ul class="dd-menu">						
                            <li>
                                <a title="Home" href="http://www.spoonsbarbq.com/index.html">Home</a>
                            </li>
                            <li>
                                <a title="About" href="http://www.spoonsbarbq.com/about.html" class="dd-submenu-title">About<span class="dd-arrow"></span></a>
                            </li>
                            <li>
                                <a title="Menu" href="http://www.spoonsbarbq.com/menu.html" class="dd-submenu-title">Menu<span class="dd-arrow"></span></a>
                            </li>
                            <li>
                                <a title="Special Offers" href="http://spoonsbarbq.com/special-events" >Special Events</a>
                            </li>
                             <li>
                                <a title="Special Offers" href="http://spoonsbarbq.com/special-events/photo-gallery" >Photo Gallery</a>
                            </li>
                                             
                            <li>
                                <a title="Contact" href="http://www.spoonsbarbq.com/contact.html" >Contact</a>
                            </li>
                        </ul><!-- end dd-menu -->
                        
                        
                </div><!-- end main-navigation-->
                
            </div><!-- end wrap -->
        </div><!-- end header -->


	<div id="main">
