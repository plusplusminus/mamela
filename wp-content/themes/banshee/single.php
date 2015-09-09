<?php get_header(); ?>

<?php az_post_header($post->ID); ?>

<?php $options = get_option('banshee'); ?>

<div id="content">
<section id="blog" class="large-padding single-post">
<div class="container">
<div class="row">

<?php
			
$alignment = (!empty($options['blog_post_sidebar_layout'])) ? $options['blog_post_sidebar_layout'] : 'no_side' ;

switch ($alignment) {
case 'right_side' :
	$align_sidebar = 'right_side';
	$align_main = 'left_side';
break;

case 'left_side' :
	$align_sidebar = 'left_side';
	$align_main = 'right_side';
break;
}

if($alignment == 'no_side') {
	echo '<div id="post-area" class="span12">';
}
else if($alignment == 'left_side' || $alignment == 'right_side') {
	echo '<div id="post-area" class="span9 '.$align_main.'">';
}

?>          
  
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">	

<?php 
$format = get_post_format(); 
get_template_part( 'content', $format );
?>

<div class="separator"></div>
</article>

<?php comments_template('', true); ?>

<?php endwhile; endif; ?>

</div><!-- End Container Span -->

<?php
if($alignment == 'left_side' || $alignment == 'right_side') { ?>
  
<div class="span3 <?php echo $align_sidebar; ?>">
	<aside id="sidebar">
		<?php get_sidebar(); ?>
	</aside>
</div>
<?php } ?>
                
</div> 
</div>
</section>
</div>

<?php get_footer(); ?>