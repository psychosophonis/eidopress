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
define('DB_NAME', 'eidopresDBd8xg8');

/** MySQL database username */
define('DB_USER', 'eidopresDBd8xg8');

/** MySQL database password */
define('DB_PASSWORD', 'eyNnT9qBsE');

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
define('AUTH_KEY',         '8!8Rgz[8Rhw[8Ohw|8Ods|5Kds_5Kat_1Kap~1HWl~;HWl+t.2Laq*2HXm*;ETi+{');
define('SECURE_AUTH_KEY',  'rU^QzFo0Y|NvCk:Z!K:G5KZp_5KZp_1HWp~1HWl~;HWl+;DWm+]DTi+]ATix<APeu');
define('LOGGED_IN_KEY',    'hO~Kt9;H6Pet.6Laq*;HXm+{ETi+{ETiy{APjy<AQfy<7Mfu,3Mbr^FYn$BQjz>');
define('NONCE_KEY',        'F,Q@Jv8g}V@Js4dGVk-:CSh-[CShw[9Ohw#9Odt#5KeSi+]9Six#9Pex<APex<APe');
define('AUTH_SALT',        '.yLyEfT^A{BQr^FUjy,3JYz>3J7Nc@}8Ncr}CRcs!0Rgw|0GVk-4KZo~[8Ods_C');
define('SECURE_AUTH_SALT', 'wal1i;P*Lm6X<Hx2X<TyEj.Q^Mn7,3IUjy3IYny>7Yn$}7Ncr}BQgr!0FUk|4JYo@');
define('LOGGED_IN_SALT',   'rJ^}YzFvCc:Z-Gwhw|1GVl#5KWl-[Kap~]9Oe~;DSet_22HWm+#6Laq]APeq*APfu');
define('NONCE_SALT',       'XEq7X,UvBr}Bc}N@8}CRgw!0Ggw|1GVk|4KZl-[KZp~[9Od~:DSdt_1Hhx#5Lalap');

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
define('WP_DEBUG', false);define('WP_ALLOW_MULTISITE', true);define('FS_METHOD', 'direct');
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'eidopress.dev');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
