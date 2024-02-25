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
define( 'AUTH_KEY',         'rc#o!~1UYRw0!R-mMcPNoyIGiO7D 8Fx?s)/X1f@Cf=d%O?#9/Pg`@]:Y6kV(?${' );
define( 'SECURE_AUTH_KEY',  '<I@y.2^gdpGtPYupT>Q2s5~=mou`*2^Dg]M^{:JqIJsCPtv8y8~f@}y D;fuDrv5' );
define( 'LOGGED_IN_KEY',    'N~lM7l.:zfhLk&f0kfDT<v))ivFYRvKLEpj1*IUr;aCi<UU5JE:,wAUK8},y@J{&' );
define( 'NONCE_KEY',        'cE8R{xOO7za56lcj#U&#rC6?xriY!oc`] aY}xyOA6U0Olva(b{^Jh<}fy`NAZ8.' );
define( 'AUTH_SALT',        '*R I]JE.uu;h#e=v9Nvb%Cxz6AMnfc@CWiT,2[#EqTy4rVilZ{y2-MIm4J/-lm_f' );
define( 'SECURE_AUTH_SALT', 'Se3-Co;r3pnZP.GlS$RhYdLNn5>+p,DFdh<j?/MnAo2iUYpO<IiF2oq_;X4[vAT^' );
define( 'LOGGED_IN_SALT',   'X5FcEruB($e4]4UIAHe5yIf`oQyj_#qo1kwJea|6G8c9VIZXFE6!aWO~BEF4plIv' );
define( 'NONCE_SALT',       'NTeQ5m9zB3ZU3|6BcwNw(H(nWLa{ m,Bb)g>G^,b~W}AJ{+fjog!Kn%_ Y=>c+*p' );

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
