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
define( 'DB_NAME', 'wordpress_db' );

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

define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         '5tOg7mm=8!PPGh]4qejD{xX3DT?$1N]&J5ldQiZ#Ygifi?yj:P e[H}KW#X84D<g' );
define( 'SECURE_AUTH_KEY',  '[ClJQ$0wv.*g:6()sEvhd{.Z0S)fnAwMWo8yk`wU22M$.~vKZQp$U=i=[3-{M<Og' );
define( 'LOGGED_IN_KEY',    '=iWn:4YWfMl>S |D`pQM!~b~w6p<ge7H;B?^lz=j;vLHZu^+Q):;9x5>MhS33oiq' );
define( 'NONCE_KEY',        ']ZC%f/Dy4L@}&T:H^lc?kZ&-fysv7M7+%3UkD{^:.k{fo&:EReG9<7Z, us^x ;8' );
define( 'AUTH_SALT',        ',/a:kt~U,L0UJyuPs_,kZ7fgA/:!_T<M(FS8~aw1Z=`bt_w]H(oMO!_ 0j]/E(gS' );
define( 'SECURE_AUTH_SALT', 'd-x3b~K*>PiTYMDG)G`JaX1aK.;N=+0B4ZDME57dMCnr}*FwJE/di2C7ym{tB=#6' );
define( 'LOGGED_IN_SALT',   'Ui$sd.a2c/mh9?3npeK3?%`c>rhy]j!PJ`!-/$#YQT87unqh.l;}/O+E#I5{F-VR' );
define( 'NONCE_SALT',       'CTm|Ee)y0K)8[bX1nBH9~)Dx HvH=7yyB$xDc:++mNUAGn%E>T{N;v^W[ISs!}d7' );

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
