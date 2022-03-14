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
define( 'DB_NAME', 'animaldom' );

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
define( 'AUTH_KEY',         'B=4,K]S5;e/U:=kHrBL/->4<lTT;D~DWB6jQ<l5aXjO}3%GGH6d4*g1~4rLpw*kF' );
define( 'SECURE_AUTH_KEY',  'RCxKy(+4yT?D0B~;1dK$zAK~/gf7B/S-d+8T<A)*q#p^O&++NA^7KEy<*~Ow]$z/' );
define( 'LOGGED_IN_KEY',    '+C1D}UZG_|^8LH-v B19c`|6/=sqPG:_Ek8`{/SR5DNTz:YHS.l<4dVxAQJpE?-m' );
define( 'NONCE_KEY',        'XaF&<IAN3Bem^ti@P(8gF!+617!EqlM6.OM&QH$/=sIb+!6ZeSyU6}%sos]q$X59' );
define( 'AUTH_SALT',        'Swi^&uj3,_,TDHr_x2QR=m)Mc4Mczmo.`DO=#5Q&bLZi>a26W?E&4U!RUa_stUKc' );
define( 'SECURE_AUTH_SALT', '*d>`.Qt#}*,4wozNP;^/;r3LVSqn$}qfDsPr@3CMnFHITT)@MLo)L BfCrB.XoF<' );
define( 'LOGGED_IN_SALT',   'Zs;l.jjTDZt8$~5d8f0L7>c,6:H2F.cPG1oe;T6wKg[ Na]jq8_x,v1>{H[LrEZ~' );
define( 'NONCE_SALT',       '#?/x,:6HN2O,JNGfPD`|,xDb>P`s%.Kj&uBFnZ=L1>-*m,^<$FTwoz&d Th#m-vb' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'animaldom_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
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
