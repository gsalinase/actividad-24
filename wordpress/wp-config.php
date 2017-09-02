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
define('DB_NAME', 'actividad_24');

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
define('AUTH_KEY',         'o5>bM2z<A=eXQeic}X]G^xu)}E`JrUa:5.IHZk/))yo{H^o]xe6mrNpLjp,eL1n`');
define('SECURE_AUTH_KEY',  '[)!OrxQx5;.v11.~v|!e%EpVF%u[3@_:)/q:#;B:SpFg;0)kLkDgX()i/5J^r:M ');
define('LOGGED_IN_KEY',    'z?L<F-L{>0cD?oj kMN:*(AN^N(KtEV4T6rNe+OnbtsE0AB[zNH84 Ard|tL=,{l');
define('NONCE_KEY',        'i6,7{|4Tvw#LpKpJ%dc1ak8H?E^rh[_c%s&>BiWmKXqOaAY1QD9/}jbRqti(WYlV');
define('AUTH_SALT',        'Ey5DrUxR#9ox#`rc^V3NdK(KxASQTD}RcEKC%lgY!2~-4*J;5x5@[5`b[M{[j>9$');
define('SECURE_AUTH_SALT', 'L6  (n.[J6()2j9ViHbh.Yw2U&_G+U]|gWunq{V3Rfx:^!fB%@y/-}I[bgNilksM');
define('LOGGED_IN_SALT',   '{d5Wu/v:DscE/)ZOj*|IM&;>waPj4|4lL#dc<:fPTwQ4KHF%qJ0v+:.md|%WU]?M');
define('NONCE_SALT',       '. 1[YxHwV@X}qK0}@!>p+LXP71f[Q-*62Uj{0/Tc;-l)`1(KL7h[RL^|Uf^?}sq-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ac_';

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
