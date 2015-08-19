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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'just2333559034');

/** MySQL database username */
//define('DB_USER', 'just2333559034');
define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'eKM79jvn,n}7');
define('DB_PASSWORD', '');

/** MySQL hostname */
//define('DB_HOST', 'just2333559034.db.2333559.hostedresource.com:3313');
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(4/RTmtMUOO(QXc5L)PP');
define('SECURE_AUTH_KEY',  'F_/D!c%FCm5)dn9q7Q6s');
define('LOGGED_IN_KEY',    '-s-3kkOhFXk%ZpXYJgS7');
define('NONCE_KEY',        '#hFvSW95gWB1645KWp1W');
define('AUTH_SALT',        'vNrbGfXmH15Ux7QCkMB!');
define('SECURE_AUTH_SALT', 'VfBySE!f$r7*z _Ns/RD');
define('LOGGED_IN_SALT',   '8sPsNHWa0$U@XZ9tK*bm');
define('NONCE_SALT',       'jA@N#HW#mJ!%qRhNMHEa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_prj99y3sv9_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
//define( 'WP_CACHE', true );
require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0705 & ~ umask()));
define('FS_CHMOD_FILE', (0604 & ~ umask()));


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');