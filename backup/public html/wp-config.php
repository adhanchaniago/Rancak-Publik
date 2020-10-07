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
define( 'DB_NAME', 'nama_db' );

/** MySQL database username */
define( 'DB_USER', 'nama_username' );

/** MySQL database password */
define( 'DB_PASSWORD', 'isi_password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'q+T$PI$]N6_*-ojbXG5*p+#Yz3YG^.m`woPu^NBm/.Y}jLrm-zjJ6_ZMo?Y/*l7b' );
define( 'SECURE_AUTH_KEY',  'IQuCp;<jq_$>DcFEi3q^nNW=!S=Dy=vgYb2Hjc}53ndMI0RrS.3l_<3qj=c[ C45' );
define( 'LOGGED_IN_KEY',    ')$rDlABD84(:H/PzhD{@5J*i%tQ_x+($@V`7$)7|r/ynN0-Cw^/Y&ijg}~vO!+}v' );
define( 'NONCE_KEY',        'ut}v[< |xJbD,e=.|$JntA,V6KT{,?)UJ:V6lH1a++=|+k3G0P`XhfjWFU%1%YZz' );
define( 'AUTH_SALT',        '/gFRvz.X7GpiTPZcM=v2cx+[iYu;pnGTv>2_>Jd={uguVanSzcUbNSn45e:R `[D' );
define( 'SECURE_AUTH_SALT', 'jF?}vOkfNP,e]}450Yh1wxN{H$E3eLXL-/Gd5-y/MwWK/4f.a0+B3}B; uzSW#d$' );
define( 'LOGGED_IN_SALT',   '@Z^U?Q^flA[(ExW @9/%YqSXd2=FAwTy+Iht5Vaba`&_F99<*aWr&I4 <!lQi(y&' );
define( 'NONCE_SALT',       'nf%UY>a>]2,lvd%cHU]Rf.E2@DBL/[vByHh5C-V9MBMaD2eJ=0$4uY@=x^)EuGo8' );

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
#untuk manambah batas memory upload file-nyo
define('WP_MEMORY_LIMIT', '128M');
