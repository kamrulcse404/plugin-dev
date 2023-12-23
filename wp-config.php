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
define( 'DB_NAME', 'plugin_dev' );

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
define( 'AUTH_KEY',         'zDeLwjVHnoSd?M<%2|UHTf{}$%,B,?trsLb(V|aim3F3{<X~}~U/L~[uMF1c:9^;' );
define( 'SECURE_AUTH_KEY',  'Ki9|38O;w0lN}`M!1YY`/{4X*zHvy;vw~QPYMk9h6(<WCMTK%J@(]P<jdV%AX)qX' );
define( 'LOGGED_IN_KEY',    'm3K?$mVtt}tHo]n?)eisKA6mjSw~ GG{;2S!uq~`rd&DYDA>`q;Y$NSp$LG}t$|w' );
define( 'NONCE_KEY',        'WfDp3Gt*QV.S?2W~N)INr<y3^9n_Pht]?5^U`:$mIh9np#/|^GPe*3!pXt>yTiad' );
define( 'AUTH_SALT',        'kIB88=2iDYnA`<cW$[shJdW7/~c3BR[h}mkOm_dDS)e*IO.l&FJpT/l4>r]V9==U' );
define( 'SECURE_AUTH_SALT', 'xdn.[1/$Qn4|2?4~4YfXTl7?[Oqz61HT5Yg#j<t[FJ[oqu54M:uH=|Eh.IHUcghx' );
define( 'LOGGED_IN_SALT',   '*_pk48|8>/^Ah:|~5;~`q9=Ao;Tl>3!r3qcNkX 8y5:r:d/~*yirJ{):_US3u)e6' );
define( 'NONCE_SALT',       'Av3<!ag2&|Zl,UhS$L-yyPyA!l5<N}-qmSil*YvRRZEVA>n@;[w<lH~KpQJ#w1u^' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
