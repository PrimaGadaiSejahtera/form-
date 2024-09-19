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
define( 'DB_NAME', 'from-_db' );

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
define( 'AUTH_KEY',         'ZZIIW]l_$bODUTV<8>Z}z%bvC{VO]F2q!FdU#WM^awJ@e,hd3A<X@(4,fm>lJC0<' );
define( 'SECURE_AUTH_KEY',  'h,GKo92VKfx}k(taM_zksIr*G_]app#`z;XX^v|pQ_ml{LwMh-hCmlAOKkg/WmLl' );
define( 'LOGGED_IN_KEY',    'g,l9xE1MT]:.Bkji-;gP4HOz5y2l^}^?]lL]hUgg?s1aSo~`W[ 4b68(D5>m.gvT' );
define( 'NONCE_KEY',        'W!z%={WV5:T9$/]n?bd+0vGrHJaUBT<sPW|,?EO{;6l+1|}PG@nu,+d_+CE5&C=A' );
define( 'AUTH_SALT',        'T,m=&&~.BD&scL{1cA)_LG%.}&_wTUP9aVmoMB.&ED_(JR%3wW.C0[;I*U&_nss.' );
define( 'SECURE_AUTH_SALT', 'o&ucQK*$=AgpOg+.MJcY;l Y3p~NOQXKKMK=v0C>@q%;ShP*sKyqWHAx[+%lt6F:' );
define( 'LOGGED_IN_SALT',   'm$enA6z$bW~,`ZC[K1Kc`jP^!Gu./0x:op;rNo2I?I&jA];]O1rH:|=2Xpwkq.^Q' );
define( 'NONCE_SALT',       '>Az|3B!^.t&Hj.~^()Z#q_g@+JwDt1FO/`SmX17%QU3C^rsOACbr!Y6)2PM|-VYW' );

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
