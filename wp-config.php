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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'youcode' );

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
define( 'AUTH_KEY',         'sqku{e~`+WI@<DN57B14%GHH*j&0z}t{kI]#Rsdd#sC~-yMuBAWMKGT0#zF^cET=' );
define( 'SECURE_AUTH_KEY',  ':d*84rzX;d6i-5V+-pATJ]!rL+tB4V0_W7jtawuL!qYJrorEPexSHw 2lBfe(<a0' );
define( 'LOGGED_IN_KEY',    'Vb$f`mU)!1==uHM7^]GtGw:CDxTD[i,!pgQGD:;nLC]Yc)DUy(O/qiLP`DzJuY*P' );
define( 'NONCE_KEY',        '/(*h?ao;P]C|b4E(bt1@aY/0K?8pjT_7k>OJt0iMWmI7U&o?>O3n?=0nc!k:W<M`' );
define( 'AUTH_SALT',        ';DQ9-Lo!Hz2JnQ0!#K>$eBoO_=uUuS2Fric+:/`yTKW#F3EXs~5qA9I4Lij$eY_/' );
define( 'SECURE_AUTH_SALT', '/1$mAEdd-k.r1Ihx-1Qn352{?#%A.I,jCk:[RX&)/0@~+51O`U~Bfa(fxgCGS2bO' );
define( 'LOGGED_IN_SALT',   'l,yqOg&i4c)*oR^;Kj2xv_Q1l;6~@Sl M8C*n]MFd#}mgW@T|Ux;~L!bU@R)8:pr' );
define( 'NONCE_SALT',       'TmLI{Wze6fTx5&R)un you5m~.4LSk_F{Solfn$.WE%cq|2==gA`ii.R(5knjNm[' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
