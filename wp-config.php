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
define( 'DB_NAME', 'newtop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'da6W1W4OyW1uZRJpRipL;603<)u!=&08xpS+V2U03}>Y4_G)NZubn3t9a5=~M&r2' );
define( 'SECURE_AUTH_KEY',  '9ySgZ<$XseEB11I*Sou8RH5+:Hb7av#W|[bX#+V;lD0G61wmh%#-y`LuP8ijX$)W' );
define( 'LOGGED_IN_KEY',    '@:K$Gn|32]h!_81_]qm=&N46k3>DXo=f!vWf CJwltq>GJwJu7XvS,0DMv2jS)_o' );
define( 'NONCE_KEY',        'o[bC+;9?(-1gdT_J]mE^3xP*,cxeljh)oY|r_/_MnHQS_mt^^1>dOkan}%qlMb7_' );
define( 'AUTH_SALT',        'dwo;N:O-@^g@CZ-}}y @)a^M/eS&@XohUkZG~xYZrQ7fJY,]/5uR4ig{1x=_<EKV' );
define( 'SECURE_AUTH_SALT', ',0tl#iJw%+jSs:yjZ;GvQJu+r,jp4:{DvImZ&gqURc|_y|Fu>9.3=|bl|h/2x4R.' );
define( 'LOGGED_IN_SALT',   'Q-g0(YWCttm[UL)<~X/B-CbS#*F{y1m_=V{*5DoYDV!Z81)6=cKHvSIU}q;yZl3A' );
define( 'NONCE_SALT',       'h,8|<SET7bv31uM%wsW[V^8<Lxf5rWgP{p-:?&yhjYLe.BycFl,M*^qz2m+aZp_S' );

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
define("FS_METHOD","direct");
define("FS_CHMOD_DIR", 0777);
define("FS_CHMOD_FILE", 0777);
