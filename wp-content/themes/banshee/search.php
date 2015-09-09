<?php get_header(); ?>

<?php 
	$page_title = az_custom_get_page_title();

	if( !empty($page_title) ) { ?>
    <section id="title-page">
    	<div class="container pagize">
    		<div class="row">
    			<div class="span12 textaligncenter">
    				<h2><?php echo $page_title; ?></h2>
    			</div>
    		</div>
    	</div>
    </section>
<?php } ?>

<?php $options = get_option('banshee'); ?>

<div id="content">
<section id="blog" class="large-padding <?php echo $options['blog_type']; ?>">
<div class="container">
<div class="row">

<?php
				
$alignment = (!empty($options['blog_sidebar_layout'])) ? $options['blog_sidebar_layout'] : 'no_side' ;

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

$cols = (!empty($options['masonry_layout'])) ? $options['masonry_layout'] : '3' ;

switch ($cols) {
	case '4' :
		$span_num = '3';
		break;
	case '3' :
		$span_num = '4';
		break;
	case '2' :
		$span_num = '6';
		break;
}

$blog_type = $options['blog_type'];
if($blog_type == null) $blog_type = 'standard-blog';

$masonry_class = null;
$masonry_class = 'masonry-area';

if($blog_type == 'standard-blog'){
	if($alignment == 'no_side') {
		echo '<div id="post-area" class="span12">';
	}
	else if($alignment == 'left_side' || $alignment == 'right_side') {
		echo '<div id="post-area" class="span9 '.$align_main.'">';
	}
}
 
else if($blog_type == 'masonry-blog'){
		echo '<div id="post-area" class="'.$masonry_class.' no-sortable">';
}

?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                
<?php
  if($blog_type == 'standard-blog'){ ?>

<article <?php post_class('item-blog'); ?> id="post-<?php the_ID(); ?>">	
		<?php 
		$format = get_post_format(); 
		get_template_part( 'content', $format );
		?>
</article>

  <?php } 
  
  else if($blog_type == 'masonry-blog'){ 
	$span_clm = $span_num;
  
  ?>

<article <?php post_class('item-blog span'.$span_clm.''); ?> id="post-<?php the_ID(); ?>">	
		<?php 
		$format = get_post_format(); 
		get_template_part( 'content', $format );
		?>
</article>

<?php } ?>

<?php endwhile; ?>
                    
<?php if($blog_type == 'standard-blog'){ ?>
	<?php az_pagination(); ?>
<?php } ?>

<?php else: ?>

<?php if($blog_type == 'masonry-blog'){ ?>
<div class="span12">
<div class="no-results"> 
<h2 class="entry-title"><?php _e('Your search did not match any entries', 'zilla') ?></h2>

<div class="entry-content">
    <?php get_search_form(); ?>
</div>
</div>
</div>
<?php } else { ?>
<div class="no-results"> 
<h2 class="entry-title"><?php _e('Your search did not match any entries', 'zilla') ?></h2>

<div class="entry-content">
    <?php get_search_form(); ?>
</div>
</div>
<?php } ?>

<?php endif; ?>

</div><!-- End Container Span -->

<?php if($blog_type == 'masonry-blog'){ ?>	
    <div class="span12">
    	<?php az_pagination(); ?>
    </div>
<?php } ?>

<?php
if($blog_type == 'standard-blog'){
	if($alignment == 'left_side' || $alignment == 'right_side') { ?>
	  
	<div class="span3 <?php echo $align_sidebar; ?>">
		<aside id="sidebar">
			<?php get_sidebar(); ?>
		</aside>
	</div>

<?php	}
}
?>

</div>
</div>
</section>
</div>

<?php get_footer(); ?>