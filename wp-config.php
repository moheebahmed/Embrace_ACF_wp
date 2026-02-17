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
define( 'DB_NAME', 'embrace2' );

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
define( 'AUTH_KEY',         'mf.?w%8OGQlZ{vl8_r>C-d4V|.-%saJJ-C-((CWN[0#cDn=A9Q8GDpKmhc4S+F+J' );
define( 'SECURE_AUTH_KEY',  '?kiUK[aGG5i@B=RnSXh^L`I-N81#-EHznq]Q,[{)kD)(dr<Fy~z+p.&Sq(o4o5h3' );
define( 'LOGGED_IN_KEY',    'Tpn@tWt}WDHG}$h$u&%z$IdZSkwY]6X4k#os`.x|+I>>Vm[i`fm:EE9F:S`$oiW>' );
define( 'NONCE_KEY',        'fD.V<Vj(J:LJe9fDJw[mP.y&TW_UV4lb{%%-+I6 n{wRh)d.K.)<rBAZAx`vRi(%' );
define( 'AUTH_SALT',        'qYXDH^VdARtHhvoLlun0j77XSJ*%$u#`X@,GzJb>Rde?rsa9.//5T&HY{r%[gV.Y' );
define( 'SECURE_AUTH_SALT', 'b8wmPlo4wk$Z82L*gOFpTZ@xjIvE_5|Qgt1l+]oibgx[)iM2w{vKhuRZof>~m/aG' );
define( 'LOGGED_IN_SALT',   'H:#l)Oq0mY#_s)KpEbCxtWQjo_KFm1PQH_pN*34n}{A7tLZO<JyR/Kf+R!;Hb8UP' );
define( 'NONCE_SALT',       'Ih4j4n^Tm}iZ@R}9,7<.y.EaBS+3^xi-yqW$;ET]KhA+Hy1M2L8vn{MNnUn[=zs0' );

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
