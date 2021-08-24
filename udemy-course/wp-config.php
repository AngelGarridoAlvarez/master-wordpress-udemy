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
define( 'DB_NAME', 'wp_udemycourse' );

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
define('AUTH_KEY',         'BQ1`l@~U|o^2.ordn$.GFYzva|RBK.$w)-KD§J/2PYC/{e%su+uKf=|IU(fL{qfk');
define('SECURE_AUTH_KEY',  ')A|s=OTc;N^} `~t3I>QjX.@i/@-r?37Ko7s!V%_L8ErC]dn@^suoS44:wnqb<Ig');
define('LOGGED_IN_KEY',    'N3a;CX0i!g5(~Y6uq$R)z$u:@)u$6/~@!z1t;@4%A=7=§SExXMQ@LQmg-oA[?fWi');
define('NONCE_KEY',        'uEe.wP0{z.C}Z]0U9@,8x_gTkAT9{v|dvebMj/Oq/$NosRay$$%OuEK[!6Yn@wWt');
define('AUTH_SALT',        ':J[r +>y0uNZ5MRm6[fReYYiFe3Y:2//)JN2qt3Zl+W~MmX&`QaZCmQ5cES<j.pS');
define('SECURE_AUTH_SALT', 'QU KJ5,QI?T:!.qqmmp+&+3[xS?A^@]A=ef?FJ:8+Q5c$@ :PN(§+hfxj8]w?K§V');
define('LOGGED_IN_SALT',   '^u]0^8KpQA}6 +iqmx)GQJFb@>X!|Hs1[1wdII1KA|C(J/(!Q+?83nUvwE/{`G&_');
define('NONCE_SALT',       '9v8K[V/C6;a@b?]m?JRNi~~ZF$u`}Q Tk4Lhoy9>,VT1rJk:.s.4Yu 2wX@iJ{2=');

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
