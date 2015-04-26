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
define('DB_NAME', 'allstateplastics');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'SGJz0]~rH ;2bKZ?p299oZy&x3a|36ivQa}@4KTdxr{b&_O2}JRa4{c(a0.w|Zu0');
define('SECURE_AUTH_KEY',  'knYA/?)7CQC8P>|tW(X;OY1igQm:@#;e-kOn;L~f<#=#<x!Z/O-,s9n#G?e_FleS');
define('LOGGED_IN_KEY',    '+g=yAcx1|!pO+nX.crxv(!v nqv}tvLvl-y)17GBx|${BA go|a;M6o:R(Wh5or ');
define('NONCE_KEY',        '`M$u2#1XN)r7O}AO9qSwSTbKd+IR4]NJjq(*EQwM|.qW R7$]=se+!TyIcnk&HY]');
define('AUTH_SALT',        'BuZznT<gjm=j2~JKS1ss7&Ty!gVp;j({Bn}4[H!f9:`Es;)}^:{N((02ccr(mua8');
define('SECURE_AUTH_SALT', '%y[5w](B%7F{7=Z[3[r2l_nD.8>*BS-v.M(K4Rhz4F5_0*|+ehsHC)Dp@yjp9NAV');
define('LOGGED_IN_SALT',   '^#Rb9w}5^(?FABnV_r,i,yZTqjaamvQlk(Jl?EybPR>$2z*Kyj3JP-PeG=h7I?<2');
define('NONCE_SALT',       '&3/cjJT){B:~~$=aVr-O>o/TmkFi x-?h89Y1<JVGW4r=vGUt5G0xQVCI[$ZI G>');

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
