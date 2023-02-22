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
define( 'DB_NAME', 'wordpress9' );

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
define( 'AUTH_KEY',         'q6SD?)_ems|pD*6h7W$LF@Mt,1p{7G@a32G{+j^u~TS3YA?XL&W|3av(L<xhnvrD' );
define( 'SECURE_AUTH_KEY',  'F8pK:MtfQ%<lU* W1S#t7~GH{^QR/}u#H:[Q!g|mDa?I_EA_AkC.F0W}bCHAu+w$' );
define( 'LOGGED_IN_KEY',    '#9nVtyER,Er?,/Jmo]iX.<;bf1T.fp{?ZKbR;y5a.+/&XP$d-6:b|)t4?r@`RDKZ' );
define( 'NONCE_KEY',        ' ?>t,b8zmBe (KJ2TT>K*6vO;&G$.Cv.tBfD%0:@pA`0Ah@)u9pC2#itbyv<`awr' );
define( 'AUTH_SALT',        '=QcIJ.pcHt%Nf!=4&h[M=WM,{-J&=jh`|S!/wYXAi5$psb@P|$sH7AGcWxNs10e*' );
define( 'SECURE_AUTH_SALT', '7.f{%/V=he}7k04QvZT}kfmrJ8-+)==0;`J`g8|@pIbfmX8w7:::zwfA0ee8RReV' );
define( 'LOGGED_IN_SALT',   'UC4*k11%By!Q4a6?+>pm|4fM]ZO}X%Sr=kF|1L9QP@oX(xde],jf>+RN1=a_2#Cl' );
define( 'NONCE_SALT',       'y;?{b=<=<KKu%On56 -`yF{CbM85h+)/X1BR$PzuiooJbeJd^`C;Jq*}UQ#@Uw.=' );

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
