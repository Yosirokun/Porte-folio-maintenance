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
define( 'DB_NAME', 'wordpressPorte' );

/** MySQL database username */
define( 'DB_USER', 'yosiro' );

/** MySQL database password */
define( 'DB_PASSWORD', '$root' );

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
define( 'AUTH_KEY',         'rDH_n}L8|)*{]1>AZ9_Vw)5%e?%h3OKx$faec[{&L|AB|#iC1-VcJ2>k9crhQcve' );
define( 'SECURE_AUTH_KEY',  ';K6NqCy62]k.VDNJKoeocI.8F3Rj+N}*^W#--<Ui>7+<<U40gB1BH`9,p.Wfj*hX' );
define( 'LOGGED_IN_KEY',    'ZbVi~p5U#PMPL,|cU1xwoi5Ec _wmVMkd,5|~LU]wV#<TFckEx}):+cbfQp`|feW' );
define( 'NONCE_KEY',        'rBGe8ULlxHL3sO,~r[!%{WEhD8R0e$j)0-z]G1%2/qB8%Ci*>90`E0i%_zi>pa4D' );
define( 'AUTH_SALT',        'cS`smt0hZD@1<O[;~{y9)n#kgG%m}zS%Q+88lil~9!WNMtaGo_&Wi8BdO{#S_b+G' );
define( 'SECURE_AUTH_SALT', '$@$Y2kVO;^ygn9x`#mWB9A$2Et8F%ey?<[=Q|[r?+B/WB&6QUy>u#=]42`&y,I38' );
define( 'LOGGED_IN_SALT',   'D;DFvsK4;@(2n:Tu?S RdPkRFA_whb>A|Ob)!z{P5=m<ARm<lh7al~xs.M+*4vWi' );
define( 'NONCE_SALT',       '0X<pOU()YQ+S$&&Gw1lW1c]$Gojo?h7&e`m:!Bc;*G)~sW:aav{GkkYT9ND)4vOa' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

