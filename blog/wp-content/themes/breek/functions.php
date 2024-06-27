<?php
/*
* Variable usages:
*
* EPCL_ABSPATH: template folder, includes files inside the theme
* EPCL_THEMEPATH: includes relative file by http prottocol (url)
* EPCL_THEMEPREFIX:  Used for metaboxes and theme options panel. Must be equal to text domain.
* EPCL_FRAMEWORK_VAR: Used to storage information into wp database global variable, eg: $epcl_theme['carousel_category'].
*
*/

if( !defined('EPCL_ABSPATH') ) define('EPCL_ABSPATH', get_template_directory() );
if( !defined('EPCL_THEMEPATH') ) define('EPCL_THEMEPATH', get_template_directory_uri() );
if( !defined('EPCL_THEMEPREFIX') ) define('EPCL_THEMEPREFIX', 'epcl');
if( !defined('EPCL_FRAMEWORK_VAR') ) define('EPCL_FRAMEWORK_VAR', 'epcl_theme');
if( !isset($content_width) ) $content_width = 720; // oembed width

/* Main class function for all Estudio Patagon themes, avoids plugins errors with a unique name  */

if( !class_exists('epcl_theme_setup') ) {

	class epcl_theme_setup {

		public function __construct() {

			/* Theme Includes */

			add_action('after_setup_theme', array( $this, 'includes' ), 4 );

			/* Main Theme Options */

			add_action('after_setup_theme', array( $this, 'theme_support') );

		}

		public function includes(){

			/* Main Includes */

			require_once(EPCL_ABSPATH.'/functions/import/import-demo.php');
			require_once(EPCL_ABSPATH.'/functions/post-formats.php');
            require_once(EPCL_ABSPATH.'/functions/enqueue-scripts.php');
            require_once(EPCL_ABSPATH.'/functions/color-helper.php');
			require_once(EPCL_ABSPATH.'/functions/custom-styles.php');
			require_once(EPCL_ABSPATH.'/functions/theme-functions.php'); // Specific functions for this particular theme
			require_once(EPCL_ABSPATH.'/functions/core.php'); // Common functions for all EP themes

			/* Plugins */

			require_once(EPCL_ABSPATH.'/functions/plugins/class-tgm-plugin-activation.php');
			require_once(EPCL_ABSPATH.'/functions/plugins/recommended-plugins.php');

		}

		public function theme_support(){

			/* Languages */

			load_theme_textdomain('breek', EPCL_ABSPATH.'/languages');

			/* Thumbs */

			if( function_exists('add_theme_support') ){
				add_theme_support('post-formats', array( 'video', 'gallery', 'audio' ) );
				add_theme_support('post-thumbnails');
				add_theme_support('automatic-feed-links');
				add_theme_support('html5');
                add_theme_support('title-tag');
                add_theme_support('editor-styles'); // Gutenberg Support                
                add_editor_style( epcl_gutenberg_fonts_url() ); // Enqueue fonts in the gutenberg editor               
                add_editor_style( 'assets/dist/gutenberg.min.css' ); // Enqueue custom styles in the Gutenberg editor

				$prefix = EPCL_THEMEPREFIX.'_';

				add_image_size($prefix.'admin_thumb', 100, 100, false);

				add_image_size($prefix.'classic_post', 850, 600, true);

				add_image_size($prefix.'single_standard', 950, 500, true);
				add_image_size($prefix.'single_related', 600, 450, true);
				add_image_size($prefix.'single_content', 700, 450, false);

				add_image_size($prefix.'page_header', 1950, 500, true);

				add_image_size($prefix.'widget_thumb', 120, 120, true); // Required on widgets

				add_image_size($prefix.'large', 1600, 1200, false); // Required on portfolio lightbox

			}

			/* Menus */

			register_nav_menus(array(
				'epcl_header' => esc_html__('Header', 'breek')
			));

			/* Register Sidebars */

			require_once(EPCL_ABSPATH.'/functions/sidebars.php');

        }       

	}

	new epcl_theme_setup;
}
?>
