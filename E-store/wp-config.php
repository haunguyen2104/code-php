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
define( 'DB_NAME', 'e-store' );

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
define( 'AUTH_KEY',         'uTAlx=xNO=SvBH.znf9.^}hn2xvqNsX+ m^*#A;V8}<ZQB$Ll+>wTE>%=Oq^=e+{' );
define( 'SECURE_AUTH_KEY',  ',qm+E1e~$l<cUFH5x6=I39OdHX+ 03=Dm7^/HTJAboqy^}`:;$f%b79zgU)`aQx#' );
define( 'LOGGED_IN_KEY',    'Rdc+@eIi?kKP*&NE;P772%[g/2# jXo`wdW5ya^$w&~wnJF#Q886>FC{P!ba1?_(' );
define( 'NONCE_KEY',        '!:CTwag2@2:;B%HmX=f-D&M4l7BQhhA| =+I|2XNccnjQ5H0b||/`}9;O6OqD*v;' );
define( 'AUTH_SALT',        '<1=Z92L<cNO)^Oo>vy0;D a[kS]2:I:/I#(r;F]E%Tn=/XeN:mLvr@D{6&D%G<|A' );
define( 'SECURE_AUTH_SALT', '3QBvpWs&+_Mr9^.>8ji^&Yx.lqGJ_D3ur%ff)8ZP_/Av!H5yg78dq[Jov7g%1!s0' );
define( 'LOGGED_IN_SALT',   'k#cL6y5eFovB50vip%;z[(C&=O}OL`uP*OyZRSzIn-,7e8Wx(WO_jMsBM@__P$1T' );
define( 'NONCE_SALT',       ']IC4]?w[TSHZ&D^,KGYwmD!!$C9QS%N^J|X1<Ur~+V,0]ngpEoDl@Y7z^xgj,28A' );

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
