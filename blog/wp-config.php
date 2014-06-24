<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'itaitubashopping');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'VPI{z{W$AmMs0#0Jh-#h8?9oC)pQ rysZ2Gu=pxyJL`.I)u2_70b/x9#9CroKN;4');
define('SECURE_AUTH_KEY',  'Rn2bZj[VE|i-qe]T#0PQ.66ljIl5x~FLMcob*BA mY%PgUo6iFl!~kK../1aCKP?');
define('LOGGED_IN_KEY',    '.xT !o}oObTsli+7bCsbeFMCK=T5M8:h~2[wki7[_@ ]AtJ(JdHn?D%O@xv7%rBj');
define('NONCE_KEY',        '|C<_j_.]M<>=rd*v/w&_a2>nxG)>)-V%N5gg;mNUw-ZP-f-CRX&p*#wF?Lc/u-K5');
define('AUTH_SALT',        '??5;}{MWQO6OF-wQ+,n|C2jVWsLY&)3&!-:Ek6sq4]eg;eIPw|XOiibS3^^&?Lo^');
define('SECURE_AUTH_SALT', 'WA? K|mBf`>;gueL_W[7D+v^BbB4NU_DO-T~-w|n]tH}59=_>)&upbTZV3>12M_e');
define('LOGGED_IN_SALT',   '$6RjNjb:Yj`1*jR0DkM2Hs,:N9#F|N92pJIQk0v@ax.$Dl^I:S%<FcSbEb:m^1>Y');
define('NONCE_SALT',       'q&[KX/b*;/Qf~Nn`p;Z_41MmIt]UVL%$`RxRSg!`(#uN^KC=O[cup=*O$%Y/*m)]');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
