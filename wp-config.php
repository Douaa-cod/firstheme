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
define( 'DB_NAME', 'firstheme' );

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
define( 'AUTH_KEY',         '[5q_/ &Na,%|@+LL#?n~34a_Xa),:~nz{:9 A?j:gzkS`yQn.R{Isu0fQ8X5%*<9' );
define( 'SECURE_AUTH_KEY',  'mvuT<*qp[Z_A[_6-GbKQ*_Yf?Lg-=i2.msMOH?BK<;#g%j?co5>mu+7)_|9Jr]#G' );
define( 'LOGGED_IN_KEY',    'Tj$YcN_$_{Q.p ;7l*:4NlEj,I%Bh7{pDh!DCdl6.KsPL61YvQUp{$gz{|n];HJQ' );
define( 'NONCE_KEY',        't=xfcRA@vA9y3}0&(B&=YR1Qllnv]~RcZB@T(`dp_[;!h?9TI`rm_y=7FD6`elF,' );
define( 'AUTH_SALT',        '7b<m$CV0TOcy|%Z)A=x+~#XMgG_=X8kSA,D(F2g>g=Bs*?-kimk;;vnApBLFxs2,' );
define( 'SECURE_AUTH_SALT', ':,l2QCE9}Cn?++j=d!pyu4OhClK7:9]Y1o&b]*8)l)axp=[  XUZKtt2t,>b;L*R' );
define( 'LOGGED_IN_SALT',   '8JO~GlUuoY-1B+aEv0F,`rOSe[<WrY*54pTX#:/Bh+Q{@HI/zIe3+>DN&J5bFdYr' );
define( 'NONCE_SALT',       'd<,#k,5F?fAVb2A]y)z)aFchk[+|BNp$4TVBt}Y~z|01PgH8j6&H-~f)TzPD^Wie' );

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
