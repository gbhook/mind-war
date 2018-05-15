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
define('DB_NAME', 'mw-wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=Wic,[TCW.IU2<{q4{#a]?:moYJl)w@<uNsR)zS)GxmXVHf%z>7n9;NXgovPWQl+');
define('SECURE_AUTH_KEY',  '^CEPGd=N@[utq-4IH(]yW{:*sG(daNcyt0lfaE-NC/$=jag7IYzwJ)_Jcb3X=/Wg');
define('LOGGED_IN_KEY',    'x_k3F.hwWCY2bV@xp+>~)T[/Zt;<:>]jI6`|9oGNI0aR3;F1GQPlRY!=gIAOo4CT');
define('NONCE_KEY',        ']TS!7f~G58l:nM^wqt<l6w~E9X*LRndE5{P;dfxQY@![cnQ3WV_noQm!w.1{x5)k');
define('AUTH_SALT',        'mvPbmm$]d8^Pygq2T+]dpw~B.ik!~bXZ<E@tTzI#(i$(dk>59Vi5gzNr0!2VWdim');
define('SECURE_AUTH_SALT', 'zrd0xY%>phN^z>@XN#yWzgGvnWY_BoRmj{J(fW8W(m>QmL:x*Zn]*+$qs.k<cj.t');
define('LOGGED_IN_SALT',   'C|_!,SBq 2cX7c4[|Sj+} k0H:X}CS1oQ]*Dk1{GI8xbs&15ic6Z/ wyY~Y*Dmg@');
define('NONCE_SALT',       ':kq|0e??C3tv]9Y[M]r`k9[Y=3^}UwI~C!iD@5bYU8swq[fl5UEL(S#$Qm>qgKo8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mw_';

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
