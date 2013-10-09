<?php
/**
 *	wp-config-sample-php must be renamed to wp.config.php with proper settings
 * 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * See more recipes in: http://generatewp.com/wp-config/
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');



/**#@
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Lang
 */
define('WPLANG', '');


/**
 * Debug
 */
define('WP_DEBUG', true);


/**
 * WP_HOME
 * This is where the site is located
 */
define('WP_HOME', 'http://localhost:1234/');

/**
 * Site URL
 * URL of WordPress instalation
 *
 * must match composer.json
 * 	"extra" : {
 * 		"wordpress-install-dir": "wp"
 * 	}
 */
define('WP_SITEURL',  WP_HOME . 'wp/');


/**
 * PLugins
 *
 * see: http://codex.wordpress.org/Determining_Plugin_and_Content_Directories
 * 	WP_PLUGIN_DIR  // full path, no trailing slash
 * 	WP_PLUGIN_URL  // full url, no trailing slash
 *
 * must match composer.json
 * 	    "extra" : {
 *       "installer-paths": {
 *           "vendor/wp-plugin/{$name}/": ["type:wordpress-plugin"]
 *       }
 */
define('WP_PLUGIN_DIR', dirname(__FILE__) . '/vendor/wp-plugins');
define('WP_PLUGIN_URL', WP_HOME . '/vendor/wp-plugins');



/**
 * PHP Memory
 */
// define( 'WP_MEMORY_LIMIT', '64M' );


/**
 * Composer autoload Required
 */
require_once('vendor/autoload.php');