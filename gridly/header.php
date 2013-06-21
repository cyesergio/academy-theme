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
  <a href="<?php echo home_url( '/' ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
    <img src="http://www.scotch-soda.com/academy/lib/images/SCOTCH-ACADEMY_SHADOW_inline.png">
  </a>

  <!-- Button that only shows in mobile -->
  <!-- <label for="menu" onclick></label> -->
  <!--  Temporary solution to hide navigation-->

<?php 
if ( is_user_logged_in() && dynamic_sidebar('gridly_topbar') ) : 
else : 
?>
<?php endif; ?>


</div>




<div id="wrap">
	<div id="header">
            

    	<!-- <div id="logo">
        	<a href="<?php echo home_url( '/' ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            
                 <?php if ($gridly_logo != '') {?>
                 	 <img src="<?php echo $gridly_logo; ?>" alt="<?php bloginfo('sitename'); ?>">
                 <?php } else { ?>
                       <img src="<?php echo get_template_directory_uri(); ?>/images/light/logo.png" alt="<?php bloginfo('sitename'); ?> width=100%">
                 <?php } ?>
            </a>
            
       </div> -->
        
                
       

     <!-- <ul id="filters">
        <li><a href="#" data-filter="*">show all</a></li>
        <li><a href="#" data-filter=".tag-scotchsoda">Scotch & Soda</a></li>
        <li><a href="#" data-filter=".tag-maison-scotch">Maison Scotch</a></li>
        <li><a href="#" data-filter=".tag-rbelle">Scotch R'Belle</a></li>
        <li><a href="#" data-filter=".tag-shrunk">Scotch Shrunk</a></li>
    </ul>

     <ul id="filters">
        <li><a href="#" data-filter=".tag-fw13">Fall/Winter '13</a></li>
        <li><a href="#" data-filter=".tag-rbelle, .tag-maison-scotch">Sprinf Summer '13</a></li>
    </ul>

    <div id="more_filters">
      <input type="checkbox" class="collection_filter" data-filter=".tag-scotchsoda" value="Scotch">Scotch
      <input type="checkbox" class="collection_filter" data-filter=".tag-rbelle" value="Maison">R'belle
    </div>  -->

    <div id="filter_dropdown">
    
    <p>Select your collection</p>
    <ul>
        <li>
            <input class="filter" value="1" data-filter=".tag-scotchsoda" type="checkbox"/>Men</li>
        <li>
            <input class="filter" value="2" data-filter=".tag-maison-scotch" type="checkbox" />Women</li>
        <li>
            <input class="filter" value="3" data-filter=".tag-rbelle" type="checkbox" />Girls</li>
        <li>
            <input class="filter" value="4" data-filter=".tag-shrunk" type="checkbox" />Boys</li>
    </ul>
</div>
<div id="filter_dropdown">
    
    <p>Select your season</p>
    <ul>
        <li>
            <input class="filter" value="1" data-filter=".tag-fw13" type="checkbox"/>Fall/Winter '13</li>
        <li>
            <input class="filter" value="2" data-filter=".tag-ss13" type="checkbox" />Spring/Summer '13</li>        
    </ul>
</div>

<?php if ( !is_user_logged_in() && single_tag_title("", false) == 'vm' ) { ?>

  <div id="filter_dropdown">
      
      <p>VM categories</p>
      <ul>
          <li>
              <input class="filter" value="1" data-filter=".tag-video" type="checkbox"/>VM Video</li>
          <li>
              <input class="filter" value="2" data-filter=".category-visual-merchandising-windows" type="checkbox" />Windows</li>
          <li>
              <input class="filter" value="3" data-filter=".tag-update" type="checkbox" />VM Update</li>
          
      </ul>
  </div>
<?php }; ?>

<div class="clear"></div>
<!-- // header -->           