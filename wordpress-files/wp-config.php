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

define( 'DB_NAME', 'bitnami_wordpress' );


/** Database username */

define( 'DB_USER', 'bn_wordpress' );


/** Database password */

define( 'DB_PASSWORD', '' );


/** Database hostname */

define( 'DB_HOST', 'mariadb:3306' );


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

define( 'AUTH_KEY',         'UjwA^kzCJe_qGCQ$erl;[ OYyg{1,^*)D :tWD`WnK3bv]sD[A5/VUXW$Evh&+5]' );

define( 'SECURE_AUTH_KEY',  'njm/wf!R~m*=3)]Jrr?6r8~`%-B*p:A7@2;*%% ?SGZ`k~qbvt-H5KP6sSPQd+*,' );

define( 'LOGGED_IN_KEY',    '6uL2y]k~sj?5V)]J?Q[CZu.}|Y,raLN9PuSz(ONMQL>zOW25]Im.`~:A/(Y*pGpa' );

define( 'NONCE_KEY',        'HNt;%;V_ODg[N7v<9xgm.[F9~P[=7__/nc7>zD~1 _7Bz}V}}BPYj+3,[)<`,XgJ' );

define( 'AUTH_SALT',        'oq eg~:N(aW{ <;#}j4Ir%5CzP?>,l+)z3D0j@2h?h^|l2.GHI)!)b@BOYa7 ykj' );

define( 'SECURE_AUTH_SALT', '+iwd`jMGSJQxY>g?L&,]`qt|%KU;$zJS/D C.i3JxlE9gMeXv~Yj6(GERz;iff&(' );

define( 'LOGGED_IN_SALT',   'j?,h0Uvr6GzFszD.k&E?_5j9ay%vW8L-&f,eX&nA8]QB_}gHH:vinK#f:r}wt>-' );

define( 'NONCE_SALT',       's41hjWKS)8bN7[pw$E)qIgLu6^a@#FwEGeoW[_u9iJr@~SMyB(C^*e*X3P8zZ7i3' );


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




define( 'FS_METHOD', 'direct' );
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
 */
if ( defined( 'WP_CLI' ) ) {
	$_SERVER['HTTP_HOST'] = '127.0.0.1';
}

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

/**
 * Disable pingback.ping xmlrpc method to prevent WordPress from participating in DDoS attacks
 * More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/
 */
if ( !defined( 'WP_CLI' ) ) {
	// remove x-pingback HTTP header
	add_filter("wp_headers", function($headers) {
		unset($headers["X-Pingback"]);
		return $headers;
	});
	// disable pingbacks
	add_filter( "xmlrpc_methods", function( $methods ) {
		unset( $methods["pingback.ping"] );
		return $methods;
	});
}
