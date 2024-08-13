<?php

/* Unique options for every EP theme */

$admin_url = EPCL_PLUGIN_URL.'/functions/admin';

/* Header */

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Footer', 'epcl_framework'),
	'icon' => ' el-icon-website',
	'fields' => array(
        array(
			'id' => 'copyright_text',
			'type' => 'editor',
			'title' => esc_html__('Footer copyright text (optional)', 'epcl_framework'),
			'subtitle' => esc_html__('HTML and Shortcodes are allowed', 'epcl_framework'),
			'desc' => '',
			'args' => array(
				'teeny' => true,
				'media_buttons' => false
			),
		),
        array(
			'id' => 'enable_back_to_top',
			'type' => 'switch',
			'title' => esc_html__('Enable back to top button', 'epcl_framework'),
			'desc' => '',
			'default' => '1'
        ),
        array(
			'id' => 'enable_footer_logo',
			'type' => 'switch',
			'title' => esc_html__('Enable Logo on Footer', 'epcl_framework'),
			'desc' => esc_html__('By default is used your from the header, you can upload a custom logo below.', 'epcl_framework'),
			'default' => '1'
        ),   
        array(
			'id' => 'enable_footer_custom_logo',
			'type' => 'switch',
			'title' => esc_html__('Enable custom Logo on Footer', 'epcl_framework'),
			'desc' => esc_html__('By default is used the same one from the header, you can activate this option to upload a custom logo.', 'epcl_framework'),
			'default' => '0'
        ),     
		array(
			'id' => 'footer_logo_type',
			'type' => 'button_set',
			'title' => esc_html__('Footer Logo Type', 'epcl_framework'),
			'subtitle' => '',
			'desc' => esc_html__('Select image if you want to upload a custom logo.', 'epcl_framework'),
			'options' => array('1' => 'Image', '2' => 'Text'),
            'default' => '1',
            'required' => array('enable_footer_custom_logo', '=', '1'),
		),
		array(
			'id' => 'footer_logo_icon',
			'type' => 'select',
			'required' => array('footer_logo_type', '=', '2'),
			'data' => 'elusive-icons',
			'title' => esc_html__('Logo icon (optional)', 'epcl_framework'),
			'desc' => esc_html__('e.g. fa-shield', 'epcl_framework'),
		),
		array(
			'id' => 'footer_logo_icon_color',
			'type' => 'color',
			'required' => array('footer_logo_type', '=', '2'),
			'title' => esc_html__('Logo Icon Color', 'epcl_framework'),
			'default' => '#ffffff',
			'validate' => 'color',
			'transparent' => false
		),
		array(
			'id' => 'footer_logo_text_color',
			'type' => 'color',
			'required' => array('footer_logo_type', '=', '2'),
			'title' => esc_html__('Logo Text Color', 'epcl_framework'),
			'default' => '#ffffff',
			'validate' => 'color',
			'transparent' => false
		),
		array(
			'id' => 'footer_logo_image',
			'type' => 'media',
			'required' => array('footer_logo_type', '=', '1'),
			'url' => true,
			'preview'=> true,
			'title' => esc_html__('Logo Uploader', 'epcl_framework'),
			'desc' => esc_html__('Recommended sizes - width: 200px, height: 50px.', 'epcl_framework'),
		),
		array(
			'id' => 'footer_logo_width',
			'type' => 'text',
			'validate' => 'numeric',
			'required' => array('footer_logo_type', '=', '1'),
			'title' => esc_html__('Logo width (Optional)', 'epcl_framework'),
			'subtitle' => esc_html__('Default: 200 (pixels)', 'epcl_framework'),
			// 'desc' => esc_html__('Note: this is the half width of your uploaded logo for retina display purposes.', 'epcl_framework'),
			'default' => '200'
        ),
	)
) );

?>