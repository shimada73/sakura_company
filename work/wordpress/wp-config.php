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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp-01' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'pass' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k(C_yv.Yw.|iNC(jO{0~{->lKWHV(5B:^pUS!@.^ZT5B3!3K9LyZzrM]KTc.~*0L' );
define( 'SECURE_AUTH_KEY',  'BbSOPi_vEC0f|N^75m)_/Z>U73g`/]:)M82VFm1nuSjh{VMA_)d3DFw{4dC3-wM8' );
define( 'LOGGED_IN_KEY',    ' j0sR|F#aHlZBacKa;+T/+LirY9(1nQC[Q7Au&l[_IJ[1>5p{c7_IBF6R?&eV8D>' );
define( 'NONCE_KEY',        'ue*,(9oa$;u]Xo8(HDVv;a[KCbFFL%vPQNXU~W`O|!az3O`iOx)`9YI|c+YY4~_j' );
define( 'AUTH_SALT',        '57PX,__FS]%DRx/f^DHg}%,Y4lv>m`:`R5I=D.*&Qi9B9(+$d3qQP0,|ZhLIA=*2' );
define( 'SECURE_AUTH_SALT', 'u9JdAU9fdhErrLDVkkh:HSqo~<GI{5h36A5F$&+`pf|JqS)N)71@P&]a$d->z1Cm' );
define( 'LOGGED_IN_SALT',   'E-q)V_-K<0>Nh[L%{+:)nBXx<Jof0Cnnx;OZKOK<]-IYEF$t2i#uIh>Tq`Y+7|o ' );
define( 'NONCE_SALT',       'G*fH ?p]QP^@szrmS&>&qh554^[qcgLuw36%l(&;tFq#Ab@~<.gIUnCW=}?bsqf(' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
