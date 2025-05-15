<?php
define('DISALLOW_FILE_EDIT', true);
define('WP_AUTO_UPDATE_CORE', true);
define('DISALLOW_FILE_MODS', true);
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_AUTO_UPDATE_CORE', false);
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
define( 'DB_NAME', 'u632469993_db_artvison' );

/** MySQL database username */
define( 'DB_USER', 'u632469993_Artvison' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Art111233' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define ('WP_HOME', 'https://www.artvison.com.br' );
define ('WP_SITEURL', 'https://www.artvison.com.br' ).
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
define( 'AUTH_KEY',         'J|G?rJYHpl^5Y0@%IfSCB:nv.CF&?HzAgUF|s`8.@Of&[=A8B;x#Irt29i`9:*XU' );
define( 'SECURE_AUTH_KEY',  '6>oCu~90c r>Wc($Lbn*qx%5:jkjo*{6Mb%eeX{F4EAct:;/sHL[H.L?=O}T+~V/' );
define( 'LOGGED_IN_KEY',    '!eQhjAmW{<RjxP9%U#,OE$#!4NOARPZHr&{uTH5MNWqnb+!hIMH42%i|nTz}Kz>c' );
define( 'NONCE_KEY',        '@ q@yk^{15z.=S%y4tm|>4Xr!=yfB]z*@$`Zf0)u;m!TQlwQ>ug&eu.rLWhdsrJV' );
define( 'AUTH_SALT',        'D4%%+~#FjOkB%H`<#e1!PJSscS[|KT/=A<=o28&wy|1>,iWx<nqPm,+wvl./Itk=' );
define( 'SECURE_AUTH_SALT', 'c+woUjs(%3=&e^BlBGWlBJD_Jv@hz6pSf?)e3MejDUeSpg]IK3toJJVIY}gcP+L.' );
define( 'LOGGED_IN_SALT',   'W=U2M9K|y7n`sQiK=K8VJZFcX<fIlM@`KdwY?4#d8qgJ[/Un;x-CY}Ra]hMholjm' );
define( 'NONCE_SALT',       'VyVPF_:bzGmQ;5,z@X^UgCTGLm{;zf-fO,r~bhO@y;sKKqeL2To,c|i1u<vd.I%r' );

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



define( 'WP_CACHE', true ); // Added by Hummingbird
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


