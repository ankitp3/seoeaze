<?php

/* Unique options for every EP theme */

$admin_url = EPCL_PLUGIN_URL.'/functions/admin';

/* Advanced Settings */

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Optimization', 'epcl_framework'),
	'icon' => 'el-icon-dashboard',
	'fields' => array(
		array(
			'id' => 'enable_optimization',
			'type' => 'switch',
            'title' => esc_html__('Enable Speed Optimization', 'epcl_framework'),
            // 'subtitle' => esc_html__('W3 Total Cache plugin recommended', 'epcl_framework'),
			'desc' => esc_html__('This will move the main theme styles to the footer and load minified CSS and JS libraries. If you are not comfortable with website load (some jumps when loading), just disable this option.', 'epcl_framework'),
			'default' => true
        ),
        array(
			'id' => 'move_jquery_footer',
			'type' => 'switch',
            'title' => esc_html__('Move jQuery to Footer', 'epcl_framework'),
            // 'subtitle' => esc_html__('W3 Total Cache plugin recommended', 'epcl_framework'),
			'desc' => esc_html__('This will the main javascript framework to the footer and will increase Google Page Score. If you are experiencing any error on the console, just disable this option.', 'epcl_framework'),
			'default' => false
        ),
        array(
			'id' => 'remove_gutenberg_styles',
			'type' => 'switch',
            'title' => esc_html__('Remove Gutenberg Styles', 'epcl_framework'),
            // 'subtitle' => esc_html__('', 'epcl_framework'),
			'desc' => esc_html__('This will remove Gutenberg styles from the <head> only activate it if you and all your website users (writers) are using the Classic Editor, use with caution.', 'epcl_framework'),
			'default' => false
        ),
		array(
			'id' => 'enable_lazyload',
			'type' => 'switch',
			'title' => esc_html__('Enable Lazy Load (Lists)', 'epcl_framework'),
			'subtitle' => esc_html__('For loops: home pages, archives and categories.', 'epcl_framework'),
			'desc' => esc_html__('This will load your images when scrolling (this option can improve your website overall speed).', 'epcl_framework'),
			'default' => true
        ),
        array(
			'id' => 'enable_lazyload_posts',
			'type' => 'switch',
			'title' => esc_html__('Enable Lazy Load (Post)', 'epcl_framework'),
			'subtitle' => esc_html__('For single post content.', 'epcl_framework'),
			'desc' => esc_html__('This will load your images when scrolling only for articles content.', 'epcl_framework'),
			'default' => true
        ),
        array(
			'id' => 'enable_lazyload_embed',
			'type' => 'switch',
			'title' => esc_html__('Enable Lazy Load (Embeds)', 'epcl_framework'),
			// 'subtitle' => esc_html__('For single post content.', 'epcl_framework'),
			'desc' => esc_html__('This will load your videos/embeds when scrolling only works for Vimeo/Youtube and iframes in general.', 'epcl_framework'),
			'default' => true
        ),
        array(
			'id' => 'enable_lazyload_adsense',
			'type' => 'switch',
			'title' => esc_html__('Enable Lazy Load (Adsense)', 'epcl_framework'),
			'subtitle' => esc_html__('Beta feature use with caution.', 'epcl_framework'),
			'desc' => __('This will load your adsense blocks when scrolling.<br><b>Important:</b> don\'t include any kind of <br>&lt;script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"> tag to maximize your website speed.<br>This option will load that script dinamically.', 'epcl_framework'),
			'default' => false
		),
	)
) );

?>