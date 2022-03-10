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
define( 'DB_NAME', 'avenger' );

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
define( 'AUTH_KEY',         '{`k9u*sJqH!h!*k(tLE=A9%Q#p6j!Q.sSQfpDs9|AIV}V$k@F[ ?pw2OeZjXwuZ?' );
define( 'SECURE_AUTH_KEY',  'qtj_! XeLhxP7ymtCH-kQ2l=Zr!-5$kL#%;3 Ao6Kuaq_>SSn@Dz]7:(FL|-]Aw@' );
define( 'LOGGED_IN_KEY',    '@fjBQ;>8qe<O1oYGO*uP.9^Bv|W^i{X?w[rEdF#P-4%=4}(k*7*<Qw7S]8#+zl`G' );
define( 'NONCE_KEY',        '}XG?m,gUVad,_-!+5Na%YpsP0kxSI/!$Vjs 2}suUo/3Jf@ +[TN_t.7F1-`FD4}' );
define( 'AUTH_SALT',        '9+Ut.,>:u)P7!S{$oy7`b1w3xVFly|4p?~ud]!Nz8WDz eunktiva?XxRM3y)L+P' );
define( 'SECURE_AUTH_SALT', '4I14%Q<^rxg3:YM--n#pg;eoa2_C8KZs?B<Cv<q1G^W<@r@bt?/BVG|ENau^JYMa' );
define( 'LOGGED_IN_SALT',   'us:)+H(L=r+;UB o1)>OsY|Ae~Es2+i/ 80[`P;cP,?:j(PiL-*4p,:+j%<xdoj)' );
define( 'NONCE_SALT',       '29|VB@bL-_G{j=0BVct1_^HTqnaRtwfii?^W%vP>tK+x.:2SJ6}K[1)>*zrd3073' );

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
