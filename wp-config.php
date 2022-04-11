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
define( 'DB_NAME', 'calendarsd' );

/** Database username */
define( 'DB_USER', 'adminsd' );

/** Database password */
define( 'DB_PASSWORD', 'sd123456' );

/** Database hostname */
define( 'DB_HOST', 'db4free.net' );

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
define( 'AUTH_KEY',         '3r%$/Sfm(FS agtm1UUWtoHFqxmx7fWd3Frvg~82RcIm[|9T-344{b0,I.7TaM#$' );
define( 'SECURE_AUTH_KEY',  'CZA1Ni!6DCVAu@Lu}Z/#|au[M  TBi!nJP2%?NT;qK;~8Px{NItM{z<,0rqFH87W' );
define( 'LOGGED_IN_KEY',    'B>4ue^w)Yy#*h%}6/C8>$1Sg{F.3o*we1aZTpt)<F/ QY)5=sJA dnLxo1s&BeKH' );
define( 'NONCE_KEY',        'v*UJ19/I7#=>,6Ch%01(tqR}-Qg_4(ng4?97Kb2_~xM8%6A$;&$rHphwtPF)lVRB' );
define( 'AUTH_SALT',        'Yk$WQgu<yOO2o%Gc8#WN wxm=].==[6{gc:PEW%nKIk^4*34RQzkUz3ixkz8/s^Z' );
define( 'SECURE_AUTH_SALT', 'h$kdN)2:*dyT-V5ZKJwV9glZ_|riM]kg2Dg5eW>i8%T:]U+~^2WUjW[f!,RR:o6/' );
define( 'LOGGED_IN_SALT',   'E-#+Kl[D0J(I8A@)Vo8*){qsec2Sj{WAO5ok4^!h<fb7_iJzkETI%6U+TU>YQ+SQ' );
define( 'NONCE_SALT',       'xDU@Dy[<%*fbr(fz`ZE>x:HR7DC pSz[L5!+W5DGmx+F3;{`=$pyH/0uA7&:W5f-' );

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
