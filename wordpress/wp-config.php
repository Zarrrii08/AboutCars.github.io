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
define( 'DB_NAME', 'wp-project' );

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
define( 'AUTH_KEY',         '>k@pS+!6&:w#ZE%tQ!O`T{G;7vBHE5%`~k&d4RCw5>*86R,]UU65;t(nP]^**!q2' );
define( 'SECURE_AUTH_KEY',  '^eQu L+]0%/4S*/sQfeAWSZ@(*s~Q$;77sX[(w.^`M;3),6UOdKOCzKc|u.cr,?&' );
define( 'LOGGED_IN_KEY',    'P.Sm|rZd@.b1Ag@(CPWTr##j>A8+;?b:[(Y+j)gl%e{#OwgLMVi.f#x,l4}%I;br' );
define( 'NONCE_KEY',        'nY9m?/]{do%q5b!Z.r3~<$[s>k9ES>mh2k9gzn~<QY}FF:qr^,H9GH#3iW#Ge%Os' );
define( 'AUTH_SALT',        ']YIe2CWlXaPVzi3hN^7>5*H{I$c pV-B7:7xDw-Nb0kyGnRZi%;{<g~hS1r2>`ev' );
define( 'SECURE_AUTH_SALT', '}@-+hoh&^*ky}W-PuK8zy|~L>E_fth m[CQKZ:h?`_]Y5@U*!tmfI]lwI`}Z`5`J' );
define( 'LOGGED_IN_SALT',   '/&t/M/,&R<sTA$5q r!F21j=c2KUdM/KA&uA(v6=#abjTqh6]BoUNXi9()(p?*JN' );
define( 'NONCE_SALT',       '%qYZ4D%ix*$V=^Uu8AI>U?~L;x75/oM p9ZJaRC C(IWTg0Xq)Svh@U&bECiI3D(' );

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
