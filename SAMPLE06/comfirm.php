<?php
//セッションスタート
session_start();

//request処理による分岐
if($_SERVER['REQUEST_METHOD'] == "GET"){
  header("location: ./signup.php");
  exit;
}
//requestパラメーターの受け取り
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$age = htmlspecialchars($_POST['age'], ENT_QUOTES);
$gender = $_POST['gender'];

//sessionに登録
$_SESSION['name'] = $name;
$_SESSION['age'] = $age;
$_SESSION['gender'] = $gender;

//validation
if(!is_numeric($age)){
  $_SESSION['error'] = "年齢は数字である必要があります";
  header('Location: signup.php', true, 307);
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

    <title>PHP練習ファイル</title>
  </head>
  <body>
    <div class="container">
        <h1>確認</h1>
        <p>リクエストを跨ぐデータの受け渡し</p>
        <ul class="list-group">
            <li class="list-group-item">名前：<?=$name?></li>
            <li class="list-group-item">年齢：<?=$age?></li>
            <li class="list-group-item">性別：<?=$gender?></li>
        </ul>
        <form action="done.php" method="post">
          <button type="submit" class="btn btn-primary mt-2">登録</button>
        </form>
        <form action="signup.php" method="post">
          <button type="submit" class="btn btn-info mt-2">戻る</button>
        </form>
        
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