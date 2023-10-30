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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Z@v|:K 8{vI|E7-UPRhfgq9{|f;t-iQ]xg+Xxcz>lcek_&i.wEYCZ?7w1;/@J[^_' );
define( 'SECURE_AUTH_KEY',  '{H46!{GMqnA[PETf/*Sr>Stpkp33qjMD{r1!66NPuL#,[vjON/$OtHp WU0T2^s&' );
define( 'LOGGED_IN_KEY',    'h3jcxn>jMIp8 &z^ zuQTxp(J42}q}Z^4Ebk_7S*zH/E_6sWqv2o7uSD]0`caA*/' );
define( 'NONCE_KEY',        '*QLf#Mu|R3QW$)w/dSZYQpjHOr`;qH^.J-$:V8F%.rC+5(rg&`SV<em(>mkZ&!ru' );
define( 'AUTH_SALT',        'PgT7S3eG6MARQF(<)#FqrqACpP`)I@O_7x.o1a}vHZ+2d^]A6;YWGcJ[t[eiBXV^' );
define( 'SECURE_AUTH_SALT', 'W_O6`{k&HGr?J&hXT1*y7[>kAQ(M/R=oSU5YX`mGe0X?t/S*pd!{(hvJ[.W{>W_2' );
define( 'LOGGED_IN_SALT',   'JouD{/D:C[VrnA}IsW;{_1/X] T;0ffGuoTBQ<DdhW]+#[<GW`qR+Asz/p(,w/G{' );
define( 'NONCE_SALT',       'O=AH[ia7]b!KN_v^|Iwd$]S[Ll!1C7@2!?{WI;mXfxkHRf)p?Z2DyIMM_3)k;Zey' );

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
