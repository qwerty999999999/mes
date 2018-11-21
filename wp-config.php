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
define('DB_NAME', 'mes_forum');

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
define('AUTH_KEY',         'H}xT x=7a.2L9AU_$`odk-i{ng0Tm1I-vpM&C ,=&spr(3,JGTFJTL4C6YD^?M:9');
define('SECURE_AUTH_KEY',  'Q[Y*WXP*z.z}=bH}}1-{!z39,?g[_m@ZW=cyDeR`|f)D`,dt=37aA$a1X~}4v-{1');
define('LOGGED_IN_KEY',    'H[zpjUZGQPpL~4Ku@@+w9,,Z^<)}_{63RTG!&%56{OSimY)!#h8nVQE`S{eZVHu|');
define('NONCE_KEY',        '9e+G`-7+cWcg4i=X[yFe g6;}XdC1^QF[I?Odus0D(UQi?g#()XLo=HsgT1tOe*S');
define('AUTH_SALT',        'NFP^Tw|vx;~9zO.z[YJJRgbExbV~&m<q`pJN{bACwRA|b/jj^O. 2 YT-n}jT-Ki');
define('SECURE_AUTH_SALT', '/7DIWO-,!1J7okS?9Hf4[jo#JE2,0v5C]GFiQjg%5F~m4MECO3L@WKRk!];JMWHA');
define('LOGGED_IN_SALT',   '#!ABgYodT{[97P(dBJ5h>L)^.RO)F6|%D`5t5:jboL<$X7dkK^;JE_vdboD2W )-');
define('NONCE_SALT',       '5YKaCaa/BMCB!_t7ccfP]q0nTn6fG5E qm({}_YP@WEU>l~rEy1,_%x~c Hq0Ru)');

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
