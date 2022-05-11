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
define( 'DB_NAME', 'brief_8' );

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
define( 'AUTH_KEY',         '|^2)BMXh6:u vN,%ds^/p`H/cE49K@MP7S/vc{ym8-~3Bc_!vEdHH`bRlM)NP7o5' );
define( 'SECURE_AUTH_KEY',  'PnkSMQH](:[QX~FQVCf:,=u6<^ TKQ%n{7UtxZIb@^s8HH!N6QgEe->VJ2:_FK? ' );
define( 'LOGGED_IN_KEY',    '$tKO?$x!E=?TLnYohfV]Op2uGtj2b-yuZ(mFLTBF,bu2n9:V^T5L~6@nR|Lt<o`O' );
define( 'NONCE_KEY',        '/!.2T.c:&$6gansp}.1 8jul:2=_n(^,`E}5v>eFvRCy[9ACuB3r83V6nknLLj@r' );
define( 'AUTH_SALT',        '#~e4<RXhZOv==/1X.m)3`xye)gHreeK,;{jK4fFvpEP:^R`4C?A!(ErAtXh#HR-J' );
define( 'SECURE_AUTH_SALT', 'ea^CflHB0vK6HQH2.<1m:mjh@O5XRWMvw%ZtS2 3%3T%{-n.P1I5$VG)oMX_BYqf' );
define( 'LOGGED_IN_SALT',   'CClGVf#Gu,~#LDq[Wi#K;e-Wg]M;H].Hg{^u&N-%ZL{z$S4k*|unv_A*XTQqY:JN' );
define( 'NONCE_SALT',       ' !omruYsy+u@QB &F!fNw%.$npCiVu ^Mo?%9w{|~%B|Lbx?%,RhF_D%0X{e^DnQ' );

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

/* Multisite */
define ('WP_ALLOW_MULTISITE',true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wordpress/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
