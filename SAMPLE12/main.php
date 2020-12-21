<?php
require_once('functions.php');
//ログインセッションの確認
@session_start();
if(!verify_login()){
    header('location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN画面</title>
</head>
<body>
<h1>MAIN</h1>
    <p>メイン画面です。</p>
    <ul>
        <li><a href="logout.php">ログアウト</a></li>
    </ul>
</body>
</html>