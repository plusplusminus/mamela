<?php header("Content-type: text/css; charset=utf-8"); 

$absolute_path = __FILE__;
$path_to_file = explode( 'wp-content', $absolute_path );
$path_to_wp = $path_to_file[0];

require_once( $path_to_wp . '/wp-load.php' );

$options = get_option('banshee'); 
?>

a:hover,
a:active,
a:focus,
header #logo a:hover,
#navigation-mobile li a:hover,
.navigation-blog ul li.prev a i,
.navigation-blog ul li.next a i,
.wpcf7 .wpcf7-submit,
.standard-blog .entry-meta a:hover,
.masonry-blog .entry-meta a:hover,
.comment-author cite a:hover,
.comment-meta a:hover,
#commentform #submit,
#twitter-feed .tweet_list li .tweet_text a,
#twitter-feed .tweet_list li .tweet_time a:hover,
.tagcloud a,
.social_widget a i,
.footer-widgets .social_widget a:hover,
.button-main,
.button-main.inverted:hover,
.button-main.inverted:active,
.button-main.inverted:focus,
.box:hover .icon i,
.box:active .icon i,
.box:focus .icon i,
.dropmenu-active ul li a:hover,
.color-text,
.social-icons li a:hover i,
.icons-example ul li a,
.icons-example ul li:hover a i,
.icons-example ul li.active a i,
#footer-credits p a:hover,
#social-footer ul li:hover a i,
#title-page.banner-image .entry-meta.entry-header a:hover {
	color: <?php echo $options['accent-color']; ?>;
}

#menu ul .sub-menu li a:hover,
#menu ul li a .bar,
#menu ul li a .bar:before,
#menu ul li a .bar:after,
.single-people .hover-wrap .overlay,
.item-project .hover-wrap .overlay,
.navigation-blog ul li.prev a:hover,
.navigation-blog ul li.next a:hover,
.wpcf7 .wpcf7-submit:hover,
#blog .post-thumb .hover-wrap .overlay,
#latest-posts .post-thumb .hover-wrap .overlay,
.badge,
#commentform #submit:hover,
#back-to-top:hover,
.tagcloud a:hover,
.tagcloud a:active,
.tagcloud a:focus,
.widget_quick-flickr-widget ul li a .overlay,
.social_widget a:hover,
.fancybox-nav:hover span,
.button-main:hover,
.button-main:active,
.button-main:focus,
.button-main.inverted,
.tooltip-inner,
.highlight-text,
.dropcap-color,
.progress .bar,
.lightbox .fancy-wrap .overlay,
.pricing-table .confirm,
.pricing-table.selected h5,
.pricing-table.selected .price,
.mejs-overlay:hover .mejs-overlay-button,
.mejs-controls .mejs-time-rail .mejs-time-current,
.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,
.mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-current {
    background-color: <?php echo $options['accent-color']; ?>;
}

.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus,
.dropdown-submenu:hover > a,
.dropdown-submenu:focus > a {
    background-color: <?php echo $options['accent-color']; ?> !important;
}

.navigation-blog ul li.prev a,
.navigation-blog ul li.next a,
.wpcf7 .wpcf7-submit,
#commentform #submit,
.tagcloud a,
.social_widget a,
.button-main,
.dropmenu:hover,
.dropmenu:hover,
.dropmenu.open,
.dropmenu.open,
.accordion-heading:hover .accordion-toggle,
.accordion-heading:hover .accordion-toggle.inactive,
.accordion-heading .accordion-toggle.active,
.nav > li > a:hover,
.nav > li > a:focus,
.nav-tabs > .active > a,
.nav-tabs > .active > a:hover,
.nav-tabs > .active > a:focus,
.box:hover .icon:after,
.box:active .icon:after,
.box:focus .icon:after {
    border-color: <?php echo $options['accent-color']; ?>;
}

.single-people:hover .team-name,
.single-people .team-name:hover,
.item-project:hover .project-name,
.item-project .project-name:hover,
#blog article:hover,
#latest-posts article:hover  {
	border-bottom-color: <?php echo $options['accent-color']; ?>;
}

.tooltip.top .tooltip-arrow {
  	border-top-color: <?php echo $options['accent-color']; ?>;
}

.tooltip.right .tooltip-arrow {
  	border-right-color: <?php echo $options['accent-color']; ?>;
}

.tooltip.left .tooltip-arrow {
  	border-left-color: <?php echo $options['accent-color']; ?>;
}

.tooltip.bottom .tooltip-arrow {
  	border-bottom-color: <?php echo $options['accent-color']; ?>;
}

#circle:after {
	box-shadow: 0 0 0 4px <?php echo $options['accent-color']; ?>;
}