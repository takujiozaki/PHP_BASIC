<?php
/**
 * login_result.php
 * ログイン処理をするプログラム
 * login.phpにPOSTされた情報を元にログイン処理を行い結果を表示する
 */
require_once('env.php');

if($_SERVER['REQUEST_METHOD'] === "POST"){
    //USERIDとPASSWORDを取得
    $userid = htmlspecialchars($_POST['userid']);
    $password = htmlspecialchars($_POST['password']);

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
    //認証処理
    $result = '失敗';
    if($userid === $auth_user && $password === $auth_password){
        $result = '成功';
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
<p>ログインが<?=$result?>しました。</p>
<p><a href="login.php">ログイン画面に戻る</a></p>
</body>
</html>