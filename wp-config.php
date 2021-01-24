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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'w!Lqm.cu={#35P=ctrc/%sU?LWC;vW(XTnyS)75[fAy_.V~2U/Vk/LrO#^y;xEcd' );
define( 'SECURE_AUTH_KEY',  'gPO?O#M9TkR{HCuA?7R5J<l@ggkjnJ%yMopA72(rZ8 %{:2Y>|Ha/bJstI{H@,H1' );
define( 'LOGGED_IN_KEY',    ' +@hjIM;cOjw>uEe_{lyZCLzy@H])r~r&288q4X5xY0/WW.pAt)0M!Gm,o@|4_oV' );
define( 'NONCE_KEY',        'udnz(HS*d3%&C ?z Wu?x2IV])b@,}u1h-aTCt*]l7Ldr7:K}BXz*<yglLEb`3(<' );
define( 'AUTH_SALT',        '}{[5x8yq8PdU25Ows.h8:WL62O1TaGOag7%q7nnX%X|l+J@,uv-rynDz0O|&(F}H' );
define( 'SECURE_AUTH_SALT', 'MX4oH/!8~MHxlr}15>W7yb8|NmT#3nzs;idvufAvW)>YGmQzV3hYl?dt2>CX<M{J' );
define( 'LOGGED_IN_SALT',   'tqZS=p*9<#n[K*8RGP-frtl&1y^2#detR{{?jO]|fZWBty^EM.+`]cP:J(2VebW^' );
define( 'NONCE_SALT',       'LD%):j2Z}Gf25dsx=EsPf9_?Fr9a`2DRf0zfXx#^9]cY0_lt|{q2T rw~ `ln?:r' );

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
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
