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
define('DB_NAME', 'doutorjoao');

/** MySQL database username */
define('DB_USER', 'doutorjoao');

/** MySQL database password */
define('DB_PASSWORD', 'medicina@123');

/** MySQL hostname */
define('DB_HOST', 'doutorjoao.mysql.dbaas.com.br');

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
define('AUTH_KEY',         'zgb0xlzuhde7q0maxsig34rlstur9ol2l1dqci9lmgwzofm8ffcfnlpgvhofs1dk');
define('SECURE_AUTH_KEY',  '1jpfpsqyi57soaq4qz6ln0905eqlqeniiua2dlaud9irepxafs2kadebx55ihklf');
define('LOGGED_IN_KEY',    'ft9csbn3aerbzeyshikr2xz5aubknpm3xidep1kmjccejhnp60agbrdzgrry4jin');
define('NONCE_KEY',        '4tikmsox3c9exe6xjcizmkjgmusbixj6ans7h6kymj3tgiw5s6wth2fteraihmps');
define('AUTH_SALT',        'edr6hxhne6a0txiavq0qjmichnalmajkoatcubcg5gzbhkcwma6tjg6exser8uxa');
define('SECURE_AUTH_SALT', '2dvzlqiuw0kgc9xyashvm196hxstjynfgblwdmch1v66dz2934eewdksysn5h2j1');
define('LOGGED_IN_SALT',   'cuqg1wfm5jeyq6eico108nttcieffheqopeukgwqkcquubin5uo56ve1jmlshzji');
define('NONCE_SALT',       '58tjaxlnbxgt5cxnsj6cqbpfspmmjybu06u0gefyqofji4v63urhvyvx4ipu4zog');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wordpress_desenv_zone_';

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
