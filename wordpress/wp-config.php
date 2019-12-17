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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '<mZmxNmer}c,mR0&Q,jrKbp}9_5rST8})Q[cuLXHP6:f2|1km,roEJp@j+4ttKjt' );
define( 'SECURE_AUTH_KEY',   '{1HWTyIls<%BdhdSn&ly>d$z1D%klvNffCv2etG|0HjeD>}vlDN[<R#(>3-xz8V;' );
define( 'LOGGED_IN_KEY',     'RCzJOP_u:KP,hAk<)pmsQ[s_Fs_ CAvR@g1*[WYr~k,qAaHVlASQ/W}w2ABW3Qdo' );
define( 'NONCE_KEY',         'P11XRePnraJ-Ya55f9`^$j$yc;R7*(rv=:YFg_jiv`[QLe4GnJ8:+E>=R4%m4}`(' );
define( 'AUTH_SALT',         'yF=Hzu!pd[Pm/y$[*C]i}I96*$~2:ok/|nQVMUk+TW3N_Tcx4]xnFW;fVzAzi5%(' );
define( 'SECURE_AUTH_SALT',  '`~_3.Ou`r%iG+]<-lY|,|}  x,]SNm}mRj!hg&RE[gHk&z))u:SQGfZ=(bqJ3QNm' );
define( 'LOGGED_IN_SALT',    '6/5[t*c*RM7@4=u>zHzt9{X%T4{mCUs.}dVsqtWv0e u2vR?RE<1Hc2x&$_+,MBo' );
define( 'NONCE_SALT',        'glZMRJadn<0FoO0?;lup-=,u~q3mBe,Z[Xds7+MsxvXL52>a2-=7kL/];aoC2PQ/' );
define( 'WP_CACHE_KEY_SALT', '7ro`@SdN~Vo{4J3]OQ[#B<kMr{^0zfI<fg)n}t{wc]=!VOXjF;eUkWSh{^9Syr3y' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
