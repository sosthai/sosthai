<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sosthai');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'e_^=</S9!3%q@Flh(rpImCy@-:iD+C<0&-N419q<|/-i?Zk}KV#vrc?:ozW8EUd~');
define('SECURE_AUTH_KEY',  'i.m Ud>#d}F~cdIs!:u+,$.wqq)-*+i3[W+;}$gIJ%w8R]:?W)P-, ^[B)6ha%k9');
define('LOGGED_IN_KEY',    'g5.EEPWfE:+vz3 d-.[I^d@o|$L`g4[(PtBTZCce:%i;];M=J`8!(?h6fW,Z0BP`');
define('NONCE_KEY',        '8&_^G=+lmM|+Fw<JA;@6>{FBPTbb3.Fj9Z{ogu!x`zz-pS>EkSIXKvb)x.e6(]o|');
define('AUTH_SALT',        '/|G8m0k|d~wAVgx%a^O15V[zEf;6fK;wh&A O;N-d+WsJ0j|P0gg]G/.aL&`KME,');
define('SECURE_AUTH_SALT', 'L^)D}+9Tso16$s&reg2}I.oPZuuVVg*,58,7peCpd%`m&iq=h$%Q( uW=0Asi9_h');
define('LOGGED_IN_SALT',   'u!.I/?|,Kip$],]#&s(94&s-2G*.W:@Hm.9 )<]%P2?{Q0MKC +c?&-NvH]{(%S6');
define('NONCE_SALT',       'HyKcUy7@K9egBiw:v^ov98VB %blK4+ik~VRd,WFL4QT.MCpC2>r!4:K]#V$-jFR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'st_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
//define( 'WP_ALLOW_MULTISITE', true );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
