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
define('DB_NAME', 'bluespirecom');

/** MySQL database username */
define('DB_USER', 'bluespirecom');

/** MySQL database password */
define('DB_PASSWORD', 'T!ErepuP3e8');

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
define('AUTH_KEY',         'e*c<B:Fk1<->L^Lx}mre)&GNY3t]ykDQ`fhZV)t7+pT=V8wb@mj_8G&f.I-;&B},');
define('SECURE_AUTH_KEY',  ':]M<?qPTh0*9n(S}w#!+3$|cS,t2W/w$?z}<.+d~rpD@e.:5.:#Y9<Xj;D|]B-(|');
define('LOGGED_IN_KEY',    'EHz-w4|_Cje0(bBQ.t4;a~H-bt]k~sY0 x7FL)MOAi?FmYw|Bn7v|tc}1W8a3_>z');
define('NONCE_KEY',        '[h-/&z1skFc$|RO%q.x$sD@[qp)>sV>9XD},S:7&xwj^tQ?c|*h;<IxI$N.+I&_b');
define('AUTH_SALT',        'FIG+3^FqTHlsu)$#q+22]gt:+:/e1s{c;p--6K&]VNw.IErK r:TJqx%`bqU5p%e');
define('SECURE_AUTH_SALT', ']w R!C7IV=]=Tmt>9h.EmWT,k;Gh?-7u#0Oe(6V;A2elu-!vE*x(>|~i,p(5=q71');
define('LOGGED_IN_SALT',   '(zv#uVT6g8.,/nfmxMed1)UdX Av*$(a~0G<uo|p/i.cXdv|{;_W(W[3|Y_hx}.{');
define('NONCE_SALT',       'q5$xj7N-5X&@>MgM:?>2eB&QT(B(x&x8ZLQZ9=BLv(Q,&>Vcj|1TQ-q+S|Pz9s|C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bsm_';

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
