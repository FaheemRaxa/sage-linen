<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Gxea8STmXopDTX' );

/** Database username */
define( 'DB_USER', 'Gxea8STmXopDTX' );

/** Database password */
define( 'DB_PASSWORD', 'N8JAwwvlvL8E0k' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'HuJx={:w`j~Sx0A+~x|lwA9rM4q6Q?oL<# Kk}^Llr_D2GH_nYa}V_{4RgD;4deH' );
define( 'SECURE_AUTH_KEY',   'u^QuW+M`p&kG#|6MqVb=/26Dq@jcXz(#oS_EhH=&hqMAX8 Tqnk(s68X*TXA~A%t' );
define( 'LOGGED_IN_KEY',     'Gpkt>L0Otz@Sjb%9I_=5siQQ]YvyC=<WwzNtU_.8:N5RHdtRo<v^5kuiIaw`2B;t' );
define( 'NONCE_KEY',         'qR2P9+DJd1v=hX9R3csO/UJ/j/6]s+ 6EBk1FHy?>ZAt{D^I$bkSy5bc+W-7wPz2' );
define( 'AUTH_SALT',         '#%]S4:bRUTELu$50H?Bl6}ulP]#^Ry4@q{Gr=pH3eB]/Nm~[E;}PCRb7kj&.blh~' );
define( 'SECURE_AUTH_SALT',  'eGGjJMT?ho1YPlLtndZtujHTTygp[0|JYIpzS qw):&2QYN4U>eg}fO(O~!QzL$#' );
define( 'LOGGED_IN_SALT',    '^aBprS|SgK`48u]O<*_L-)^HMh,r|FI80;&7~H?gauk[6.[wS^WFd#~WGi=X6~EF' );
define( 'NONCE_SALT',        'G<9c`V/svQyr]ac=mdl%+p(`xR5b_7y>Lew{2UGZW^m_m4H1$<fdd!$nR(.PJ^7?' );
define( 'WP_CACHE_KEY_SALT', 'pb>6=,~e9w9GF@RZQXn/&}m.1!uvXC2~<)I=I#r-GkC6R3F/8KWyHyH%W)fBs5@Q' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
