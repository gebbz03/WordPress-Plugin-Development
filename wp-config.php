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
define( 'DB_NAME', 'plugin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|N2=gz|.hn./`)2HTN|IrR~;}XwXTCeVT2EU_L$PgZdnlv>O_wAbkY3HM9=Sy;C4');
define('SECURE_AUTH_KEY',  'nX}S+>KRWfCmfAP*z?FE5!KPJ-tmUnccDch.lb|n6p:]tf~|WWHsKL+.x;qh9yb0');
define('LOGGED_IN_KEY',    'u0K5n+c=/~zRq~s^FL?aC#ZaGK-R<.-^53/Yef3hh&}*YfT<vA5-6uEvlxpfg=[U');
define('NONCE_KEY',        '+ .)u%SU/%$nq>)GLCZ|9MkXOe6Z~cF`x/Qj(|{k!U-b69bX%,%eaTug|TN|P%-{');
define('AUTH_SALT',        '?;)BYP!Wi<;I|Ax|~ tLL4-Eh3-*7<=`n-eiQT57r|_{*lL?e^`d8gJ}DQO(]>1Y');
define('SECURE_AUTH_SALT', 'Bf3jL!KiYhbsEt!G)#B;,}-+zCak-C;Kp2.y@uK M+wNaVJ/j(|w%yG6>cgz%P!m');
define('LOGGED_IN_SALT',   '|**[`YThYncVXAa^|R j8BOpLXts|odqG&MG?5`LY2f#4E->^>{Q33/^Q )+kIR ');
define('NONCE_SALT',       '|7nW|zPP?b&|>|;2|Q)Y},?RPvV?N97k{Xf.]^v9A&Gpa+n9@E Z_FE9gZ<k7ZgK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pl_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
