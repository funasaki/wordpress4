<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'funadb');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'awsuser');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'mypassword');

/** MySQL のホスト名 */
define('DB_HOST', 'wordpressdb1.cm4rmjkwcnlv.ap-northeast-1.rds.amazonaws.com');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '[eohTNj&Hx0Qzc{)fr8LPE>|~!.C}*rC=&O2lnkxHcxm9x#qk$Ur)fi;o1KCI%to');
define('SECURE_AUTH_KEY',  'Z@6/H]7[N1q8a}O|^8>-~dj3ffqT}huM8r+H:F+|#{(TbKq}HWN7:}eZ3T9/F5*^');
define('LOGGED_IN_KEY',    '2aFoo06R>(}TyO 6{$,R`S%jW[JJ{xR&QNF,B_QU+|o)U/lZ-rN0>uu3yuM+sX(`');
define('NONCE_KEY',        'K8&}!lJ,y}eeoxW-<;C*D+n9mmmhk5v=,fj[Uu:XPu9[N6l])V3:vD[G<5}.S+ba');
define('AUTH_SALT',        'KOdT9I^s>p]90j5P;=Zv-#zXkhd4$?gVkyKiekE<adE.h`L#+;q+aExCBSX3^V6`');
define('SECURE_AUTH_SALT', '`uoEQP`B7u=]F^@;-O%Pw|qg6|(|=|q39C*w`%OT~`N]bE45BG7hz$N)LRq:[cEt');
define('LOGGED_IN_SALT',   'q3*$EKd%0_U|!=,p#R-5i[uJr|+hcRz%!<hN5=(IZJ SUTGYi[v}j]fQqh9-,nS/');
define('NONCE_SALT',       '?Mo8BYnI^A%g.Gv-K7.b(VIt30<&:YsY!G}?;k`/i|7,c|?sv3xehPM)Zogsmd|z');

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
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
