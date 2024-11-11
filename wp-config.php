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
define( 'DB_NAME', 'magiacali1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '+c/bWMv}5SCq~D:[Y>CC`bBmW/Lb)US%6QEt&+~)&YY$m{W?s0l ((u6-8Y.}ufe' );
define( 'SECURE_AUTH_KEY',  '=#x1x3+uztV?~TiNHiJcr*N~f|SOT!:}?`rl`r}>`Z1jqZwo8S;1E#0gqYm^zWhE' );
define( 'LOGGED_IN_KEY',    '3]/feK#a3g24Dja.e85!NSF.Pj@Y+zJg0ay>=k_l$Lkn/9$}>E_Ue0d/ov_tpYU/' );
define( 'NONCE_KEY',        '(2w*Rm$Vd}9|}1U|MH.}^MU=tB7Fcv>,S%R9T]$M,tF<y8^^p 9^,EO](=uy2,QY' );
define( 'AUTH_SALT',        '8W:|e+V~@fDD<3:C~/xCQMd8jj;t`*_bB;L798f$*R:>[S-wrR#&:,.l;?umT9|.' );
define( 'SECURE_AUTH_SALT', 'VQ46g<?Q+K~C6=B:9,Sw.Jn;{6.oIl+:Ww?+Aa! vVNP?c shB{(K5^MOf,A6.-t' );
define( 'LOGGED_IN_SALT',   '3+13GWorCN<Lbgbie<sKAouF&lK!e{mVb`[t&XG}-hJHwMx[Cz`_e69A?66oEt+t' );
define( 'NONCE_SALT',       'm4^7[#nz,q$O[e=}EyG`yz;FI;xCtI3dsYk];nZfHGJ2[y`#z$Ev}u!:/Yibmfv9' );

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
