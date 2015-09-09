<?php $options = get_option('banshee'); ?>

</div>
<!-- End Main -->

<footer>
<?php if ( is_home() ) {
	// Blog Page
	az_footer_widget(get_option('page_for_posts'));
}
else {
	// All Other Pages and Posts
	az_footer_widget(get_the_ID());
}
?>

<!-- Start Footer Credits -->
<section id="footer-credits">
	<div class="container">
		<div class="row">

			<?php if( !empty($options['enable-footer-social-area']) && $options['enable-footer-social-area'] == 1) { ?>
            
            <div class="span12">
                <p class="copyright">&copy; <?php _e('Copyright ', AZ_THEME_NAME); echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a> / <?php _e('Powered by', AZ_THEME_NAME) ?> <a href="http://wordpress.org/" target="_blank">WordPress</a></p>
                <?php if(!empty($options['footer-copyright-text'])) { ?> <p class="credits"><?php echo $options['footer-copyright-text']; ?></p> <?php } ?>
            </div>
            
            <div class="span12">
            <!-- Social Icons -->
            <nav id="social-footer">
                <ul>
                    <?php
                        global $socials_profiles;
                        
                        foreach($socials_profiles as $social_profile):
                            if( $options[$social_profile.'-url'] )
                            {
                                echo '<li><a href="'.$options[$social_profile.'-url'].'" target="_blank"><i class="font-icon-social-'.$social_profile.'"></i></a></li>';
                            }
                        endforeach;
                    ?>
                </ul>
            </nav>
            <!-- Social Icons -->
            </div>
            <?php } else { ?>
            
            <div class="span12">
                <p class="copyright">&copy; <?php _e('Copyright ', AZ_THEME_NAME); echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a> / <?php _e('Powered by', AZ_THEME_NAME) ?> <a href="http://wordpress.org/" target="_blank">WordPress</a></p>
                <?php if(!empty($options['footer-copyright-text'])) { ?> <p class="credits"><?php echo $options['footer-copyright-text']; ?></p> <?php } ?>
            </div>
    
            <?php } ?>
            
		</div>
	</div>
</section>
<!-- Start Footer Credits -->

</footer>

</div>
<!-- End Wrap All -->

<?php if( !empty($options['enable-animation']) && $options['enable-animation'] == 1) { ?>
<!-- This section is for Splash Screen -->
<section id="jSplash">
    <div class='loader'>
      <div class='circle'></div>
      <div class='circle'></div>
      <div class='circle'></div>
      <div class='circle'></div>
      <div class='circle'></div>
    </div>
</section>
<!-- End of Splash Screen -->
<?php } ?>


<?php if( !empty($options['enable-back-to-top']) && $options['enable-back-to-top'] == 1) { ?>
<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-up-simple-thin-round"></i>
</a>
<!-- End Back to Top -->
<?php } ?>

<?php if(!empty($options['tracking-code'])) echo $options['tracking-code']; ?> 

<?php 	
	wp_register_script('main', get_template_directory_uri() . '/_include/js/main.js', array('jquery'), NULL, true);
	wp_enqueue_script('main');
	
	wp_localize_script(
		'main', 
		'theme_objects',
		array(
			'base' => get_template_directory_uri()
		)
	);

	wp_footer();  
?>	

</body>
</html>