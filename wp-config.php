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
define('DB_NAME', 'rota');

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
define('AUTH_KEY',         '<uJ}kD,+:&,QM*}&@SN@by)]y+=.@4nh- @Aaz^?,pSs>S=gl d11t/I055<Cni?');
define('SECURE_AUTH_KEY',  '>SCT<n{yq7fet@n7]|JB}Br$ObX^&aPKYj/c+H?7cWca=Zrtny8z~]v[w;BY6Clk');
define('LOGGED_IN_KEY',    '.Q^cwXUw$|=pdc $2JYUxUoD?P3:djz8T^]p+`s8iGCtRqA(p_#CB -$`Oe.Q,2}');
define('NONCE_KEY',        'h.oD-*GWNzeA6kd_I%[:K77EJe=T[[Ob&/+J@PCEa,NqEA!c(`}vJsy:|b 3YyC|');
define('AUTH_SALT',        '-)v%ZqY&hkAb*OR@+)rCiq=C{2K3 !a%ccG%5,ne>ZrN[FrUe4,5Ec6(+PJk]Sby');
define('SECURE_AUTH_SALT', 'u0>aaRcKK&:(|mglo0@OIFW4VqqwRSX#8/R7M}K 9)Bf}=lb3ZlO897A9c[G27k@');
define('LOGGED_IN_SALT',   'rnO |}g}YKkpPebb4:jYPAbJFe*]1M+awid+&?l4{?M(mmh|=*L9M~t}bn.!9Kv ');
define('NONCE_SALT',       '7W+|W`1X%b@@w@~[HE9xzU<f13Ym^Jwh/BBZ0;=NYS86UKl,Q1ALd;q;5(oM0,D%');

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
