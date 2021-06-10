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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'b^A,Dw!eP]|0KFJ46eNk,lf|S+xJzLRAD[;y!%#!}wU ^DnGnneiwxn9Fp>0>?J=' );
define( 'SECURE_AUTH_KEY',  'hq5wOm&.n|}znj`T/RQn(CbV_tQIxO@px[n|+lud-%hOV-$Ug2fdIWR|GH@xp[y8' );
define( 'LOGGED_IN_KEY',    'a-<Ye)h0C5c<U-K=iPlVmxu?ix1s^O[554SGAUCPde&amo%zg4>zV7S+IFGk;A~X' );
define( 'NONCE_KEY',        '-p^J62qHzUb!LWJN3AW:JxASosBo)6wGPf&Jp<@8HK7K5.2UBkC<4Ag7Xfgd{KE9' );
define( 'AUTH_SALT',        '3RM+fxwcXrXHb|T(IxL^Li[U6qwtMCBE%j2G]4+$kQfJWuCx,X{T%yC}TJarJd7A' );
define( 'SECURE_AUTH_SALT', 'VS?^4U^r_1roDlB5W2 N17uSfFt5lpw$bgB,( /e!|eXR4mE/q&(,z;Xf&HClJDK' );
define( 'LOGGED_IN_SALT',   'XPeyGQBnI4M]d*X*89+T* Wg6.-6SBHM1zXzHDvoi E*8C3[.$+LkR%sSk2n1msx' );
define( 'NONCE_SALT',       ',8=7n{}j+*jlg<>1n/.yn6>ZPF.<!Kpoa_OAOklJm839}dP0CkMn>[X_Yq!(}NYQ' );

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
