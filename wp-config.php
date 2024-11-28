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
define( 'DB_NAME', 'u756016664_sylphid2' );

/** Database username */
define( 'DB_USER', 'u756016664_hair2' );

/** Database password */
define( 'DB_PASSWORD', 'Talktome@123' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '_Q6-p}j;V6Q Pr^7(vD.K?ya>tIv9x5d5-W]8m.ZYR&._PX2Rb5KI7294;ra|_rf' );
define( 'SECURE_AUTH_KEY',   ' f-Wa0St-cRO2Ebo7Db#a6LVsk|r>_==GJD8*#%?$q:<9]Oj)rI73$cyonnHYytT' );
define( 'LOGGED_IN_KEY',     '!cV~W];sc5:@r]8^MDOFI+o[;FJ[<H1Sq{ZK0C_-)Mfbo+n^lje/:?%w/l<5|UC8' );
define( 'NONCE_KEY',         'TZdTHv592>F!M)BXMOnvH=zF@+F@xQt5V+2}PYOuWI8]Ns)fP~c{2wn+O)6S)(G<' );
define( 'AUTH_SALT',         '$Rt##l2DZB@FK9.T@=]^tDqgDi]1nfnF3r.(7R70),$V#3D1/Eztz+bBH,qg/J^s' );
define( 'SECURE_AUTH_SALT',  'HhEzBi2Mp$U[la?!.&Eh?j06}Ux/| }2/^e|{@K3r~_|3k@O#QiW-^&vd68~/Ju@' );
define( 'LOGGED_IN_SALT',    'W^i@tg? Cc8 jj],lE=`{mQ06tgNSWz_&OVg9,PUjp9zYW<b8NLTtxI>?Z4gY.;h' );
define( 'NONCE_SALT',        'NSOcQ|Tn2-!<SxzjU#:yoD_3JBeE/nPlJ`o%n$}l^Jeh{olKP}4F&Gu~ORMx;)hW' );
define( 'WP_CACHE_KEY_SALT', 'F/`]xSXnkv=[#SHk0$}czM 4Q6ru!_LeaGdLaTqh[CRD-=MGP,U[Bk?(*%[-hH+]' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
