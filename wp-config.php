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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'livingwaterlink' );

/** Database username */
define( 'DB_USER', 'liwa' );

/** Database password */
define( 'DB_PASSWORD', 'liwa' );

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
define( 'AUTH_KEY',         'M(Gd: Jtor?&_U^64ld(*P[[9F?*b4i0Wbyu<y^R5kIyw:94lfkPj9Uu02ZGO9>I' );
define( 'SECURE_AUTH_KEY',  '?Tdf!/iX]naai*`@<:Wux}!M+J7?S4_~D6E%.z=%JY<8+g{$t!+_F(@NKP6~Lp@ ' );
define( 'LOGGED_IN_KEY',    'LJR_?#;_1#m`0;_[S38q<XX(PE|&kDfHfn}l;SqK2j J?SZA1&^O>!g:tF!CWq#F' );
define( 'NONCE_KEY',        '_mY}SJ]d@f3ciPB@S2wJzuzKv3xW,)kKXS+CgL:i>CHlh]V~wl:WUqDW0SWF,e[b' );
define( 'AUTH_SALT',        'z)*1}.UQgXAG;1{C/)+l&w2kZuKe&(We@@z4QQxfqEtDL7{..wN@=d}z>X@:l(@:' );
define( 'SECURE_AUTH_SALT', 'T>O,cHe+mG0}},|QLr.e=:/bNYM5$qp3/_2~KY{|m Q*f5RV.SsyEqe./$KIB&hb' );
define( 'LOGGED_IN_SALT',   '+_|`IH2&TEU#uOq=r,$V> WD+4^q6?IJNx9^M+[qUv#8X{IN*H/I@Alk]]1nP-lx' );
define( 'NONCE_SALT',       '>3)DbE+E,o`pBE|F#@i9I(Xy4M1F_hjM+FVG)jFhdc%(-=^scqSQ196J[MW~snxg' );

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
