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
define( 'DB_NAME', 'test2' );

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
define( 'AUTH_KEY',         '2,+YH(}2~Eo=Jk3<+cbycI-c~>@Ve9PIXtldHSJ]A1v$`i:k78P60QYyTO_z4$]/' );
define( 'SECURE_AUTH_KEY',  'bhed[[v#jC8c:l7c=zS|!P`XOU]~LwcyDVCvN$*alB@xg/3DQ6mP6Fd(AtulT(.V' );
define( 'LOGGED_IN_KEY',    'QO?O[pA3ON:%H!Jw1qy%~wmS:dp0T%Gpn1B3a%18Oe@),X59Mx(jg|U2+7sRGqk}' );
define( 'NONCE_KEY',        'ZMZDM:vBtNjzg  iVUIr7UQ13s_p(@>ajf2L0H<FsozS}Js.q1g>,~<UQU{* ;#c' );
define( 'AUTH_SALT',        'KjJO1QP^MwJhXXvg|(8DBUz<,tKfO}Q?$pBS!W9Hw 74;I[X~q8E]o]DWPSu&m<`' );
define( 'SECURE_AUTH_SALT', 'Zb|JSsj6&In!L^+9nWW<na.faG>{z>B?.E}]Dtlf*xIjZKi;UXKdfQ.*J^#@x)/9' );
define( 'LOGGED_IN_SALT',   'olxjU_@HK%OWVf)z7)@s#GWbJdF8/kVzC^J:qiyOErD,R=}T7w/V-v6-3T$4`3^e' );
define( 'NONCE_SALT',       'Xzv!E.0I>,,Yq)=BS&pdSdioYnHREg=YuIUHAkB?D1kf_>wqY.kvb5SRTWR_!OUY' );

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
