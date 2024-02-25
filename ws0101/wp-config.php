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
define( 'DB_NAME', 'egho_agency_bis' );

/** Database username */
define( 'DB_USER', 'mamp' );

/** Database password */
define( 'DB_PASSWORD', '2diligence$' );

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
define( 'AUTH_KEY',         'O.`SDm}i,-%55_<#I:5iSa<pQJH#XgN?~Jv,DLiTB]K8ZD5Vo4y`yI6!s+`$_)@}' );
define( 'SECURE_AUTH_KEY',  'Hhts0[gldl;k.&Z}~FxV=pU}##Bzo1w%;k{WmJ6p]A}Oyr&Jt)W{Z~9U$z2f~`4c' );
define( 'LOGGED_IN_KEY',    'GT[7`kGbFf2mOG7fe$v #`:sf|KTgKeTi~/7:4M17ofL5&czQiA-FNy,=:d[C`N}' );
define( 'NONCE_KEY',        'v{bN]a6y#w;R?nL{AavSIm7CoJky}#SJGST@;nU@i7~yDr**wcsM0wkwR+3=$ZP=' );
define( 'AUTH_SALT',        'H?}IOwHk6SE*_3;H*C)NI`ZpJnG0ZVRKnF4Cqf?kp[W@o8wb3E(&W w@w]z&ortT' );
define( 'SECURE_AUTH_SALT', 'tsPcFUnHXF7#N,]TxAo_|;n0>SYQX7MkJ_|-kNZqE.Z N:x!M@N%G3 eY/9$CN}Q' );
define( 'LOGGED_IN_SALT',   '1bfP|OU+,;|!mtS<(#I*rZ^Pv6hk5?ieFylq-ITh8Ub:@0i!z%d9HcDIP#!d-eb,' );
define( 'NONCE_SALT',       'Mx?]]=;#tm$11jw*pw|I4QwOPD]wMwM+F`Bt}//u[h*?L(blZ)O-O[U*SrpU+br.' );

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
