<?php

/*-----------------------------------------------------------------------------------*/
/*	Team Meta
/*-----------------------------------------------------------------------------------*/

add_action('add_meta_boxes', 'az_metabox_page_team');

function az_metabox_page_team(){
    
/*-----------------------------------------------------------------------------------*/
/*	Page Team Header Setting Meta
/*-----------------------------------------------------------------------------------*/

global $wpdb;
  $rs = $wpdb->get_results( 
  	"
  	SELECT id, title, alias
  	FROM ".$wpdb->prefix."revslider_sliders
  	ORDER BY id ASC LIMIT 100
  	"
  );
  $revsliders = array();
  if ($rs) {
    foreach ( $rs as $slider ) {
      $revsliders[$slider->alias] = $slider->alias;
    }
  } else {
    $revsliders["No sliders found"] = 0;
  }

    $meta_box = array(
		'id' => 'az-metabox-page-header',
		'title' => __('Team Page Header Settings', AZ_THEME_NAME),
		'description' => __('Here you can configure how your page header will appear.', AZ_THEME_NAME),
		'post_type' => 'team',
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(
			array( 
					'name' => __('Team Page Header Settings', AZ_THEME_NAME),
					'desc' => __('Enable or Disable the Header Page Settings.', AZ_THEME_NAME),
					'id' => '_az_header_settings',
					'type' => 'select',
					'std' => 'enabled',
					'options' => array(
						"enabled" => "Enabled",
						"disabled" => "Disabled"
					)
				),
			array( 
					'name' => __('Team Page Header Image', AZ_THEME_NAME),
					'desc' => __('Upload your image should be between 1600px x 800px (or more) for best results.', AZ_THEME_NAME),
					'id' => '_az_header_bg',
					'type' => 'file',
					'std' => ''
				),
			array( 
					'name' => __('Team Page Header Image Background Attachment', AZ_THEME_NAME),
					'desc' => __('Background Image Attachment.', AZ_THEME_NAME),
					'id' => '_az_header_bg_attachment',
					'type' => 'select',
					'std' => 'fixed',
					'options' => array(
						"scroll" => "Scroll",
						"fixed" => "Fixed"
					)
				),
			array( 
					'name' => __('Revolution Slider Alias', AZ_THEME_NAME),
					'desc' => __('Select your Revolution Slider Alias for the slider that you want to show.', AZ_THEME_NAME),
					'id' => '_az_intro_slider_header',
					'type' => 'select_slider',
					'options' => $revsliders,
					'std' => ''
				),
			array( 
					'name' => __('Team Page Title', AZ_THEME_NAME),
					'desc' => __('You can insert a custom page title instead of default title page.', AZ_THEME_NAME),
					'id' => '_az_page_title',
					'type' => 'text',
					'std' => ''
				),
			array( 
					'name' => __('Team Page Caption', AZ_THEME_NAME),
					'desc' => __('You can insert a custom text caption instead of attributes.', AZ_THEME_NAME),
					'id' => '_az_page_caption',
					'type' => 'text',
					'std' => ''
				),
			array( 
					'name' => __('Team Page Title and Caption Align', AZ_THEME_NAME),
					'desc' => __('You can align the text in three different ways.', AZ_THEME_NAME),
					'id' => '_az_page_text_align',
					'type' => 'select',
					'std' => 'textalignleft',
					'options' => array(
						"textalignleft" => "Left Align",
						"textaligncenter" => "Center Align",
						"textalignright" => "Right Align"
					)
				),
			array( 
					'name' => __('Banner Image', AZ_THEME_NAME),
					'desc' => __('You can insert a custom image instead of a solid color.', AZ_THEME_NAME),
					'id' => '_az_banner_image',
					'type' => 'file',
					'std' => ''
				)
		)
	);
	$callback = create_function( '$post,$meta_box', 'az_create_meta_box( $post, $meta_box["args"] );' );
	add_meta_box( $meta_box['id'], $meta_box['title'], $callback, $meta_box['post_type'], $meta_box['context'], $meta_box['priority'], $meta_box );
	
	
}