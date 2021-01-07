# PHP基礎 05

## 関数
https://www.php.net/manual/ja/funcref.php

### 組込関数
PHPが標準で準備している関数(一部)
#### 文字列関数(string)
```
//タグを無効にする
var_dump(htmlspecialchars("<script>alert('hello');</script>", ENT_QUOTES));
```

https://www.php.net/manual/ja/book.strings.php  

#### 配列関数(array)
```
$bugs = array("カブトムシ", "クワガタムシ", "カミキリムシ");

//配列の末尾に要素を追加
array_push($bugs, "テントウムシ");
//複数も追加可能
array_push($bugs, "コガネムシ", "チョウチョ");
//戻り値は追加後の要素の数

//末尾を削除
array_pop($bugs);
//戻り値は削除した要素

//配列の先頭に要素を加える
array_unshift($bugs, "ダンゴムシ");
//戻り値は追加後の要素の数

//配列の先頭から要素を一つ取り出す
array_shift($bugs);
//戻り値は取り出した値

//配列の指定した位置から要素を取り出す
array_splice($bugs, 1, 2);
//戻り値は取り出した要素
```
https://www.php.net/manual/ja/book.array.php  
#### 日付関数(date/time)
```
//Date関数　今日の日付を取得する
$current_day = date("Y-m-d H:i:s");
var_dump($current_day);

//DateTime関数
$now = new DateTime();
var_dump($now->format('Y-m-d H:i:s'));
//詳細はオブジェクト学習時に説明
```
|  日付フォーマット  |  意味  |
| ---- | ---- |
|  Y  |  西暦の年(4桁)  |
|  y  |  西暦の年(2桁)  |
|  l  |  閏年なら1、以外は0  |
|  m  |  月(2桁)  |
|  n  |  先頭にゼロを含まない月  |
|  M  |  月の英語(略語)  |
|  F  |  月の英語 |
|  d  |  日(2桁)  |
|  j  |  先頭にゼロを含まない日  |
|  t  |  その月の日数  |
|  z  |  その年の経過日数 |
|  D  |  英語の曜日(略語)  |
|  l  |  英語の曜日  |
|  w  |  曜日（日曜が0）  |
|  W  |  その年の経過週（月曜開始） |
|  H  |  時間(24時間)  |
|  G  |  先頭にゼロを含まない時間(24時間)  |
|  h  |  時間(12時間)  |
|  g  |  先頭にゼロを含まない時間(12時間) |
|  a  |  am or pm  |
|  A  |  AM or PM |
|  i  |  分  |
|  s  |  秒 |
https://www.php.net/manual/ja/function.date.php  
https://www.php.net/manual/ja/datetime.formats.date.php  
https://www.php.net/manual/ja/refs.calendar.php  

#### 数学関数(math)
```
//0から9までの乱数を生成
$r = rand(0,9);
var_dump($r);

//四捨五入
var_dump(round(3.2));
var_dump(round(4.5));
//小数点第二位で四捨五入
var_dump(round(5.145, 2));
//100の位で四捨五入
var_dump(round(355, -2));

//切り上げ
var_dump(ceil(3.14));
//切り捨て
var_dump(floor(9.9999));

//指数(累乗)
var_dump(pow(2,3));
var_dump(pow(2,8));
```
https://www.php.net/manual/ja/book.math.php


### ユーザー定義関数
開発者が自分で設定した関数  
https://www.php.net/manual/ja/functions.user-defined.php

### 引数と型宣言
https://www.php.net/manual/ja/functions.arguments.php

### 関数とスコープ