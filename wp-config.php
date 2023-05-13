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
define( 'DB_NAME', 'beruta' );

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
define( 'AUTH_KEY',         'X!@Skl5Iw$7nguSA!o{~ExHC^+Y[#^FtwP<kDf?1Pa!amFR&%ruB@@WA$yG;yS7K' );
define( 'SECURE_AUTH_KEY',  'JtL?A3qmqZs=10,J:a)>W n`SU-hW~J2I%>?P5i20moGn==c,]J0)]tHDh>jHCz0' );
define( 'LOGGED_IN_KEY',    '&{$fy!<g?z{oh.u~K?j*.*}10~f9bB_Jz/0-[(>MMa]>o|S^of*qA(]3^`167U/n' );
define( 'NONCE_KEY',        'G]<N3@%2fMOS2Q[yV{QXDYbfcO-oy=Dca:9{3c!8<E[&`?lxV@.}4V; Nlu6,k%I' );
define( 'AUTH_SALT',        ';LNVE7U:,FV@)M5k)WE$x&+jQT>vuH2_7Y+dS 3k.#gKuAGjB}uG cCr?<o6(O[h' );
define( 'SECURE_AUTH_SALT', '%PV7J1ZMljSy;v%]-?V,;yZv$5K&{z5w!p{un$yR&iny2nU7cZIIz>[*JNL}4~I ' );
define( 'LOGGED_IN_SALT',   'l/H.J/=*OP3irx|6**;*(v:~f/z[HET^leCznA)-Eb.2 4{M51t{t(2XC}g,,>Pe' );
define( 'NONCE_SALT',       'YRbAkWsiuP!@A n>i;T2@-Wz`8jMU&:}@O?0yc3c#k8/ oZHoLbqMMX2CH%m~v`5' );

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
