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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'letsgrow_db' );

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
define( 'AUTH_KEY',         'q=;>*L}MT8?nCKt5hp n,X6{qT&vI*ktak/UXI%b{QKCC|:GcsKQ<j_=}2vhocGx' );
define( 'SECURE_AUTH_KEY',  '-D|v?P=xuRZIh+t}_yoz7.;Z_f/<n)d.<%$!12w7PA%%8CmkBJMj y9N~z9NNqBz' );
define( 'LOGGED_IN_KEY',    '56_3_LzD2l[fBVyL:Z?PK0D2 =hu=~ztn(;=Vva}a13+vln%.kQuzSetB}U<SRW#' );
define( 'NONCE_KEY',        'oIA,fQC SEo.sbm8H)&A}o(RZE:}nrdVU`y!QE(v7qm9_5gt(FetU>3)7%G,0x[4' );
define( 'AUTH_SALT',        '4eqba)9hj!bJi`1Z@?8qGaO@HA@~.<S;gnmsvdB%Y%Iu+dH@4AAltMR (&_Uck4?' );
define( 'SECURE_AUTH_SALT', ',7lEV&b|A2l.Dt,RD<#0r&UvSO{[[Bk5[!hQAR9D>GD,;;I>$ekThn{zT$Z9fs`:' );
define( 'LOGGED_IN_SALT',   'C.~4p#hA{%}m(X1TZOTC^Gs>`D|RK}M*4*fSK=>U_r%5U)y3{|o)2&?~bq1r6vQu' );
define( 'NONCE_SALT',       's!4p@1UQ5v9$XO]>71>SOf8l5`]/E*y8AClm89g4kfu}aZo#WE{=<SO1zpWGESe?' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
