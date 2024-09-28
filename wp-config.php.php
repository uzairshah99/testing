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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY',         '69|.J*]F7NKDcm}SW2E+mI7?v@O9%<o6[A/S$^PY|-}H/}HQ@CuQmS^L5{}Id,V]' );
define( 'SECURE_AUTH_KEY',  'yR17kTW&+Ym|)+(6J,6B3#+/!69QR7S{^|Js|5R+ L}oSvljDs^W0X]mRyiLX{jN' );
define( 'LOGGED_IN_KEY',    '+]X-OURo!9L|3rI-`.LW`!83=qI*D+4i[+Woo{(<G<?_)!h5eBF?`qaO9Z$(l10V' );
define( 'NONCE_KEY',        '*,k0.jeG#S0Mxp*r5=ZJ0o}vqG|j+NDE@={0&}3n)`JY_D-8|f9xC.v!90c+rS6R' );
define( 'AUTH_SALT',        'FWaBf6p MO_?|+YN&3>CG#QSEOsY{q*o;SG*4kiPY&J592w-@:IJ2N=<g?d?+.kh' );
define( 'SECURE_AUTH_SALT', '-cK2}e:a{J6JcIsWy_NK|VwC6M(9fw1OyUVhTP|LEH%N}|P.-A9,&|Z#DJFkK%}+' );
define( 'LOGGED_IN_SALT',   '>W(Ko? xA-SW9K;$_Xl@XV+m!J/isye~$VTu74dP]O;h*wDm!pBL!JA<j8O=+:YA' );
define( 'NONCE_SALT',       'T2Ol|@Pc_bI,2UwmA+l@.GSsns-:`1LI6S#_iK=;k+C6L](Fr<[8iUKLkC#kQZk5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mysecureprefix_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
