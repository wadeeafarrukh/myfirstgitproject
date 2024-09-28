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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         '!}(2O#_h6z+Y|I{1`.(Z<<S$&6O4~z<*jSI c[9>+|atk&MH)q +L}4Yuvh0vUb4' );
define( 'SECURE_AUTH_KEY',  'IqV341X=GDFR*y{z[[99q5IE F3MnkLI]D51M@Jf*GVDPBf.aU^ =Kh3p[{DxNNG' );
define( 'LOGGED_IN_KEY',    '1m3;7Erll?23b(~  NWFV]h<s1|fB9cY4bEwSJm?>$hPO=g**RGd-buIV_[O,O;U' );
define( 'NONCE_KEY',        'ssYX)/YG$]N5<M_n.A0XxtQ|2%zQ[Z/#R{1{:Hk.8?VBl%6PFUJJ<<NYN~-x}P;F' );
define( 'AUTH_SALT',        'K BRBRc+R34aG;Z5cy1MP5Fm~R0^(W+,ZGYb|OFfJWE8X=LE7JFQ35WF,+21cMts' );
define( 'SECURE_AUTH_SALT', 'j;W/SFyJk}Do,Bz0[d!>KzGH{m&4 j0<{8mJ~DsI!m?+Y|tWv2#V?U.QeRe&9l(0' );
define( 'LOGGED_IN_SALT',   'M6y|`F0]hFSkMqk$UejVp~d,3(cJo0z*f(-Of>CM _Q!rLp+9x}Fe)puqbfg%xJ$' );
define( 'NONCE_SALT',       '62CP;ni!{44>DBDE1&ecz9Ods!2E45AeFfuF>6JF;:%4Hqc`p=WbiL-}&8M)9atW' );

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
