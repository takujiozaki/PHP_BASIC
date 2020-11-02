<?php

session_start();
//セッションに連想配列がなかったら
if(!isset($_SESSION['boards'])){
  //表示用の連想配列を作成(サンプル)
  $boards = [
    //['subject'=>"ネットワーク", 'body'=>"DNSの設定"],
    //['subject'=>"プログラム", 'body'=>"PHP セッションの復讐"],
  ];
  //セッションに登録
  $_SESSION['boards'] = $boards;
}

//sessionから情報を取得
$boards = $_SESSION['boards'];

//POST処理

if($_SERVER['REQUEST_METHOD'] == "POST"){
  //データのリセット
  if(isset($_POST['pass']) && $_POST['pass'] == '1234'){
      unset($_SESSION['boards']);
  }
  //データの送信
  if(isset($_POST['subject']) || isset($_POST['body'])){
    $count = count($boards) + 1;
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    $new_board = array(
      'num' => $count,
      'subject' => $subject,
      'body' => $body,
    );
    array_push($boards, $new_board);
    //セッションに登録
    $_SESSION['boards'] = $boards;
  }
  //リダイレクト、リクエストをGETに切り替える
  header('location:'.$_SERVER['SCRIPT_NAME']);
  exit();
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

    <title>連想配列とセッションで作るメモ</title>
  </head>
  <body>
    <div class="container">
    <h1>連想配列とセッションで作るメモ</h1>
    <p>セッションを使っているので自分専用です！</p>
    <form action="#" method="post">
        <label for="input_subject">科目</label>
        <input type="text" name="subject" id="input_subject">
        <label for="input_body">内容</label>
        <input type="text" name="body" id="input_body">
        <button type="submit" class="btn btn-primary">投稿</button>
    </form>
    <table class="table mt-2">
        <tr>
            <th>#</th>
            <th>科目</th>
            <th>内容</th>
        </tr>
        <?php foreach($boards as $board):?>
        <tr>
            <td><?=$board['num']?></td>
            <td><?=$board['subject']?></td>
            <td><?=$board['body']?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <div>
      <form action="#" method="post">
        <input type="password" name="pass">
        <button type="submit" class="btn btn-danger">データをリセット</button>
      </form>
    </div>
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
