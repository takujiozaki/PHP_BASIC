<?php
/**
 * login_result.php
 * ログイン処理をするプログラム
 * login.phpにPOSTされた情報を元にログイン処理を行い結果を表示する
 */
if($_SERVER['REQUEST_METHOD'] === "POST"){
    //USERIDとPASSWORDを取得
    $userid = htmlspecialchars($_POST['userid']);
    $password = htmlspecialchars($_POST['password']);

    var_dump($userid);
    var_dump($password);
    exit();

}else{
    die('このページにはゲットでアクセス出来ません。');
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>LOGIN</h1>
<p>ログインが成功（失敗）しました。</p>
<p><a href="login.php">ログイン画面に戻る</a></p>
</body>
</html>