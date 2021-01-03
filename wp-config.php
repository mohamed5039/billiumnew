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
define( 'DB_NAME', 'billiumnew_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '|a(SD!L!<yLa3N)8g&gW~sfH8cFkh#bS/+5x>,=nQj(m)Gu/Loz:-n~bZeA{fnV$' );
define( 'SECURE_AUTH_KEY',  'dJkJ/~7xL^X&FiCx`jH{HBFiT=lQC~ #(BTuy)n3=p$8;dbnogvj<n:~2qbAZ-7n' );
define( 'LOGGED_IN_KEY',    'qp,kjPiJLKodr? MJaEq~k@.~:_)P]d17V{R<F|2~2Z5+M~!>9im+YCd9CTZl.7p' );
define( 'NONCE_KEY',        'm]%hZ B`O-lBh`uMc5P-Rl)7/phNQu#`NhH@Tw6RAtK3(odA)&<K yw)p 57&ATp' );
define( 'AUTH_SALT',        ']9P){H<cr#^|;.BcW$;x`:P-2r%D5],@Eb0f60+0XIaa]iDrK]~--*<gpk:HMYzT' );
define( 'SECURE_AUTH_SALT', 'wx]v<gV6eorPD&-T=0~[oU]z$,5wivt&KU$q)kM,f4-$HT-}5LJ_(DIuH.@-oMls' );
define( 'LOGGED_IN_SALT',   'W >nSf+>iBfA&C+_cX?B;)EpchOxSwOUzhCC/n2~.oTcV$-fBjsT0Ju5Y?QEYE_H' );
define( 'NONCE_SALT',       '9+)%h4y>=S!e0A|/ 7ztn:K6<Ti,(m?+~l7vE^qtg2T8fQ|/7mPmy^5zcN%91<a4' );

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
