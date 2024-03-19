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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '447-22_53153' );

/** Database username */
define( 'DB_USER', '447-22_53153' );

/** Database password */
define( 'DB_PASSWORD', '1e524f7b07a1532ed459' );

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
define( 'AUTH_KEY',         'M~SxqX2^1jF+%$bbi[?b#mPcNS.?]8wh8]t Zf2VC?VNH-E&LIB4UZvs1JTH_#;k' );
define( 'SECURE_AUTH_KEY',  '(l{2<,,~~PbUhddjYd46;-E4=DvZp?3`%,GtKH1Y&.4p7Uk-FMqIzqD&b=umVpES' );
define( 'LOGGED_IN_KEY',    'Or|4t;6_eUM;,Y~Rs>lgBD)MrLBw5=Z%*[+Jr=]SVexSk:D8sHQ(}?WV02.fgx]`' );
define( 'NONCE_KEY',        '$u#s3?@;!0#_uh>s*0~CJ)93VJ@<`9)/9>5o!%}VY=~{7vs4kEF+3IuN~U$c4.pJ' );
define( 'AUTH_SALT',        '|r7BXe.:pk[Y3i]I&Zs)H^FaWVbvs5:7+/4R=W!}3~fw|Zwxr> -$jvko`I`(/T%' );
define( 'SECURE_AUTH_SALT', 'N)zytC8]Od~at#5,XZ0~29sfF(lcb|Wn?S&hk7PLod:s?{=&n`+O&qxR698@%J)[' );
define( 'LOGGED_IN_SALT',   'yy)jHA*+.hVzgQ`D5Fe~XtXYdxqV1lZK:!e>M1@2Q>%81>L|tlRSfBKmJ<0^NmW9' );
define( 'NONCE_SALT',       '>w[DnCz0c`_IIDf)U$HbkJc<TxNV592 J0:FXq*T]&{lex:%|^zgnCGA~V0<([_}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '0UyB0_';


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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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