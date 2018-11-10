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
define('DB_NAME', 'wp_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '``A_q$/S@l};E$ihZ=Jr YM{o|91)A2oFvJ0^V[] n//nPlskq,VAX#?[g.C5<do');
define('SECURE_AUTH_KEY',  'Jzid|}rDv4uPo89K=KrFdCXFAQZKrkerf3b}{-W3bDqM|Y&STIs+Uk3OxFVMa 0a');
define('LOGGED_IN_KEY',    '^r_bn +I:+z)SNrY0O`/>G@^*4*dNTz.E}gy EJ-IW27.Z_r_dJDxZA:dWT;i-Mb');
define('NONCE_KEY',        '6+RDFAE#|ZA+h$zyr_MSf6Hw<jDsM*xpl#*u~adW>&bgNC$6AXBCqq~wYmOL0$l~');
define('AUTH_SALT',        'aF{^I|FfiI*4y2O~t(_+|?|`tSG0w;T 1Tc$0zDyA!gOk,Z{[-EM,>{h,2xM:R8Q');
define('SECURE_AUTH_SALT', 'v.FUZKy:LOz$IVg2MR{0Rbk$sE&^#b2W6Tf+eHI`b_Ut;)>#+](w:l:L#%wMRdoz');
define('LOGGED_IN_SALT',   ']:^W>4|2w[zBrI))<TWU9pP/o+C`@HZd`o7klhq~Hm=EbHp)aOjShF]tx&MC}rxh');
define('NONCE_SALT',       '+#Y,NG/rc?L2~;{[+@PeO(lSdE-tH06X2fVrv]:y*gyWW=V a[4euVq4}!|8,zM9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
