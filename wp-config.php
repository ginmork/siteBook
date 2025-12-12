<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bookStore' );

/** Database username */
define( 'DB_USER', 'ginmorkBook' );

/** Database password */
define( 'DB_PASSWORD', 'QwJr4KIg' );

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
define( 'AUTH_KEY',         '%9q-D+r*^1~pQ@+{_ldkl#7chf_@B36T4OqB~1s5:aCN$j<@1g4ba+SS9:4pltfG' );
define( 'SECURE_AUTH_KEY',  ')T{Pz?:_R<yhG.Jse*9lvne+KpRf8@HhW&g>` IC8EVFBMp1+Y0I>]pDF1REQ+hO' );
define( 'LOGGED_IN_KEY',    '3F1S4XD&8p>G3$WjiHe)M>,Monv8~HQQSFi7I[HsExf#t$YtWi;YaREk:^aj&X;H' );
define( 'NONCE_KEY',        '<Y{]+!W}[i|B!KmU3BeQ>G!Bv*AuUw1D%-^a>X`u`Lh1XeRj0MjS,/bdt?_25?$)' );
define( 'AUTH_SALT',        '}*8Hv{)>3f?M~-EX[.MxvgdSrnu xma{Xu&q2xUew(qU%,~HJvpfA}cemzX (u(]' );
define( 'SECURE_AUTH_SALT', 'jWF7E<tR(L[E$~/tOKm#i{3[|-P#,I-?uK[N9&CM,U4Aw1$B^$}BjsPYe0U:I2}R' );
define( 'LOGGED_IN_SALT',   'cU~7T7@=Ol*Q~XBkSCp1+T[2ujsVyGN)SAJnXb:q#MfCt2w{-~Cs}WS#CTP&;[N=' );
define( 'NONCE_SALT',       '{1mhGXm5MNGX+/{doi-U`}`I#O5zUM]WgF@tpw_>EDkS6>~GTt-mybx!|y#ZdRTn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
