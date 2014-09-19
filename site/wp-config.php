<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'metropolis');

/** MySQL database username */
define('DB_USER', 'msilioni');

/** MySQL database password */
define('DB_PASSWORD', 'XWMUTqHECLLexMTa');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'X%K,m=LmXA`B0_[,^zx|-MtM^qT&MbO{sj1-0faf-nVolS0hDjL,9m2TIwhE.WfT');
define('SECURE_AUTH_KEY',  'c|(Ev[ZB{msV&-+{QA]t73@m5_v:t%|To*|,@f4e*+z<)+51v(-X!afnQcQcx3g ');
define('LOGGED_IN_KEY',    '/xx]X9{p-AQ}1,foV@x9$4Zn4Qgyoq8q=Lc`<;>tTv1%),}Q!2QC]{+2soIRvasJ');
define('NONCE_KEY',        'MGb,Kc$asy|-ERY[;flv%mac/jPwzfnpeMfH7yr(-8ixsFC)]-fAKe@o0u.|-_#L');
define('AUTH_SALT',        '~n.hCFuur<O;Jll5dtL0R)f`t^a:Iq3-vSQ/FgY1a^9uZ]hGc |%Bw$5L->_UPE.');
define('SECURE_AUTH_SALT', ' J9FJ_* 7]1z#I{?klvjFpCx5Y<|jU|P,x;hU1$v]M=gy+rm>JspAVJU,pK{|]#}');
define('LOGGED_IN_SALT',   'D!XNyI W.v4.?bWBZ+Q_OC+ttGGljur<q^3?|:dxC;O)6l=Bb%hb)p|Pv{tmtGlY');
define('NONCE_SALT',       'aZBS16s7q[h,$j)nmF=hGC0kL;l d|YQi~CWc=-x|Y@(myaSgCU-~#PQT2QT+yL-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
