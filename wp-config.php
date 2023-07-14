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
define( 'DB_NAME', 'fans' );

/** Database username */
define( 'DB_USER', 'huyvo' );

/** Database password */
define( 'DB_PASSWORD', 'voduchuyvo123' );

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
define( 'AUTH_KEY',         'G/TdeF%{KO+((uA/Ts.;UYh.#uPG!~%yM$e/p_!zt,_bX?[0kU.F#)4FGYSVI@Xp' );
define( 'SECURE_AUTH_KEY',  'qG|tHBaA8Zsu?R&+iNujEDezCqjc}`ulPYe:;%FL@pZ[^dUz6pe&0LY4k:CQ5h4F' );
define( 'LOGGED_IN_KEY',    'VkgZ6t$)Vvgr$u!UI`H$?lQzTD$Er}^tc]-Y{IZd%V{g)xw;1/Z<|i!Flx_J&Pcs' );
define( 'NONCE_KEY',        ')>z[zM#!EsOZ+kS&0~yH;y=nK<gbnKW#RaUBj./17A@P*#0~wb#y0fOE,kOQT/WY' );
define( 'AUTH_SALT',        'c2ITj5Eo}%=`!9Coj`km27%<~(:)N}a^eznI|4cblupR6*TKNU!@r<> |dnD*Fi-' );
define( 'SECURE_AUTH_SALT', 'm8yvzr&do]_SR>[VQ5Q>  inbQQLmxRqd[R(/nJC/o&$y5qhJ6!.6LPh}=b939.3' );
define( 'LOGGED_IN_SALT',   '~nBlXxDSfCT8@oz5v42|9oDn vNgn[r<o?YD5!JiO%Kh7J.nk8h.M(H5/J=8BZ<(' );
define( 'NONCE_SALT',       'e3%rbT0>-YUMgY4m({N7@M?>/6+d6^r@{(EQexOKJTY{taWZ>9)7g|P9=ePR]978' );

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
