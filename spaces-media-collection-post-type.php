<?php
/**
 * Plugin Name:     Spaces Media Collection CPT
 * Plugin URI:      https://github.com/dol-lab/spaces-media-collection-post-type
 * Description:     Provides a custom post type for the Media space to create collections of posts with a block template.
 * Author:          Silvan Hagen
 * Author URI:      https://silvanhagen.com
 * Text Domain:     spaces-media-collection-post-type
 * Domain Path:     /languages
 * Version:         0.4.0
 *
 * @package         Spaces_Media_Collection_Post_Type
 */

namespace Spaces\Spaces_Media_Collection;

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	include __DIR__ . '/vendor/autoload.php';
}
bootstrap();
