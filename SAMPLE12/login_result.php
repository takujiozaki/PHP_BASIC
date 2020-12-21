<?php
/**
 * login_result.php
 * ログイン処理をするプログラム
 * login.phpにPOSTされた情報を元にログイン処理を行い結果を表示する
 */
require_once('env.php');
require_once('functions.php');

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
        send_redirect('login.php');
    }
    //認証処理

    //MySQLからuser情報を取り出す
    // ドライバ呼び出しを使用して MySQL データベースに接続します
    $dsn = 'mysql:dbname=phpsample;host=127.0.0.1';
    $dbuser = 'php';
    $dbpassword = 'Secret01%';

    $auth_password = '';
    try {
        $dbh = new PDO($dsn, $dbuser, $dbpassword);
        $sql = 'SELECT password FROM users WHERE userid = :userid';
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':userid',$userid,PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch();
        if(!empty($result)){
            $auth_password = $result['password'];
        }else{
            die("USERが存在しません");
        }
    } catch (PDOException $e) {
        echo "接続失敗: " . $e->getMessage() . "\n";
    }
    
    if(password_verify($password,$auth_password)){
        set_auth_session($userid);
    }else{
        $err_msgs = array('ログインに失敗しまいた');
        @session_start();
        $_SESSION['err_msgs'] = $err_msgs;
        send_redirect('login.php');
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
<p>ログインが成功しました。</p>
<p><a href="main.php">メイン画面に進む</a></p>
<p><a href="login.php">ログイン画面に戻る</a></p>
</body>
</html>