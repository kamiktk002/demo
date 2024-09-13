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
define( 'DB_NAME', 'portfoliocv' );

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
define( 'AUTH_KEY',         'saYjw$gUleOJ5Go%u?wxC,-G8[QV8?Y;=8dyZ/7c[7<lm56.2P6V_1SNSPR9@xf3' );
define( 'SECURE_AUTH_KEY',  '@NZ>`wZ&KV:DTXh7udH|nV|#!G0CVnL6}Rp9T?P5#K1B0QEpgU$.a<p5f8@)RXG_' );
define( 'LOGGED_IN_KEY',    'h$8ViZRp:z=}5ie>8Rx33sh[=ZnB^3UzQsRp CgHg)Z>,+R~aW.2Z4$&zw]0k]8L' );
define( 'NONCE_KEY',        'm%q-6;LU:Z0L]3r/bfE8GA[nA*9(5E5~m+wZp^X&Ce^BQ;Hx.kc[E]E[|<$7$82Z' );
define( 'AUTH_SALT',        '7vta~J&U^_p.XI`EQ0vAJ7*NvZjZk}CqOE6(%^CzVV!Ap~^)hJc}K@?A0)Ni; Is' );
define( 'SECURE_AUTH_SALT', '2!]rErTpRnZ>/(!9HKjYA`Q!=]F(ft~01Zd|A5%H4dRvryWT*U4a[A}M8;EnkLh>' );
define( 'LOGGED_IN_SALT',   'JN.GiqR#x>DQ7i=d{.<f(E%Jjl4eF@;v,wf_i;SUA:{mA9Eu|ORG[G^#qyvpPl9`' );
define( 'NONCE_SALT',       'Dp/xsm1(U1(1JBVgMS!sQN:Z*CR*nSaikCQkS+~U<}l)Sh7P}SmYPQ7Byf5ox0 G' );

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
