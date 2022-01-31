<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

define('WP_MEMORY_LIMIT', '128M');

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'd0140km8db1');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'd0140km8');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'nyuvsdio-agu09678');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g&p6|*gE@/gEXT.CYcDdUHL_bVN&GhD_}oCMy(LY;Qb%;yr/-d!eG/z+ HD:f^sz');
define('SECURE_AUTH_KEY',  'dh%idm21P3Xo-g>=Fk@ ?]6+Aq[rZZ!+$QVOfrE?3^E7x>}wC!:h^D|;QzoqY@{[');
define('LOGGED_IN_KEY',    'IVZ94D|_7w?EL)=*(P{|kk>2^zr1#R<yiUs<X70(k<1, N?XJzr~5y9h?3m4;w4E');
define('NONCE_KEY',        't=G!j,rJ3_CIRcYpOi?)F*?o_@^Nmlc]_zn4C5*_-=xB-aXFItMuKz?^Mqc4Vqb8');
define('AUTH_SALT',        'Rfwq-}|[DjuE5 d,J<S8>ooi;d{CrB+3o5Dkhu|7A,.}[I q/]v+c~:z#6MEi#v^');
define('SECURE_AUTH_SALT', 'L{3Wvr{kl~Sbnh(6Gaa9y&aw[sE#q+0L.)BoTPq#I453.BtF^0eP4H-&f!-G#Elj');
define('LOGGED_IN_SALT',   ', DX5:)<pY<G-J_6Z/92g_1N:6@_a_<UBZliC@FT$ {Dwy*nZs_>~_57&Y[<a)ZU');
define('NONCE_SALT',       '1^*blL_P7VAFfZfP|uC?Y#lX^e0K0UnA[;J|#NR(/}G*9H+<{c%e%B_c;7glT+D>');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
