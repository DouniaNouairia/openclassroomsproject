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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '$I:O3hNLhql28xd2s0D[ajUomwX4>?gn~VSQ),X?uPSOe`n{t.55H_Z)LapdhThy' );
define( 'SECURE_AUTH_KEY',   '<Es@WQB<wz^ <?nd>$FDN|~K:IUA?i9#stTZf/vH:{F3X@/BmeGXjGPMwRkHV0qe' );
define( 'LOGGED_IN_KEY',     'q[r1xQmLZk63}QMZ4nCv{YI.8oV_Q[fSLcoku_ :i()lW5hqO.C7w?9<WX s`&%h' );
define( 'NONCE_KEY',         'Mt|17hHT`cq_lD+%Mac*^#+:+a5=XwhYKxXw6`F-<.@Jgu%_yUaEi[u@?3;D2Wi]' );
define( 'AUTH_SALT',         ')0Uequ<HB/gZ9sM*kB?#y!/sFtqj~_ PK82UkF`]wbDB;uhT=@MShb|+TFT#+%|f' );
define( 'SECURE_AUTH_SALT',  '>S|<@3ND,6xfR)lv2.`iA_BT.UYpbaTjiDYC7$1K}!JNs*]%!gF7V%Wr7Ho}MOp&' );
define( 'LOGGED_IN_SALT',    '<UiW`U.gY#8+vw!2zJOH4H!Q@VHO$Rd24r<~%:m<Hf<wGU([_l`d4q!Xi3M&FL8[' );
define( 'NONCE_SALT',        'JW4uIoZ~1nQ`B`<ww9Sk}4FZYJ`R)Xm)AdtfMZX%g@*dKC,?{Ci(DNKYM_t*rUbL' );
define( 'WP_CACHE_KEY_SALT', '8;r}8MuTC|wmNtnBa>&TnKV*$QPTSu653wexdUOc}V_}F}<Z{{XMqx!# p;?VjiA' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
