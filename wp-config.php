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
define('DB_NAME', 'jon');

/** MySQL database username */
define('DB_USER', 'nicole');

/** MySQL database password */
define('DB_PASSWORD', 'sevenfourninethree');

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
define('AUTH_KEY',         'l{)j`SOK.ic2o- `kY<4 `Zje|K-pdJ{jo=%iVUgdAC_BPrljU !GzUzpenlbd,S');
define('SECURE_AUTH_KEY',  'K;xyqUR5F`tb3UZ4+^H/h5wA|nQQ1kBnOaO(C|]0+j}>pvmjl!|t}C)l=AOANgyO');
define('LOGGED_IN_KEY',    'cRp [<C6_Cm@`Qi$;?00!_2|kHB(NjADGD=29<++E!pctbX?]zg]zij+,7$,u|.|');
define('NONCE_KEY',        'C3K<Z<~,-rSBz4xV![E`4AwE4EO|lkmpb,p|-+wC^G{=CvKi,*,URKE|C~x4@do^');
define('AUTH_SALT',        ')D{P5x-!;`R}jETw;jo+G-8:MNHe_cGZK^^ZVS%E1+-^-PTE/N;!MO+eAYzQc<fd');
define('SECURE_AUTH_SALT', '_F##/ITHsptxv&{j_= 2Xt^[[F]y0 sfU9{i[V+i}AZbdibe,L?qtkkybmrHlfd=');
define('LOGGED_IN_SALT',   'IRQL/5z;)`sTrQ,$9ni8@807X Be|oYP^>+1(6RN|fZIhXi2[[HI:/0m7RIgNG[k');
define('NONCE_SALT',       '-{P~e+!ceFkyI>V0?tvu.^&zO9AI|kLE%DA-C;X}E/.Y`[C,n/(+<K^O9i-]4]J2');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
