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
define( 'DB_NAME', 'kikilwedding' );

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
define( 'AUTH_KEY',         'y=i<s$z.?]xGbopxuE!k03^Mj^sh@gPbTfzQ7,|Z/jRLhHFVB~Jz<R>(I!+ Q=rX' );
define( 'SECURE_AUTH_KEY',  'i7]Q%Bjxim6eJJe6u9O/eK@*3%gwqr08$|#;hi^8Mn^K:(:~M_|imwD!pfY6MosF' );
define( 'LOGGED_IN_KEY',    '<V[|Uv05@e0uMvtoX}?n<Kn>8C5kG -i:5<6Y/jcA3IOYtX$QP>*/OUe ~[q/ubM' );
define( 'NONCE_KEY',        '0vxZv8^,86d$,=2#5;z(fx .);x)dBcs{~Am*29cum}rM^zay]~62*Yz^A:/al>r' );
define( 'AUTH_SALT',        '||X5c,7rSS:nKBJ:><Y}LmFji6|^0fl=tREz{0 0H56R)r3x{zu(4vd,VlMx4p!!' );
define( 'SECURE_AUTH_SALT', 'Y73W4GZM;PhM)V23vBYDNW6j)Y#! Fv2UJ ^Tt@$7{L<$=0uB+GU?#^,*Is#p{Wd' );
define( 'LOGGED_IN_SALT',   'vDeDhghZM{s ^tc=;6yG#mQKQXZ1wSHPR 9@kdyx+<RMBv)4rs-1F,NJ>myO]}I`' );
define( 'NONCE_SALT',       '.3&0G,ib|Kq=Tr/Q[3get(EFUY7=^!3RP!hH],Oo5s9k@#H(c{A(kw*vz)0Ve.C=' );

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
