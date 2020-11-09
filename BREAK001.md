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
### 割り切れなかった時の対応

### 数字でなかった時の対応

## 制作例
https://github.com/takujiozaki/PHP_BASIC/tree/main/BREAK001