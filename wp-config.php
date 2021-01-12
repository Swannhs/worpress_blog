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
define( 'DB_NAME', 'swann' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'Rv@mcF#L#]+pP@?mnp@dCRr 55-%N;9PFt1Nf-0=U7=gkRPjk.9>+bGM_BYG(Ltu' );
define( 'SECURE_AUTH_KEY',  'ZPrzUkc!ypW,nu:_<)/Ix 6vIp68DJITa+2dfJ=EJ4PaT^Ijk,*3_p(M=mq8@o42' );
define( 'LOGGED_IN_KEY',    '(sy7rDS!zi;WT h.Zt$od1J>;O`*^=c*P<=?t:/OjS]4gb6G&^b2VEb-2(G[fa}x' );
define( 'NONCE_KEY',        '>VW2FXmUbWX0:f/w3}2X+2<P0[D)IRX0GSo61!zDC#6hSo$mPZBR$Fsv[%;x40yY' );
define( 'AUTH_SALT',        'IZXW ^WEXW^ $u_&DA5Tr2T=!84r|3sYC3x|n&U+6Rl/&t{t01W<5p1Q([mOLY>#' );
define( 'SECURE_AUTH_SALT', 't=K^~U]F~8.Mlo%hNp%$]Sg(N3gWkdDF5/Ir^)l:Q]4{PYqN,uK4&3@Ho}7QRE3X' );
define( 'LOGGED_IN_SALT',   '^)}=clRl/PFdR}sy0u(O-kSaMwFteakA]4?]tI/p#6:<C`75n_Im}vRr1.J9>CYx' );
define( 'NONCE_SALT',       '/!U[g#JBj1^6_IIF.WPK$$ujFL u-bW5m$Wx;$K4%<ec$?47~hFvnde-(m(Ub4&;' );

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

