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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'wa-zr`c><GVj`guCf(JzUCC|+8`hvjdnj:#=CAqY|3ZYya$GmE!s@m}!EF!uR$yo' );
define( 'SECURE_AUTH_KEY',   '= P}OZ@+2]Gr{o9*^:2J{%:/Pl=+r1(/2EC+vH>--v4*` |(v=UQm #CF3g--Dt=' );
define( 'LOGGED_IN_KEY',     '21%0ag.98q@I/[dBWoe?(b89~HVOUE36^dSP&7P7>u&iR7NZt!dPP)>9MHpZ0&Yt' );
define( 'NONCE_KEY',         '!GWQzU~;dcsBF5Cp~c:rM6DU@t]9fAR%MiJG0,=:pgp:mHD&>qHd<W+AM=7hqqZ<' );
define( 'AUTH_SALT',         'j!?(FnJ*^F%wR^l,0jt3&+ooPrbgsu=aIdMX94|kMez<5!Jss[!1u!xGN$k}958q' );
define( 'SECURE_AUTH_SALT',  'i;I$9yqwj^/}!l u%Hh!eg<Cnt/J}Z@}f(*1ruOqE}NtG3*Y,2fi-5t,xP*!`@{l' );
define( 'LOGGED_IN_SALT',    '&E1H6 M$--]V{$lE89=E,]_45f*$[Gr]2cOv6pJZ:~xlP@:0}}~Wn<c&4^kZ+(sO' );
define( 'NONCE_SALT',        'umUU|JOYM*iziCI }~*B]31E!w$BXQ-R&|$/{=DDK1xuHL<52eMX3gW|8u$=yy]}' );
define( 'WP_CACHE_KEY_SALT', '?4JyD*j/6<NQ[wzX~*^*$fV~4y>m~7glNm$V>XX*|=Y9k>-OC%~w^kZ*MvHj1:w%' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
