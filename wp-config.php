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
define('DB_NAME', 'ppa');

/** MySQL database username */
define('DB_USER', 'wp_ppa');

/** MySQL database password */
define('DB_PASSWORD', 'Prospector69');

/** MySQL hostname */
//define('DB_HOST', 'javamarshall.cfdoc4ofne1x.us-west-2.rds.amazonaws.com');
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'eJxcklQe2BsZL5v~.A@{n8!!-wk&{P<2&j2U,a!$#,r+ZHv?gU]fIOO|]AeXz9Q~');
define('SECURE_AUTH_KEY',  'h%i,.5]N7*)5f*&U~.$K&X[gTP,zuNep)ksntj+gq==_G5qM-}`_~|.Hp3_GcAf$');
define('LOGGED_IN_KEY',    '3MKpU@Z0P!3}9Um9i+Q@$8`~QQxk-x>A,wX$|RBGJsc7*yIVl-|O9V&Nn`4o,.g`');
define('NONCE_KEY',        'INMg2>U~%jAR66E-xZn!IUC1.#Yqj|5yl I1}WqhFA;+PV#T768_b}4-L*66OL=U');
define('AUTH_SALT',        'h%ybbPvVegANY.<IXF35%9Zm/AO~0#aK}%lV&2w/<Bgal8u#c-_WBk~FEh8++M6k');
define('SECURE_AUTH_SALT', 'V&/8d)&@)tH|czSI[jN;U8_t%N==I~`Jx,r-P??+Ee)1MFggv/~b*6iQd}+<+F0*');
define('LOGGED_IN_SALT',   '*o-F=~XzbgbB4~-?-7!hpx|s)zu3S3$G9r *A3P<CT,*.P)hC}#[09<74s7fY^B6');
define('NONCE_SALT',       'yR5]|4+6B{IU$zoO-kavdY7[].[i_C[eNdi Nu_$wK>PjqL=R/yHOXw*|*m.=@CD');

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

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
