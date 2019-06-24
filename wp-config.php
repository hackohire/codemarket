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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'codemarket' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'lTyydGvOLzu,V?i58[]TY8`cGtkMWKXdw}a/&utpja^Ggj)b#~VXZ;0kGCl^f$*]' );
define( 'SECURE_AUTH_KEY',  'Z?SJI`u?hDhggAXd56Mm*]sFF$.vC?rRru3S8sTqOGE[U:b51nj0SRBQHt3UB<VP' );
define( 'LOGGED_IN_KEY',    'b1w z04[~<e m.aDPt[/poUBW#V[INnY]z<6}HRvuV0v0T)pT}lz9vEJlbqtb%B|' );
define( 'NONCE_KEY',        '0Wh0(ZNj(c6>0e8UKVOlV!knDGvz D8aD?6gg,1)f@JZT>.SR:Ls.)1zJ{?Ebwe-' );
define( 'AUTH_SALT',        '&:^yZbkoX7}n&2o0`&axR6g3{z-o>QFOP=Hz>Nq?4E>aoxDL{d2M#uDn>s`!5k!9' );
define( 'SECURE_AUTH_SALT', 'xmn4>2g4AzTc0`Y_x?6krb|]<!=$jBgBKopa0f[Z:u|zgF;(%LM>&#1o+<f^p~Wc' );
define( 'LOGGED_IN_SALT',   '*HJ4f025xEEb}XveME{a?y8wkeALd*%Ktn&?yod>b_r>_q]]=&R,dZpd/ugefq[a' );
define( 'NONCE_SALT',       'A:}T#zH=|{3*j49MF+z9~3]stSQF(DP&t{;XiD4xY!o&g%B~uYXp8P(/J~`o4(Cb' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
