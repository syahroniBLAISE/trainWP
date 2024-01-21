<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'trainWP' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'iZSC,ot83aY2nhM<]s&H/l*H.}:,!NIjmyUC/lj_/r7z]fp*QD3c#2X9t&zp._Z%' );
define( 'SECURE_AUTH_KEY',   ',m~iIc_;)Q AnhnU#m5kiaN@*L={Gzv.oiTreb4/4^=@-@`pB0q3;USloZ@XNL.7' );
define( 'LOGGED_IN_KEY',     ']WfpV-c|pVcOd&l(XR!y/sX%lt|/J/sx?e(+f|VwO5,W]z_YmV/sz-v+_yIUUQdv' );
define( 'NONCE_KEY',         'L+!:bf[+8YpRy#LA;A3V<wUpe9mY1TF*ANTs(|]kaCO)WJ*BOBYR+]^3Ap}5m}J/' );
define( 'AUTH_SALT',         ':;~{7+1v^j~ N]*<u8>p62R/]cA.G7@u]kPZ49v,%fAuc*,ddRi7b#t2-Xm{wX4/' );
define( 'SECURE_AUTH_SALT',  'p-HfVMej=H#jMJCB:},ZXNayZ4-?O.HN2gSrzIY {*CHyzI9{(8wEDYA$<&h%c4{' );
define( 'LOGGED_IN_SALT',    '0+3fC ?&A=gBk;v<T^{&K>EP?)7iH|qhGhS4L]i*!@}{v2]+KySL/nI89L6>rkvm' );
define( 'NONCE_SALT',        '/z2kInv{YSM8-*8$)~aw}$[xEZNo/pAa&<]jS|WOg,y(5WX4w}A~S|:_m=[o1/30' );
define( 'WP_CACHE_KEY_SALT', '2{<,{NZ<Hg0YRW;1o]L2&4w`#6v$`BbTju!=:zjVp::..DbtA+Mi9AoBVR`#/$Vo' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
