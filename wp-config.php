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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testword_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'JwtZhx}YCwh!guh82|`#?M.`Q  i$~#cDQeO(V-`#ZefN[1(YT3-]fj:u_+c1~X.' );
define( 'SECURE_AUTH_KEY',  '(1>5Bz.@imI97vK$CD?t9/dZ_q.zd3vX]vTK4%?no Eh0?i^Ddym5r8U)w>ANRd?' );
define( 'LOGGED_IN_KEY',    'N &,|_ 5pRkM%i61mEC1Z6lS@#,JZ_fs7N];boG qFuhDL*-f{ 4~;<P:!S0-%j!' );
define( 'NONCE_KEY',        'q+ycAmRf5}8?;5CC=z9KDWM:{xsVhjqY|_bk&{$cdzD46rWQ#UhZ,Xhs9(Y,}0y^' );
define( 'AUTH_SALT',        '{.&=%6jpwyzPho4l=K^q/~0Eox@2oCvYRIyL2A>B~cniTG2}6C;fns8 (Hc0&E}j' );
define( 'SECURE_AUTH_SALT', 'ah-4Vpp|*GGc]SI[Ls,!V59!8SfJ&K~,;Al`/heaQQ: ]O$J~R!`TX)#sL6Fg3D?' );
define( 'LOGGED_IN_SALT',   '2ZvjJ]e*/-!@O{fm=U,bQ!Yh$aDnk,0?9~fL[9Gf$*()Y@F-~.-qbA=nr:hC?xSH' );
define( 'NONCE_SALT',       '@~V3x4p*nI69?]6zQdkj?(pXH5}3C>!sZv5<RSb( H4jR{5_I}LZH/k|:vS&JiY7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
