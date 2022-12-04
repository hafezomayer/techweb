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
define( 'DB_NAME', 'techweb' );

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
define( 'AUTH_KEY',         'U7]T}Yp%W|!TX;aGKEh7i3LlT7.|3}-d-RlLo.g<3d0>ds_>Ne&Fi2/@Mj{ S|?P' );
define( 'SECURE_AUTH_KEY',  '($R)SFs0,-<A<e?=M?>cDw(08{cNh{1/@7qcn~r0r8qliWi7=DBma]OL21@PZf&g' );
define( 'LOGGED_IN_KEY',    '/1z8S~cx$Q)|gHw074HVxzXq_1#7QRXffY5-0B_x!Y~~gB`~%xY9r=HfMuK(?U-~' );
define( 'NONCE_KEY',        '/op25$G9pmDz&:=W!VS!k=%xEn]s*C^e!,HtquGI=U.$qn22(:I!,KMxg>U1{(Y?' );
define( 'AUTH_SALT',        'A(HF]#.8GzY~+,K~`G:f<|cS]p&EYmIYaVaa9>W)t&[(.dj#q;8oXb^ +dB*z(h]' );
define( 'SECURE_AUTH_SALT', 'tV0eyHS$NN+;_fpKNUX/,esX4[yHZ1+j@y~?3.0mc[#qo96B9ptf8`E!v]lNk?d8' );
define( 'LOGGED_IN_SALT',   '>]G.9s4_}|W(K6**~^B]G:Rv=8ZPtVu5N!R{XO`X!ux`9*n/p:}|0:dU)TCG.}jO' );
define( 'NONCE_SALT',       'WTir{n4gg:tVOvIY#QK$I(z,-)Ru$N<?IL$QvDi:MIqQXLaFO:n^U>}~XTmNA7IO' );

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
