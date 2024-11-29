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
define( 'DB_NAME', 'banhang' );

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
define( 'AUTH_KEY',         'D/`4][:U2g0l{jU;uX-<[@3MA]{_J4Ut7@5V+ifqGM!GNa=<@wh@S5%qNC=YQF0o' );
define( 'SECURE_AUTH_KEY',  'pRil!4!h$>J=awS$Tm4pK>;5As&N[w7zmRbhJ)WjP_xL_eBz){n#W~PrvJS(zq%@' );
define( 'LOGGED_IN_KEY',    '3N0S1+$O%t;Bt@NLuS[mGA| ] f6-FbARs>qJN?]DqB,so=Ul2t6]G8=#{eOYDkv' );
define( 'NONCE_KEY',        'Ap{G#Ed}nmm#?~ A&k40X}5^`QQG|gU<Pr|j`2+BQK !b<Rj[G,y*flC@4[ff|L/' );
define( 'AUTH_SALT',        ',jzU74:t~H_JtiG8p7RIDUnm mNBX@i]zqz6,rUr##D#<w9lmP<]v |y9}wmk5(u' );
define( 'SECURE_AUTH_SALT', 'b,q@FytmRIz}dmEhzb{_nA-YZ/flw*)um)n*rWOZ_bJk}5_b0U9LH2?Xm*K29RG]' );
define( 'LOGGED_IN_SALT',   'Y-vNxq50K^t{J%Z#2|`.W;Fi>~t+YPHwNm>eGmoe}[ik|>=t3+iYL<oL9m}RLXML' );
define( 'NONCE_SALT',       'Vrk^wOkE::&:w?ZsOmTqXZw.%>p1{R%Vo>GsJ(GfIZ!]s|x+)./.^Umv:ZT6k%M<' );

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
