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
define( 'DB_NAME', 'dustbusters' );

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
define( 'AUTH_KEY',         'zLqZk}]QK$?*_+QKy_4L2w H7jYuily~}+0T4`p8I&qofzRxuHy)M$rg@ZQDsMN~' );
define( 'SECURE_AUTH_KEY',  '4l(LD5}7kG~w*~;`3fGndKsJWcQ1BC`gdZFpJw6/Ewv .kLYrWez`C6s~2tTYJ0E' );
define( 'LOGGED_IN_KEY',    'O}5LeSA[jU?eZDcg3I(MIw1F8.fe}.vI`-y4kq;MWGFb5RqKlFRV&<9=^B_as0(c' );
define( 'NONCE_KEY',        '=As7<&`l@AVl]m|3fK=B``FO7PU&|G%q=a=W .k$ {z^S7.;$LTs7H{D`GlH5ltn' );
define( 'AUTH_SALT',        ',cKrN9soizCiX5){H,+>68)p^J}C(C|B9PU0W)O#>7Ib03)g$UT?=3WOt&=?jzoz' );
define( 'SECURE_AUTH_SALT', 'h6ujQ.n@S[_oF`tdE{ x]<(V(&_(8Y{zD#nql=4 ?$5$5X]*UqPOeOsM+!OC18@2' );
define( 'LOGGED_IN_SALT',   '6~,dWmNnM2k6<<XFNV0.;IiKq>ERWWe5#d1C,P--4Hc={K+?XcQ3?=$1TYfDw~T7' );
define( 'NONCE_SALT',       '^wX/@SH_0*c/PA3v|f<+6~ <Sx7^93Fu:c;Ltvd<n#:OYrD;@pJ+p(>QL@9,(I^ ' );

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
