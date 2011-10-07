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
define('DB_NAME', 'db99900_gamegami');

/** MySQL database username */
define('DB_USER', '1clk_wp_HbVTkpR');

/** MySQL database password */
define('DB_PASSWORD', '7pjtXKvm');

/** MySQL hostname */
define('DB_HOST', $_ENV{DATABASE_SERVER});

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
define('AUTH_KEY', 'Su8k4FkJ QIw6BLbO PpLFXEnl Us8iNl5B 4H5kYOwn');
define('SECURE_AUTH_KEY', '5ydOo7rx TC27M3fI KOjdOV3x qzR2Praq jg5LVzEa');
define('LOGGED_IN_KEY', 'wWcFxkyP BypBEpIl D26YkbAm gnULwfB2 zH6HMsEX');
define('NONCE_KEY', 'DxireRZE BBCVmUTs YZLCEBZc P7ecqYfq iTxib3xB');
define('AUTH_SALT', 'L3kPupOJ 1V8NKDxr W2UGHvxN jS16qlx7 ZsaB6O7D');
define('SECURE_AUTH_SALT', 'u5YvtP6u j13xhr2y IiKTdwnK 8Bx8L8JZ yxid4geT');
define('LOGGED_IN_SALT', 'K1NoB6O6 fPjMA4bJ fAzYsywZ cnKanoVF mmBSCOJt');
define('NONCE_SALT', 'GxKdxcMf APeWvLe5 jjrki7Gn 7HhNu625 YYB6jJ7Z');

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
