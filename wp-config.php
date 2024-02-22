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
define( 'DB_NAME', 'egho_agency' );

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
define( 'AUTH_KEY',         '~m l=#I%r%)*.,Dd?n8`OJLG#&57tEi6~kO3V*9:6(_w*19VMNgCHM1VW)pl/U}X' );
define( 'SECURE_AUTH_KEY',  'v`u$d(:RGI!.8EZ=$.G(H~Ip|NDdjB[cVs2c`kY|4/:0Y/O3any6,rCr(#tOG9+0' );
define( 'LOGGED_IN_KEY',    'JIE-2{c.yd8B#<8t9MIIA.X-%on}KFMDww~Z=|?@{9&U_IeJK2Zh!!xHYdJs#c;&' );
define( 'NONCE_KEY',        '%Amwe.Y9<I6!0!F~(Ojwa}s>tgBb-LV!R/Dme.(]%Res(/P$&jry]{2]uKC(8E?e' );
define( 'AUTH_SALT',        'gjbV!ZD7B/5Tgc`OdUvs}!7;kJQ2CCWnI,.7LDx}oDIR@g*+G7dF$>Uq>}JM|I<u' );
define( 'SECURE_AUTH_SALT', 'JZTZ_-Y)2kHT[ D`zo*)tGgIn;567aBhHGl7QET}1 |:/%U%JTX:;.TzS[1+j55]' );
define( 'LOGGED_IN_SALT',   'flUc:^4e*>y;h!NWVAV0mA}/(hf~{>AfG3]|*btg8x@<Zo5Ljnmk]3f&/&Oy*_,A' );
define( 'NONCE_SALT',       '6(-{*uEcmO3H4yPu3sf/d~g671Sb>Z9&8K0Di)$Y*figYU9$9WYb)X~p(yJdUrD3' );

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

