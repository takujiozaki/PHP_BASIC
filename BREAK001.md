# 復習
## 割り勘計算機を作成
### 手順1 画面を作成 

画面1：入力画面を作成(input.php)  
    入力項目：合計金額  
    入力項目：人数    
    送信ボタン    

画面2：結果画面(result.php)   
    表示項目：合計金額  
    表示項目：人数  
    表示項目：一人当たり額  
    戻るボタンまたはリンク  
    
### 手順2 画面遷移
画面1から画面2へ  
画面2から画面1へ  
画面遷移を完成させる

### 手順３ 入力値の取得
合計金額、人数を取得
連想配列$_POSTから値を取得  

例
```
合計：<input type="text" name="price">
人数：<input type="text" name="person">
```
の場合
```
$price = $_POST['price'];//合計
$person = $_POST['person'];//人数
```
の様に取得します。

入力値にはhtmlspecialchars関数を適用。    
スクリプトインサーション、XSS対策  
下記の例を入力してみてください。
```
<script>alert('hello');</script>
<script>window.location.href = 'https://www.yahoo.co.jp';</script>
```

### 計算結果の表示
一人当たりの金額は 合計 / 人数　です。  
```
$result = $price / $person;
```
計算して画面に埋め込んでみましょう。 
数値によっては少数が出る場合がありますが後で対処します。
```
一人当たりの金額:<?=$result?>
```
number_format()関数  
数字を桁区切りで表示する

### 割り切れなかった時の対応
割り切れたかどうかを確認する  
割り切れなかった場合  
- 一人当たりの金額：小数点以下を切り上げる
- あまり：(一人当たりの金額 * 人数) - 合計金額

割り切れた場合
- そのまま表示

### 数字でなかった時の対応
```
//result.php
//入力値の検査(数字かどうか)
if(!is_numeric($price) || !is_numeric($persons)){
  $_SESSION['error_flg'] = true;
  $_SESSION['error'] = "数字が入力されていません";
  $_SESSION['price'] = $price;
  $_SESSION['persons'] = $persons;
  //入力画面に戻す
  header('location:./input.php');
  exit();
}
```
```
//input.php
if(isset($_SESSION['error_flg']) && $_SESSION['error_flg']){
  $error_msg = $_SESSION['error'];
  $price = $_SESSION['price'];
  $persons = $_SESSION['persons'];
  //消去
  unset($_SESSION['error_flg']);
  unset($_SESSION['error']);
  unset($_SESSION['price']);
  unset($_SESSION['persons']);
}
```
### 人数がゼロの対応
ゼロの割り算ではエラーがでるため人数は1以上の値が必要
```
if($persons <= 0){
  $_SESSION['error_flg'] = true;
  $_SESSION['error'] = "人数がゼロまたは負の数です。";
  $_SESSION['price'] = $price;
  $_SESSION['persons'] = $persons;
  //入力画面に戻す
  header('location:./input.php');
  exit();
}
```

### 処理を関数にまとめる
error_flgを省略し、error_msgの件数で判断する(result.php)
```
function check_numeric(string $price, string $persons):void{
  $error_msg = array();
  //入力値が数字でなければ
  if(!is_numeric($price) || !is_numeric($persons)){
    $error_msg[] = "数字が入力されていません";
  }
  //人数が数字でゼロであれば
  if(is_numeric($persons) && $persons <= 0){
    $error_msg[] = "人数にゼロが入力されています";
  }
  //エラーがあった時
  if(count($error_msg)>0){
    $_SESSION['error_msg'] = $error_msg;
    $_SESSION['price'] = $price;
    $_SESSION['persons'] = $persons;
    //入力画面に戻す
    header('location:./input.php');
    exit();
  }
}
```
input.phpにて複数回繰り返されるセッション編集除去を関数化する
```
clear_session(['error_msg','price','persons']);

function clear_session(array $session_elements):void{
  foreach($session_elements as $session_element){
    unset($_SESSION[$session_element]);
  }
}
```

## 制作例
https://github.com/takujiozaki/PHP_BASIC/tree/main/BREAK001