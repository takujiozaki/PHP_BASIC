# 復習
## 星占いプログラムを作成
### 手順1 画面を作成 

画面1：入力画面を作成(input.php)  
    入力項目：星座を選択  
    入力項目：いつの占い(カレンダー型)
    送信ボタン    

画面2：結果画面(result.php)   
    表示項目：星座  
    表示項目：日にち  
    表示項目：占い内容  
    戻るボタンまたはリンク  
    
### 手順2 画面遷移
画面1から画面2へ  
画面2から画面1へ  
画面遷移を完成させる

### ダミーデータの作成
```
<?php
$sign_array = array(
    ['sign' => "牡羊座", 'content' => '', 'item' => '', 'color' => ''],
    ['sign' => "牡牛座", 'content' => '', 'item' => '', 'color' => ''],
    ['sign' => "双子座", 'content' => '', 'item' => '', 'color' => ''],
    ['sign' => "蟹座", 'content' => '', 'item' => '', 'color' => ''],
    ['sign' => "獅子座", 'content' => '', 'item' => '', 'color' => ''],
    ['sign' => "乙女座", 'content' => '', 'item' => '', 'color' => ''],
    ['sign' => "天秤座", 'content' => '', 'item' => '', 'color' => ''],
    ['sign' => "蠍座", 'content' => '', 'item' => '', 'color' => ''],
    ['sign' => "射手座", 'content' => '', 'item' => '', 'color' => ''],
    ['sign' => "山羊座", 'content' => '', 'item' => '', 'color' => ''],
    ['sign' => "水瓶座", 'content' => '', 'item' => '', 'color' => ''],
    ['sign' => "魚座", 'content' => '', 'item' => '', 'color' => ''],
);
```
### 手順３ 入力値の取得

### APIから星占いデータを取得


### 参考
http://jugemkey.jp/api/waf/api_free.php