<?php if( !is_single() ) { ?>

<?php /* if the post has a WP 2.9+ Thumbnail */
if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>
<div class="post-thumb">
	<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="hover-wrap">
		 <?php the_post_thumbnail(); /* post thumbnail settings configured in functions.php */ ?>
        <div class="overlay"></div>
        <i class="font-icon-plus-3"></i>
	</a>
</div>
<?php } ?>

<h2 class="entry-title">
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a>
</h2>

<?php get_template_part( 'content' , 'meta-header' ); ?>

<div class="entry-content">
    <?php the_content( __("Continue Reading...", AZ_THEME_NAME) );?>
</div>

<?php } ?>

<?php if( is_single() ) { ?>

<?php /* if the post has a WP 2.9+ Thumbnail */
if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>
<div class="post-thumb">
	<?php the_post_thumbnail(); /* post thumbnail settings configured in functions.php */ ?>
</div>
<?php } ?>

<div class="entry-content">
    <?php the_content( __("Continue Reading...", AZ_THEME_NAME) );?>
</div>

<?php get_template_part( 'content', 'meta-footer' ); ?>

<?php } ?>
