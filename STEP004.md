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
```
## 関数
https://www.php.net/manual/ja/funcref.php

### 組込関数
PHPが標準で準備している関数(一部)
#### 文字列(string)
https://www.php.net/manual/ja/book.strings.php
#### 配列(array)
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
