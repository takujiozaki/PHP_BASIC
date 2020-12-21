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

    // var_dump($userid);
    // var_dump($password);
    // exit();

    //validation
    $err_msgs = array();
    if(empty($userid)){
        array_push($err_msgs,'ユーザー名が空欄です');
    }
    if(empty($password)){
        array_push($err_msgs,'パスワードが空欄です');
    }
    if(count($err_msgs)){
        @session_start();
        $_SESSION['err_msgs'] = $err_msgs;
        header('location:login.php');
        exit();
    }

}else{
    die('このページにはGETでアクセス出来ません。');
    /*
    * die()関数は
    * echo 'このページにはGETでアクセス出来ません。';
    * exit();
    *　と同意。
    */
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