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
define('DB_NAME', 'amaris');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ',G&<?x`nNSJG/=(B HjUs[91+oe93_z)1m6WoITGiZPr%NjWuQfz=Lk%>)8(f6Ri');
define('SECURE_AUTH_KEY',  '7hj`?1n1J`e1|3mQ*wJxq:r;U?n@6A4T<0> ~hiHSh1jww $77V(DWsP8,J$I98}');
define('LOGGED_IN_KEY',    '@@VbAq|W)5i?&W8h.]x8MGktR+T0(8!RoU.iA{,xW3){27p|CW3= oa9D2:cXX&j');
define('NONCE_KEY',        'y=Pze|!oGjOw0w,SCW71inJ*z2{Gp=:,V8t)b4x+N`[/r)F$sd@_[9$NBgq3@& H');
define('AUTH_SALT',        'L#Lr:6A/Ith(cC17d,l|V2AP<t<c>*3Mt?M4r6B@?dFFow#~$j:+ dIy:,#qiZZ{');
define('SECURE_AUTH_SALT', 'Kqw j<5/.pI3!;&9~1(Qz24CX 8~;Wp6sVnWtA5DTrI$:tdH9d4N&6UP] nRi8]g');
define('LOGGED_IN_SALT',   'O%xaY#_!nw`0r[?6bnGP@qvEz*~UOmv1C{ QFWFeAx=&DnyA~1:>1b>U{@dK3pWb');
define('NONCE_SALT',       '+0a+@;v^]{dxPGdp;p,ZO?;**DxZXG/x+b.mJ^?U@0f,ur|pY)^A6sG!795)Hl[U');

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
