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
define('DB_NAME', 'audiger_site');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'audiger_usuario');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '<$ucesso$ince84>');

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
define('AUTH_KEY',         's%==c}83/F4Tx1eynp?HXn[|+kiTIAC]pL^0eu2??RY*MlX*fXqK1_%7$AA~aW?9');
define('SECURE_AUTH_KEY',  '@fWb%!AgCm^N9j!A38TfGeK<* 0irB3p[FDcW{gW=Ui4{-VSTyu2&]}CF`L#P^s3');
define('LOGGED_IN_KEY',    '_vmvsKI#^(]E,>o| U^:F73 %&Uy)Wg[bJpj^7Lv13~QveaJxtJMXtE^%B+-2^cg');
define('NONCE_KEY',        ';~njbLLTl*yB~}=`PY3Kh*pEQ<fojc]&c G4@q~)`qjV,!Nk-Yivs7Sk9C|;kK9h');
define('AUTH_SALT',        '/1i%oZqk8^7!ni#&-#VprP k8$}.pftZ+#2Mj@m%OPT~Jd+#@g*xD8<3/jDh+Z=h');
define('SECURE_AUTH_SALT', 'T#B2*i2m|uf3e8ax:76s~BZ_MXNdPO*,o5WEssagImI.-&`mBAS*tyBt/yQ4)u{/');
define('LOGGED_IN_SALT',   'KB&e[SXMF-?{/zP:Uv 4H4zXOSD78:(np!d)I>3BW*{nS1%Pf?Y%3 fF`1-@hG|a');
define('NONCE_SALT',       'SbP j:;&XNkj{GAxdL[:Lz&Kc9-UsQ8LFjF.Qv/#Rn-2:4[%.k>fU*2He<2odGZ)');

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
