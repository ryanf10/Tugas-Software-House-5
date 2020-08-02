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
define( 'DB_NAME', 'companyprofile' );

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
define( 'AUTH_KEY',         'f($.PFRYV:J/i*pbv{_+>&YUu^dTmfcF0V`m+]F!Qod_oZ{aE9>6,@B:qeJ}hr`V' );
define( 'SECURE_AUTH_KEY',  '^Q6d!AL-epbd-7cs*~7g_}EMQ~W2_(uu3^z-95M>DsE1Q{}:6PL#-;HFEcg}+E39' );
define( 'LOGGED_IN_KEY',    'ExpG@0W_Udc`qqDNq}SUqDx5x*4~R$[%3eP*{:S3h@_~6p_;v6$[RKgIYky=z{:y' );
define( 'NONCE_KEY',        '?)vS[Jz?LXX0DjrYUg@EBsL8$t0|+)Tr,SfQq]+xg8=i^0U4lQcl&RtrZfmhOn))' );
define( 'AUTH_SALT',        '5tA*&,L]/d yhZ(>xfzr}Nu3fJDc^r7o4h3U~Z|mqVW%gx`@eBW*8[1I}fXbs.Wk' );
define( 'SECURE_AUTH_SALT', 'C5Zq,;B~;s@%9Xc!;dN*:a;*v1$@=n[]&U6ns5%:8Epe$$ W}av(.+K4({<tWDB#' );
define( 'LOGGED_IN_SALT',   '(~eQy/]K[Njev.H8%;]PRc2 !b9e;Vg`E+ */QST1<wIS0.Lz)4R ,LVrP6xO^,3' );
define( 'NONCE_SALT',       'De!.4*a0JSUi-Q6)gX/u9b$lCNR<t,(phGT0BJN#ARqTvl0xeR`o8F/J;&sBOp%@' );

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
