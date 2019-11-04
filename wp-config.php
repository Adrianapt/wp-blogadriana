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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-blogadriana' );

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
define( 'AUTH_KEY',         '&wJa =s:mHVpTwSMAujwP{HnFtX66dPzf?TxMVM0WK-:5(;`lan.uyG3.cr1:NU#' );
define( 'SECURE_AUTH_KEY',  ';<JAQVE3!f$rd]vaV&_rarK=K<)2yiQlh~=,zK@VLId9n9r)YZgoVb _p;7C>|eY' );
define( 'LOGGED_IN_KEY',    'O,RI~{7ZZ)apiO$}%L#UnFS+YRDxFEJRl$P-Y8^aL<@Rv&>[OeBTz(+86iBJA,c1' );
define( 'NONCE_KEY',        '/7Cka=lc0{ysrz3SE`?WxRr9o=|7[pN($KK4}|*{QYSEOsf37s&2^Ud(i=]n_{9I' );
define( 'AUTH_SALT',        'LZK2RQ(op.VPdSH+RmDP[ u1f3=NJ7>tFw+R_)HKtIk7B7Ea x)9l+{zBexTXkAK' );
define( 'SECURE_AUTH_SALT', 'KAsb;G+y;|x:Z,c)=?(p?FUTS34Iq+ 7e%`uo`fpiPeT8Q1#mj#e]D-=E~dGw#tv' );
define( 'LOGGED_IN_SALT',   '.K((Xmsi!`<I:U#;Pfob%7H&5}T3wNXY`&m5L%ZP[1[orGR4>P]>V*MmU-^O##G`' );
define( 'NONCE_SALT',       '6mD@r1dXW?dW,GI,.*Lo<S;n?GzH%DKdoxjst`dZw;WlIjC9&6S^5C.d3x(|FW|u' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
