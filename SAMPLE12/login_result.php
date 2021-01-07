<?php
/**
 * login_result.php
 * ログイン処理結果を表示するプログラム
 * 
 */
require_once('libs/Smarty.class.php');
require_once('DBUsers.php');
require_once('functions.php');

if($_SERVER['REQUEST_METHOD'] === "GET"){
    //username取得
    $userid = get_login_user();
    $dbuser = new DBUsers();
    $username = $dbuser->get_username_by_id($userid);

    $smarty = new Smarty();
    $title = "ログインに成功しました";
    $smarty->assign(compact('title','username'));
    $smarty->display('loginresult.tpl');
}else{
    die('このページにはPOSTでアクセス出来ません。');
}
