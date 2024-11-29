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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ThyThy' );

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
define( 'AUTH_KEY',         'UG`6OMC:RB)>!srkm&`$A},I?Z<%g46+H+g(6^6[vSL[m>#uXIHPt3sAD{bUghQE' );
define( 'SECURE_AUTH_KEY',  ' m@H.ePKsQZtLu 1*$d3fxCyy~RW`v4+~|BU2UIUkTp*/ +{Qb$uJ~8MN&bT.etG' );
define( 'LOGGED_IN_KEY',    'TL?S`0&$2>^xpJJ!r]wj_;>D%=rd|K- JjM[y4WR/YOxi)xFW9M6wA.lDCHrd#u*' );
define( 'NONCE_KEY',        'ib#A65F97o)#K=lye63AEDy Ni0,kkeE{v`=O?^h6ysOeCK/ghr|-u|C+=f<5<d`' );
define( 'AUTH_SALT',        'vLiONSHxG{ 40ghuE!6?;E,x1Weon9M_3dT`CtrX $2>%o_0VX?:H=(k*@x0x21W' );
define( 'SECURE_AUTH_SALT', '1D9lo+vCng?8s?7`?4[?d^uv2=1@#ruBi-CSB^IO5-`#32O#mL/C[2J#?%0 iC;c' );
define( 'LOGGED_IN_SALT',   '`?;C|>kIC8(L]@)DHp(3V<^1uX?d(!+IWrGq.lo=(~^,:>UB(P&vn<,(=jF~9Qrk' );
define( 'NONCE_SALT',       'AO~cLF~qY+$|m4K&pu)^pqG3<@Jt?A%[%X]Sz-2B;ux9neeY@ ;,<VzPFg`s69m|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
