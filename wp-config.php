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
define('DB_NAME', 'testDb');

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
define('AUTH_KEY',         'T$r_@vTcT6i^= (qy/T`&+:}kEqr^f!&zfZi2b6EB)A_MGi!_pu]s.!ejEvl?$`S');
define('SECURE_AUTH_KEY',  ']T.*9NQWs$AVdLS9,(hH[<;*trT0w:~Y*~Dj<fL#G00r(IkirI$D?vbA^W6v{J7I');
define('LOGGED_IN_KEY',    '}?$riuO_}r3zqJ4sG3R#eEG&R,&Zb+|vmN!TX:,Yt6oadtnjc|/|%lD9$MSE**7d');
define('NONCE_KEY',        'qJ>U:-;<ib}-^~2hfw^sXef]pYB#_~p5ha/Zb2gw78+?y&g]NZxTbuwi*5@YL!zR');
define('AUTH_SALT',        '@hs/TunX7pL(ACU5dS11/SA0y6%8XPq~_DG{dAOTGA vQ:dGt:jfLgq?zf6.su9A');
define('SECURE_AUTH_SALT', 'T+mk=u$dF0,SLWSMo&9RU?*/t`>_UvO`6oGe9Dv`^[5qmeGXzNijG_Yz`tOk6-,y');
define('LOGGED_IN_SALT',   'D^Lst~n_xIBy)1<&(YK@t#DcvTd|zJmu8A=ZXHf|Qz}4)l%-}9NG*/uuI,w&&jrc');
define('NONCE_SALT',       'VfDqKkL`5rTb@7HP0YwZ^cM0&[d/XF/_#ey^#{[(]v5j9k(5jRwV`Sc_ttoe-*y1');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
