<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'dothethao68');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vertrigo');

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
define('AUTH_KEY',         'GU?Q/c$~etY 2T*vq]F_:UaNAC(V>N6/&GmfrD),j=ghN`.vt -Z]F6G9>O%-ydw');
define('SECURE_AUTH_KEY',  'Fpk!-w#GXA |@oe{;*=XT(bd&Qk tRIk1X>_QAlbQXK~/uC1  _dU:!Fb~R%{$[:');
define('LOGGED_IN_KEY',    'KZJ?kj[!+A7}dKQ7PJh@BU5aE/&avEk({}=1VUNN`,mzTi,C4N#K[/<7NF,`6B-[');
define('NONCE_KEY',        'uIf,a>N}BA%%%~1L DS{]qNspQ0*;b8#VYywp>d.BqW[{~HsYxh%6|iOQ7VLk=8b');
define('AUTH_SALT',        'y(v/{vPD:LR(5Sg1wpvY(y9w,@*A*9myRKJ=>4J0G8zd[rk&6oWy?4v`he.Y/nXp');
define('SECURE_AUTH_SALT', '7.++!LPt7vFA7-RS ^nH*q;5pz+J{~xcmj-aQA=}XX6b.^>.c>#rkVO:ISJ@Ki.:');
define('LOGGED_IN_SALT',   '~kQDR#pg!V`esL[Fd* NO!= %QcE9(Iv o0:J4{imngj)nV:1Fi;n.S;Z|0$Sa[S');
define('NONCE_SALT',       'v{]o%<GO2a;iKQiL3?5:r(IP5wAR#_E_U.XM ?[WrN.V%8NP%k.|E5l/2TzAI+xO');

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
