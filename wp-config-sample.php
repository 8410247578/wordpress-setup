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
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '{S?_se=i}NB!*Tdsx*Xc^x.Nyh+09i1bzV=a^&6RJ69]A{,{;{aN~|$r*G;$^W/N' );
define( 'SECURE_AUTH_KEY',  'r86~v>p!`*b^Ic2P$]m+!86w%h=|p?R7-pv3(j3|/`sL$nZosb-sHi=w~H(ecm@v' );
define( 'LOGGED_IN_KEY',    'kQ/ 0:.UB|!.)Fa)2]D+U#8LVP4-W$r%g0h,}$JFtArU#+Fg~Wn?R52u#nMK.c+|' );
define( 'NONCE_KEY',        '{F}2]ibYp)XE24=A6|D.RzI9-BC~16x}a2bIH`}z/`|#}F?r0d#CMWupd1Vsbay/' );
define( 'AUTH_SALT',        '%1Y`iIZx_=$|8c4dwff-F$pSpdY|P+An:^6OIp>aLk +o6G7/g(w<<Zx| l(BF`:' );
define( 'SECURE_AUTH_SALT', '}jAAA<o}n^Oh<.#ByCVB&|E ~=ZGl#k;OX<4D&6*`_7[yO=QlY4~7_d~VhvFQ5(:' );
define( 'LOGGED_IN_SALT',   '5m7i%Fs4R.Y:|7r@$8#~019+.4Wo{AAn]h?qGH>!~N-/Wp!XE{aWjOb (^j;~Qs|' );
define( 'NONCE_SALT',       'z8-c/.` ~yMCXc .bO(wQ$qj%lB,[?+Xo_uwISRibDEkX9$?{4Slb8lj-Atk4Jon' );

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
