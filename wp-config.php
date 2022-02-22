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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bakery' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/zAEG)UT(t jGl[%oSz6P~qR&Hc}9S~<<BjG|_c})01IjWIo@oz2XqmF{I Ltwy<' );
define( 'SECURE_AUTH_KEY',  ';0:jG9[b3Oc`On*mbbHf[4s?RRYgU,brc+MM4VP),+F{ywN&&`]*%ojE.CO+edT>' );
define( 'LOGGED_IN_KEY',    '6%5k-_~C?W|,Dv}MFbJd%Q[#5#p#;;gt;r5*58p<|uDJy:ZlGyR:v[M|^46u)[=4' );
define( 'NONCE_KEY',        '/O*n$(T`w*/uV=Wa?D#53YP)H^-,[5&dfJh=0@M2@V]5+`Wo2zpSdjq?0c +Fo h' );
define( 'AUTH_SALT',        'GI-bp{erkrw0P]IqPwP/Ok@D).}@mHVOl=bupbhTbizyz6&XeiU*9Qf1F4Fi90~A' );
define( 'SECURE_AUTH_SALT', 'C* ~Fy{>;HJ*^5kH0RxQ(;s&#c1ts[kH_4s~~G[hDpLC5l*~1Yk3GGO7frBF40^U' );
define( 'LOGGED_IN_SALT',   ')bzo8R{g2:2Zq!c(s2:/ #F^jKeQR=9]EK(gR`aiy9[V;mF6WF#F> >|{*R#HpnG' );
define( 'NONCE_SALT',       'NI!vp-4WL&KpV+ctLqyt^{yMq_9$_CM+9m]p1@ T/Gj}FnB9!Y5oyR<Q7J&ziZya' );

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
