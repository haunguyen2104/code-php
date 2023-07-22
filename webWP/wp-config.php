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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'N<WDio49$f?P|j^b?F-4]pDC@rSkW:MW]<L`;vBO]pU,YPqr$#X,O@uiTJQ:M:}Q' );
define( 'SECURE_AUTH_KEY',  '-:aV)(0P,`bY@a@.kCgtZ^Ko{&^:6Vx)G5 =_ |*_S/]2a5O`8u{,PriIIA.3+k6' );
define( 'LOGGED_IN_KEY',    'A.AUZr;Zn;$j4#Q)k>XCDyl&TxJX1&&c:{>[Fbq|F]#jbe71Y;^i4Qo-jGw}H,fv' );
define( 'NONCE_KEY',        'Yj%02Uvaw}VJomQ@%uA}&ne,HfHSc>WPWXY S[ue>VP[Ia3$xn-@W{( l;J(d a&' );
define( 'AUTH_SALT',        'VY=#9>wE4s+{5O]2)t;o}Alllc}aP*da>B=&$N3@#[]E_]Pd^9B@a$A)>!{?Y6bA' );
define( 'SECURE_AUTH_SALT', 'h`d[-/VotB@[rqR1YHU+H^a}O}!c.G=:N#gB=N;9W6ozNY,f W-y^hfI`a}eGh6 ' );
define( 'LOGGED_IN_SALT',   'TH;#N^DPwg8={N7=pmkp41ut)Jk09d;[)hO:xSl|~VCMhf93IgP;Ev9[PD}A[[5T' );
define( 'NONCE_SALT',       '`@.]e{{&Z8N7]1Ft{E(KOGZawO6qV%_c.bo-q 1a@(:;3HP|sd:&Hf~,c[|*,@_Q' );

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
