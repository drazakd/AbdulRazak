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
define( 'DB_NAME', 'abdulrazak' );

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
define( 'AUTH_KEY',         'cF<jJ)Bq#R2|V9:A00]v$LG|}7/<Iu]+0~0QZ@h|Bma,;g0;xDhR9S,KC)?!UJX-' );
define( 'SECURE_AUTH_KEY',  'zaKz;&U ePmrO~C2QnqSRM2f96kXc@e|g0Kdt[C$(IY^TYcZYN{I0}BkeCWsMJ~O' );
define( 'LOGGED_IN_KEY',    'Zd<@IaQI+oU?q}zB{.=D5-<4}Up*.HG|/p<?QaDpPb4nF+_p/C85=6c*b[5M15 #' );
define( 'NONCE_KEY',        'a}`+TuV0X-~jwKkmOa$LVuF*$PL__iyo$dlif:ii5`UPt3Q[~y3=xgjqVr@P`&U8' );
define( 'AUTH_SALT',        '_vq;Q}(H#!zkt>jN_<_`OkdyDH,`#Zt;z8.X8qK3qZYk#2GOxQW1S!O4BeydyvGC' );
define( 'SECURE_AUTH_SALT', ' vG/),qVSOPYFcsda)2Z<l)@$9w}%R[Kadd!au)qa<;Ob$ob<l9KSq~ ,*@B;6B<' );
define( 'LOGGED_IN_SALT',   ' C&x4$a]-XF-fg+d=:NXGkGd)&kStZ#fd3.iafRIOAOjg]tcRqE_Znv</]QXj7J5' );
define( 'NONCE_SALT',       'EAs^:|Zi>>F{S#I:RO_9Tu7/?+ty)e?(ee|v)ym[wcxg{iSV5j.?`28|-vY,0M#$' );

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
