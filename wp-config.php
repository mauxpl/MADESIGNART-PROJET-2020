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
define( 'DB_NAME', 'ma_db' );

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
define( 'AUTH_KEY',         'I,=.H52VrTlFszuHL9fElE5Eoj|z0A~d-p/lBT}<Uq=px-8a4[Y^%_v_O^?r;t!U' );
define( 'SECURE_AUTH_KEY',  'R3u+p=Qm+^$}rp/@wSfJP=WCRpaUj@gNa?`:WT/=R&&]>!>/%%^[^bW$?#}AsD8[' );
define( 'LOGGED_IN_KEY',    'k<{gQ_V0,+WG:<3S.2z}R44lIS8-dQ{});xLj;Sqs;IqSc:xf/8OELbqaXm-t<-e' );
define( 'NONCE_KEY',        '=P}82M+CVITT &+gA%-/sJ@;~pp7M L(z.9MzQmD{r5K%@16)<SCJ:V>-;R7lpkK' );
define( 'AUTH_SALT',        'EZ*ul8,Tk.?@x).1mqI?{oz(6m+*BsbUTv=2rYUzSAKC_Vr:Q.QY%Wp(,H;%n#[{' );
define( 'SECURE_AUTH_SALT', 'i3IBw2gxiaOTzq-rK_0A+~S`eP?cRqY`Sy]Wtw;TO%7<h<EFT #6Aw}`N|;:|2VF' );
define( 'LOGGED_IN_SALT',   'l+Z&5Lcj-*+W;j(&!y2y3ieG&zK9[Kz-80x_:TobMgf{+i1W9= 4mQf#<*.OnK0_' );
define( 'NONCE_SALT',       'Eapi=Jh,nNqTE(q>s,sBL-OJ;tad;87I{>S#.+}m[HXnU~eDQ7.yx![aW!nk^[?@' );

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
