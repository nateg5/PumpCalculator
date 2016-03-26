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
define('DB_NAME', 'schoolsuppliesdb');

/** MySQL database username */
define('DB_USER', 'schoolsuppliesdb');

/** MySQL database password */
define('DB_PASSWORD', 'NateJoni-41');

/** MySQL hostname */
define('DB_HOST', 'schoolsuppliesdb.db.7095101.hostedresource.com');

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
define('AUTH_KEY',         'e<tBBcnA_KD}WSq;lC`XIXU|17O?{PY+U+*Eg<$ULn*XC%`*}HyZ;e_Nn1YAc3G{');
define('SECURE_AUTH_KEY',  '7+IBM8?_#*nn@rBJ=nCT Hu(bh/l+p)zIF$YGyl_ZViG08^)T?4:pwRo@5ku3 7E');
define('LOGGED_IN_KEY',    'T)yG-@Kes@m?9>WR|IO$6z(%H0-P1{fIYCe4CJ&I3FZ2!h.<2||dBTe;h%n@K&h[');
define('NONCE_KEY',        'X|[d/^]x|=zKC$-/xmk]zVMW1~lb{E^9.v3$H=i-L-kso9Q.-|u56)wvNK+6Y-Q!');
define('AUTH_SALT',        'n*f#W+60Ru|lJ;d~5%46LE?Ar,1.CiGaBJ?G(HA)7!L6wh`O%B-ISThjcpLf+8Dp');
define('SECURE_AUTH_SALT', 'ib}iEekUih,Z?F B{nqL%.niK(<l$ {)IQgn{JB~-+Dp`3RGY!l?d$m^/6eW<4E/');
define('LOGGED_IN_SALT',   'Zr%`;eGScEHx!{h k[-F.h>d|jAkaZXu:pZKg#Wbvg{!vWIU$n8|9-9jFR8n}/ct');
define('NONCE_SALT',       'Mc{=wlDA-!oB+>WR]%W.naKYLAdCER@[__K4kLBbT>OSxD1W-VGQcq-nv]T-7>V&');

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
