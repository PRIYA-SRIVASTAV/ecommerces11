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
define( 'DB_NAME', 'The full cart' );

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
define( 'AUTH_KEY',         'P`dvq2i|[gC#e:iP`afbWLaH@Onu,3yN*^LO)=?EX~ysA@e_#:]!rMaujNnPiZXC' );
define( 'SECURE_AUTH_KEY',  '~J|%ydSxq.{8i*QM{IvYi8@zr99!Sat0=B3e!fMRQGRYzcZ4@lDo3mboU}O/$y>}' );
define( 'LOGGED_IN_KEY',    '6^oV(R/^IESMXkR)fH/y;es4EJYb.E,iJk+RMZEd(-5&xB=?-Bnn=>i4;r>8k+:K' );
define( 'NONCE_KEY',        '4sExMR^7Fi]x%Y/};(h]i.@Z.jIlCMxdcjCC:}xpIcW5tQ,3}w:[7**1=8rWcXxN' );
define( 'AUTH_SALT',        'lhg0Rp14@d6r >NJq]+K8igVt/l%[#F<sUCU!2^` #lJKZw,)}!W5;+>1IqJcub2' );
define( 'SECURE_AUTH_SALT', '3&)AXDF>&phl:V-PP%`Cg0)qL,Jm1Br}$fB=T:}~GiHo}76%3AfoYye_y.>zB}BC' );
define( 'LOGGED_IN_SALT',   'jTb*iSGH=Z{XRtG_ZEX$;sec7/$}dE$U i*66Tc5B 4W?gC;N*[=p*{/ZC<}chav' );
define( 'NONCE_SALT',       '6Rx%BL/;OaSZ8Ct-41EoYcCAxuv%L^6br&r$=aUm1P5p=K;*B;TUjKh/O[~!S=Im' );

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
