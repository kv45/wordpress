<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'WP4');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'sUnsl>Q!Pd83hX^9`/@/x|`2gc(i_gkj].}xKzVR?cTi=8O`Pqzf~pm!K%10=?su');
define('SECURE_AUTH_KEY',  '_]sUaqZu>6;D.Ao`8}jA E4+md5x+.4i:sJ-;5~pEvkY:s,e}UOBOte;rM-[!|74');
define('LOGGED_IN_KEY',    'BZA:]c+!gqKC0Mt[{.pUGnN8-3nq1_9M&#9E<yDkM5Q8Br5.8f7p9Tvi/nK^]CO|');
define('NONCE_KEY',        'KT%!E7F}*KwC?M E>Mrka]4g+s^.)C5sS& @p%)H{e7!m`k!8n]U:4vtp /D2_p?');
define('AUTH_SALT',        'I0ea:+1ML<cErX9ghP&vfox=S1s[uht$@g@o07<V0=>KMPwER3!napc~UFm*(ENn');
define('SECURE_AUTH_SALT', '18CI)hJ+PG9&,Zy8W>(^Z+k[Z,?)lMZE*4*PQcu$:vPrLw(K;&$*=x@T4-|<9O6s');
define('LOGGED_IN_SALT',   'XTWL7NN=b+xhC, hYPq}s-&B<$nX~_m7Lj~-2#N9csSeG>(MoZ <m?/|JgMEJPE6');
define('NONCE_SALT',       'In~Gw(sXSEzvw0`+]|obG)@&T|r/_!Pdn/8Z)|JD|gdOMN?*Z7lLW39=*]yc=#FB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
