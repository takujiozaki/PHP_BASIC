# PHP基礎 03

## 繰り返し
### while構文
https://www.php.net/manual/ja/control-structures.while.php
```
//while
$i = 0;
while($i < 10){
  echo $i,PHP_EOL;
  $i++;
}

//do while
$i = 0;
do{
  echo $i,PHP_EOL;
  $i++;
}while($i < 10);
```

### for構文
```
/*
for(カウンター初期化; 条件; カウンターの増減){
    //実行される処理
}
*/

//1から10まで表示
for($i = 1; $i <= 10; $i++){
    echo $i, PHP_EOL;
}

```
https://www.php.net/manual/ja/control-structures.for.php

## 配列
https://www.php.net/manual/ja/language.types.array.php

```
//配列の定義(array関数)
$car_functory = array("TOYOTA","NISSAN","HONDA","SUBARU");
$car_functory[4] = "MITSUBISHI";
var_dump($car_functory);
echo $car_functory[1],PHP_EOL;

//配列の定義(直接定義)
$mortercycle_factory = ["HONDA","SUZUKI","YAMAHA","KAWASAKI",];
var_dump($mortercycle_factory);
echo $mortercycle_factory[3],PHP_EOL;

//配列の定義(個別定義)
$fruits[] = "apple";
$fruits[] = "banana";
$fruits[] = "grape";
$fruits[] = "orange";
var_dump($fruits);

//全要素出力(for)
for($i = 0;$i < count($car_functory); $i++){
    echo $car_functory[$i], PHP_EOL;
}
```
### foreach構文
https://www.php.net/manual/ja/control-structures.foreach.php
```
//全要素出力(foreach)
foreach($mortercycle_factory as $factory){
    echo $factory, PHP_EOL;
}
```

## 練習問題
以下の出力をするコードを書きなさい。
```
**********
*********
********
*******
******
*****
****
***
**
*
```

### 解答例
```
for($i = 10; $i > 0; $i--){
    for($j = $i; $j > 0; $j--){
        echo '*';
    }
    echo PHP_EOL;
}
```
