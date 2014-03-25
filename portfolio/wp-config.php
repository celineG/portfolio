<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'tisseurdfull');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'tisseurdfull');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'MJMspace');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mysql51-41.bdb');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C,~ JD6jsu,CQok3-7kt^!?#|9vXDA~KEU|wlgStu95^U@dPJ&0MA4D@P-2JdHf-');
define('SECURE_AUTH_KEY',  'k9220gM:|C^ygw-+,3cDyjwh+h+QSJ+{=GXm!f;~_SQ@Bq]-AYfKs+VMd!,IEc<k');
define('LOGGED_IN_KEY',    'K;4(<vMHB ,Z4=)@j-l/MDOE|+T~|F!yg:,f]|A4UsOb7e:!oAc6f C,]n(NM+:>');
define('NONCE_KEY',        'CofiEBb1yv5S9|A8i`&[*VQMXY4ZrGJ-WTv _|=z$1?+Z0dpd)V1-wQ%>;t#qFq6');
define('AUTH_SALT',        'cy)U)^]7~jdPUVYQ%dG+?Y1||uLiy*v?n-kaBVAuKQb}iRYcqUVM,);Ll4[Cz<A{');
define('SECURE_AUTH_SALT', 'SNc Fo(+AA{t0,|0cN;2XnBbDwnI#9/LH:cECHqA5UVbF-w(4HKs.f@?K/Fil-_B');
define('LOGGED_IN_SALT',   '-:>=j&jlbW-U.+Eqi_.-Us]n:c?;v+!Bu8Tci3^ 4Rgg&?&NhW=3k/f[4o>X^`be');
define('NONCE_SALT',       '!t|G6H,dW;Y_<OS%|5(zR#X9@(=]mpnrsGet#g?@l+@R^3kVn1@%8cYeGbF@jvy%');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'cel_wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');