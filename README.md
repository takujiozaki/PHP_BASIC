# PHP_BASIC
情報セキュリティ1年授業資料

## PHP マニュアル
https://www.php.net/manual/ja/index.php

## 動作環境の理解
Web基礎資料  
https://github.com/takujiozaki/PHP_BASIC/blob/main/PDF/Web%E5%9F%BA%E7%A4%8E.pdf

- モジュール版とCGI
- PHP_CLI

https://officetkj.sakura.ne.jp/info_architect/index.html

## 基本構文
### PHPブロック  
```
<?php
    //PHPのコードを記述
    //スラッシュ2つで行末までコメントアウト(1行コメント)を意味します。
    /* 複数行コメント(ブロックコメント) */
    //PHPブロックで終了するファイルは終了タグを省略可能。
?>
```

### セミコロン
PHPの命令文は文末にセミコロン(;)が必要。  
書き忘れるとエラーになる。  

### PHP_EOL
改行コードを表す定数  

## 出力
echo文とvar_dump()関数

## 変数とデータ型
### 変数名の規則  
半角英数アンダースコア記号が使用可能  
先頭に数字を使用出来ない  
$記号で変数を識別する  
### データ型
|  型  |  例  |
| ---- | ---- |
|  整数型  |  1, 0, -1  |
|  浮動小数点型  |  1.2, 0.5   |
|  文字列型  |  "Hello", "大川", "100", "true"  |
|  論理型  |  true 又は false  |
|  配列型  |  --  |
|  オブジェクト型  |  --  |
|  null  |  定数null, 何も代入されていない, unset()後  |

*配列、オブジェクト型は後日解説
### データ型の確認
gettype()関数を使用  
https://www.php.net/manual/ja/function.gettype.php

### 可変変数
```
<?php
$var = 1;
$var_name = 'var';
echo $$var_name, PHP_EOL;
```
### 変数のスコープ
- グローバルスコープ
- ローカルスコープ

### スーパーグローバル変数
|  変数名  |  意味  |
| ---- | ---- |
|  $_SERVER  |  スクリプトのヘッダ、パスなどの情報を持つ連想配列  |
|  $_GET  |  現在のスクリプトに渡されたURLパラメータの連想配列  |
|  $_POST  |  現在のスクリプトにHTTP POSTされた変数の連想配列  |
|  $_FILES  |  現在のスクリプトにアップロードされたファイルの情報を持つ連想配列  |
|  $_COOKIE  |  HTTPクッキーから渡された変数の連想配列  |
|  $_SESSION  |  セッション変数の連想配列  |

### 定数
```
<?php
//define
define('SCHOOL1','創造社デザイン専門学校');
echo SCHOOL1, PHP_EOL;

//const
const SCHOOL2 = '創造社デザイン専門学校';
echo SCHOOL2, PHP_EOL;
```
## 基本練習
SAMPLE01ディレクトリ  
POSTとGETを理解する  
https://github.com/takujiozaki/PHP_BASIC/tree/main/SAMPLE01

## ERROR
### エラーの種類
- E_NOTICE
- E_WARNING
- E_DEPRECATED
### エラー表示
```
<?php
//ブラウザ画面にエラーを表示
ini_set('display_errors', "On");
```

## 四則演算
|  演算子  |  例  |
| ---- | ---- |
|  加算  |  a + b  |
|  減算  |  a - b  |
|  積  |  a * b  |
|  商  |  a / b  |
|  剰余  |  a % b  |

## 比較演算

## 条件分岐

## 繰り返し

## 配列

## 日付と時間

## 組込関数

## ユーザー定義関数

## セッション管理

## クラスとオブジェクト

## 構造体としてのオブジェクト

## データーべース連携(PDO)

## アプリケーション制作演習(1)

## JavaScript/Ajax連携

## アプリケーション制作演習(2)
