# PHP基礎 11
## MVC
MVC（Model View Controller モデル・ビュー・コントローラ）は、ユーザーインタフェース(GUI)をもつアプリケーションソフトウェアを実装するためのデザインパターン。

### Model
アプリケーションが扱う処理を担当(計算や登録)

### View
アプリケーションの表示を担当(HTML出力)

### Controller
ユーザーからのリクエストを受け付け、モデルやビューへの指示を担当

## PHPとMVC
一般的なPHPプログラムはビュー、コントローラー、モデルを一つのファイルに記述することが多い。  
MVC化するためには各工程を切り離す必要がある。　　
Viewを切り離すためにテンプレートエンジンを使用する。

## テンプレートエンジンの使用(Smarty)

### Smartyのダウンロード
https://www.smarty.net/download  

### インストール
圧縮ファイルを解凍し、libsディレクトリをアプリケーション内に配置
libsディレクトリを配置した階層に
- cacheディレクトリ
- templatesディレクトリ
- templates_cディレクトリ
- configsディレクトリ
を配置
cache、templates_cディレクトリは書き込み権限が必要。

### 動作確認
```
<?php


require_once("libs/Smarty.class.php");
$smarty = new Smarty();
$smarty->testInstall();
```

### 基本パターン
```
├ index.php  
├ cache  
├ libs  
├ templates  
│  └base.tpl  
│  └index.tpl  
├ templates_c  
├ configs  
```
### index.php
```index.php
<?php

require_once("libs/Smarty.class.php");
$smarty = new Smarty();

/*同じ階層にあれば以下は不要*/
$smarty->template_dir = "templates/";
$smarty->compile_dir = "templates_c/";

// 変数名"title"に"Smarty Test"を格納する
$smarty->assign("title", "Smarty Test");

// テンプレートを表示する
$smarty->display("index.tpl");

```
### base.tpl
```base.tpl
<!--抜粋-->
<title>{block name=title}{/block}</title>
  </head>
  <body>
    {block name=body}
    
    {/block}
  </body>
  <!--抜粋-->
```

### index.tpl
```index.tpl
{extends file="base.tpl"}
{block name=title}{{$title}}{/block}
{block name=body}
    <div class="container">
        <h1>TEMPLATE ENGINE</h1>
        <h1>SMARTY</h2>
    </div>
{/block}
```