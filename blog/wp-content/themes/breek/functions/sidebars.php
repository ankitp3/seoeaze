<?php

if( !function_exists('register_sidebar') ) return;

add_action( 'widgets_init', 'epcl_widgets_init' );

function epcl_widgets_init() {

	/* Default Sidebar Widgets (right) */

	register_sidebar(array(
		'name' => esc_html__('Article Sidebar', 'breek'),
		'id' => 'epcl_sidebar_default',
		'description' => esc_html__('Right sidebar inside single posts.', 'breek'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '<div class="clear"></div></section>',
		'before_title' => '<h4 class="widget-title title bordered">',
		'after_title' => '</h4>',
	));

	/* Home Widgets */

	register_sidebar(array(
		'name' => esc_html__('Home Sidebar', 'breek'),
		'id' => 'epcl_sidebar_home',
		'description' => esc_html__('Sidebar for home, archives and results', 'breek'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '<div class="clear"></div></section>',
		'before_title' => '<h4 class="widget-title title bordered">',
		'after_title' => '</h4>',
    ));

	/* Footer Widgets */

	register_sidebar(array(
		'name' => esc_html__('Footer', 'breek'),
		'id' => 'epcl_sidebar_footer',
		'description' => esc_html__('Footer Sidebar', 'breek'),
		'before_widget' => '<div class="grid-33 tablet-grid-50 mobile-grid-100"><section id="%1$s" class="widget %2$s underline-effect">',
		'after_widget' => '<div class="clear"></div></section></div>',
		'before_title' => '<h4 class="widget-title title white bordered">',
		'after_title' => '</h4>',
	));

	/* Dynamic Sidebars */

	$epcl_theme = epcl_get_theme_options();
	if( !empty($epcl_theme['custom_sidebar']) ){

		array_unique($epcl_theme['custom_sidebar']);

		foreach( $epcl_theme['custom_sidebar'] as $name ){
            
			if( !empty($name) ){
				$id = sanitize_title($name);
				register_sidebar(array(
					'name' => $name,
					'id' => $id,
					'before_widget' => '<section id="%1$s" class="widget %2$s">',
					'after_widget' => '<div class="clear"></div></section>',
					'before_title' => '<h4 class="widget-title title bordered">',
					'after_title' => '</h4>',
				));
			}
		}
	}

}

?>