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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yahya_tech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'sbVcR)c#f5,{C;$:R]>[Ehm!@a~]Wia!B~p/t@(K9H#pf`M^JQd^/:XBtd83n 7.' );
define( 'SECURE_AUTH_KEY',  'Uo!%2XvTD~A7h~}Ph`N?P^GrmO9J;;{O=-j]s64;24E=QJd]LU9<Xk_8s1h=~`%a' );
define( 'LOGGED_IN_KEY',    'WVr}GA-0nmeZYgB*7+LOoZB%M:AxS7VbT2uS:trOsSaU#._r5]9~xed}i-*{gS-|' );
define( 'NONCE_KEY',        ':H;w-~`?TESmUzf_mb(lb}I|WRfY&RL(rx?a&/j6SMA1^C$+>/!6uB_OBm VB?aH' );
define( 'AUTH_SALT',        'H*QsvoM@5{&d&-oluQRj F)vSSM,O9}*IFr-2Vf+bfvE(^8[c B`v,3$CH%)`h#q' );
define( 'SECURE_AUTH_SALT', 'J^lx~qcgCEC||MN%DwM|(5Kx/3Q,we9X>Re8!N0Qhd/O4,Dh.OW4C[Es6%x><6L>' );
define( 'LOGGED_IN_SALT',   '`h)_:v4,+J@LRz$y?d}X%wq%o^y0abHN^P^PC)BhOS+<W.qKMiT|OjzbB8Zew%*1' );
define( 'NONCE_SALT',       'P}&XZfmLZSDO6@vgyg]Oy@I3ulVPlY?tG@]B`q]xvoZ/)8D}&9sbO~^J^c}9P@x2' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
