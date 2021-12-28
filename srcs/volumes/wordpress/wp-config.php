<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'fgomez' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l/y+_/;/RvTC.-qC2OP<i>9{,bKP0*1MH6#4!3|;d60+a@$1dK5&-]yRC3#4NOWe');
define('SECURE_AUTH_KEY',  '!Na0+A+XfkZs=-!PN {%^,fk/]D-n_JU9E(eN-3(p|N(^9O^fP;O2(<93[BbfW l');
define('LOGGED_IN_KEY',    '-7=<N]i^+Z2ElGK*9fN#k+AwU-8|e:Khc.~JKw-2iBZ4u)Z{bzg$b3+w`nIB$_L0');
define('NONCE_KEY',        'KXqbt(e:={,.g0d8l%2Pog$6f.p$@NPg> @!wkF-{uMHVl9[^b:emU-@?e>E-%->');
define('AUTH_SALT',        'j7O0zfDyAV.E]X9uS,Q;YvLo=zRsxp;yA:]m9mv#+_^<DJumY~o?16@U_2vx7;gW');
define('SECURE_AUTH_SALT', 'o:%izALg+w)&Y.]%VSu|qT@YvF*C}g0oCc54:B*)2(-L0|i:jNv7tkStn( ,beQ1');
define('LOGGED_IN_SALT',   'tDY^qMTlYpZH*0CD|kceNyt26Kie4+=5#R|JsEgHq{*$*S^+l:&t= :eCR_ LF^;');
define('NONCE_SALT',       'X^{JHANI[|MQ=~HV:V CXsw~@1oHXNQIay$X&-~m[{5tyN|<tZ?4>S]-;5zfyF9<');
/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

?>