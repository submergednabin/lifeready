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
define('DB_NAME', 'life_theme');

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
define('AUTH_KEY',         'YOfGJqtq-IU>?LFj3|y]3&=.x&k0sW[sP83Ba*^dQ:*M_x7RH|@5HKa*s/Ha80xe');
define('SECURE_AUTH_KEY',  'E^s1Y5Hz=~;Un4scyJZX)[Wd3uw#puznei^X3gK]fCzpb%2ye9A/);+k~OD>e>xO');
define('LOGGED_IN_KEY',    '-r+ qt.J1B6/&W~gFm2?%-AB#q/B)|aVd}@]_<(Z|`GXWvS5wD{QD#Pmq?V&.?Cb');
define('NONCE_KEY',        'zIx,td h4eJ7XP1f5tH0+oI{uUV)aIex{c(+oaY;l|)+K2f3D[LVAN@Yo0[;gYB;');
define('AUTH_SALT',        'x^qzEpvZi L_ZvEAzf{FN{--)4b9C|p+AA>B{~VIv[%=@XBf~UU]Ub <kn}yfy@@');
define('SECURE_AUTH_SALT', '%1yl5P|}1O1!BG0gzX%a?0[<Kq42T}@LrLXo#DICJ]!nU/@n2K}H(JQm{Z7FK@l~');
define('LOGGED_IN_SALT',   '2~RV{h]D6;-A9zx.|{hzRQ^::s#>v9x]&><%0x%->Bo^x< ]/.9b`fJ;QcBze^Js');
define('NONCE_SALT',       'nLRQz/ZW2oo$*sF(c=2H|Fs$b/x+z^C `[}h*g8UPDR#?6:G-)D~0EI|t-ei}hp|');

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
