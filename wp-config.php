<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shoptrangsuc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '7$YPSe6m#@RiBD3x,3y&*U4Lk!/fSI`imk)]:q=]#kBS =8oQC>*JKv.u/0:~U_.' );
define( 'SECURE_AUTH_KEY',  'D=LQ)t:/q]+nYeufiF;03[LWoUul,LUu2A![bTqLM6_{u:Kf,ny!on`?n5H/cX9!' );
define( 'LOGGED_IN_KEY',    '.n7(#` S`#n%Yw/A$OTkfv7j{Q%E/#hg#11J5j!}3=>oXa_ANqpIhKlx/7l0!ztB' );
define( 'NONCE_KEY',        'ZNDH`@39R*k&e>$anEY:jR]InVqx;`JIlb-|}&Up&lAF&IW4myV&f+r2C35h*||P' );
define( 'AUTH_SALT',        'fb0}.-84ggBVg@;`2%@Vm/D8d<~I4mMvZQNDqOWP@8hLjYofnhC63zj|S$,?8~7C' );
define( 'SECURE_AUTH_SALT', '5kH8rOw NC.q0-l+K:Ip=2`my%U-4#JaH%={.]CYZ!/q9;Pu_7#P$`/cZ;nm1),v' );
define( 'LOGGED_IN_SALT',   '=ln{!Oj1< gw~#j#~l3AT?=bf(m]LHB18*mMHw)P53aE 9wz[1Tz9k!IP|uv]4`(' );
define( 'NONCE_SALT',       'QZ,(W>;>b}=Iw/p>AsdzwAkG#@+z_b9y(Z)eZ  F1,jhBj%}9U%-XgAW:Vvb=8~j' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
