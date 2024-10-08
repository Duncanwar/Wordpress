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
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');
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
define('AUTH_KEY', 'aQ~H6b8 `rJXv<QMjo?pp{:H]U!#@qn&[!,~F6?>UTW(M%D1,YBU,4CXlW0qe!.p');
define('SECURE_AUTH_KEY', '~SQN`dl#uJe,pl+a HCT@SdNdvC:FRXKI@xm6f%9W~d5b3f]]vc46><tw-vkDvnc');
define('LOGGED_IN_KEY', 'o!!U+j[GX2&:ln99)IE)5k=!%MLS##wH$S^84qPAma)^3KSg;DI}/aq:YR$TDwSa');
define('NONCE_KEY', 'jG5~v~u%==>N:$7%j`~4*OaLoBcg:8=:gw(>-aV#Ik_!_/:_bH,.I,[QUecb.5(e');
define('AUTH_SALT', 'qTi~$8)I]kbHZ|jaEdHS9}w80IRt16DM8}b{IU9.nT(vq#s>t8=s<>Ce!&X.ayJ(');
define('SECURE_AUTH_SALT', 'P4EkYmSf$g9:-XPlAG64gzSCCwZ>~=!d5v%P90;X$^&Yb<F~ibG`g}K/ToU|*CN7');
define('LOGGED_IN_SALT', 'Mk.RR|w?$30hK:+OG`!t#0FX{Wjlw&_E>dfbc2]I6n]lE?eX[^Mr9 %6uwIK5WG4');
define('NONCE_SALT', '[aQY1hm8llFuc&Fo:rxf#Wz #4ilB?#bO yFGf*3Jod r-rbb6/j!QEXF)+h=gTq');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
