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
define( 'DB_NAME', 'fictionuni' );

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
define( 'AUTH_KEY',         '^tXY6T3Nb:8efT~d(=%_`E6L*nVWh/os#X+itIo<y;-ZQF60APKN-I8j&=*e+CBr' );
define( 'SECURE_AUTH_KEY',  'za$(5/D.$``6bH+3tR?g0[+!j-$dFJV{@3#EjSDwY b*dAH-KY-GBQ4=7IPmNB~t' );
define( 'LOGGED_IN_KEY',    '$QW]]L3^#YS/t_8bguIykG#==e#@(uCKuC0K^kh`FzF[?^Elp3o#u*{;)[SwV5cb' );
define( 'NONCE_KEY',        'G5a]PXx 3t;#|aOiHkV0MF*;<0Wz =Tw2Q>!;bk#*E(9*b<I;~:,Ge0>t>$.waD|' );
define( 'AUTH_SALT',        'Z=8mpCyWt0yEy/Y{j=llMGuC/bn1>@|2%I@s=/vMU4d9G7Q{?,F&ja*Yz9 [{NA@' );
define( 'SECURE_AUTH_SALT', 'lY^3Gv=Utv[:FIMAi@CVIKU.cqkYB%Dc1=|p([TXaR/yw%&Zs6VB}8{@Z8T;Sz[V' );
define( 'LOGGED_IN_SALT',   '0Y/+%!{Y8IBHO:KnLz84.Yx|u$9*@]-rh1)eLqtY?CbzLy@%l=Ftk.`0V{Rqk`.1' );
define( 'NONCE_SALT',       'jN%w79yd1ihwZO2XWbi6!R^wB=^:40&ndG2zZ8Arwki#Ku~Gd!=+sNF~3bjM|)26' );

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
