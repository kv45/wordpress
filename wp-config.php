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
/* FTP */
define('FS_METHOD','direct');

/* disable autoupdate */
define( 'AUTOMATIC_UPDATER_DISABLED', true );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp4');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '56r^-;4`;$`83CSp{SCJaI ~lh7QJ9#-U0tPCFe/pk%GrTAeycKmu5Q|GKjZzN5@');
define('SECURE_AUTH_KEY',  '7F8W,mApR;aX3>|T@a% ;PP9cp?W?yZ2,4 V|b$#&N<$CY]9E*hj`z(=O1MG:;eB');
define('LOGGED_IN_KEY',    '&FejS4}ovbE#[HT~k6@MMcxt{jIUerS2w8h)^;clxa:%~)USb6u-44VA%`wiytBr');
define('NONCE_KEY',        'MX<rxfl=4Yxe~M-PI5w(^c}hr7G=PbBg1Fws5OsVr!QcwQ:%ck(m< Yjj8De8w$i');
define('AUTH_SALT',        'IoD/CE] yB[za|R0[XTIl42ta:?f3IoR|PHlWIK+To05tm.*=S1CBJNEyP_W@Ly<');
define('SECURE_AUTH_SALT', 'whxl#AL_6/L2/Z3!DPZbJp)m)#J2Tdp4H_>Br-hDqMKxTdF:d-uYut<xhq.D~%)d');
define('LOGGED_IN_SALT',   'yNu1+3OFp-tgRHX?9dAc]<RP:w{V8SnK*CY^6Z4GSTAq?6U2&8%`65X(>k5zg.13');
define('NONCE_SALT',       '%U=z>LZ}+LSf[+|r7S2ISbB[{e2@eJ5Jq.n T7nn~7L%:5wES3If(RJV)A*;yXaJ');

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
