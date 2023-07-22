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
define( 'DB_NAME', 'nguyentrunghau' );

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
define( 'AUTH_KEY',         'y8*nJO#s4ev +#bZEJM+S]#4v7/r/<&H$/?@/s3~K6C.z@({*RgVN~VDW!0(QNU-' );
define( 'SECURE_AUTH_KEY',  '%ww0*1)ZKo7q>WvsJgy+h0MBh6cd=Ls^@@L8mbh*xHM2Oe)*H@,29+LLEt}(!$Sn' );
define( 'LOGGED_IN_KEY',    'oL-gDahPMv2`!7|Iu=tde;tgUpOF//.Wh~CIu2p]WF8~N>Wo_clIuXc))D]=S<0g' );
define( 'NONCE_KEY',        'BraDVg#aM!HTF&c rUsV`aj&Ok4Qb6`hgfpu08s_C^1PE&3I2y1LH|!Dis~h<Cr(' );
define( 'AUTH_SALT',        'lK.!/tIVx]5J:t.~eLr*e&wswi.xtsf%#jQwbnA]ydFWGlse#8^X}Y]]cLXoF5!,' );
define( 'SECURE_AUTH_SALT', 'L2E,/fQfeh:gy4d!sY.pwYDUXN7:%}V32Qo;;``LRFwyt5A6y#xrAgW/b@Y9C=BB' );
define( 'LOGGED_IN_SALT',   'z*:Sv]Iw9<N$~OTux-`+mvZ+zu4rL0Sg}=oFf@ya~l9(Tk|i}|& 58-9enwBu<r{' );
define( 'NONCE_SALT',       ']qGzuQ{w4{mvoZIw:G1{QB7J)IEh&q!/f-4ll4@0+%8xMRn/-wHv0fu4[>WPL4%,' );

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
