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
define( 'DB_NAME', 'teacodewptask' );

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
define( 'AUTH_KEY',         'fNo>&J|<c`xo8=zT.nsO)+u8=I#Mc5$,hc$oFgBu75uzxqpE6q0qR2~viPq&uFZM' );
define( 'SECURE_AUTH_KEY',  '{D+7yb/YAVD3^3nW/RcZIVM0>.%uilPL!u_:V$c:L7pAa3!4-<4f4kLRPcZaQA[@' );
define( 'LOGGED_IN_KEY',    'mNLoVNrert+*r>vW Ee?p~X.`:}WNY5bpI36mGZ84xhqFD<q?(xhk=9d1W!>uA[^' );
define( 'NONCE_KEY',        'f(paZ;fvu1*H)!}*.d*_i c~ENiq|RlQ4.nlh+nFd7sKuAu=UgWiIlG kjP:ef,w' );
define( 'AUTH_SALT',        'EcZTH#3A;4eD(Gp:?<N/YKH;>IO|DF:9VTA5;80PM+@M/C$,9-,}1/6 Tip&)BGJ' );
define( 'SECURE_AUTH_SALT', '#.#oVSKaP*_-Zu75L3?:dGT]9<vO`w&e VLGwu4w[1y|>7lq/a+39Lw=lF^8=+Pj' );
define( 'LOGGED_IN_SALT',   '&uc~w|7!S7bI!9w.f$OT<l}dSXb4wY7i>9)s5#LqJYCUk%fF7t$tVn7ugB8D/W=f' );
define( 'NONCE_SALT',       'lkcZz4yI[hMQF~5=sC/jXWU<]R/-uVy:)0+<#CPzcpZc:2b[;~X@#&]1byDq~9M;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tcwp_';

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
