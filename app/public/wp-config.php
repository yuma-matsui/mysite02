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
define('AUTH_KEY',         'TdKo0VFha1HWu9TSYJPCBB2uxG66EzwCBDX7IoMSON4CAPWIGfkNpE4AdJLNY4Eft+/ByMYVpDPRGMeLFrtZZA==');
define('SECURE_AUTH_KEY',  'rSq9L0Wg29Qz53L1OkFzaS2JUvw/kyR05QsK+j+5n7vXltKffGTpUDnPKo+JRPUbczKhxl02Vy61BN9v0G0BEw==');
define('LOGGED_IN_KEY',    'a3MNajFlv5GixycOFYUku1sAtpOENZxCmRPo8VRq3V/9Hd3gd/CPUsWpp/cdvSpTAw9dkM0cVzbUv5KXKFtI3w==');
define('NONCE_KEY',        'p16r4HDwIO68mgrP4baIfPF3ZjOMXUcZ+M3wEkK01h6nGQyRxDn9NUTnJ2lOwATxjwI9CMILG0kZJIyc7oXahg==');
define('AUTH_SALT',        'BgpjPwqBvieWPYAoomnrONPN808T3wJP42nXluH5xn5IDG8T87aDakCjOi0nHvgPTGCMq8tvMFyE2eh6vkmOqg==');
define('SECURE_AUTH_SALT', 'q2zuhloZnN9BcdW1icbaJ1Wyf9ANtoMzObngcB/ZM84SoILVcq2vnOWcHGzVIJSmL8i0+nPZAY6bpYtB3cteGg==');
define('LOGGED_IN_SALT',   'x5quV2yeZAhRVEcfEbeqPcUHkMPu8Bkbl5hnDkBp+CjK8tO2f1q6HPOkOw7GUREk8COH8mUu374R0J1MTL6VIQ==');
define('NONCE_SALT',       'E1FVU0Y6pJjFGs0Nr/LIwn5RnEzjF9JuNK25F/hZ1lpxaR+FKtvp1oVIOKxIC9PTfXvFIPyIN5oqkbNKJRhb7w==');

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
