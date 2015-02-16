<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'SFpn5sZP2W');

/** MySQL hostname */
define('DB_HOST', '128.199.237.222');

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
define('AUTH_KEY',         '_GA0_9`NxDcfTbE@-=Scw@d ac`ln| ^&8?YXXnA-Z+w6||~6&+/!NS:!+ir7;dQ');
define('SECURE_AUTH_KEY',  '*4lyl*nZNkm71CeVRV]&!n,79JZ_k~I@YWI`)08-mdW+61{R2`![f#[ad_1%}4,f');
define('LOGGED_IN_KEY',    '#b9R!u,Fi*St%tzaG_F6FPddtE`G|Br9?<3.B/&a(t|+bEe<t43|&?9y_H+2dPM ');
define('NONCE_KEY',        '_2S|:uaoYV 52<|-eSVOx>W[#j0x05l}3Kn F1?-S/l+dSpk:R=^jor^.I$3*RIS');
define('AUTH_SALT',        'q!At7Sqfv-0tVYa-6_0a::(YOy,$mC1-j+W&e/aH+BKuS<&%CCE`I-(Iz4X-EiF{');
define('SECURE_AUTH_SALT', '|pT#V.+PPRW}Ju8|NyvsZ?)tcved*)9.:J=N-:vTh/j&;5Hep`5e>+F,~|cxMdEs');
define('LOGGED_IN_SALT',   '^%-5=h)[Yb?@~pcRu;<#s0P*/!-n_R/e86Ki8lh+3eFsT[?i7H?2&`m&Zf+F2s)_');
define('NONCE_SALT',       'W:pyt3n<LU.&mqNq_T`W}-{iDlJ^ybER@pAFn[oslmFzG$]<ZYJT|YsZz~-c]-,R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
