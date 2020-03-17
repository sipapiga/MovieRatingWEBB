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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GjKHZql14gaZz8wk2gmtIlszmCerSTVxnyI4sdJYX+FnCWyiAXSFhxNn6n3duWPFNMy9UqNQ3ca7U3kW4MSiDg==');
define('SECURE_AUTH_KEY',  'SOWXiSUuTzpTeMJEQx7Yzu/ypQlVB08L30E3AO+7wbZ92S+zgjvreFb8P+d3qUPE/Yh/GGY1QHouq3evUUSv/w==');
define('LOGGED_IN_KEY',    'ggNlHma2KXJ4jeO9IKFfncvD4qRETVrgX0w6jNj6ZI3y6UEApEcItbkt92g7NEn+FJ5Ak2L/CTQbAD5s368u7w==');
define('NONCE_KEY',        'HMjAanUpQ0xqjHPwdohYqFgWTabR2eymh68uGEF2LWcx0ePFjt4a+kklcMdoH9bB9ujcEyBHxmV7waciSD2zUQ==');
define('AUTH_SALT',        'fS54l/j8SI8sJpW2cS5hEDcyykXAEAjyooDYP2dNqneav27OgfC++qeA4vV0XO8W0Fl80cQAdeMlds8E0EORXg==');
define('SECURE_AUTH_SALT', 'oVIckPmAxgaU4Fivc0WeJhf0sOc7DZVeN4zTgS5Ck/ABcSPATxP24OnXK+DNKSqttKbDU+tMlKftcptDgnhVcA==');
define('LOGGED_IN_SALT',   'zD+BUdyE58iG887f8qbCLrBWxDpkZUCbJa/sVqEWhFsX2yFFz8mX2VztMgqihl9va2q2vExvFTsn2m4dtuBghQ==');
define('NONCE_SALT',       '3Fi9XUYOItTkbyhvAm25Q4o5XPVbDgV2IPOY8LPhl8CpoNTU95NqgOjytQjxLxaiyeD/inf5XEmzKA9OUXdR/Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
