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
define('DB_NAME', 'zlataltay_db');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'S>BL(BZ] ;,b$Q27RDfbg)Teg5zdWIYFq{Q 8P1>7PGu;(@?hg([}abD0s/X#LQI');
define('SECURE_AUTH_KEY',  '379Vp<U,BP;wJQ*dMOa#BE0,.P%PE@ilV|QgJBW.Z/ygT$fajvN*%l5Od:ZLR7&=');
define('LOGGED_IN_KEY',    'm5t^$U%Xa&F:Ij,5o71]Dh8/|s1_=hx.[_v1-[lV$`Mmt@E(IV`3MV=ZL9-w7nuN');
define('NONCE_KEY',        'eA-3Fsi/}{X9UBoyM+g>qp>]4R/SjLRH~f~]suAauf)G]KX?Y@;wm]9JuTn].ONm');
define('AUTH_SALT',        'V+)U}a|%e(dlm]i2Lf~xuOzneBxF*/_4N{U~&I5$cQjdRKQKF,*SswB*7Mno=V#r');
define('SECURE_AUTH_SALT', 'bUUY&Q.905O<P8HoT/N pUY8kXBU)-k .5gSEu[3p}Qvb]tiXDHqwNU6_.arO16I');
define('LOGGED_IN_SALT',   '~Cn,p%kW4>7CF7Ko5^p9j%4^f+r)#GSulqDp+*}3]U iT>Wb4/$p=<o]$KP.2|yY');
define('NONCE_SALT',       '}@b:^%eQN7%-L<C]YNas=cFWh/gclDF&cKBb/Z.0ii^O^GiSt=nVzF/+X]m+i9JO');

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
