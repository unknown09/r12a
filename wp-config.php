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
define('DB_NAME', 'rivnenska12a');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '011190oo');

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
define('AUTH_KEY',         'owl?Sxh>juncyjFakvdAs0634h6/X3zW>m$f=2m&U/2gxOMfhW-*x0.e&$_u`+Sb');
define('SECURE_AUTH_KEY',  '19o3Q$`UgSTd/b=gz$]6rrezJHDVJAKbX!kO$bO5+!84gGTPgj;MLSprNnzH859B');
define('LOGGED_IN_KEY',    '=X{BZVE`W5dhBI2kNM}N2lWnI>CByMW>eQOTeqE[H>g_#m0Fp4:1u/&t+1es]r|l');
define('NONCE_KEY',        'keDOI+~~m(%3D!_/U-$h;P|_ -(^pp;Y0;ut(9w?|Ks(@ts6J]h]HJ5^0V%Bp0D=');
define('AUTH_SALT',        'Xq?OhN><<])r3UwPH%E[}NHk)MrBVQf]Q!am>4:f_qWofpNS!|w`vS+1D^X-5kM6');
define('SECURE_AUTH_SALT', '0OlH!3JIo: 4R3~-lu=`q`JgEeRk^D-xjjr/JciHvr9*?+N]xBOOqTG6=CAhY@>y');
define('LOGGED_IN_SALT',   '>c*,c,C;s@BMH)<v)IS>IC@*(iDW>J8FK}f3QV$bvWz&#5V=ogfa>V[Ro}+`/m<m');
define('NONCE_SALT',       'A7nrUe>Hi~oy.2:NWjyEVGK>Mk;Rl9rFfHho4/jgz-fVlyU;41WDd}xJJs@*jSn[');

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
