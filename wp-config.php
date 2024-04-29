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
define( 'DB_NAME', 'zalepik' );

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
define( 'AUTH_KEY',         'E{O[c8wm>U+HdfZh8Ncstb$YhcF3TYoPlPitj<Ok>x-1*U%Y)+UE<~a~qNwp(}3b' );
define( 'SECURE_AUTH_KEY',  'S68rmg`]+>!y[RBbQhuH7g7ztp(7/:s7Amg65a0MBS[R.OB{8I1D~i>4F}V-Qn$6' );
define( 'LOGGED_IN_KEY',    '<nDBIS&hUE=%Xd+2`uK.9p_kFs<_a]hL8}X]Ujt$UtMxYnL-1yTb?nTg?AP;]JVb' );
define( 'NONCE_KEY',        '}XDsLF _tta&06l(`GoslZb[Qg/Q /x`CFgudp]v|TM?dw15NHfmZU^a4$=M:lt2' );
define( 'AUTH_SALT',        'izB#3!Dt>C0lH%i[8XTCWE?F.!W}Vyb.)-R:n1Edn4~mK~22<>@j8Qy@qjwvor(.' );
define( 'SECURE_AUTH_SALT', 'I)-g55^}AX0%=:oV],l.y=# $D*tBEtqkfP >2T+k4k*JW4Q] :TITK5-;(qy{x+' );
define( 'LOGGED_IN_SALT',   'k`DE;;Vl{ 2UP.9a_D55?0OwY{:q11N/uht:,SMCTT0Gr{U],zrVJfQ#~|rrTz4J' );
define( 'NONCE_SALT',       ': JM?LNhQ:jy[Aw>.H{1Y(!*As8!3:@q}vWb8~0W|-+fP:ZwJ}^jY^fN.v_1Il$~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zal_';

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
