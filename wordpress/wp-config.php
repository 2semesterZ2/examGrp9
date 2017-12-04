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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'U)~qoeJqdX/Z9z0qYr(r:}~K:9vBq8RVq=Uy(@`(_7%f%`ja3UCv!VpOXf__BDte');
define('SECURE_AUTH_KEY',  'u{C/P_Wt7dr!?TOI}vgHS`pB&KlL?+w0M8>iv<{o |@4wOi]b6,XUNc-F2X6;K.%');
define('LOGGED_IN_KEY',    'z2B|JSitGI9j4j4fct%[eBzB$DN5`O$4nXQ|LpX}0j*+$5J! IN](=*J-d7==Qq4');
define('NONCE_KEY',        'B`dRov*`FO$KZjS6+o6HVL]T/%lFos>dXl)Ws5=uZ<gxa@&fqA|_d~Is+3Z$(:N`');
define('AUTH_SALT',        ')BPE0V>`$[MZgC=l&IzfYo,[Se!iM.XDo c/gXC0hXf8.5@@c #:Wzw&k|`Q9Hx[');
define('SECURE_AUTH_SALT', 'bqg`wW[@,Q9|,nc#DIK);&5%oK0fMX~Dsh2:(0$lT.$|b?mI4lQE]Pq4#5LbHw20');
define('LOGGED_IN_SALT',   '8MH8?JbwU)]deQST(PRV@`F<lQCyh/NnUuo@#!u$mOG]g>YHMCj>ILH?~0FpYu*8');
define('NONCE_SALT',       '!(G}a/,qXmlBLYJ4#hUgLwd7N>%n=Us-(Kd/P$^y)&kDTR%c:Je/oKS@x>GGI0sG');

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
