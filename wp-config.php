<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
if (file_exists(dirname(__FILE__) . '/wp-config-local.php')):

  require_once(dirname(__FILE__) . '/wp-config-local.php');

else:
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stretto' );

/** MySQL database username */
define( 'DB_USER', 'chaka' );

/** MySQL database password */
define( 'DB_PASSWORD', 'this.admin' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.1.254' );

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
define( 'AUTH_KEY',         '<6K&}%7_w#V&&{)_PVBNJQb7~(C_f%(DX*f~l4F3ZyTVmiy#o@d-(34(JW+flo!r' );
define( 'SECURE_AUTH_KEY',  'qWFw~&_J@CBdBq6=ptMh7d~>N5(#7#5wjhj|+O:7HdL/gGVgO|*<`}~?J0O<bzX^' );
define( 'LOGGED_IN_KEY',    ':!Dmcx,KjZ-L9x`WtujgcvGxX!DcUtFVW=LMjw+ASjr<W<[!5pi*6SnA?J(MO[cq' );
define( 'NONCE_KEY',        'yg]$1TYfpq@pdql4;I#<.6^[A!RVw<_S|:Ta5#0CZ/Xw~VMdC3$L8MQg:l@1bMGO' );
define( 'AUTH_SALT',        'ny^Tim*;7n8&V ;LSN+OU5RglD2J5~T)LphPord-hhp34XcaW3_xB,N7Z}@T*0^j' );
define( 'SECURE_AUTH_SALT', '*Z3zl?}hsv-9NYodM_{j}s1!EBh2Nz^uF)w~L`Z(i@Q@bgC7;7j4S!--_}0O7WA-' );
define( 'LOGGED_IN_SALT',   'c!J3C($~7}Pwl1:`r;d?bDlDt}ls0Pip]fV;y DP 9m7Dj!@9-#@p}5|a1@JF6]J' );
define( 'NONCE_SALT',       '^24Lk0W+$D8~BoBp}:C+[l^1pTPu*4evetQ1T8J:Ek7:Na|4geNvP1T&I/kOhj_.' );

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

define( 'ALLOW_UNFILTERED_UPLOADS', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

endif;