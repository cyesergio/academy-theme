<!DOCTYPE html>
<!-- Gridly WordPress Theme by Eleven Themes (http://www.eleventhemes.com) - Proudly powered by WordPress (http://wordpress.org) -->

	<!-- meta -->
    <html <?php language_attributes();?>> 
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('sitename'); ?> <?php wp_title(); ?></title>
	
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <!-- styles -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />

    <?php  $options = get_option('plugin_options');
			$gridly_color_scheme = $options['gridly_color_scheme'];
			$gridly_logo = $options['gridly_logo'];
			$gridly_responsive = $options['gridly_responsive'];?> 
   
   <?php if ($gridly_color_scheme == 'dark') { ?>
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dark.css" /> 
	<?php  } elseif ($gridly_color_scheme == 'custom') {  ?>
    	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css"/> 
    <?php  } else {?>
         <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/light.css"/> 
    <?php  } ?>
    
    <?php if ($gridly_responsive != 'no') { ?>
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
      	<link rel="stylesheet" type="text/css" media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css" />
    <?php  } ?>
    
 	<!-- wp head -->
	<?php wp_head(); ?>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	
</head>

<body <?php body_class(); ?>>
<div id="bar">
  
    <img src="http://www.scotch-soda.com/academy/lib/images/SCOTCH-ACADEMY_SHADOW_inline.png">



</div>




<div id="wrap">
	<div id="header">
            

<!-- // header -->           