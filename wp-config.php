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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_artvison' );

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
define( 'AUTH_KEY',         'o} 1q/`{#|D1d&8D`PG$t6{KCpC)8Dm{thcZSkAq_>D(|Y@%6ZGBg${aRV}:1{MQ' );
define( 'SECURE_AUTH_KEY',  '4q$^u-TDkDGzeJk:`x6,Ra?q5!PqQ&=PyK#e+B$OI5O.WQkeN&0IWG6#7t^<j3$n' );
define( 'LOGGED_IN_KEY',    '>bNq~COlSzmi$]DE8a*(jsZeJ{y_:u7W=)#|PXR9~goQZ5N=9JLINL~X]N;PERMV' );
define( 'NONCE_KEY',        'pRqOrEE]l?73xH^io*W.FTROGJBO.%vbq^$*XskFM:GQawjKW@=L{8f_+V,ksfEi' );
define( 'AUTH_SALT',        '.(sl15 }/4YXjQ(KpHvfW-pj.LjRdC>MWD8/v3)|%Z5IQ@]Kd<p%p-8p9u!_f81Y' );
define( 'SECURE_AUTH_SALT', 'Z|yFzx~Ggh|?vbbb&S26i.p*JThb^KKbKU>adKG|w8S<%%S8#Y ?`9tsBdOY`H6&' );
define( 'LOGGED_IN_SALT',   '9rDCJ)hezn[9{.X;>Is#m{+w`b5Ca*^KQSaBherP;nJ+0dAfjvv>JY<Fv{)oW,hg' );
define( 'NONCE_SALT',       'q$xXeA5k(7:zDB}v?[94Z=aV[s#6/I,@1WcOUv?e #mh-?#8h%ls|xj9jqF&pX@t' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
