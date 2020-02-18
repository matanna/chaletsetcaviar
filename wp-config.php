<?php

define('FS_METHOD', 'direct');

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
define( 'DB_NAME', 'db813806987' );

/** MySQL database username */
define( 'DB_USER', 'dbo813806987' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AwmYahyNGcJIjZOwZXFa' );

/** MySQL hostname */
define( 'DB_HOST', 'db813806987.hosting-data.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'irl<R7P6f9^1p6s1OUG^Q1U[HW|YYA<%|X{%l|wM[.*hj_E[)J;Uiuar-r?~)z/k' );
define( 'SECURE_AUTH_KEY',   'm(]*}-+zdTkOD}@,l}XeS(s]s>kdhj;AS)zpg/KSQ|M=`E7v5vYR;B<eQh9<@aIX' );
define( 'LOGGED_IN_KEY',     'Pj<_U(NG ^LH_V?.lL8`w=Ejtt$jk,<xMCoj3<MrXg*W5i^__x<0Q}AON&ivO[0h' );
define( 'NONCE_KEY',         'G/Lj.~PJ<ZrdI7QdCn))~+N0j*(khR)YhCG0O7$E0=auji+@l9#f(GK55wT2W~p<' );
define( 'AUTH_SALT',         '.QAA`mhec_}&7cp5d8Ta[X~a(14{q><9o&Kz>}YM~/~=G@4G-vo(+_{!XY]rR1(H' );
define( 'SECURE_AUTH_SALT',  ',fciKoU(]L0,>qipC|^t3[^8 *d_NVkYd2ZR:ZXRxb#9${>h9-wnb!1l`R]!^<A<' );
define( 'LOGGED_IN_SALT',    '.lxmE=CX`|~V+wT0CGKV?}nf8cAisIC CT8+l;=pWZW|sY OCnnFFmuZcV0nJc%`' );
define( 'NONCE_SALT',        '$y]Y9X3&i0U<Z3Di2#pyf]6WNo1ItW@Ft?gH7_Z#6nhK8?auIQ//MZ][1,DlT]B^' );
define( 'WP_CACHE_KEY_SALT', '=KD4b{1=RXVY|fdzpU,k4/{&KM/|.$I$?9>Cs^iWf)9O>QU/dZHZN}3+5TTG;y[Q' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'PoDwnEfm';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
