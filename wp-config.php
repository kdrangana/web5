<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'PHA9YXtzOGw9KWVBfmt9TTYvITh6Kz8gZiZAJU0tQ3M7Xy9QfX5EdnpEIW0lX0hWI2ooSGBPaX1gLy86bkV6UQ==' );

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web5' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'VPn1EX;jPqC+L2g&&%p2FN_Qj8@@{?]u`%_fbhLgjQa~6h5sT= 99C.29;ZM.)]C' );
define( 'SECURE_AUTH_KEY',  'qk3KSqu*z(L!Su>JLdE9=m(7y#Ahhkl$~^qr3Ut2@dZcS!|E|@!*C7%cK_}7GrF:' );
define( 'LOGGED_IN_KEY',    '^u-XvsfB(SX6%k$H>`B+m~ZnA2qQo;DA{B#3DT!Ri:xH)osP{/PM^H%,6Y-9W%KP' );
define( 'NONCE_KEY',        ',^KFtLdfk S+k)M;Z>f.@z;*:oRDFQSeCJXEGOD=H2t^0BN{i@jl_,_^*|}`pyVz' );
define( 'AUTH_SALT',        '%&}%TViOw4fZ)Yb.,!MzKg_E%u,]UM4b9!]tCGr;0T?x#~|,7Nsobt3<8A9oN)yD' );
define( 'SECURE_AUTH_SALT', 'I%weK7%^5OCq55.qV~l7;n[n6tm+-!)Xwhl]N;N@mw|_kTTjP7)(bpmI&78w3HL|' );
define( 'LOGGED_IN_SALT',   'f)dz(t3~M*L{$A`yN61 wdq^JC%qjlNI2FUm=I[Ws@c@|:`HV>ia= |.g#afx(,>' );
define( 'NONCE_SALT',       'IOyY$t+^o9w#QJiT#ogy:6Pku-BDt/=[(j#Wj0E87z9xtk$VW?U_y:jk#O9G2*q[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kd5_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
