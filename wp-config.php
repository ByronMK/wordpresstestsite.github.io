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
define( 'DB_NAME', 'Wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '(=?!iKYcIL2`._qJ-1!V~RayjV4f}+r X5!JkmI`7zY:`^gX{o$9D:goxQQz^w+E' );
define( 'SECURE_AUTH_KEY',  ';7R[@YTqu<yD0jnQ#l:>q9KXKJf76`V>hFw*3#dMpcT|iv#A+3wWR/;mcJ1@=O%O' );
define( 'LOGGED_IN_KEY',    '}@^VNTmB<j/>S=RN?q.=C&-PnU-W8#$H?y%20b#Wg:t&g0p6[%g>_uh77}Y,=VtP' );
define( 'NONCE_KEY',        'O!{!2{(8z1]o;ndx+&]IFR@)|vf3ZLzGm-$gC+LME0Jqg} ^0VRyBxsiEUi.Ed-Z' );
define( 'AUTH_SALT',        '6QWdw0wo.C#VkBWD5;pA*(iZBXw}rx:>oRMS#pvc.P!Y6S/wxlI5%6-!XyogF=Mz' );
define( 'SECURE_AUTH_SALT', 'Wa.R3B*Ir_J)q+KpD^%%z2Y;7a ROW|6vy+o7hX,mx{m:[Aq0pTVw|X&EAlQ2n/U' );
define( 'LOGGED_IN_SALT',   '$4#S6)Ld$@2F`N*Qs3Ivp0PtmvbbeP~P)%(W*2$;<1I?(3Q/jZg y_bg!CF$3>%Q' );
define( 'NONCE_SALT',       'rAHwDAA>jBd]:%J,nf#htB]vmpqMSTTuV6`YO,xiP_fN);ryAo3/BSb:q,ws|7}9' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
