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
define( 'DB_NAME', 'bra' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'QQUr4fmIQfamb^jz}{Eq*Ym9S]IPsLKv3R>M/gzHYe;ALonDQQ)|jwdWM-Rmi=kW' );
define( 'SECURE_AUTH_KEY',  'YxrS#0Cei#3yt8oFr{SPH^LbsD{a8F5*0__#KX3$;FJ2.`%UZSSsW1Bs6%V_vqtC' );
define( 'LOGGED_IN_KEY',    ' KtX{zPY_$=.A6wt1BA$.E{Ode@r(iTfDLuOK[u2h%u#Cj~{MyLXA(M,R~haW0sv' );
define( 'NONCE_KEY',        'YeifDEM5V1-dk##O*`Lx}`PIA7S@xvg[(PO?$(l3g,e*na:G#ccb7k,&/<fdR<#2' );
define( 'AUTH_SALT',        't`4.-?=OTjT~~9r9_k*mDZyoWD C,3QjUv%@.+|QLJS{46DrW[+P3 [Y9s+b)Cuq' );
define( 'SECURE_AUTH_SALT', 'M C|n^x6c~8=OpDwbQGQPJ]<m7C.Dw2h01SAoy83m*lAy$niccJ&)EgH#[u~@Be<' );
define( 'LOGGED_IN_SALT',   'nJNQT+1E_mk;0@)A a&}ikb_0&79SdQ*l;*RV=!gkef$yQ0jRcd:H$nkmu5s:;ZI' );
define( 'NONCE_SALT',       '5+8Gp084rF=L-6VOXrDUQ/UJEvMT7Wd!5N`Qs6m232:?bjmf2H&._+r?9OL%#p>@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lb_';

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
