<?php
define( 'WP_CACHE', true );
define('DISALLOW_FILE_EDIT', false);


//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prepare_wp01' );
/** Database username */
define( 'DB_USER', 'prepare_wp01' );
/** Database password */
define( 'DB_PASSWORD', '.N]9paS080' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
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
define( 'AUTH_KEY',         'vtbiypntei2s4t01vsluhpwszgqaqu1tg6egelb14yshmbzqwgkgqmjgccocy114' );
define( 'SECURE_AUTH_KEY',  '78xq98v1f1z1sewvtavor8n1de8enq2vpfzu0nxatmsmbhc9niroclw5i955zmk5' );
define( 'LOGGED_IN_KEY',    'htqym7dckpy8usw1wpxhsfixhkfeytdh3kd1jt8dkn3oeeue2sih7hp9c2ss5vhc' );
define( 'NONCE_KEY',        'z5rrs7hfjlc9geewzzm9ysogng4zrdxw2eigorl5da6akklujd1dp10vlbpb7cgm' );
define( 'AUTH_SALT',        '8eho0j2osz7sogchpm375e4n9zp03bkacyqzq4a4nyk8kbmfqvvuuhgut4euqxdm' );
define( 'SECURE_AUTH_SALT', '1sox0rdubw0jgc3givrq05oywabept0seao7cxx6ebedxlvwglr5hzdzgsvrwsqz' );
define( 'LOGGED_IN_SALT',   'sd6bvpbax0ocpswef5xblltc2lefthtzlcckrqnhvqzkye3vzskmxdayp9aqmlng' );
define( 'NONCE_SALT',       'yhbo6qu5hqghwmcnjuxjrtodt8himdd2llhtre8onwafcw2nacmiklcplqdhwytq' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
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
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
//Begin Really Simple SSL Server variable fix
   $_SERVER["HTTPS"] = "on";
//END Really Simple SSL
