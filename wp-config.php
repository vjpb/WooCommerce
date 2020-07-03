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
define( 'DB_NAME', 'woo_commerce' );

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
define( 'AUTH_KEY',         '3r|or$J<aV1f2>mW<~v@GShVC?iniD|}i?pF+tU5vm]chuI~}x6N1=X3!h75BqI*' );
define( 'SECURE_AUTH_KEY',  'W(lpkpZ_m|5z}%H&xo>9IJ$)ISn+s9]*ZC9 P9MjN<FN0zs.N8)<gLn=2DbOx^AM' );
define( 'LOGGED_IN_KEY',    '@CU &[ou*Br&#;TcvWXFT`Lww;}*{u7K8_DP<%;f&J%6m]=j /{R9uF3hMQZQ=.5' );
define( 'NONCE_KEY',        'u)HWygd`SoSD9)Q/?LS[7i^6{OPG_-e>0_?-2=8XTwvV[n&YyJNd8r{OYsWY<w`h' );
define( 'AUTH_SALT',        '-A))(Am/c!2hrl=B+X.1]rsE6hiPter6{/:ddk8qqSTTTX;%b6}_m>@kMaIMt_b:' );
define( 'SECURE_AUTH_SALT', '@q_.A.*70v{omSLz^B-:S!|<-OHpt<s=qnRF*_l73AP?,}Ns#_ ]~n6u)F3?e2&n' );
define( 'LOGGED_IN_SALT',   'Io[@q7##c6%,v<1o/}tU#C[6L2c%HQv`i}Ol4o_VG.=dB)sqa!]; Sy:ZKZp[@9H' );
define( 'NONCE_SALT',       'G4)QEJK2zVC7VUFM*yA$%$HlV~0!;A768(2Ky;Q^zg(HsV:{4,Medw%0H.=Dt,@}' );

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
