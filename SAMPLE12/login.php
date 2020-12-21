<?php

/**
 * login.php
 * ユーザー情報を入力するプログラム
 * login_result.phpにPOSTする
 */

require_once('functions.php');

if($_SERVER['REQUEST_METHOD'] === "GET"){
    //最初にログアウト
    remove_auth_session();
    //エラーを取得
    $err_msgs = get_error_msgs();
    
}else{
    die('このページにはPOSTでアクセス出来ません。');
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

<?php if(isset($err_msgs) && count($err_msgs)):?>
<ul>
<?php foreach($err_msgs as $err_msg):?>
<li><?=$err_msg?></li>
<?php endforeach ?>
</ul>
<?php endif ?>
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