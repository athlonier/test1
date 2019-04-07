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
define( 'DB_NAME', 'test1_db' );

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
define( 'AUTH_KEY',         'BO4hwj*[Ln5W)Z1Zj5%`Dzl7@1r0ErO4:,q#yVbZpxyO[8G99kQNV>Uqp!HcZi.g' );
define( 'SECURE_AUTH_KEY',  'u66&,OZ@T6)}T.5F(I_[yzp<$qluq0P^CFh8t(&$UHmhH][!r<!P95zRU0> {s-S' );
define( 'LOGGED_IN_KEY',    '0E!m9|w}1z]gNOuZ[}y-mwu~_an]:9Ii*ebB[N6hRn>+c!<nK, ue;@3AQZ*sd<J' );
define( 'NONCE_KEY',        '3a0-@$4$R5Ya^VtTq>[KX*?,d M>!zLY+<.x0T8.x7deeh+|I1rn|!DzayNHSum/' );
define( 'AUTH_SALT',        'dxfP&Ed<sgJB2FYke0qqj:5,9bbY6xYBa47Rb[4RAI9QQQbPBjetBvY4y+r+[}Ez' );
define( 'SECURE_AUTH_SALT', 'GLR~{|(s#}[!{KYU=uw.%D4s`D9E&hd@&)g$BH6fBMx+]0ml??W9B:2O;fW+*9g;' );
define( 'LOGGED_IN_SALT',   ' ,KtQ2p, {;t:}@td$aB|bU@Df9qgpHIPCAyw0[|@GL4Na):6)411kO`@Tf(Iomu' );
define( 'NONCE_SALT',       'gyr94iYU3Q;puc2aw`IuFb_lOpYGE^0~c&}b0XM@Dk?}q S2Xa=-h#sD*-[zXix{' );

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
