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

