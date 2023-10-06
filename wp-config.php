<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'wCONUhMvV/1lgz1er5D8Y+abYaAj547EM0Om0rQ+5Fotux5JjQajyfYLbWrpDQfJvt64crt/Lqp8pXzY/Gb5QA==');
define('SECURE_AUTH_KEY',  'mwRQiGd0QhTSBgveUUeAzTOVxbTzVHGtydqoiUmcHEWrA8rSekbVjZiHDN9FnQwnNV6eGkdTGqZi0xd+3r0CCw==');
define('LOGGED_IN_KEY',    'JEAZqz2j//w9ULD8lSKeOs+D2HpJesrQQI4MOYQ3P8qbkJml8BuTncnKE8IlR9YeM8pAABJF/ufIoYrr8WtHTA==');
define('NONCE_KEY',        'u5nGrZ3iTrEsCSd1/VupOc+evc1KHtOHZLwLgKL8P7CE6Gw6VMk0dG1JeO+pHPOe5x7Fd5GqmRyP32dIzzhmcQ==');
define('AUTH_SALT',        'qj6J4fxKpqPfcBfJqAJ7akwJeNe1KW4peCU5/3kIIHMo93aVOs9n5nRauASSZ7DtVe3eAreP05F9jaIBY9JO5Q==');
define('SECURE_AUTH_SALT', 'L2ti8PSHaQtXFUMUAqbcGvPAvNo6VLInGR+2q+06zLjeeVAUOKPdybuIaE4J6Vsh5gGyPLmMN2gifVlNIT4s+A==');
define('LOGGED_IN_SALT',   'SKpK6sga3emo0khOGTEEOzu/3Mpr7Yzw6WNboSUwSuUr9ucJ1U0qY5Y2QDH4TjU7WxvSgEW/rC43LyzDVHHFFQ==');
define('NONCE_SALT',       'YSk6rIi4deoVVqZYSlRfDunBM+atzwjFFS0THYjBg+Cim9hbcmtV1oCpBLp1eg5RX/IyNS7CLO5IKrlSAi611g==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
