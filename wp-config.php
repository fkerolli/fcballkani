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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '=HKKf$26;EsW8QE79H4L3iMJ^11 ZPQ3imGd]B@bSh$Q<,!a|7p9;SEf/?z#Dl&2' );
define( 'SECURE_AUTH_KEY',  'kV<4kW!D!MfW]s+Z9$5hUPENO:%GxKdD^R{$<I<{<g,VSxR3 X_{!7cJ+|YKm=n=' );
define( 'LOGGED_IN_KEY',    ':HHDlQOpbFFETZ4~A0,9=<FXoasb#v0EgvMd}?zS=kwd~m9+B&`xUJt,DcxBwje#' );
define( 'NONCE_KEY',        'Aq6HA|g7zSmU{qYXOKxe Io7{7:;#}ZurEgSdG_H~EKrEV62::p.@xMjGeb&<vQG' );
define( 'AUTH_SALT',        'b?g?XB&,F:lOGnl]I@,v7-PSAz;2-!Nmsl$Rr/+f3uJS!|!qfL%3<:TN`2&DxheS' );
define( 'SECURE_AUTH_SALT', 'C?5.P[lr<BLWzA?|<D<Y/4d~O->tt]veJvl,>z#YLJimI[wy|.8UAG}V{Pf<__W%' );
define( 'LOGGED_IN_SALT',   'i[{v {91O6i5Zs`X4D=g1>9H~zcDc4<6o2yhbL)to{=BfUg.]F;-:+UsVr[JMoz[' );
define( 'NONCE_SALT',       '!qY_hVwCs3}g>saf]Xn`=v!pV@622awers0/MH+gd[v)D%4A%6ZzTZtQ;d n`C9E' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
