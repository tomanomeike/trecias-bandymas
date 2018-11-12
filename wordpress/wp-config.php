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
define('DB_NAME', 'trecias-bandymas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'cfzk(R OY?HL,udKo<d`;=p7^(4q_&O~?zyAq @t_1KJjQO_[oIX}Z5`@iQ;[Cg~');
define('SECURE_AUTH_KEY',  'J(0an(W&D(0?#oK(a(#:tr)m[l@#)]l!2|oQ9B5S}tOy]!5SZ;6T{;)RIRxiJdbN');
define('LOGGED_IN_KEY',    'tURj]?x?n059)Mp4-(O!.}9[L)UVXKj#~;*2;1,InqeK1pd@o6$cqo>j)UzDTE{#');
define('NONCE_KEY',        ')moTFuMZ`xbpLL?^LdL?TV( rOe>=?+ZmoHgJBk3m1Y0D1KK7L,6yR._xe0m1gb.');
define('AUTH_SALT',        ';LcR?!]m|W(!/hW})V(]m(RbCunD3ZIuY!O8b0uxo{4ySq5/A@pWn6 &%?4@U0d9');
define('SECURE_AUTH_SALT', '*^ZnFA*$QubuV.<x<Ic(a@nG~2DwX[~3M`dLFhm7ZYjCQD9CDH*y7vz1)^U+cAO4');
define('LOGGED_IN_SALT',   'FPXB@m/Tj/Hib G<}8<7),4:{EVY[<dRb59=Rz=sg8}<Frj #oGf?_f^t?->MaqY');
define('NONCE_SALT',       'RF>nB*XK@^XgR+CodcyQzI~M7A4B>OR^IW%J,+p7|qr2D!BCz13?c[c}L2}0@BS5');

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
