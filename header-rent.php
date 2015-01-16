<!DOCTYPE html>

<!--// OPEN HTML //-->
<html <?php language_attributes(); ?>>

  <!--// OPEN HEAD //-->
  <head>
    
    <!--// SITE TITLE //-->
    <title>Rental Properties Application</title>
    
    <!--// SITE META //-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name=”description” content=”Application for rental properties.”>
    <meta property=”og:title” content=”Rental Properties Application”/>
    <meta property=”og:type” content=”form”/>
    <meta property=”og:url” content=”http://www.groundworksjackson.com/Rental”/>
    <meta property=”og:description” content=”Application for rental properties.”/>
    
    
      <!--// LEGACY HTML5 SUPPORT //-->
      <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/excanvas.compiled.js"></script>
    <![endif]-->
    
    <!--// WORDPRESS HEAD HOOK //-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/custom.css" type="text/css" media="screen" />

    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/parsley.min.js"></script>

  </head>

  <!--// OPEN BODY //-->
  <body>

    <!--// HEADER //-->
    <header>
      <h1>J and M Rental Properties</h1>
      <?php wp_nav_menu(); ?>
    </header>

