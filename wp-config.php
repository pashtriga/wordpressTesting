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
define( 'DB_NAME', 'wpTestSite' );

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
define( 'AUTH_KEY',         '?)YeYtAaoLWgeL[{Y (x:>edZ#(r@u(7sMj#M40K GI)<n*4:R#,L(|sh1xL!xkC' );
define( 'SECURE_AUTH_KEY',  '=U&2Wql78v4Ja?&)n)6u41WZ}z)bv.vSB1,XWr_Lj%ToUUam=rbE71Y6f{x5R;D_' );
define( 'LOGGED_IN_KEY',    '4(SZGu,C96s73}b4?,9eRZL<=7!!%15`4hkK47-gsbLe~h.*ado8t^E.jbZIM~]0' );
define( 'NONCE_KEY',        'K:5)rxX<qy>p0{i..ILQ1S>AvZo183$Zu<TWznPVe=AgamxtI1YnMhd}GXbz9BA8' );
define( 'AUTH_SALT',        'nzVbBB&*=VnoqAJE(h/DbZxJGA}^wMts1/a.ml*I{jS_57%y3]le5Bj>n|3kNq89' );
define( 'SECURE_AUTH_SALT', 'I$8XX47vPp[t1Zkpm}<SAdpN1|U{WSH;`c-_@q_MHY]&6xK_d?}z-m!7>O!(Z>U:' );
define( 'LOGGED_IN_SALT',   'b%`,O7QR|h8__P:O}xrD/EdqXKuyGZ%$1sQh8+b=IIu/SA20/6ra8tPU]GeqfiZt' );
define( 'NONCE_SALT',       ';q8C)%H]g93pC^SK<40ZHp/[KMRg0#E[KH[ODvM|m^dM6_A$+D!,iAlVR/DPI`#M' );

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
