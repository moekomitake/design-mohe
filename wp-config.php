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
define('DB_NAME', 'design-mohe');

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
define('AUTH_KEY',         '9nFj_~y,^nVjEO@Y/1*#OMslt!hMHb#sly#n1M>1,Z4G,Gu<5=&+79zA31(2V;pJ');
define('SECURE_AUTH_KEY',  '}Qkw>:-kNMZ~#EXxX?d.u?6[qlfEVb/; 9:Y |t/^yrE$RvBd`*!D:!ug<uQ3[BZ');
define('LOGGED_IN_KEY',    'yl7<`$b}t+5jV9tk|#7_VAbuMw3y-GbSws{<3oi(!fMDO-*_-(60w(,4Tp5M]rF{');
define('NONCE_KEY',        'LM$JZ~m5I+CB0b~G!(4=O,a/l9+:P]+OWDak!42UOF,!{CpPmWG=*,?{BIk`[bq$');
define('AUTH_SALT',        '1;+@><m39fD~<oK]<?Z<L))%;CsDJm^2?BL/397^aepHPJL$q1yUqE@VAmp0:(h9');
define('SECURE_AUTH_SALT', '%UdOOKTqb!R+Q^}]Gw{^t.ZN$PD5wEmj@<l*&>@8>(SbnZCzpH|H!-8zPuBD=18g');
define('LOGGED_IN_SALT',   '7lhYy#R;#PX6idL@J7^TYw&f[7}Y%1XN|8tze.DPoW1vSL:4DcM<s2aBA1)bxx p');
define('NONCE_SALT',       '^bp!w[Jio.4/PC<Cul4r52:CXoayu,ndr$h4jzsINdmIXp,$BtIHc=lc5Z5g}%*e');

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
