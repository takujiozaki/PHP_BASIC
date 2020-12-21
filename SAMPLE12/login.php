<?php

/**
 * login.php
 * ユーザー情報を入力するプログラム
 * login_result.phpにPOSTする
 */

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
<form action="login_result.php" method="post">
<div>
<label for="userid">ユーザーID</label>
<input type="text" name="userid" id="userid">
</div>
<div>
<label for="password">パスワード</label>
<input type="password" name="password" id="password">
</div>
<button type="submit">ログイン</button>
</form> 
</body>
</html>