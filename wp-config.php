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
define( 'DB_NAME', 'bymabe_online_db' );

/** Database username */
define( 'DB_USER', 'bymabe_online' );

/** Database password */
define( 'DB_PASSWORD', 't54a9EbFknzhfpAxgwdm' );

/** Database hostname */
define( 'DB_HOST', 'mysql89.unoeuro.com' );

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
define( 'AUTH_KEY',         '<s$,m<eI3=LZ7An0sGTlwWeTri<T1xDRgS:&6C# ^M|i z]L=jf+s! <M^_kNW5[' );
define( 'SECURE_AUTH_KEY',  'VQE7a8enk~4=6;} E=$~l9>n@f&oe-w6B-1]>9k /0V74F<y!+p@76yUND>~*J0 ' );
define( 'LOGGED_IN_KEY',    '[jN {Bu$kvPN_Qw(Z#e1Q,2jB3+m2$+aX1%j#zdM:o>{bWB5~J6`Lne#JjeP~4Eb' );
define( 'NONCE_KEY',        'V^[.SIn,qVwwdsE(<rvAY?{%w$FVi@+tmeZaaVAN|pt1*$kEemkeH{9-$C[ZuG`3' );
define( 'AUTH_SALT',        ' dBgEx%?2E(BxHf76=##W<QgFWB=1x-{<N&}=18v9^#_D3Qp=!X0qA:lAU UnA[O' );
define( 'SECURE_AUTH_SALT', 'n!!M>5vZ|x>$Y9F}/S-Zup_#S7bLz7`;.HoPgo[P=c6SEP3$i94f`<rugyN6{LN}' );
define( 'LOGGED_IN_SALT',   '1*sOyB{b/o3^H/0G v{Pul.=wz1y1E|p@FY,B_7`4mE6<72G#iNah.&S8$(Qi{}u' );
define( 'NONCE_SALT',       'oV@]vE*6xT:+J;ZOh&iU ^CtncacM#)FJevVZ$2PXW;+.e^4QRttd)Es-MX)D@4j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'project_wp_';

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
