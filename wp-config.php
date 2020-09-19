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
define('WP_CACHE', false);
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b39abe2625c54c121e2e705fb1a653f765d7de6ab4f5ae51' );

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
define( 'AUTH_KEY',         's`|uh8fa94.g]gUUlhCt$U8+<cV&]84t53szgG]tRr!my?;h,$c5cwqKRh6j FIg' );
define( 'SECURE_AUTH_KEY',  'lt@Cpuk9mQ7o~/17 w&ui@#VW9k=zd;d<+FTbU/9$u!x(s%JOqad|C1vouiKb8w)' );
define( 'LOGGED_IN_KEY',    'FAjN?GZ6cJOX: bu;0g]:B#jPwj@&4H. ?QQ8VIz{&0_J,EMUV8TvR|ZZ-I+uZQu' );
define( 'NONCE_KEY',        'cim>C+:+n hx5>weCk,h62q=oM|Aq<DmtG @0Yt9{v}#}8MU5+i7xiCVhL? XG)S' );
define( 'AUTH_SALT',        '17l@`9]&9^M^Vc<bLRZ`epC{nFkwLtpoAlG?NZ3 AXF~+H*Q?w@O|@LvIRvc2UR{' );
define( 'SECURE_AUTH_SALT', '!J&vsIGqv/8rt9oz?g#q i2::m<{oI18l3Y}dFXJRS_)`or8~gz7bj9Q:Ze!xB<6' );
define( 'LOGGED_IN_SALT',   '4Jat{_kHHw hA!)w:GLVc^!<rslg9f9Kr62y7%1~u?7hw09w{Q@@Ph$%),,S= T.' );
define( 'NONCE_SALT',       'C#<=N.m||p%wtWtl1ow*AX]4-Bb`oDW#{K|`SR3O>h3k#<P@h8!h#Iw<lS>DrC&!' );

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
