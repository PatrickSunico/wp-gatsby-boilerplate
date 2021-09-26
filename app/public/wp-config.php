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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         '5pEDCPNOl1y+WO11jtcRxkG0Hcs4feAIOiYzBZ2Au4j5ojIcF8e+VFhUVyVvyebxey0M0442cKS66/AYEyP36A==');
define('SECURE_AUTH_KEY',  'MKWx6NFK/INgf7cchlPL8PHo5+mPioYMTeAkxY5txCHN6YZf314W3U8QexgVtg4q3QkFKvTUOiYxbtuat2yuqQ==');
define('LOGGED_IN_KEY',    'KrLSeZJs2M2scAmIZG5fAh4FZu/9ccbjqOoSrwD/XKzyfqx8578URwZ2ZsnOrpsZsQohun9OUyAvMBT+rvYQlA==');
define('NONCE_KEY',        'f71kNOnpjPiJgUpZA6qL/+ZTyxTFRRKfm5Ngx/eFln4tNhLp0TYJMv0LjZwJA+OLcFkRkX4nX0eMg9RvODHjFA==');
define('AUTH_SALT',        '7TEFqSX29MOghAKaIKtCagz9oi9SKf/4j/F+HVOaxJ+eFe2HnjoRHGJlb2uF4XVdtuJQMEj6bS+zB5wqPAqypQ==');
define('SECURE_AUTH_SALT', 'B2pGJGt87dl+uoxdKh+G8Onfbc4dAHkarwac34on/Y3ifpt+kUcnC2yAgurMPz8ArG59dlRjrjTZF4toXb/i3A==');
define('LOGGED_IN_SALT',   'rmT21ROUiN1y3e7b1thcadJIdSve3QNxJO8CPZX9o9y2vdWUiyp8Sffl6LRFg7wsrIiGMj1DW4fxPrEk9R5Mfw==');
define('NONCE_SALT',       'Jl6fzbrQbJbvXjqcH9OxpdkfGnWKZuOLfIrSD9UiK7jsM9vTpvXWXe3qmEBIqsf86hdHwH5lR6BsCIrJvc8puA==');

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
