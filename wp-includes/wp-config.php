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
define('DB_NAME', 'zoesiylw_portfolio');

/** MySQL database username */
define('DB_USER', 'zoesiylw_zoe');

/** MySQL database password */
define('DB_PASSWORD', 'P1ssflaps!');

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
define('AUTH_KEY',         '[!55iSLIP7>=LY@h{B^lL$Pp#*avIH_bI8SAw/a#/H?Sm3L&!bFTI4e0x;Nsw9.?');
define('SECURE_AUTH_KEY',  '@<qW8K 1pd:`1CF&M3fd,azTJ.;pYMYKi{1D2%b7-,7<s2bhr0YFi|h0-6naz=ES');
define('LOGGED_IN_KEY',    '8Nvu3dpg*J{h/@eUF&yf[BWhR|@P.h>d(4)a/a&Tvl#)%5V~[P.yijJbLs?>8f(h');
define('NONCE_KEY',        '^zME3}9<~d{{t=1c< dI=vV~3MROOhTP/AXJz-`4r25jU*2bZehL>qva>9kZ5W#X');
define('AUTH_SALT',        ' Sb@lJ{ &PWx;l|CGU>r|po1`h[/XT5PXS.BptP1w!QC2%i6Sv#dR?Xnc`/~[+vz');
define('SECURE_AUTH_SALT', '{VPy*,5t<1#%^rPzxW4B@X`}cUb.pF+Ku`L`uTV7 SNQNad]doSv$(:dzCK8ra&9');
define('LOGGED_IN_SALT',   'I r> $-qKowOz;i9tDCD<Lpf#L5n8!lE,2QK3mpGl1r(qTDEw umX%D~kVH^)=kF');
define('NONCE_SALT',       '3Y4,EZMX.( 1m&FQ:}VSaUQv>FQcdQ.!qY3?j`EIJk&sm!0Y5Zuv=dXK97s:)J0i');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
