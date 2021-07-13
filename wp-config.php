<?php
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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pw_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '{0`O#a:$&b]{aig<C CpxGMl.:Tu7`-wGIAkEL^1s$nu<d3i|a%Kx9Kz~,&: t)>' );
define( 'SECURE_AUTH_KEY',  'h!x4C=7Ah,dj!D%Wh9(BJ~zM@$XJ1H9xiGf(u0K^loza:8f[wK.9- u@j|vMN3sE' );
define( 'LOGGED_IN_KEY',    'B/(Ps2J(X}CGtfZ`j0ZD:XVQ[Zu|q`(g>@zz%,4[GbmDc#(u~Z<xs3Aclbd=V2j`' );
define( 'NONCE_KEY',        'U~m_:>W<f+bsbUr_uf1Y_<95Fsi(qI_ntiV.,j^v]{J{M`Ywpxsff5;^rx1X.t_>' );
define( 'AUTH_SALT',        'Pjv`=AQ4vJEj|2~dmhN(}}Gv(k}iMW?HHU]DJtp jAA=9>?3A`[)yuQ^u;! !6TF' );
define( 'SECURE_AUTH_SALT', '7d47Rq5,Hr&swD<b,YmV@jK,M@1uF?tcT2T-O&tT;.FiGTi)2R+B.b<53TT/v5lM' );
define( 'LOGGED_IN_SALT',   '*L[fqYvHuc/ZPvZ,_(v>V{]~5[^uIyc]u<m#_lJcTq`-2|ao}.0q+7boeSQq1^y;' );
define( 'NONCE_SALT',       '$U>5/1G~HoK&&R1q$9DmS:pK%t*q[cc2be/%JD4 ;6-(~Hl$!<)VZ@h/238TzYTh' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
