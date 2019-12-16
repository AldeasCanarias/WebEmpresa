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
define( 'DB_NAME', 'websocial' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '8S|U/;#l.~lwRq)(,:sqh#4uK@6>:9Yjn^*.sql11tTH)>z.G7lSHw/P| Rvg3$,' );
define( 'SECURE_AUTH_KEY',  '-,;-FdX0F-lE{!6x)8>2kfo?qa!)-.G2#zX8mzQY|9Ph{BuWPt(!A8RTcdciypq8' );
define( 'LOGGED_IN_KEY',    'HBB/xWWL3q_8?zP)fC[o)8h5c;[m2}wA2a>H^`:BZd6btvE_!s|8GRV{Z*F@kX_(' );
define( 'NONCE_KEY',        'tAn%KR&*kmeK)Sk,ol7=7$deauN:dl^%%{5QL o<2/@P.$xNp:5ig^a>p,Ur3h?7' );
define( 'AUTH_SALT',        'F}ltW^y%Sl`WFlw^wW@9`ukF^.9d1)+*}>GA>*or.q&MfBWM>7d30LCJRatFA6)?' );
define( 'SECURE_AUTH_SALT', 'u|rBuC(|83~3ArL,/N{qit$d5NC<+h+&-Ystg.uyPE7,S(w{ |zG!z_)yM.pnv1p' );
define( 'LOGGED_IN_SALT',   'FP~x3bsF)7!,^Z}*`JCeA}<23Lf!yj!knGTeG{Q6FZ~m%`iPt_jHl{>y>LNkSr N' );
define( 'NONCE_SALT',       'f$Rk~iMvn+}fFC/h=9=z.F~2^Y.elkF^WJ{=rs+NB2(_`1;#3,S4m ?{0I@`P4_t' );

	/* Desactivar el uso de FTP para actualizar Plugins y Themes en WordPress */
	define('FS_METHOD','direct');
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
