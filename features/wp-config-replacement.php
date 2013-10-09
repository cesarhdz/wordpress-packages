<?php
/**
 * This file must be place in {wordpress-dir}/wp-config.php
 */

// Require real WP-CONFIG
require_once dirname(dirname(__FILE__)) . '/wp-config.php';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
