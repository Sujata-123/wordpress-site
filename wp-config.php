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
define( 'DB_NAME', 'wordpress10' );

/** MySQL database username */
define( 'DB_USER', 'admin6' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ']4s<q7@.O1_}EHs+xW[]nWsKeoS02{ t.5t3HgZ?1VnL{eXJ8+,4y26[md7AvrKe' );
define( 'SECURE_AUTH_KEY',  '9b,u35gG/o}^Tr7iIiXPPo$Fa`_(YmT@+K7+b,;5ZvTTig2sL| Z9,sI4Wvcj}fl' );
define( 'LOGGED_IN_KEY',    'K}B:Q&} |a%}D5hA/@/~I*|OOC3L>omfKgY%-psZ)5Mv!_<}4f%W[,u%(iR$BlIm' );
define( 'NONCE_KEY',        'zFTf8J68x=(^z~5SP#1r_`WprE+^9T`A83)W=zOpdL/nEQ@x4047yg-8FLzRm~]*' );
define( 'AUTH_SALT',        '!`1+nZtsm?$g`0|U0|->/0Blod-7$Q(*fo?c/a?eS9=+UQIHX8Ng:.U9y4e$;$Fq' );
define( 'SECURE_AUTH_SALT', 'f^d}!|hQjo9)P.KXsgh7xy,] fSCJ8^SiHGB!5r,3x31lOQh(%Mnyey#N^1x}qUD' );
define( 'LOGGED_IN_SALT',   'i>E+6{Y^/$&2/VJ(yMWE4c&AdLLX#9iz;[}hJNlc P`Y_~Xo~},97zfZr*fi6s$A' );
define( 'NONCE_SALT',       '[R^H[:!cb)B*o`0z<x8tK:cff-7ECP:E*8EFl]q+X(MR|CvNlW7jXA#aGt=nlu-x' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
