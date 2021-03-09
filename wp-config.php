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

//define('WP_MEMORY_LIMIT', '256M');
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'alex' );

/** MySQL database password */
define( 'DB_PASSWORD', 'CnD25562!!' );

/** MySQL hostname */
define( 'DB_HOST', '209.97.131.172' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'g4y6WP#i_!__TF$C_=FQAQQ;v(DzZMv)LGOP/m|&_Ed.YK3RY2ZjAo%#;z(p`>K8' );
define( 'SECURE_AUTH_KEY',  'P*9,GuR!_$>CCL>7%Pv2sg28}RwjSat:C4j-x8$`kVi arTv92N.(9O=wWY7*g,`' );
define( 'LOGGED_IN_KEY',    'rHkn=dw^Mcradqr4S5MG]/Z_<`0_k6A8hT<%r.SrMD]]]?i!P05/{#MD0a03#/#*' );
define( 'NONCE_KEY',        'c2af2#4q3xo{$I}SdVI7)HVlX83T9Y25c.S8~=ePv0p?Y)R0,+,v_K1s/-/=iE#v' );
define( 'AUTH_SALT',        'UW1z2fsgK*Yy=Dg3e3qMW*HuV3&P_v9S%|zI<>y&)DTGU(pQdB^{+iAeIB3~<#6K' );
define( 'SECURE_AUTH_SALT', '))B2~YwqxNV%@:0L!]GvAtLe)v0y^|E7x[S1Q+U))>dmK{9,PrQ^Q>cmBVmi1*[^' );
define( 'LOGGED_IN_SALT',   'k]Afdj4uzB9+!^| N *mPL`sk7_s$!GO]b?#3.o/#f,W!a?DSCN1u8Fb-Mb[N l1' );
define( 'NONCE_SALT',       'tTx:%4G:U%K6NW8&^X`.C2bKUj`}5eJ;Jz`^+exI@.&6dHsBsE@}wm.mCydx<YuD' );

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
define( 'WP_DEBUG_LOG', true );

define('WP_SITEURL', 'http://localhost:5000');
define('WP_HOME', 'http://localhost:5000');

define('FORCE_SSL_ADMIN', false);

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
