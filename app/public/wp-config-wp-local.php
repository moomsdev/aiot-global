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
define( 'AUTH_KEY',          'oR)`HQ#,vXiwqm!w6zy#WuI-LBSbguc*sO|SnZ |DBc,n6wu+sNJ!FZJw.gr0t86' );
define( 'SECURE_AUTH_KEY',   'hvqaS;|ei# >KRh~h<gW!VRDx@~oX$-e!+4`#/05,m-CH~:oGmx<} :_xH<F=q]K' );
define( 'LOGGED_IN_KEY',     'I0`.XV&M14DX!p(>peSZ4]8?5l$rAds5J62*&+ry&T&pHn}Z.!ZQ7&j|zG{5Ths<' );
define( 'NONCE_KEY',         '9t9d<6F=*$tuZh[ACJMoF9UzRxS#p,}_E)GrtW&+c=t3-7kl`Pj!pgOP&9:r$J@-' );
define( 'AUTH_SALT',         ' v hoh9JSESTPUXbx;OC@]a4^`wrot(ywui~ d-_@O9j.Sba5^T-$KDG[csWjN4U' );
define( 'SECURE_AUTH_SALT',  '0M2*=sv+^R_pKai4V#$biWF^2zgMw}(h{|ys7+*SyuBI3Q5Y5t@gE:uUjD;x@>3W' );
define( 'LOGGED_IN_SALT',    'VrIBL:~q~I|9+:D-)`p%XFe,C} fx.MN7Na,iyN*%&A0eSclYSqW}LKs#PjLK!}J' );
define( 'NONCE_SALT',        'qrK~:5KKwy@x~PKYoexu=>C^Yc];8G-i8+>V93Dl-^JOLTK]0zqVips?:z5R~T;K' );
define( 'WP_CACHE_KEY_SALT', 'zn^iSAy,n-mQzHD9i|*8>+32 J_/;_d?x6qZzRLGx&-=BBka42;SaU?bOU0G7qX#' );


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
