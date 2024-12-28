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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '@)Xn!8uOx*5{R)F*WJqf)BLpq$F19;#K<VNO)_7MI/aGx=M.[Yl7K/*3~F/E&~@U' );
define( 'SECURE_AUTH_KEY',  '#?5r#H@I_? &+g3/x8?Gj?895W9L<]/<ejtSiulNV-FQe~5H0e|;Ok:Gh~|R%h}Z' );
define( 'LOGGED_IN_KEY',    '+ papz0huO+-DVT`f y2Swc5KuAdp=6TG#$3pTBicKP-*%saLzSU%Zx 7,)7E<j&' );
define( 'NONCE_KEY',        '@kt r:F3j3./$$,0GCiFh-[[Qy(7I%pR+]I 1*C@)/>5>t(2+i6>>=n0=j-E4j#k' );
define( 'AUTH_SALT',        '+y:~pCo e4bEB}Tbrm?8c[G( 8@smvs3wA.:;}%6kM@6ne&ZU@^Sb9tgQU,?XZ}7' );
define( 'SECURE_AUTH_SALT', 'BK|$6Oy+r[biD7uAZz~WPcuw<f!x^i071,M]XZBk5iR|w_k8.][`g{dx:,`Dm>YJ' );
define( 'LOGGED_IN_SALT',   '[w^bUK-f9$pTcw5^Dpd7T=);p(-X:*}^g3<:Y4oQ4aC=^UD!<1;|UQiTfO#x{s)Y' );
define( 'NONCE_SALT',       '6!>7l+?k4^~`sarzRL0x{V%q.jNT[j6 `>eI=QZ^#zpc}g@[jDF?lyZe5^k%IAp@' );

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
