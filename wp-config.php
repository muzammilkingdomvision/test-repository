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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_post' );

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
define( 'AUTH_KEY',         'dj)!yOtN;2s+B+-Z;nUJCs>R`KE}=nrwR)MiF&H#`e1>5HTiyKYDUcthj5kF}H4P' );
define( 'SECURE_AUTH_KEY',  '32q[xUmfk5C/x:%.f#Ld#KE`kyEnX^h-bS%3&=PiVun?{`xUdFh[ c2}raSci^N*' );
define( 'LOGGED_IN_KEY',    'os QDcCM[_`H#I)*dY*CF[p/(E>+D4U7}:[>pj2E{9 %?*,Hf8I33/VCaw#y8l*O' );
define( 'NONCE_KEY',        'iUV![h9-<Qyz,>B&9FFD;;o}a`&OHil-Ftg]Us_qF(Z1V<e<|vbl?}:Ds3Ot6d$}' );
define( 'AUTH_SALT',        'RDI^$=:i$;Kq|G^jTSE(:Lzo|}*]y~JYt*CJR;63aMwrQyd)]+-#G7Ys73dCGrT;' );
define( 'SECURE_AUTH_SALT', '[REO6r8(+ha|!&Z@P>ZxC<fsYPX[-FD}DL6mBcP#?N;a|dkKtF[9E7OalqD;Bf; ' );
define( 'LOGGED_IN_SALT',   'o]2!.Ww8{lQ`J!C_H#qGC vNag#DjkYt>S^I;qq?OMWjCz6+)/m$X-.DW`f. W[<' );
define( 'NONCE_SALT',       'fp8)q;(6AP/H@{?Y3]ctn;%b9%Cf|Z,Y%xi`k=$k$o9+>}1/ekE]I;3)G}fwbJbV' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
