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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'ul9.cRSxo#g*`upu-D6WrP6g;y6%FFp(iCb{qZ/v;__u9rj!@<sp!b*_.Sgy#k_7' );
define( 'SECURE_AUTH_KEY',   'Tul];Fz%ei>nr^_Z*rlCxW1j#M>YwIBkTfc/b{(gc#2jt5z>$[GZ+8Y*./U>QM)2' );
define( 'LOGGED_IN_KEY',     'JkV^ueH&sKarA[pni{;G>F@$<y6e_FHuLy^+T,Z@e[}bcD%?!x9CfrTsyLt%2L*Z' );
define( 'NONCE_KEY',         'mK1S0[RiL^V!B=qemKDbJUxz8B@=k!U8vITd4UecsM]{1B<)`fFtC<R`W{-v(%L|' );
define( 'AUTH_SALT',         'VX<TZOI|a*MroR~oNF<q`c1vDrvQr6f>.~@QkE4ywzp9v0*r+GknKxGsQKL.loVD' );
define( 'SECURE_AUTH_SALT',  'IWzeJ<,#1:Fn6$zkZ;Kbpl(i6/(`1xzwf_bs{ov8DE4yw/kGl*UR06KMz_zNxNj8' );
define( 'LOGGED_IN_SALT',    'EgLqiKxSy~)LpSSfB/4E>epi#!#^eJ9UhSp^6*|yER6A):4Ztgfl_3k6@uA!Vr;6' );
define( 'NONCE_SALT',        'tD$h<?lR: &oxdp%,2y}dOxIGP>2l;cf`$b(*d*>&JQcQR2v[Ak?3Mpr}9:68<lk' );
define( 'WP_CACHE_KEY_SALT', '>y+8NLG@D_y`/IJW^=oJ_3yI-G}?^m}FLk=h`%K>52@G-hFa|Xz:|xe=dRyr[ 93' );


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
