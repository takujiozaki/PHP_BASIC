<?php
session_start();

//formに埋め込む変数を準備
$name = "";
$age = "";
$gender = "";

//getでアクセス時は新規登録
if($_SERVER['REQUEST_METHOD'] == "GET"){
  //セッション変数を消去
  unset($_SESSION['name']);
  unset($_SESSION['age']);
  unset($_SESSION['gender']);
} else {
  //復元
  if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
  }

  if(isset($_SESSION['age'])){
    $age = $_SESSION['age'];
  }

  if(isset($_SESSION['gender'])){
    $gender = $_SESSION['gender'];
  }
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
        <h1>登録</h1>
        <p>リクエストを跨ぐデータの受け渡し</p>
        <form action="comfirm.php" method="post">
            <div>
                <label for="name">氏名</label>
                <input type="text" name="name" id="name" value="<?=$name?>">
            </div>
            <div>
                <label for="age">年齢</label>
                <input type="text" name="age" id="age" value="<?=$age?>">
            </div>
            <div>
                <input type="radio" name="gender" id="male" value="男性" <?php if($gender == "男性") echo "checked" ?>>
                <label for="male">男性</label>
                <input type="radio" name="gender" id="female" value="女性" <?php if($gender == "女性") echo "checked" ?>>
                <label for="female">女性</label>
            </div>
            <button type="submit" class="btn btn-primary">確認</button>
        </form>
        <p><a href="signup.php">最初から入力する</a></p>
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