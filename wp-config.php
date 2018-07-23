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
define('DB_NAME', '225');

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
define('AUTH_KEY',         'd[o+o)1<NyA;me{(BHlJXp2g_N~gO)s| L3:id,J[3h2bVJa ,e.I LH;D`w<2S.');
define('SECURE_AUTH_KEY',  'AD%)r| (8Z@2eM8:9F@i=w_ZJJ/o):=}()a3Lx@toT^4*A8ia$bi~>N~(jNxORbP');
define('LOGGED_IN_KEY',    'X+9+v$r=}y4{qVXl]RiBci!=/NzlZEY+-Gy)@~^<]!,aZpj@@XlTbLn6xNak&W@e');
define('NONCE_KEY',        '{P32N-zja4R,SRY#~I.<Gu..T5%%pG:O*N_i1?|5-/f2GoJ{oRaDc?OTpm@vQ%HA');
define('AUTH_SALT',        'GUk@of~N)pAPNr5AQysvfybukmR1)W+XV]?gS$(eid6 #NFIex/MV?moWCh=9&r)');
define('SECURE_AUTH_SALT', '^?mG2 &/>5Wx:GNG]VoEXy:5)*D{fZ:O^HID?n4XM50KXO}I$2U>u}#3bn]f$*25');
define('LOGGED_IN_SALT',   'Bn=nepN7@ydv7)*t>gwy,b6s)$3b3XV+{q<Kk%%BG6Y#wfYQ$1,^]+8ft1$7_Ou9');
define('NONCE_SALT',       '&4*y0L]^3or:c`,@&ivn4nTO8S=hZo`xhnAnab9r.ElG*=4gLDDPOPfl8ml}e8kj');

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
