<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */


/*
 * Unified variables
 */
$user_name = 'root';
$hostname = 'localhost';
$charset = 'UTF-8';
$collate = '';
/*
 * Check for the current environment
 */
if ($_SERVER["HTTP_HOST"] === 'ver.cloud-genius.com') {
  $db_name = 'ver1323906163564';
  $user_name = 'ver1323906163564';
  $hostname = 'ver1323906163564.db.7567312.hostedresource.com';
  $charset = 'UTF-8';
  $password = 'y8P%20p9';
  $urlpath = "/";
} else if ($_SERVER["HTTP_HOST"] === '127.0.0.1:8080') {
  $db_name = 'bitnami_wordpress';
  $user_name = 'bn_wordpress';
  $hostname = 'localhost:3306';
  $charset = 'UTF-8';
  $password = '8b073924f9';
  $urlpath = "/wordpress";
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $db_name);

/** MySQL database username */
define('DB_USER', $user_name);

/** MySQL database password */
define('DB_PASSWORD', $password);

/** MySQL hostname */
define('DB_HOST', $hostname);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', $chartset);

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', $collate);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
/*  */
define('AUTH_KEY','324c4d868b88b942a6ee9b3b41ee83fe7441b714357f37285e02ce42bb35e92c');
define('SECURE_AUTH_KEY','fce77bc3a1bd99488733e19b1722e3a6d61a4a1462c42c69ee4bea6792d4bbfb');
define('LOGGED_IN_KEY','aab7a19547839a13190483cb55aa69c39c9685ea6883262bf8256ca1b4ae7a3e');
define('NONCE_KEY','beb59d49f9b331b384c681f9143a8887cac4843436fecc89164e78639192bc7a');
define('AUTH_SALT','d27c81c1b2e461d873167de39cebe3195d725dda81edab45839bcdae1be41db7');
define('SECURE_AUTH_SALT','0e10f321c91c88ab456c4e236e69ed6aac59e9b847d530a35ae94e94619e2291');
define('LOGGED_IN_SALT','9cc302c8f8f6054459efc719243eea7cac647436d7d9e36db4787bdbb03ed557');
define('NONCE_SALT','9a69cd24b2756cd7c6dc05fe2e2d8e1b9dccf19b447d51307266418e1ab51013');

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

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . $urlpath);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . $urlpath);


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
