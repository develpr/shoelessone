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
define('DB_NAME', 'shoelessone_blog');

/** MySQL database username */
define('DB_USER', 'shoelessone_blog');

/** MySQL database password */
define('DB_PASSWORD', 'kKoXDCti6UJe8mgVf');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'q[W;|@6S+wg<mL)pW$wBhbaz{8T01z^%{GDK|>hkx15u<t9g$41>Cd *BbMRGiM=');
define('SECURE_AUTH_KEY',  '+_8<o]Uijk24-+#S6C)F7_4_.]]@KwX@o?H~+p%}(/ Z!bi5*UZ>*8.ElR_R:S0U');
define('LOGGED_IN_KEY',    '9BxJf&Xb}YC#2L1v!%X5sC92kr6[X1eK%N.XC;a/UBz~^y=+POI0kxZ9-r5%f#<2');
define('NONCE_KEY',        'f$_/p+A0r^Fj|?E@#joz.|MAF)zm+I?C3)SU}wWTA|Ie+c Guai0c#B/TB=u#8[&');
define('AUTH_SALT',        'K|gOjv1|rYRiet!v:Dd:&2y(|h@|$d6CH|23e)RgI0N~le:/&L^vHGYGGXYOj-(Z');
define('SECURE_AUTH_SALT', 'jK6|xE}AqEc=|s{EiCX3!~I;2bbWc]EqGAv%D<TS)q096b`C3|+ZOBrQ[nt<1b7~');
define('LOGGED_IN_SALT',   'MMON?x7<ziDPq!LK*x]@&zdpB8|4lFt/+rKAcCV M$7wlDZ:ARr7e9W8$,HX[[z{');
define('NONCE_SALT',       'ZD9]GYx5V=u:GY7s[>BPE4WKK$~h|nP[[9.QZjX}5b&C~oGc|O0wmo.B2V~MhkYX');

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
