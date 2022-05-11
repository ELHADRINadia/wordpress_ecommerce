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
define( 'DB_NAME', 'boutique' );

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
define( 'AUTH_KEY',         'A+0xD`xP!P#!w]Y=D?+1/6dmmEqq4,@77wq,NI64~;f[qIGWV$4xu80xV>_C64Z{' );
define( 'SECURE_AUTH_KEY',  'No1f1:^jw|U/49)OG<<bB$K8<yIzk52/5a$)wO9`7.rlM-f1A}d+PJx1{H1nzEc|' );
define( 'LOGGED_IN_KEY',    'zSoI=tS-Dl[E:2BGdlBrq.lh!08yB6XR(DH-7o&Cm:N>1h5~l5[9~q+;!bAG.rvc' );
define( 'NONCE_KEY',        'R]+b6zdCoTn;_XIEW`fKhZOy,RW7z[?tM6pq?da2%jKbr>?M6)IACJD-s)lP,{4w' );
define( 'AUTH_SALT',        'f5r1vS),dtx)=pas%4K*lZzp#-#bs^=N+2`BLQWiI|RNo~N)%nH4PE`O>nh|-AHz' );
define( 'SECURE_AUTH_SALT', '1&Ntw`U[S(2PA7tMn<5Jfu;bQumFq8e1lF~sU`3TH#l#7(JTd#<B|3,P9uB YkN~' );
define( 'LOGGED_IN_SALT',   'BM)ZR:<y9nH[8%dgUtl0]rE>lT}Fo~DfQ|h?$=u=#| 5A%2Th}$cywoLb;X7Bc]}' );
define( 'NONCE_SALT',       'M[HB,=!+2E=Q,.`lN:0fxY#+S`(==5*`1U`Y.:KLBdhhP[[N?sVYTj$x%MdmDWJZ' );

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
