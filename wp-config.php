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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define( 'WP_HOME', 'http://tophat.vin/freelancedc' );
define( 'WP_SITEURL', 'http://tophat.vin/freelancedc' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'freelance' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|BJlRF7nqN $o%O-J4rt8DK5.(spwCFIP&YPq-L;##R;?/O]KuRDqA?mZGaUc%b|' );
define( 'SECURE_AUTH_KEY',  '{QX0><:/Y@`8`Y_T/(7H}&H&IY@?dl=xmeaQP~hy3#on`b<okEe/Epvn^ReJR4Zd' );
define( 'LOGGED_IN_KEY',    'FFN-h]nbN]jE8/XQkd]Yx/|*EPK,?&qEFBlX[g|=H3EE9J5E^lpj&z~CEr(?-QVM' );
define( 'NONCE_KEY',        '~}]@Y}v>C,{5^1I^c/2z10#%0v7GzzOtE3&vvdcn`r8ev,YH #o<Xzq/W_h9~pAu' );
define( 'AUTH_SALT',        'n03:0/!i(IIkhq]x0MDz/w{/B4X ]s Z+}o4L<;r.R:1}+z=0>2{/RY;tXJ|:]L~' );
define( 'SECURE_AUTH_SALT', '&)Fu!viqw_JCa%$pv[v3wizdw}Ra{ztV.3H];p_g0o|<vv!-9;;|(g;|:B!8I/qo' );
define( 'LOGGED_IN_SALT',   '@aLa$@Wmg]o__^p/U.Sp%Tc}ykuk/:qDpQAkH;Cw,{_uOEalhr#MD*GM+9$pk [C' );
define( 'NONCE_SALT',       'X3.rs+%-VY.,.m:KpF8x+7(-7@xJ!u91sFJGsM[R;Zd|fyznTNW1ZB@o{t[C#DCK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dcfree_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
