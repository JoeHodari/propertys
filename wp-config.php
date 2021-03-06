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
define( 'DB_NAME', 'property' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hodari@2020' );

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
define( 'AUTH_KEY',         '|,zs0y[P{|]L.h]tX^SHN2C]v(R?qqER!sn8W*8<JOya_ H^*Dl6W2)OE@AEi 2c' );
define( 'SECURE_AUTH_KEY',  'QZOCQ#.-T+7d!=H-SHlU=~&xKf|A7hf=nFrw{tPYG!9P:KS3Jz}.Ymw(B5zFFtkc' );
define( 'LOGGED_IN_KEY',    'hWazPU/2;iW6!7*G][/43KaC%4o>O~Gj/mwB{U8fV5k}S<6HIN8-IZXQpg+,a`E1' );
define( 'NONCE_KEY',        's-[$dkVtC{/><%1m:Uym4DV&WPBYKgm8oQ_,;E;zLE=?p$aT|`Ep:%@;jFqorx6g' );
define( 'AUTH_SALT',        'APRy[35Q2-Bh&mgd]CCR^`N+gm-EQZB{}D=OB9b6l)$,x,*DuE,>>f,Pb5gG0;3u' );
define( 'SECURE_AUTH_SALT', 'ApL%=z~cA~jQi_Nb..jmWU qMCayQ_(3:tCou4%US`x!bix_pj!|zNn/f-,Vy0<Y' );
define( 'LOGGED_IN_SALT',   ' MR3hy^uhXOTDl2lPnY6Z+87&n,?(ASs?=Zz]|W_W}*GGhJowbVO@.5y(,@F#U6)' );
define( 'NONCE_SALT',       '^0;$H.~21@Unz~2>RMM;P]uNP}ytgPK[l{(bc=TlR^;Cg+-x/ufWg&wz2qeX`2yy' );

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
