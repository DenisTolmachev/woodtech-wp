<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define('WPCACHEHOME', '/srv/disk5/4336623/www/wp-elementor-test.pp.ua/wp-content/plugins/wp-super-cache/');
define('DB_NAME', 'woodtech');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B]xpyQ~^KLom?yy9$o9]+?@=8i0$rhCr%IYtR;gEGh5IQ[IHOO@awF&yeQRdIn=)');
define('SECURE_AUTH_KEY',  'Y!J_gwRENe*EfF [Jpp)5k=;xu_!=h^?V.2?YshN<8@8=wz4rb}<*M62/;=cV3LX');
define('LOGGED_IN_KEY',    '[NFgki~h23YvwHKqDLK+I};uI%-REEFb/5ZQ#NlNlSupy[C3}aSc[Oq-x{6SfL&g');
define('NONCE_KEY',        'vB}-16`_c&z:Qh(d1uH@o,*_1R$qkTn~jDN%I{m;I]*^qu*sJY(iyt)X7U|#i/@s');
define('AUTH_SALT',        '5pCoLRMH$|0ZJQ[kt>Rkku@q#,tf*j{PnZO9e8Cmp#{tBlXye/GJgNq};HHi 81[');
define('SECURE_AUTH_SALT', 'Ub{%/k{7VV_$L&V[6]{XZSkoZF>|T43xeHzk`<-wFxw>1qQgt<i%Rg===|DJ?T;R');
define('LOGGED_IN_SALT',   '.ej9ci3UmO%<~9U%0&OtGcP}/8g5tY3 p(*y0Pd^p+ne<q*riRY;rNl^ahWD)S7b');
define('NONCE_SALT',       '+VDIlG:F)~h2jgrMeD^@o<bj,drynam#QG DWr)*<X(Zks%YbBd]F:LeFyrx;){S');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
