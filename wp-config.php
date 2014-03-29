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
define('DB_NAME', 'rotadeofertas');

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
define('AUTH_KEY',         'n`3_iT:OK@2*Ae[Ru1]w|%N-#rZf}{Hi=k6Ps7M5#^oi#!r+~;[kMvXNR%nG0J(l');
define('SECURE_AUTH_KEY',  '2uvE569~@!YZRV^SzYjKtn4)P:Dtj!M4vL&(#Q(%ZE5CM irs-^;;w&cXJtzn=XG');
define('LOGGED_IN_KEY',    '.>l}^),we*>+lJGn8f[7hf&VC$V!Qx8s5m{+]rY8VV*c_!5-et_g{o-6Y~dE(2w,');
define('NONCE_KEY',        'xe61TdL;zw96cival<VeyY>>O}4Sg:W[P,rUG$JCzWK`^_qJZl[t#pPm)6D?.IUJ');
define('AUTH_SALT',        'u{mP-/vtN+8BuK34@u-Lz9H|g5{2Boy&UI:9Q/4VR0L~<RcpC-[#:brs-0e^X_4|');
define('SECURE_AUTH_SALT', 'lAWU#HEsn1UNzb|:{A^3wv<F+m^C+lZFz<V7Xey[@Yr|w|Q};+}yf4TsZ)qWRw?&');
define('LOGGED_IN_SALT',   'v=:#1BCjOMR:Y6?Ij[j.!?J3A;9/_/mmT+6{`p%NK9T$ah:I)%KT?f-$]YK4I-.t');
define('NONCE_SALT',       'eK<++4g{}C,-~p-X=UhPa1:%g[5WxXOm5}2=fzPGY -uPq)mUih#*ONTcJ/kOCwZ');

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
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
