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
define('DB_NAME', 'fiverr1');

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
define('AUTH_KEY',         'OTG eNw[&k4E%6RR?7>yj3:fdhUKoxmgzj1,XYf-Q`v,-x_Ba/PUj@$d&w>B<iPU');
define('SECURE_AUTH_KEY',  'm~#E64XJX}4|r8Uyb-n)^{zy_E#6o]4GTg*Y]6/_tS.E0W=12g,AHKv_|?lU]F=T');
define('LOGGED_IN_KEY',    '&X9Y glV=fBM)PJ5/049*5qGI6O)`$~oIus1OT5*4uIBd; H,$r,&AI`^<NgZYS[');
define('NONCE_KEY',        '6r|o?8ZevkxrXZqcm43]/[&0Y!d&QpZYU6?g=v=}#*H_w6#=>k[tx4(cad4j3B!!');
define('AUTH_SALT',        '@r>+H6g,%*!>N!_L.>;/q^ge L?z9*-0P6LzL!3CK]y~LE%LA_CS#.ci@%uA<$pu');
define('SECURE_AUTH_SALT', 'r0#y!nY%oZdqabWw~4iaLQYQ2[:l4tT):4UB!U0&8s^YzDS|G$x|*WM9obozA<wU');
define('LOGGED_IN_SALT',   'L1(V#w<s+O3&5>>2kiZo~MyAyw3V_2z(e@$4BDJ!{!/e{/IRC4BA}>QPqrEm^v-X');
define('NONCE_SALT',       'JvE1;O9tnslE3NIH/B*0]`r^4gqgZi5n;xNOTRwY<)zp:tFvSHcV2[~Vu4!.wzPs');

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
