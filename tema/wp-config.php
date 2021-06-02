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
define( 'DB_NAME', 'site_lp_tech' );

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
define( 'AUTH_KEY',         '(1nPLLKz;p)38du1+;HY2[ g.JoDsGLwqAp=PJr;RAKBFB[Dz{W|#,cDqnk[YN/p' );
define( 'SECURE_AUTH_KEY',  '<,tvGhQV&^kw$[>(S!OJVjzOvFe|Z?%HHP;SC8zDzYMQyQ9=,7aLs(j<1hXXbHu*' );
define( 'LOGGED_IN_KEY',    '*FaHR0W((6[uP:D2,2e;vt|7$`McY_1J6g|)it2sjd%x/}u;pxfxrBu^^k:cZP#M' );
define( 'NONCE_KEY',        'pVLRwt~u3[g~c472LbBce^Fd%Iw_QZMC$8O~.]m7[|qWQL^w~&uNzRZsZ;V<^0<[' );
define( 'AUTH_SALT',        'Mw~F2Z1D*pRaTwD!r+oH6`m{6$`w^4@v>N#f3].WW~t`ZP=OTu2[e0[-:]74yrt9' );
define( 'SECURE_AUTH_SALT', ':CDMw0e1JW}.Yi+rh^/I}>GL|Mzisd:%=Vw%LlOC`LLh=#&3WC9H=8_-)r/RB0a}' );
define( 'LOGGED_IN_SALT',   'w|67`]Z,$&Y6[M[:q =qNyNm7d|Z>IN,C![**.[?B6uY)1Z>JrdX32nM0~T}I:5a' );
define( 'NONCE_SALT',       'SqJ.qKV3.ZUPMu[Acd.gU,IWPk{~Xw{nBMN]@yi(H$ #+G+!`.Rg4[ud!?u00bEH' );

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
define( 'WP_DEBUG', false );//true

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
