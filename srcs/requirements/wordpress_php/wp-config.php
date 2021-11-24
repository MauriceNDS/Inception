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
define( 'DB_NAME', 'db_name' );

/** MySQL database username */
define( 'DB_USER', 'db_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'db_password' );

/** MySQL hostname */
define( 'DB_HOST', 'db_host' );

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
define('AUTH_KEY',         ',JiO`Fqa;P9:o[=4L}}0pjs(@XE2(D@}v}Q5kRq@yI$6kgm&5dqquh2N+]juCCk$');
define('SECURE_AUTH_KEY',  '+jgP<bl xydT)j3-z6c8RK)|olhxxOcdG|tJJ[|@=Z,FHt>Z/6%(< MOTM7[iv0Q');
define('LOGGED_IN_KEY',    '4Cg8<x+-;(U0-g9U3kgMua_WeuFL4l>k F-~-6n}X@wzqr]49rg#ULXYO6a+&;C%');
define('NONCE_KEY',        ')E|^&W Y#JSKpoXlp/d*A&,t] yp:Ri/Tc!KXu#d1d+)/8|y}R[=r%->LBV1a*R|');
define('AUTH_SALT',        'L6To_/-@Cgbn@V%;5Tp,+Z8-g,n8lc[NdJqmg-zkbw8.qqlToWD,D7nrd`:%+J|P');
define('SECURE_AUTH_SALT', 'wpV=`OX$Av3MtUH*zm%6hKxyhK4.z4x+=6:Ft` ^^M&C]Xx|(y8$<])be^_B*~Bi');
define('LOGGED_IN_SALT',   'oEf e^)>P?0C|&nu%8|Az!+)pMJUESFC=S>zL5V`yy/1jKUO02o1r+|Qr#l6V-m[');
define('NONCE_SALT',       ':|j%}E2dLk)E9}MB!*GW&J6]@AW$|Mb8wc7<t!4_M}`F-lWFuz=&CY+bt]$p@NCo');

/**#@-*/

/** Update WordPress Directly Without Using FTP. */
define('FS_METHOD', 'direct');

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';