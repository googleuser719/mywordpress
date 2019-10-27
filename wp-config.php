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
define( 'DB_NAME', 'mywordpress_db' );

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
define( 'AUTH_KEY',         ',,L_!te*9Q9-PK5@QR#m{6C!eW_J1*SUfv&Wg.GrN~MjrVtiDu|bZmfm1mY;yCyx' );
define( 'SECURE_AUTH_KEY',  'q&|t}dT:z2P{Ly}:!`$K+6~.wq>/{b_{n^i43}w/a?H<5vsA{&vng=C?qA5,qtW0' );
define( 'LOGGED_IN_KEY',    'S)R&Kx;9t-cRL~G3q34S26B;rz}jaon0?NT+bqVb~e?Y:A#Th6}+!~/}.sImO| C' );
define( 'NONCE_KEY',        '0|PY5].:jNLo+yVmuY!PcL-sM3}_es=lu>SK!2q>1ozE;F{-Vw&UWFOI[dY78LrL' );
define( 'AUTH_SALT',        '@s1cB=XLgwU(*HzsPFCwtd8<vu2np<&,0Mozg[O+$qdr /6Nh/zFJTd^V48S:n:h' );
define( 'SECURE_AUTH_SALT', 's>5e,7(;SsKyBOo}rvYHF:853HaU0=Llb)PzCOQ}OwL/]<|?)wG#g=utnC(Es>%c' );
define( 'LOGGED_IN_SALT',   'S]R#}i4n;,|@gfyohm~ffJd_)+4]ZXm|[&}[oa2P|e?(FoW#4tm:l.m=h][LyL^.' );
define( 'NONCE_SALT',       '}VF(k DW>p!xY-a]ln$1[(juvxr0c1P!Q(.%4U95.SIK=yw`kVSa U^^9/aCu>Sf' );

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
