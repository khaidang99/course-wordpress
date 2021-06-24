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
define( 'DB_NAME', 'course' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mật khẩu' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:1434' );

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
define( 'AUTH_KEY',         'n9D4<5g)g2l/Jwf4}ZRAbxz+>=4.:Gm:]q|Mb-$Ls%]W[D~5MR@^q9}QO<S2aTA!' );
define( 'SECURE_AUTH_KEY',  'eulwvQ*WEyFkuicSxb_Nc1>ran@,u3.^3__}!r>;!-w&_o=rpI-.YDSa2]j, P6e' );
define( 'LOGGED_IN_KEY',    'itaIW3?RQYe4(D%f<c}NI`Mh8GGUq2wa{[j>SyF5Z[iL?g@?vNwI;,G;2}QdafX#' );
define( 'NONCE_KEY',        'tZC(rHmn^QhXIK/#n0B y=F0LS.tTxdfYnH@<IZI]K^-;YH5w*s`%O@e3-7H[%4I' );
define( 'AUTH_SALT',        'Op7/sHU[.s(^wAbFhR7K&y~WRs_=2WU-h` vhsZIF;Z)MZcN[Umw]V#f 343Y?Mn' );
define( 'SECURE_AUTH_SALT', ')9KZ~rwx97jl+7_8~r|BT](qCb&*t]r_j&NMl$pX ^D-o@-5%UH>*^EVp kli=}A' );
define( 'LOGGED_IN_SALT',   'OK<d,,=K1Y#~RY_J1dZ[oV35%+./HiX3)s.}2Xb92Ni[yw){EwQ?*X/b)qF&pQV!' );
define( 'NONCE_SALT',       '26P9M5S)Zae(Xx,mo@p@9%!$rHx|>wt(b^F/E@1?!) mKAYD#yvpX.Z$qNUB@|/a' );

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
