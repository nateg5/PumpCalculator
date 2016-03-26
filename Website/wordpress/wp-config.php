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
define('DB_NAME', 'pumpcalculatordb');

/** MySQL database username */
define('DB_USER', 'pumpcalculatordb');

/** MySQL database password */
define('DB_PASSWORD', 'NateJoni-41');

/** MySQL hostname */
define('DB_HOST', 'pumpcalculatordb.db.7095101.hostedresource.com');

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
define('AUTH_KEY',         '~aUhU5a}q>NO7q9!=?b4D(-/Ob~Ja?|lFyOK!XGDZ-3O%e]Wa +M<+YuRq<9Ov63');
define('SECURE_AUTH_KEY',  'b6%_pXK8F)E:.fr@[O,B<F1d~]k)T+OzG:j@x vvYEyIr55m@,HESy%P?h-L/uoL');
define('LOGGED_IN_KEY',    'bGE5FT+3oO|M{qfM8vXQR7IN+{G^ ,5X|j]KBr6FT+(LhIWQ H!A[hEuu9Ej4+sC');
define('NONCE_KEY',        'a})>,UoQLftd3}o (`:6U,zRyD9flo.t(6S6[9s,2L=Bo8,wH3wzt+>yqYL/++6C');
define('AUTH_SALT',        ';Gjt|e/+6Ipf.:sfM0,|bK+0RI3<$m6R|?>6x|a<9xM}<*4*5me?~CN~hCN4Ei++');
define('SECURE_AUTH_SALT', 'j|t!_}h;tW!BKs(eh+]r[c?gCPcL[|0}V=srl+sCx[P}Zw2bBvn9EDf8`fbS5`dI');
define('LOGGED_IN_SALT',   'y]{z>#^}:V2p)fi6-xRs7 _v)MmpHIfb,W[tsTv#d>/N [&2s9ZJfMBM,muA~WJ0');
define('NONCE_SALT',       'LKamTWf5j!NBk-E=+9Uu19B|_LDkF;,gXY;dB{(U6onM3(!6.PCAk2>cy[vqJ}^D');

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
