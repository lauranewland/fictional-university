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
define('AUTH_KEY',         'SaikBD4A2av/ruTZxdcm7w5S21sIed4ZjBwySfLocvG+pIrP94zaVYOtxWV2HgPzpkQJleCXS/yqAyJoIOcYQg==');
define('SECURE_AUTH_KEY',  '1l7/sshdapYXutgi1vxH4vXBjy4XcDvHpGgz4rP+W0kYyNpqkia+/kHdsq8dIIaVU4RcxmfrwAO23/w7t6EBDw==');
define('LOGGED_IN_KEY',    'mYLHLMy73btXQWefmgdlInFS7xtWupyYTi4umvI2t4arAHcUwb6cch0+385GCaqVYxohfm7dDkfCFjJ5x4UCrg==');
define('NONCE_KEY',        'cgbBYPQfWtg9gUN+sbSgDdV0Ofm3eo3C/cZDQ4YfXRzJc/FFjKP7ec0/kNKuAGhkFF2MC3ArDCBXD4g+2csmRA==');
define('AUTH_SALT',        '7qabOFIHK2/O4Rv9wectoXBJ40x6m4R4HdTpho5s74lQpVE/7aUBkXynKmvMxu9/Zg18led6jIEPixOisGOZoA==');
define('SECURE_AUTH_SALT', 'XT5LgOJ9PG2yZ8SzvwwT2cX0YBMlW4lbgbk4cKsh1ybayzPP2JxLsQhSwEJcAcDf1P244oCw+sKbC7sAB3VeUg==');
define('LOGGED_IN_SALT',   'I+5jW2+7gPFYexcTgN0JcL7brWWZlWO1xgnbOq5twQde65Nirb56A1nHLpQyG7838fD6GUXGT4FNCEA1B6YGFA==');
define('NONCE_SALT',       '9ZQw5tCmgLwEJd5EbwL4QTXKRWKpoxT2Yp2zPB10VI9Uncd/Uyj1u9CkhLMxsLshZY/zx3/tr4UMT+hF8Et3KQ==');

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
