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
define('DB_NAME', 'lastdeco');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'HgiTv,4gPh8CU!kX-*}^hZ<zR>bGZsZAv6Q(}cRp/@[)A/L^UD`aYi&Xf}4[.3/2');
define('SECURE_AUTH_KEY',  'pTeke{a)V|I(~.5pR5NgC&@]{__%<d=~2I:B|z+~G*^-La/2kI?xgLg]GPy<xOUr');
define('LOGGED_IN_KEY',    'bO-v6t&J)w;f2~qZcCm%n}>p=A~}&n)XAUoc^FJt3=|d1M;f|P]H;zFf%D+S/YT1');
define('NONCE_KEY',        '=:[ckFS]v-FG}eebD|`(EcsB#,_/|XU: ?s{P-#2RHEgnas,oS`pU=IL2$w5K|TS');
define('AUTH_SALT',        'K(/ R9inu!X1TG*I+|}S0|XS[~EvgaB_G4-BmCkhB)|;982;Me85FKsZ_eBA@W$g');
define('SECURE_AUTH_SALT', 'q33TZsPl~xb}WzW<1u_4j DX9f=*.D%900=]n-H4Ng1V8Lm6nUim@^=cT#-tSF*E');
define('LOGGED_IN_SALT',   'Kr%3xgO:p 8Y/UJu5F>IyT88`$6i4(**T|EU*_HDl]OgDk{i>h D[_)nt%jWF0`L');
define('NONCE_SALT',       '{,)nrh0B99Ar$my7$hcO#k/ZzH1!7s{LBaMYQA:E&Z~A5@YJoQm&YoeS1a]Y>RZr');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

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