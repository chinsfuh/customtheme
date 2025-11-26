<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u668774580_V1Xtx' );

/** Database username */
define( 'DB_USER', 'u668774580_KKiwf' );

/** Database password */
define( 'DB_PASSWORD', '1yg8bOeb0p' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'P=QU-/Y2G3u&&yCw5[:Ec=!:g<ystnQ/KA`xI6:VASAs2Y[]d$gXfQS>yh _}6)m' );
define( 'SECURE_AUTH_KEY',   '!OF+|k_O-Y6jQ9Q8P4l&1kox.yf7J>^S>?oc?p@QC4^nFzv6SKK,Q T8),9ZL04~' );
define( 'LOGGED_IN_KEY',     '$ls;+$;_~1ia{pFGR)A8~w@zQEw%)yiYwp,SLyihxxT)k<M6p=e@Cm$S/F.$t1w,' );
define( 'NONCE_KEY',         'iA}duJ?MUnpT(-D#s$8g(o[=e@W/a2^e1<@>Bo~2xWpl,_8~FQwg`Df(P1GYl@@|' );
define( 'AUTH_SALT',         'Cl?/4T;T@TM8F1l4*bulP9Kkf2FHy:xfY?yd{NtN)zPO(Cjem{R-$I4nUmbU[XW$' );
define( 'SECURE_AUTH_SALT',  'WNwDeTYa)?[]FJe]`>d7?4[F5zX/J8!Xd<%H*i{|H^7RgZ0`{Hz2.PtEo4mf|.VB' );
define( 'LOGGED_IN_SALT',    '^|YkC-_A2aLTdYA/nK#~C<VLk7Fg!MDzwKO,jR)+|4)F16q&ACg(s/Re=n=|sYH8' );
define( 'NONCE_SALT',        '+aMMO$Af}%6,Ol`c~|+ND~0cZCbYB %8~z70Hq%Y!t>6#*pe,g-Staw(Z@n%W(G.' );
define( 'WP_CACHE_KEY_SALT', 'i@Zit0cO(Tw62RQ+1eJ#X?/2ZzT8B5/Pi:Ii`z~b.obcg^gb}6pQ%TmpSgjUq,8r' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '661a1be075ada0a936565e246f9f10c3' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
