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
define( 'DB_NAME', 'onethought' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '?<;>UJ8A;)X8?dU^<s_2PdP#kd*%mG>y:b}+7R,,G<jkT7Xmv4{NVV8yWUfxGC6i' );
define( 'SECURE_AUTH_KEY',  'K`!z9iBe&~5#3bwJZ7X9]@p(wO{R*F-3G!Am<=}LbH!@}v5o&P8mNRx+kI{k|tfH' );
define( 'LOGGED_IN_KEY',    'x5T;Svg((Zm`BGYK.;yk@V*^%5[S$?zKl*G-&j6!PTY3?7iK9kyr5cp5)9nP@$$U' );
define( 'NONCE_KEY',        '&/9h~y(y2p+t<|&#XFW t=m_lpIoSgL;DmS,/Y3AG7C{jq$u%+3SH>)`0nxU@@4,' );
define( 'AUTH_SALT',        '|Pfs~<XPwF+yXrHE^o4n@s|L@&`#,}~BIOOzIIPhq@#uwtP<?7.z|oc`hcjvkTNi' );
define( 'SECURE_AUTH_SALT', '*dYD>@SZq]Gpb$FGRC,Hb_f!%mx?|T3!@IJluhr-cxz6;!)I8])+huI!{TyDYed+' );
define( 'LOGGED_IN_SALT',   's+d^iQYe6R?/9f7m]@2*f&@8CdoxXgr4o_v+bO_T@NowsaV,YVp%<7@oWzlr7cMG' );
define( 'NONCE_SALT',       'O931n6v.{qh}Tn31[I(O*e>v4;7cHn#VqB>yre~tl!l,pMGn~<3$DknDCAG{/n=l' );

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
