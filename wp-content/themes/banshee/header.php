<?php $options = get_option('banshee'); 

$animation_options = null;
if( !empty($options['enable-animation']) && $options['enable-animation'] == 1) { 
	$animation_options = 'animation-enabled'; 
} else { 
	$animation_options = 'no-animation';
}

$animation_effects_options = null;
if( !empty($options['enable-animation-effects']) && $options['enable-animation-effects'] == 1) { 
	$animation_effects_options = 'animation-effects-enabled'; 
} else { 
	$animation_effects_options = 'no-animation-effects';
} 

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php echo $animation_options; ?> <?php echo $animation_effects_options; ?>">
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<?php

if( !empty($options['use-logo'])) {
	$logo = $options['logo'];
	$retina_logo = $options['retina-logo'];
	$width = $options['logo-size-width'];
	$height = $options['logo-size-height'];

	if ($retina_logo == "") {
		$retina_logo = $logo;
	}
}

?>

<?php if(!empty($options['favicon'])) { ?>
<!--Shortcut icon-->
<link rel="shortcut icon" href="<?php echo $options['favicon']?>" />
<?php } ?>

<!-- Title -->
<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>

<!-- RSS & Pingbacks -->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic|Montserrat:400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Start Wrap All -->
<div class="wrap_all">

<!-- Header -->
<header>
	<div class="container">
    	<div class="row">
        
		<div class="span3">
		<div id="logo">
        		<a href="<?php echo home_url(); ?>">
                    	<?php
							if( !empty($options['use-logo'])) { ?>
							<img class="standard" src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                         <img class="retina" src="<?php echo $retina_logo; ?>" alt="<?php bloginfo('name'); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
						<?php } else { ?>
                        	<?php bloginfo('name'); ?>                            
                    	<?php } ?>
				</a>
		</div>
		</div>
            
        <div class="span9">
            <!-- Mobile Menu -->
            <a id="mobile-nav" class="menu-nav" href="#menu-nav"><span class="menu-icon"></span></a>
                
            <!-- Standard Menu -->
            <div id="menu">
                <ul id="menu-nav">
                <?php 
                    if(has_nav_menu('primary_menu')) {
                    wp_nav_menu( array('theme_location' => 'primary_menu', 'menu' => 'Primary Menu', 'container' => '', 'items_wrap' => '%3$s', 'link_after' => '<mark class="bar"></mark>' ) ); 
                    }
                    else {
                    echo '<li><a href="#">No menu assigned!</a></li>';
                    }
                ?>	
                </ul>
            </div>
        </div>
      
        </div>
    </div>
</header>
<!-- End Header -->

<!-- Mobile Navigation Mobile Menu -->
<div id="navigation-mobile">
	<div class="container">
    	<div class="row">
        	<div class="span12">
            	<ul id="menu-nav-mobile">
                <?php 
                    if(has_nav_menu('primary_menu')) {
                    wp_nav_menu( array('theme_location' => 'primary_menu', 'menu' => 'Primary Menu', 'container' => '', 'items_wrap' => '%3$s' ) ); 
                    }
                    else {
                    echo '<li><a href="#">No menu assigned!</a></li>';
                    }
                ?>	
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Navigation Mobile Menu -->

<!-- Start Main -->
<div id="main">