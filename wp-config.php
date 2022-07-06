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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'rT hFTSZ!ip21z)]lzxO;zLV^hAJOt.wm@~0_P1ox:I,R/ay[cDhY3@Vq_=8#ci=' );
define( 'SECURE_AUTH_KEY',   ']7#_T]htV?=0t^Q$7ed7KU^olV~YCJ#*$ jQiw]YCwVG[nR.)5DXCgm4F_VkwQbv' );
define( 'LOGGED_IN_KEY',     ')gqRbautK0Hu+K4{6<*2=>%=<A/b(LJS`((,$WuB4}n Cr57EOn|Mq5I~/!BigR@' );
define( 'NONCE_KEY',         'MC~fr10na`cfwihU1C^!ygmU|!FJH}:nxtn}8gw|7P66DV_(FX?#p?Y#&>/njf)d' );
define( 'AUTH_SALT',         'gxjyK7V8.M]){~+u5h==SYFco+o)It{410[~b8>+|J>;x)}2n)#cq@6^~8kJ!~f6' );
define( 'SECURE_AUTH_SALT',  '_VS8}YHB6w@^)>`_V=W*Rg8N2}K[.!jd? _Lc(oRZ&ZNA+]Ge|/h[2(=I[2 yqlG' );
define( 'LOGGED_IN_SALT',    'yv,9COwOV@I!_O/B*v~P~i6eHI>Z[cQDSh^QL ~@.,Un?AxH2%64d>;q~K6+<SLN' );
define( 'NONCE_SALT',        'pKrBzL3r_,oGodqfPZ$H)Zrg7EfNT7uh%%5szTda_tQ3WM}n(&q+${3y,# wIlLW' );
define( 'WP_CACHE_KEY_SALT', '_-0nb>bv5f.(,)FR%K[`s/t:Po:8@b$m01@15$PndzM<}n(=kXy#@NYH95W8`c*<' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


$_SERVER[ "HTTPS" ] = "on";
define( 'WP_HOME', 'https://Hello-Blocks-user9786164.learnwp.repl.co' );
define( 'WP_SITEURL', 'https://Hello-Blocks-user9786164.learnwp.repl.co' );
define( 'FS_METHOD', 'direct' );
define( 'FORCE_SSL_ADMIN', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
