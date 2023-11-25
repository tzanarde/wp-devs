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
define( 'AUTH_KEY',          'cJl7{jV;1H,sKEl1ynUtnW.E!{eZfIOu;[ES84,WK]GHLT<4<}Fuz36.Gf$rs,},' );
define( 'SECURE_AUTH_KEY',   '/+9dZD|0I?j-?r$1`Ed#j#<Tg?f!=]jyMmrKLMVTWL3|1dy2a$tOvF$BQKGttP$A' );
define( 'LOGGED_IN_KEY',     'mebEySytt00>|)Nr_oEF)-bd|WY}u@xtpv_lxX6UrsJY_Q@9KE|jNa+_w);.JAl2' );
define( 'NONCE_KEY',         '._igENC%,#KP.,,Z.$%Kz[ENOWy/;crrK!<+7cGpu:a:CKMa%tFZm9K#/:8Pb?9]' );
define( 'AUTH_SALT',         'l!TmOMOz?xY^)V$5-$&G<hrmuMmO80?;IUwM8*=f=v)1rWUZy(>AC3>o#$S>.{,7' );
define( 'SECURE_AUTH_SALT',  'pCTf`f6t>j-O45@7e$}LXpGIYBx3:5<yi]Z!S9!z6f-L&N?sL<4Q>z{Sht!iyPWm' );
define( 'LOGGED_IN_SALT',    'IS@?jOMipgP7G8Z#rzkmf~c!~V?nfBW5A:v.%7X[}[`AOgIyJ(<CK<`GinRv<&x!' );
define( 'NONCE_SALT',        ')nd|Qj?em8ZE .&mE48|~`_`~TFlwt$w!WPzk%U;XtR: Aop#9dQ`~#mQ{?Keib[' );
define( 'WP_CACHE_KEY_SALT', '@WpoU+oO4h%`j%sGdoBIs04tI9d9h9d$e3MTo`BReOiTQ8HPML6z/;0)n,C-c<Kz' );


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
