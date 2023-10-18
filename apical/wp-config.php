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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'devweb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'B0[JE)])|b+wtYpUKve[8S_PCR< ;P4Nh^CphuEKp)gVwd~^wnEyxun~ebT5|I/>' );
define( 'SECURE_AUTH_KEY',  'j&Il[`*EEd:TiZhZ0z(.{zfY68o{g*5G/OYy3D|c_%>JhV/yDJ+>*lXU%gOm)0QM' );
define( 'LOGGED_IN_KEY',    '=zZqy@=;#2[BSw&5rqTuU:j ZL1iNMmTIRpvB;E:Ixn%|5pT#^QNRUqZ-6iD&y5e' );
define( 'NONCE_KEY',        '7dfx8(,]wI9Y??pcOFs=e#h*!M-b~?YLE?7X{wNXwc?WsgfbD!x4_92=,3cd{lWr' );
define( 'AUTH_SALT',        'TL.]Nb: dk@f8 O2^.=SRjvlKIW{f*@k^f!1mcY+O4~fm2y;f057+(4NHg-+>T%,' );
define( 'SECURE_AUTH_SALT', ' Oq4(Z#@$LB-37#CvZayXd%[jeXO36~AkC9JM6;Od)AEo[wZJZ;$q}(hAAYop0|s' );
define( 'LOGGED_IN_SALT',   '4qMQKq)BNmPXfs0o*rwvaw~`da0A6uS,zCP@A!}r,Kcs.zd6,ZD6+]0fv|hsd*6^' );
define( 'NONCE_SALT',       'Zgj{LdKh_ehuu,7Tu(3I_lon-D(~svNk<)]T,r6&(*>(Y&tfJpJ(wwy(TBo5@g5e' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wordpress_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
