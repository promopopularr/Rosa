<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'rosa' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BBT{v~_2z1)yrgO::$$mlJV9@qPIm)#KTr:ppF<7B0+T|Ile{mqkD-Fl)??}]Y;v' );
define( 'SECURE_AUTH_KEY',  'R|DJ# M_;^{?7(;~h@TwIkj.#,qh]RI>Z1]XtD&j?69$+7lt?=<Boe(TG74iA:{1' );
define( 'LOGGED_IN_KEY',    'D9+X*ByWIdcsgBfXJ-_@!@P4FuGD$j:c]_O eM*@B-,[0UA/c@dYBTFbm1%pgu!8' );
define( 'NONCE_KEY',        '}3R).Fm(3Yn%p4#^Pwspgx@TyokeXPY9S]%(>?vK&Zfa{1tfwS(`1F3!(GL:4)7/' );
define( 'AUTH_SALT',        '6H%*?k0]jwFQA]j%*Wy8w;rKf]A)EX9?3G^}3axhQ{eq5H<%jy(z^w5q^a,m.z6%' );
define( 'SECURE_AUTH_SALT', 'juC)VgQ>;_I]+:$OisW~by3M)w,].M*+.$*DL`;),yh!4>)?ZhU]HC7m| i|%s@o' );
define( 'LOGGED_IN_SALT',   'y^G)v!Zn:Ed#bvS%(CiMoCYo9P*z*ed/jd}Rye8s$_?n472+36HO*y#b0*v,_ysx' );
define( 'NONCE_SALT',       '^axO6,3(LL_cPqGyh1t{Y#+N,;PqPvE;*/dhe<Z-gE0o<~s(%Y-}jQ0uvDHFg-Py' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
