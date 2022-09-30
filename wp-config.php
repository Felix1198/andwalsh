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
define( 'DB_NAME', 'y03wq7vtylzilq6z' );

/** Database username */
define( 'DB_USER', 'ezlqjjucmwxzh7gd' );

/** Database password */
define( 'DB_PASSWORD', 'vqg3z7y2tr74b1ob' );

/** Database hostname */
define( 'DB_HOST', 'cwe1u6tjijexv3r6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// define( 'DB_NAME', 'store' );

// /** Database username */
// define( 'DB_USER', 'admin' );

// /** Database password */
// define( 'DB_PASSWORD', '123' );

// /** Database hostname */
// define( 'DB_HOST', 'mysql' );

// /** Database charset to use in creating database tables. */
// define( 'DB_CHARSET', 'utf8mb4' );

// /** The database collate type. Don't change this if in doubt. */
// define( 'DB_COLLATE', '' );
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
define( 'AUTH_KEY',         'y;.B]tmi#ad+RPMS4uu1YUFj2mO*8Bqa/65}R6)Ny<k2{QQ1R}viGZhnf~e>:tli' );
define( 'SECURE_AUTH_KEY',  'PbJM$>=g<|{EFP44J7X-6E >x.GLr2K]7Ci<3Z]f`~D,Bf?4*Qup06Kex/a%rXKz' );
define( 'LOGGED_IN_KEY',    '8rm`<|rQ@7)e4z%=~b{bM3N{6*we6o6 h{(/dlD.RDghw~TK<rl31ODx3;8i%5c_' );
define( 'NONCE_KEY',        ',ChdeW y5/}0:>*r;?Kx^g^U>8;E,9E;u@h,5%q?w7aY*6/^#Xn2!hUW8|s*BPN#' );
define( 'AUTH_SALT',        '$o<:8bOTYW=1&x[n?lBMs~A]s[<D}pj3#AMuey>xC^pj* 64L^m/N)CKn/M(puM5' );
define( 'SECURE_AUTH_SALT', 'sTEMC?wXRx/4ow (&#8>}W.5]ZX{03r2k {sGn[#P!tFF8Id`S2{|sa(0u_.bgh`' );
define( 'LOGGED_IN_SALT',   'yQTQU0Pt}A8R]EgV~4>p!fiTl1sC@G?kD4oG:=892k|M%eSO1~S/Jzv|t8?~1Y%E' );
define( 'NONCE_SALT',       'dDeS&E(8/AVz9M;/H(E:,9fCVx!U(opXHcfSl.J(H$`N){^Qecz}5fu~E1j4(%OG' );

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
define( 'UPLOADS', 'wp-content/uploads' );
require_once ABSPATH . 'wp-settings.php';
