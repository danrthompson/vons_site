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

// DEV AND PRODUCTION SETTINGS
/** MySQL database password */
define('DB_PASSWORD', 'AO9UqJ0Ea1ewM!');
// END DEV AND PRODUCTION SETTINGS

// DEV SETTINGS
/** The name of the database for WordPress */
/** MySQL database username */
/** MySQL hostname */
// define('DB_NAME', 'vonsubdev');
// define('DB_USER', 'vonsubdev');
// define('DB_HOST', 'vonsubdev.db.6449716.hostedresource.com');
// END DEV SETTINGS


// PRODUCTION SETTINGS
/** The name of the database for WordPress */
/** MySQL database username */
/** MySQL hostname */
define('DB_NAME', 'vonsub');
define('DB_USER', 'vonsub');
define('DB_HOST', 'vonsub.db.6449716.hostedresource.com');
// END PRODUCTION SETTINGS



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
define('AUTH_KEY',         '<nUN)yvKti>j2|y#{F~`yzBX*fwM1wF|b[H)$h$w]8Lp:[oWdE~-nO_.WlKjGtlK');
define('SECURE_AUTH_KEY',  '-vT!qILx$?c{=vsGKY3qU2[sw:[nS0u|^$|gL2@Lb`[{eF$M+<(KF/Pk9.5#+tnM');
define('LOGGED_IN_KEY',    'qnQ.4Feqrq?B^A%S&E=+5h$6wk2@1khvNP+al$}2}Q*3XK[L7REl@hRHkT4$SG-7');
define('NONCE_KEY',        'W#3c&:KGYj|9h6{DV{w$hk$g8u+:8iXFmd_?+ H~w|[WIgm8<O)i:&_`XFA``6K8');
define('AUTH_SALT',        'lw}K48q*0L^s?k|O@neUXw;r1~dp<u%6S+QS[S49)|(Y@>kLsrUF|EK.Up)9fYTf');
define('SECURE_AUTH_SALT', 'k=KSbv<3|*r)s| #N-+r&Jb_$ssI*R|~m@>E-6(%g0qGD9;h~{tNAFf0oXHB2@G}');
define('LOGGED_IN_SALT',   'l.s-;a(/Qp8F(LZ1qb;8w,-lL,M-%$p9x=Eo7|wm7%l*mpx8|+39ktiHrlJMbdCv');
define('NONCE_SALT',       'c&Fq>i%h{+coSveV`6$6yGqYj<x}YrQ]mc=(~2`7t4Dg3Yj/2_jyB>J!W?mHin7T');

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
