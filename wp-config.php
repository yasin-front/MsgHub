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
define( 'DB_NAME', 'site1' );

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
define( 'AUTH_KEY',         'esp/4LuG[In4Z3oacn7x_FK>(=dm]~Mh4iNy8w/b _Vc!YUY]H33f@ZT&7orax~T' );
define( 'SECURE_AUTH_KEY',  ')$zc4|`@d81|j+&z3T;$qHPd >olWXfX6Zj%hY4sDAnD#PFDcRH(K<H!tb@Cfa#Y' );
define( 'LOGGED_IN_KEY',    '|3PhPB}S~m4x[OUzf`4gK{ 6Vl_&^LwPcvkd56~`uwhod^UCWOAiKg=A_gb.@-6Z' );
define( 'NONCE_KEY',        't%<E:3iG:1H%*JDDjtT6Jt-N?{3k377+l>&X`<FC@pCZrVTqq@V(pE)97I3khjY%' );
define( 'AUTH_SALT',        '-Pbp,^DJ0JVu2m2%QYzw]:X!V:tPlVN2TcEh5;|T`Yc,pGI.aS,C4A6Lr|1VL`NR' );
define( 'SECURE_AUTH_SALT', 'R)7)jAy!cbP^{zTBi<LG|]%3s!I*xzikWHQ5_9ym7x89[h`y^xV:vAS5uUkI]$,|' );
define( 'LOGGED_IN_SALT',   '8:+a|S:GQ6<#qn;>IUu>Kd3N,#KI~e-czw5]G!YgT!_R{sqm :T=+@8i99ZJtW@}' );
define( 'NONCE_SALT',       'S$.Ass}*PB3C-$}K{<D,jz0-ml:qdMWcB]pESvaU9P<GUV^0Lt,ZPJp$- ?2;to@' );

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
