<?php
/**
 * Main file for plugin.
 *
 * @since 0.1.0
 *
 * @package Spaces_Media_Collection_Post_Type
 */

namespace Spaces\Spaces_Media_Collection;

/**
 * Bootstrap the plugin.
 */
function bootstrap() {
	add_action( 'rest_likes.update_likes', __NAMESPACE__ . '\log_update', 10, 6 );
	add_action( 'rest_likes.request_rejected', __NAMESPACE__ . '\log_reject', 10, 3 );
}
