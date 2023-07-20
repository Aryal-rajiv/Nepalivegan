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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Nepalivegan' );

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
define( 'AUTH_KEY',         '4K0weLqzLl9Sm=>J7 m-{SW>)y8e@w[G:p%db@cCXtEVf/8w=>$UrGh8(G!>KrU@' );
define( 'SECURE_AUTH_KEY',  '*]ASj|rUmMNW&Iv[/O3K/2 0gw~Xw#!BuH@v{]06d0>iX>Ed|=}9WT+5lnT0:qE;' );
define( 'LOGGED_IN_KEY',    'P$T#(m*/wIg|-9za,w+bZ%(25Nqf^Q*nKd9:$VDyd.~8Kh>o%Cu9pTPjC-h;#E=g' );
define( 'NONCE_KEY',        '@dEr<n4.e+kG^wR*/2Is?9{&7Ay_uZ//m7 gX7&fy6TXlL=*xV-~E/1WNJ5+8dP=' );
define( 'AUTH_SALT',        'g8n#14?EhR96DP.3=nTqGv`R:0)K_49n@]:b#gcdZ68izJy/m%yYOa%cQ%|upXmX' );
define( 'SECURE_AUTH_SALT', 'TG,=R*Ms_3p-Yt/,wdffiOtbjKWT;^o[Ta;Y ^:mx@OL>kUQA+_<14zRRjE -DS5' );
define( 'LOGGED_IN_SALT',   'kK6m)Kt[jl@PZn%b)rx%g!O~5O`n|H;fIs3jkolJ@LOyE[|05_|-X~BP2|Ww-v( ' );
define( 'NONCE_SALT',       'pBXs5TF6-@Aid3f^>9_Me_HW~vjqX+~x=5bk{NplubuNmlu6E)+9?:%NU?>[Q[~s' );

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
