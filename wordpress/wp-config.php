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
define('DB_NAME', 'wpdatabase');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'MCtafe123');

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
define('AUTH_KEY',         'z`h_{T<a|y8o-JMU9OarDk)o{t,6L3Qfphf%JU_&`j_Xks lmHt*JSRq?BJ{<-+7');
define('SECURE_AUTH_KEY',  '/#pm|<k<Le=2t!5-ys3LY{}J+!j8w#$j:0cf[I*0Lt:+E{L9IkW{OwRn.|m5Tk@0');
define('LOGGED_IN_KEY',    '+=Q6PjR]E@+UZ>+mMW4lNBd+*5-9z0H])|S^yF/Npr#gJMw/3+8+AT4Ohm<D(|+}');
define('NONCE_KEY',        ']L6PGiDCG?i?xZr,G|Ov.V^XOp[@2]SnPivE$4F;+f?>4zj1vVe`F$.S1I8IWGB(');
define('AUTH_SALT',        'spuQZrAIW>UpA<fWE7XMjM;ZL?*F]iTDrSY}|^gBL>&jh$~-p.KW-%JDg6NjlnO8');
define('SECURE_AUTH_SALT', '15US|L5o$KJ]`LkKQ~/wF9;.[!`P%m.w~c*.au6BU_`JeQC~<ZwtZFWH.oj@i)V&');
define('LOGGED_IN_SALT',   'y(}sL1!@n5xuyc#BVp+`&Dk-+}W8U{JT8uE2/}E2s^L]7BIr;aoB#G|7`XFk@K:q');
define('NONCE_SALT',       '<S_qg::Bi|/=z6L&BCq&*XT| UnFjU7|7LK1j-.$_;|F7Sy3XC]Se>7j^Z(E*BiH');

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
