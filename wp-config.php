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
define('DB_NAME', 'mh-fichas-online');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'mhfichasonline');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'G3X-yUF-h2w-Jcw');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql873.umbler.com');

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
define('AUTH_KEY',         'Jm0qFpXM?<@qOWJ^L]cx-x/^/AUT7eEq*5|[YpgEk W_=!f_DL}|:Cd7_z?L xFC');
define('SECURE_AUTH_KEY',  'S|52}!ua<;fSd4M&^6k(^)Y3H^[]M}wz:>vLZ+_~{gx{60z_v,H4Fum`+#<G%FvP');
define('LOGGED_IN_KEY',    ']5tPl</etvFfBvrH1j^23~ztw:l1q;hv{q;nLj-g=~^TJLj=fxxP}&/b|A-Kcm/y');
define('NONCE_KEY',        'ycdfO$*T,oZJsFBGP%<}k L=wm@EhNYoMue2J9Gc.Xr`I4av)o>X_9y)YESsfM1;');
define('AUTH_SALT',        '3?Rf,iM{73A WODz>6Vlrk?(XKv2v^Og2S6:?q|%bCqD8{L5PEkXGWkm1=wO#WVv');
define('SECURE_AUTH_SALT', 'Eq$:9 {7;lVF)nVIo5e#L!h&qs$8!bCOBP4:qd}.~uf!hIKbA9MSUgJ{38c&Z}pS');
define('LOGGED_IN_SALT',   'EpQa]reAbj:T@!$ky5]p7g@jfk{_5gA_`/o/o|:g9pA|J1]|X7ZV5?zzS4;D->c#');
define('NONCE_SALT',       'YRYcsqj2 HTI~v4&^R/~e<q_SD-NK!}VU}Ok7sr_Ei!,T5;<&a&t rVyB0si|OK=');

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
