<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'X@S&~+5<hks!lt:wR{9)R1f1JuD9TK[Hpsrq<[d kA:U`#P_41c!}M>l`OY3fC#z' );
define( 'SECURE_AUTH_KEY',  'WKK{e}Y~!u9R*hC*g:+c6fed>-ZERZX;q>*z^QOf+:O*G9&QU#Pdt0A0fFxSWq#Q' );
define( 'LOGGED_IN_KEY',    ',~!#e4f@>fyG9-_UrR_2~u:IVB:C dl|13u8#^XkpOs#:lzsb6*ojz=m.u?t[CZF' );
define( 'NONCE_KEY',        'eZno[-G%mZ1M_zL:nUAY4c35,my6 :23@NyRe0C1T3VS.Jd6?V%C@0yIQ2*l;!Pp' );
define( 'AUTH_SALT',        'yy%hm|rL]Lc~WfMvU3%?kL`Dp~YjT7BjhO|Xb<~fw@|O-WJ=xfG63.^yHGqN9Vt&' );
define( 'SECURE_AUTH_SALT', '_2f0QO48Qs8p1{f)nb7MR6/{_mN?7x3(.QjBCJ4M9y^iW7WO)tnF2g`lj^z{J$G?' );
define( 'LOGGED_IN_SALT',   'dMz}S0FFag1~N_5J.>1N6o*](-/(,Y,9@jj@Z!-?O+:F~!U!s:pf2Q9kYq.my]Ld' );
define( 'NONCE_SALT',       'STZ&D2G%V?1T-lr_61_Q=6.>w50VI`xkc}b~:Ga;BV? *:D>&?=-{A8r<pw153Kg' );

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
