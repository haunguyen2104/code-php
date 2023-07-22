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
define( 'DB_NAME', 'nguyentrunghau_news' );

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
define( 'AUTH_KEY',         '!kq[mC<fdlj$]Gq1vS.r@ tJUS(5LIBLRj+Ncu5l,PJ+j,<{+U<ogg63uL@IGb h' );
define( 'SECURE_AUTH_KEY',  'nME2&-Xwszl&tOBt[OiLHK4 bcnCQIrt(@1:Lm$(f9DX[$fBk(}yeDtCrd!iO=3|' );
define( 'LOGGED_IN_KEY',    'vZA?d}~_xDvKGohfg+4WmMEnJ`ESi7dw=s:dSZvFaklWTZen+%F W[e.(rHK{/w1' );
define( 'NONCE_KEY',        'tSvF$;@szMUwKwk,4f}8^-9gb1fAH74N<*q++%o<pddJL~X;Mgyx=drdC^e7/HwL' );
define( 'AUTH_SALT',        'C(=i=)~H7u?VscJS/:{GgVjQcBwjJ$vB=U!cI>TPT-o*9!l-;f;d<l.{@P`.g%Wp' );
define( 'SECURE_AUTH_SALT', '{9g^wyI[nr]^xTk*kz(Z1zTQC(Sz>-Yz-#LWohGgJCYvJKZ@:CVw$(agXUt&`+hR' );
define( 'LOGGED_IN_SALT',   'jB`|0vo/v)S?VAcppp0vt|]!90#iA.p?UF< T>O<c1[?A%,]&NubQGTAi+7q@yss' );
define( 'NONCE_SALT',       't?l*NCxt%9N&F&_w!*rp=SiJN~.}^PHO=C2.YOpaOw2YJ]#)K(%3A$?XBlzZXq[;' );

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
