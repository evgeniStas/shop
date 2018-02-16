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
define('DB_NAME', 'wpshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'dd429glk'); //dd429glk

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|q$S~,&kHPV`4.Et@CYK;L{h1 7?Avm-yEC?GNGQVG}9gb<rTRTl:^toG(,Y,n&W');
define('SECURE_AUTH_KEY',  'q[%dLc;~+wx;yn;:)+Rzy_$c<a>xd0qOXF9DVQV>?S&cl|iL{,sYsafv6,m`6OMH');
define('LOGGED_IN_KEY',    'l)JcR{5N>|} Yl^@N<QNRHeXOkpT$3aNV{Ohdxkp-5fF2Vi%b/UF>=2FHE%tDYh3');
define('NONCE_KEY',        'iUn2R91vK<W=x.d)@$iX]u)c: 54Gg]%61=?@u!=gr.f9aG<l3geWDiZL|f8L`&{');
define('AUTH_SALT',        '%}+mBpf6*1{d)*I(fB^ }Zvcbz!,Yy(dOt_:-PKFHc,[H_4UoPa {/|d3`UM,jTL');
define('SECURE_AUTH_SALT', 'K=0aWM9+V|3|;>i26tSdE/hp{aP^?+5c*_C31k=aUdsLpG;2uA7kp5K<@Va[KFS<');
define('LOGGED_IN_SALT',   '<xA3P&)b:e2(#3hz>B-AsNh*3(~Id9i%&6Q{26Fo6{LJi8=m.IrHDLjIa-;EaJd^');
define('NONCE_SALT',       'U*;ZH#M0~x@(yE+-mH--D@TXn;}=kw.SIOB{p;2(G(qH~G&c+H}l.V`i?u^9u}@^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
