<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'testeabril1');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|19L*DEh]I.OI9Y~a3>0m#/o.g8+^!N;?xk(`m,H1)/lm3o9g^zx%>ct>N{}2KqF');
define('SECURE_AUTH_KEY',  'iFI|ud^iG)Z*?|{}^Ed-apX0z1*i[xNm[:1>{h+?OuoZG(N>EOW$+H})uRl7s.IB');
define('LOGGED_IN_KEY',    'zpQ2PE{A%(q5cN.`E^CxGT;|f6Y+zS:fk[]Cr-:DNBScd(cG*C;x1Z{?(k DzQuO');
define('NONCE_KEY',        'dW]?79S+kHrU/g|`EPoMMB796nl5D)YsxyOe@F4R98m5;oua+usd}#{U_>i#S{k#');
define('AUTH_SALT',        'ZUrZ9d/ye]J0j:P*[dF!t})]aR|^)Qd:^1my/x<PI5ZPKXXj{UA|A7f*e~>G8S9M');
define('SECURE_AUTH_SALT', 'r>4AGT4YBq$nuK1&@.OB>[<44Bmje`f)CP|[-F{#fSZk#G8TT{EFe_I>P[!krh~y');
define('LOGGED_IN_SALT',   '-An,j$xx5|.]#3L.op`dMbn0%(Aq3}c`]2@wnZuu|[p9{oM-f>dVvs5h?P8q-rj`');
define('NONCE_SALT',       ':[7V:[O<(Daa].v<`0~YU? /Q7Q5#XJ^*/@J{R9&EIt9jN&z}r7dPjEw[9/R~#37');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
