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
define( 'DB_NAME', 'coffee_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8111' );

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
define( 'AUTH_KEY',         'qdNz^+aKiGr!k!MvKa02XXESl}@IxwC*)[?kPVo1P<^K#||>o:ZR<q{!&tZuYf-[' );
define( 'SECURE_AUTH_KEY',  'n/=]AtJd2)ywYPL#Ax4%oQ3hlKJFqsee`YHWLligy7~a#I@^UKD]tN,k|p2}AB3$' );
define( 'LOGGED_IN_KEY',    'y5g_%E9H*=.xc2!6nR#sQlI5/zw:Y^DZf2nho0}d}8*rkU~Z{>!_#} 6>Q-&yd)0' );
define( 'NONCE_KEY',        'jS9Efs90PG653;ZApx##_}TbZ7;uzr8}wc8l0,5Ho@**aOH[]Yta2:NPU)/Ze]lT' );
define( 'AUTH_SALT',        ',11DH>UVR=h62O3 SFZnseE59+P9^DJY_`Lhw,ER)i%`aTz~oo*2RsA?Q>,qTFJR' );
define( 'SECURE_AUTH_SALT', '@CA#JPGGR<j;J7KBy(m7{?&VfT(tC:nKs]UcUR;m[BxZu4/TFYN9k.<>fg@CvX<q' );
define( 'LOGGED_IN_SALT',   '*V}Y%TY%V$:9+dv2;,S[xx*|fRuKKbQ<|tLoDYeO<O=T{` sMgxI@P#<Fuew9ewF' );
define( 'NONCE_SALT',       'b.8~_AgyL:sxq#m~H]9a)=iY9H7V#O/n^8Ub!lz%=)5/E {Ee6BH9Zd$b7=?5,.f' );

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
