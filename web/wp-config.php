<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'lamudcity');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', '123456');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'HmrLYYYc>J*YR.xf7=.^-(FI+op4kILaOpAnh>{yJ,ZHQ|)rTJwD4ZNslA|1zEJ2');
define('SECURE_AUTH_KEY',  'PZ+.CNR|#/.0pA.EB-c7`T~^@F8IJ%8011.sk>w9f}fND5(]o-%$6/rWd~KB7HM#');
define('LOGGED_IN_KEY',    'z9F6[aH1f@y7D9I8ESp[M.PLO<Oih{Q!U?7XPhe7X<|JZ%c?-cV>hj`#8ne-G<me');
define('NONCE_KEY',        '[!}Z!b)]*)!OY<R|R6Yan{C8,ykvU%j$TfnjKzkUJ=a#<5_>!^KQQ%/,=9X c$CK');
define('AUTH_SALT',        'NIYb<f4Qb+m8}2?Jr|RS|H3~:FejTn|y5=B&#}TDkN_>FnTq89$P+1amlAdm?EW$');
define('SECURE_AUTH_SALT', 'MsN<H&;22:_S)zE=R[/}1.yqHlp_{<chLPGs`H&CDAa1#I3ri;2`bq3&e!abTwo6');
define('LOGGED_IN_SALT',   'ivCgJCtc=vpy0@?PK^2J.6=L|Q~@(DnBujW*.Z9wcElRDf8)bnO]>4^%GG>lL71w');
define('NONCE_SALT',       '<+yH/^HfZ^XH1enFU;uT+kc 86Z*+== :lpx]O(j$TD%Do7X7=+oW]e58E}Eu`u3');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
