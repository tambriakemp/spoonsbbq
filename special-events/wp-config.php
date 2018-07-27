<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'spoonsbarbq');

/** MySQL database username */
define('DB_USER', 'spoonsbarbq');

/** MySQL database password */
define('DB_PASSWORD', 'Spoonsbbq#12');

/** MySQL hostname */
define('DB_HOST', 'spoonsbarbqcom2.ipagemysql.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'F-:^{!$amCjuC]u}f%aI7RillN`feX@6(so}uP3gHF$^FZoI<V,[vje3*Y?Qp/||');
define('SECURE_AUTH_KEY',  'Q^%DO||6csqBx_O]{GX|Mw-++juThucDM-De<l+}|vaH=4lcv`C7l{y$erX~~-+F');
define('LOGGED_IN_KEY',    '&ujJ^03.h:xP|Y3!s1W5E+ePUMSyK0u{sn_)UvJlPmB7h-//m|J+|iFSfci3Rp^0');
define('NONCE_KEY',        '|2b%ZZ_PtpC- obG Te6EnU*?8|^qH/ ?WaCAS|@N)g=#;+N#tDOH|aI?I0=TdPd');
define('AUTH_SALT',        '9 q]FI2S_0a+ZXm>(:Hjp6b:R|@0DyRLp#=~Mh=be*`X70Yp!p3[_.a5}F&5DF`i');
define('SECURE_AUTH_SALT', 'jF^M.DpeCq`*jyNAhY:o7-$Kyht@hA3eN[iU)A($|<:HWw7F&[TN[^jsoKOmd__J');
define('LOGGED_IN_SALT',   'Nm5>sW0ysj~`Y64X#4Z3FY|qtOR%F]q9OqcHZpeVMUyMeY.Qo9+O{eY)`-PA2_|^');
define('NONCE_SALT',       '^8d3 xA};{@x`+2z-lBB-8~Gs?dlKP/Sr}Hxz>~F:x|;Q+=DT2:p9ki>0{fo}?-5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
