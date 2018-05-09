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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'asm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H~~U!C 2 -}4d<w#yT2%lrOXxJTPT3r1B2YlL+87,jVXyFgE+k>$bTxV_#3ak.Y=');
define('SECURE_AUTH_KEY',  ';+NRiu 6..:NRjU<?rw#.a1wnAjD#>L]P7+K*>tU13@Lz*z[@d3]abgN(/|)Zw.g');
define('LOGGED_IN_KEY',    'F>Cf|T(l8)[+}!AU;IblLNeH O{vh@==GI5KY/0@yeqYFMzHTDgT>YJ7w<-s/Yrw');
define('NONCE_KEY',        'zDX>4YyHeI(NfE34bxrn,jW97^`UYjMz>UK$u}X%>dXk 6O>NL{/:Np|O.r+V-j;');
define('AUTH_SALT',        'v }sMu5~}=e=v(WhSDY*<vTI*ia0O~g]i]Nrtr:*SnGBHh!DqQyR%KDv/KfF.LwJ');
define('SECURE_AUTH_SALT', '=>CJ5)s}+1Dw(8I%~glc/`.Tqr%WM!FC&Fs!q`hZ8bFVVpa~rZi=.22Dg1Eu{9-Z');
define('LOGGED_IN_SALT',   'r1@Nv`iWG!6$h,PDLvsQcjM$8Fw~OC+Tzen}!wm`T#;>{=;xRD}Lhy^|bTaac[%&');
define('NONCE_SALT',       '(X7Ae;v8*%NleJS8`w!VXeEZCj74?KK-~@=<@g+bS%d;_cV}x` #<_>@UUn`)i#i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
