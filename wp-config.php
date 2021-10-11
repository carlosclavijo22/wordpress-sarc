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
define( 'DB_NAME', 'g75u17khceb36e8u' );

/** MySQL database username */
define( 'DB_USER', 's1jkm3hsmd2xsltr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kv47o3700kyx2fjn' );

/** MySQL hostname */
define( 'DB_HOST', 'ik1eybdutgxsm0lo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         '9cCJ[[+`}eG@f|U@/8tV a#Xzg8-bRzd21%Fzn;X:xo)(n+=AUC0?_EkO(?3Reoi');
define('SECURE_AUTH_KEY',  'sJIFGOvXNj@zvBJ/snAfutc%V)-|gfPyGyWJz2UD:~aqKY]2#UA:_{(#V/hhN|&~');
define('LOGGED_IN_KEY',    '1Pof0$8ztms+[!hU.y2Q@TO(-bO}kG~|::a#3Cij%z$YyBi>y-Fr_v|H{$-DLfg}');
define('NONCE_KEY',        ']C!I@|#q{<d.7k)Dydm nZcg_|-)udeJ|RzMe0+,^`]@<7<W|]4u<R}@efcwZT}v');
define('AUTH_SALT',        'Y-H?/xfZJwa:L~-yd4 !vEs:6ry|3Q@KcU0]ZemitgR&hKECr)2+1d%foENoDM< ');
define('SECURE_AUTH_SALT', 'S3q g~0y8Nw7LZtuXDBeDwna`#{Q_TxO$ZW|H, 1r.>Q#0rQ58FI|LeL_yeVTJ/8');
define('LOGGED_IN_SALT',   ',+ba8$!x!}S?|S_?yx<vo|AH9IO|Zjwf-s[ve9q>wLsfs+7X#+aCCEg<XX?=|?$F');
define('NONCE_SALT',       '.%|YvOI-xS|4^GU(V-:H/Fz(+/6H;Cn+Xa^*D.%mEFHp*UBt*!bi#yX25;#57KqD');

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
