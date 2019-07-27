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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'EzzZsOpid0FNcCFeWyI7X/2/ejizyQJXEA1dKNEIN7o5/C8mlSdTfT8JJhDqNdS5LFqD+1QorOHvJjWA4x4DDw==');
define('SECURE_AUTH_KEY',  '7zUeDxr6LGmW7kjHT4mRWjlm0Ilce43Deh2DKZtrZtjiDxeWIo3kyAHr89zEG52qe/9QQDJbscUMiuUQD/3UEw==');
define('LOGGED_IN_KEY',    'OtOd3nztaPxaRuog8OMkaK2GreMfYnBCVh64qAkYROemEDkLsVkgeZXNlecNfmnkW6j/O6cuiCh9PXJVibICgg==');
define('NONCE_KEY',        '3PRyHR6QAGGd9FKJkphHSs/ThEuGHGl5j4D0FLYSwzGELpr4wP3LJ67lgqATcI0V6uEACH7XREs7uJrxqnZr9A==');
define('AUTH_SALT',        'rWG/PbXGGddpAjO7AVWrWYRVpg2uugtulrw6r0QPsGbzH/eYXyDmXbkd+80Oy3w6ulwboq4hxVEdsu2OXD1heg==');
define('SECURE_AUTH_SALT', 'jUgReTDtgA7MFpGY+CxAY7DFFMcfLd9iqBwgGM4oiTTLYlujhlYeyBigqWO5XN2ZwBJFeKze2WxFHcDcfn+ekw==');
define('LOGGED_IN_SALT',   '0dxgV0wMtuSKCP/azKuxeujpiWERowCbM8G1QHwDN2OA/tO9uxfuNoq0POFEU0zERgZhsjUl6OH55qkoABDGQg==');
define('NONCE_SALT',       'TvyftpekIhssyKkDAHWhGjUwahSb4MrY870lVa7CwHO3u3WffT9p+Hp9k31Yl4nVIQ1QiKF2ZsMJmRHc7XzUiA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
