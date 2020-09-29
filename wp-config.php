<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'news' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'W&Gw&4N& GW. :N.c{`qL`|%s<f8+P<T.&uc&|^Q/@ZcSwy8_H+j(5;CxDokbEk@' );
define( 'SECURE_AUTH_KEY',  'j^DXMQPkz48w6aVe!r.hK:{Z/`k9qQnI,[J+?Yq HEznoz!,uVi,/HA/P&w>30v+' );
define( 'LOGGED_IN_KEY',    'FbGi]2vHew6l(QK~#3<J,ml58T)TJ,Kr8[Y Ooij,I.XW3Q2+11Wrm-_U{)l([iX' );
define( 'NONCE_KEY',        'CVoq JI;;%o,$9_dqib$ITyA<R|00lcJubCP;D]ZV06#ToVVIk0#,FP$HJt90-I2' );
define( 'AUTH_SALT',        '.5zdZq/?CnT]WphG10D17RW.E8JhidPk>#mBs^F&G(/coyDq<B8EU,.@IwA5kL2T' );
define( 'SECURE_AUTH_SALT', '%0z#r0Y%&X-yYH/M/eHr+P7KJ=NBkq4SU35S_KNWPWE?,oDYF2j }t2Oy<yX?~;)' );
define( 'LOGGED_IN_SALT',   'tfp0W[j:dZf*o^z|keB_aoS84tEax0<_#)q4[RE_q@t`N{wg9h7o[*j-.:I J$rU' );
define( 'NONCE_SALT',       'X(g% BO+wb[~fS:;Oh0:8Rdyyr9!~cAV!fJ:M-Bp$&/z0ar#$Tq@.o3j9{msuc}[' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
