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
define( 'DB_NAME', 'ID211210_aaronlej' );

/** MySQL database username */
define( 'DB_USER', 'ID211210_aaronlej' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Curryworst10' );

/** MySQL hostname */
define( 'DB_HOST', 'ID211210_aaronlej.db.webhosting.be' );

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
define( 'AUTH_KEY',         'nkH$VHb~jsJ,Xt~3.UKmjvD8[64C?IS?HYTezj@^(xf5<:3qfYF>?F|734Gfmll/' );
define( 'SECURE_AUTH_KEY',  ':2e>,8G#d%-WSv!H8W*UzkRiu]oT):bhkY>RqZqmd//0Q-i-v1~F0n0p@vZ+7U~r' );
define( 'LOGGED_IN_KEY',    'f{7>e+?JP_ty[3ijYKkXXK|GVA}!DWV9/+aO@NH<xmq>cy.q{v#X4`WY<KvB=:C[' );
define( 'NONCE_KEY',        '6g$8i]nC+FUN}m+DyI#=pE>m!5qgIZq2LZhQ;XoYe PI=ZAvUsi6q>,Qrfdc9=o)' );
define( 'AUTH_SALT',        '3}!uo~}6OjYXpNH8Fz)-hl4I,7(so;&.{$_~WD!kY?`f4Gn(VGP-]r(ZO{>KtwH(' );
define( 'SECURE_AUTH_SALT', '<B!p98:6z<*(Ke!hW!#BK:L: (--deFz+p9%6B;}>X5Fw-rKKi^$AU6au7$#-xP:' );
define( 'LOGGED_IN_SALT',   'gCe}6<!d^@W!}oLpPNqD_:#rj&! 5qU7Bp<X2V0?Nw{Fw50Nf&m$R,wt>qA-sk<>' );
define( 'NONCE_SALT',       '7pa6w:YH^s jD3-Xn{x8y;{Zy7knDbmsJBIp;,>PDfi9lQ+;,F#j^$eHt4;M-^Dy' );

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
