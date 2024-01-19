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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'psb~~05{RBuZG^&rku|+;|=N#5Yn_PY,t~n&># wt?xGm^q!8I~sQdNVjDrU^&:C' );
define( 'SECURE_AUTH_KEY',   '1r3;x!>Lc4 EbIawf6=}(!7^gvKnf9V3u7!cJknxz^M8nl`Amm>#SFndXD.A9{;r' );
define( 'LOGGED_IN_KEY',     'v6:;z*gd^!i=i0*0/C=5;1k9vl!6u[(deC~8%Z~{[<`zTSs&eenua.-<Xl/<uDUm' );
define( 'NONCE_KEY',         'Jz%t.wfrHfa1=y#wIMuD#X `g{SlpC/xu$9>A[SEGsk!4^^qk/S<Yl0_)Dc-<5^Z' );
define( 'AUTH_SALT',         '>K&dAv9;G&pP(KCH}IqWDOVQPCkL+V]v2o wx&JYOPnqEb!nDjCC(=iKA88o^]V/' );
define( 'SECURE_AUTH_SALT',  'Y<N`!Cf2M~?T9!15wRWnUsYL(D-~G>K:e@W$C&d;Qc_Rb?V40^TJ7W~[6w*u]4HC' );
define( 'LOGGED_IN_SALT',    'XpYo)1P%b$a6 )!DVzJS:%i_!MB4R<qC^f_0?<+3,`vOe1%C7o#^t-*0Z.8/LIhF' );
define( 'NONCE_SALT',        ']iV]jKJ80Mnt~MW;1P7j7p9Tn_H0YRtt]c+8WE!%p?]G K?]f%Q<#_,/#D~,[?9>' );
define( 'WP_CACHE_KEY_SALT', 'F=d5`$PPjsQ[qt?LgS*^#}%0L;E!J)}fP*^y7`]RGq?3{(lcT>g`T-P?V]<,*B-L' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
