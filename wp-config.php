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
define( 'DB_NAME', 'wocomerce' );

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
define( 'AUTH_KEY',         'y|g:<m%A5CMTbGcc9B3pXWk]4xuUETT^o[rLkP>ip3MO<w;|3kg,U*8a1?5:KJD/' );
define( 'SECURE_AUTH_KEY',  'Nm`_wv^w1f>e {K,M6N#%?%aLGx6q~UvDiP~r4d1YHmkMa}rIc9(^@;]fF:Z.G*j' );
define( 'LOGGED_IN_KEY',    '8DSO8KQP<4,9da3D,reV+gumFgoMeycm#%}1|PSP_W%IwB$_g/*>{?tj3W>#P~XR' );
define( 'NONCE_KEY',        'eiS<q4E28|:{M ?vQ0T08|e.=L0Zf5v`hYgzvlj/pRmPXF9Ka_gn!Hi!bGXH#Zy-' );
define( 'AUTH_SALT',        'GSZ=jWZX@A(Yj99f.C$<IOH8ri]6A`pDv(`AdHJK|q=zs%9a0UJMnU,y4bIR}Km_' );
define( 'SECURE_AUTH_SALT', 'DR.CJ7bf*q[U=W6XKO 4U$9, R>=Cs1[n$sT.<~`J*/^FY)n~xN3RpCf%_Zs@b$3' );
define( 'LOGGED_IN_SALT',   'J5l%^36nI~`gw9e/;Ohhp-o,BtmJW]aY!dWcLQC_L;MnHpMwKk]P,GuLs1grglPj' );
define( 'NONCE_SALT',       'a;^Ht1&(1rsK@Y_?OZ&VP{!51KMawWh[zl]@]6zO(8VH}:!C]cm7!#**Q^95y,@O' );

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
