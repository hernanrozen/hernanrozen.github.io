<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'causalsite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '*:lDp=+{ZKisA{wwh}/u`DD+/-C_cYFV=uXyDg:,bx&)0-xb.x;)Sm1I+<bE#^J^');
define('SECURE_AUTH_KEY',  'p_/ |%M|(.dF~ELY5P8~$UfW86fo^j|nOO,^W?8w(Ni>-3J2Jy3RRln15VIfJP-?');
define('LOGGED_IN_KEY',    'B9>CoqZ/}|kOa#bDBvo9c}RphyKWX]vT3-d+4q@1UzUgM-4H~`8IRr(t*r0:&E`$');
define('NONCE_KEY',        'ONZ5;a{]tSG^Y?~(g%k<`oyvRnoKL0|X[Pue&QP5pv&!E l|rw&V4*eW2`?;wtk4');
define('AUTH_SALT',        'dr`&-3rs>K-9{<3+m/]I!XWE~Hq,$]OM +;u+x^fEa-O|C~9 f|g=L:}.Xbb!bP]');
define('SECURE_AUTH_SALT', '~7DQFG,1o85[Td[t`:{ykyf>On_<x$$r+ryjnqaBbm#:IZ6[K9LT2erWUSo][#Es');
define('LOGGED_IN_SALT',   ' 1-~;MY*wUVfqG! Z>J*f,DA)5g:G[vfom.{2n|u6j1:3ch%!9_#Omn}}87)-fhg');
define('NONCE_SALT',       '#MNki|QRE^8+j5eP++i0gF!_X8(wA.8b#ryMMgBcUN!+E*ZI*#czG@3hY/q`>,Z>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
