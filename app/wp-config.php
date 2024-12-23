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
define( 'DB_NAME', 'cadifynfc' );

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
define( 'AUTH_KEY',         'Q2-LW!XU3EF8s+8SLw~r5I*80aCKA2yotCbUc*aZZ[dKKkNr|_q1Pf:rhs:nO !l' );
define( 'SECURE_AUTH_KEY',  '6-f&F5VfD@s|9nrkyXZ3_$Y+gj4rMt8Xj$^D#uzZe,Y4KCf7wg[Q/G_D[mJhTcT1' );
define( 'LOGGED_IN_KEY',    'bwP^qKRsH{5M5GW,nld2OgCi7ftFYFoT[GfRbuVZcZJ}wOGC(EK1*[shpNe*-MgO' );
define( 'NONCE_KEY',        'm!)o5 ]*@j# >@9`hmQ|}V3-#){<L2d3wqc6kQkBN9pYE8#vxJWu:r^&vI&{>+*!' );
define( 'AUTH_SALT',        '67rd.jOynd>It?|oxf6ufDx;{>uH0?Fi3ZAm.d9b;snChoMt_[rU?ajee9]>I^ 8' );
define( 'SECURE_AUTH_SALT', '8*S9]H??3DCdm!0?ax2Q*jk+[4#hLAMx?7=hifs!)ckeMU=J4T).;I%w5JfIhLm`' );
define( 'LOGGED_IN_SALT',   'abJ0d5PS>K(Hu/dFEMm^NtmbmYa]4MV])D&S(f]}>:J5>e{mF_3W,-9*h>i/x|7V' );
define( 'NONCE_SALT',       '}~@5dvEED^+6HCkY@/>+`U9*_@ig@dOAOk/>E6?<!voUbpK_L+8[*++(V{45o{pz' );

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
