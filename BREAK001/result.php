<?php
/**
 * 割り勘計算機結果
 */
session_start();
require_once('functions.php');
//POST以外でアクセスされたら
if($_SERVER['REQUEST_METHOD'] != "POST"){
  //入力画面に戻す
  header('location:./input.php');
  exit();
}

//入力値の取得
$price = htmlspecialchars($_POST['price']);//合計
$persons = htmlspecialchars($_POST['persons']);//人数
$result = 0;//一人当たりの金額
$amari = 0;//余り

//入力値の検査
check_numeric($price,$persons);

//割り切れたかどうか
if($price % $persons != 0){//割り切れない
  $result = ceil($price / $persons);
  $amari = $result * $persons - $price;
}else{
  $result = $price / $persons;
}
?>
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>割り勘計算機(結果)</title>
  </head>
  <body>
    <div class="container">
    <h1>割り勘計算機(結果)</h1>
    <ul class="list-group">
      <li class="list-group-item">合計金額：<?=number_format($price)?>円</li>
      <li class="list-group-item">人数：<?=number_format($persons)?>人</li>
      <li class="list-group-item">一人当たり：<?=number_format($result)?>円</li>
      <?php if($amari > 0):?>
      <li class="list-group-item">余り：<?=number_format($amari)?>円</li>
      <?php endif; ?>
    </ul>
    <a href="input.php" class="btn btn-info">戻る</a>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
