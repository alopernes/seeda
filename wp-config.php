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
define( 'DB_NAME', 'seeda' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?7PR|dI`mY:,};`m9`ujpDk75]xh~93i#CWNq@{s2!|n)&w65l|&i`J.)0#=rC.b' );
define( 'SECURE_AUTH_KEY',  '8Pu<LQ<,X%fyC$SHHa!S^Mo1/&O{s>@Xn&oR7_|!nS9_Rld(vcp83py*QDi>-4Uf' );
define( 'LOGGED_IN_KEY',    'lLm)Wq+]CC$v=a;?B*4B9sgO[M,tL&<.J;-wj<wVd)Oh(/xR_]>8Wq>#6x3OL?00' );
define( 'NONCE_KEY',        'Q~@=B&}TM7+2R4ZXw-[`WjzY;!<iSy%z[6asbY_ZeNHFm/^1F_ECu7CN97PbwNe0' );
define( 'AUTH_SALT',        '_.^f5en7@3P#<Wg$f)h#G[R:Og;Zj>[q ZnjxhNS;zulpo/]kFn8(u[V8h5UqUC1' );
define( 'SECURE_AUTH_SALT', 'x6x)bWy^|nd#j9[0M!gw9*3|v8x37Zmtl*d_%WZt(-i<`Mlg:SRumk^pp7>iGP~o' );
define( 'LOGGED_IN_SALT',   'Q>;Q:JiTd*4&M9%%T[vk@rP)2S9ee/P{>_$NY$Q[5?&-]u+*Y{BBJ5m#$ 9qwvLH' );
define( 'NONCE_SALT',       'IM]UU!WiaBw,gw /+y1lw3^!>O9Hv<=1S$&o`1J?^hgNuJ52N>?C`w&t)F>mU!+b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
