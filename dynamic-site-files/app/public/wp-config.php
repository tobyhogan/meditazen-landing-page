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
define( 'AUTH_KEY',          'rWny5-i+uA}^8cQq>%*@m>i2;ZuoDzES|H-s>i$([<#&xUHNPFyd{OdmvqHHxB1(' );
define( 'SECURE_AUTH_KEY',   '<7#;cL$S!>_fkrGC8)<dLWnk*!@BS[|=GHOS+`[g=Qgv( g![e)s brI_+I#Usq4' );
define( 'LOGGED_IN_KEY',     '14<N[X5>!,p;ToV/<~+kBo25XO#e9|x)GXj(dco^Mjf*0-~YfvU2dpFK[`;qACX/' );
define( 'NONCE_KEY',         'k?n82[{LcJ28D>Br,VRi({EPPCFI~~ts3&@yt-!1$pzj>VO5~vJ]JzXw2f(EzbH5' );
define( 'AUTH_SALT',         'kg+]f}MHB=;u x}7$09$Y`C!IXhV:e8KM{9kIoM3|8=>&[UVMj{^n:S2^.f5{r=B' );
define( 'SECURE_AUTH_SALT',  'l=p77g^df`#Ct6jl.dcz1(04=uI=J94vuhMnD(AjkQJMwC!-PTcyn,BaF5|m))J9' );
define( 'LOGGED_IN_SALT',    't#xC[IAV//Ii77o$D4.${,;-5MfkQ<QT`8j6ovjR}v_Q/YR_],21zfzJ:pDm^`9?' );
define( 'NONCE_SALT',        ',`X:#SqT|g~f,09XkX^f5:bA_,EaV6~u^7:</fOFzI{/XVTW}$Bf=S&?7T)]mgks' );
define( 'WP_CACHE_KEY_SALT', 'b2K%lDzZeYtQ]A&:eYHHWwN;1!Y#oQ* KD8alaw6K)b#|o{OF_$Gyv-YhdM;S1NW' );


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
