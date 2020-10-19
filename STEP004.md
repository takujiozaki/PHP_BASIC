# PHP基礎 04
## 連想配列
配列の要素指定(添字)に整数ではなく文字列を使用します。  
要素に順番ではなく、名前(key)をつけることが出来ます。  
```
<?php
$scores = array(
    "math" => 80,
    "english" => 65,
    "japanese"   => 75,
    "history"  => 66,
    "science"  => 69,
);
var_dump($scores);
//全件表示

foreach($scores as $key => $value){
    echo 'key ', $key , ' value ', $value;
}
```

### 多次元配列
```
$scores = [
    ["english" => 80, "japanese" => 55, "history" => 88],
    ["english" => 84, "japanese" => 64, "history" => 54],
    ["english" => 77, "japanese" => 80, "history" => 77],
    ["english" => 65, "japanese" => 65, "history" => 90],
    ["english" => 50, "japanese" => 77, "history" => 62],
];

// 英語の合計点と平均点を求めてみると？
````

## 関数
https://www.php.net/manual/ja/funcref.php

### 組込関数
PHPが標準で準備している関数(一部)
#### 文字列(string)
https://www.php.net/manual/ja/book.strings.php
#### 配列(array)
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
#### 日付(date/time)
https://www.php.net/manual/ja/function.date.php  
https://www.php.net/manual/ja/refs.calendar.php
#### 数学(math)
https://www.php.net/manual/ja/book.math.php

### ユーザー定義関数
開発者が自分で設定した関数  
https://www.php.net/manual/ja/functions.user-defined.php

### 引数と型宣言
https://www.php.net/manual/ja/functions.arguments.php
