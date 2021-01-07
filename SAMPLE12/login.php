<?php

/**
 * login.php
 * ユーザー情報を入力するプログラム
 * login_result.phpにPOSTする
 */

require_once('libs/Smarty.class.php');
require_once('functions.php');
require_once('DBUsers.php');

if($_SERVER['REQUEST_METHOD'] === "GET"){
    //最初にログアウト
    remove_auth_session();
    //エラーを取得
    $err_msgs = get_error_msgs();

    //page title
    $title = "LOGIN";

    //View
    $smarty = new Smarty();
    $smarty->assign(compact('title','err_msgs'));
    $smarty->display('login.tpl');

    //POST
}else{
    
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
        send_redirect($_SERVER['REQUEST_URI']);
    }
    //認証処理
    $dbusers = new DBUsers();
    $auth_password = $dbusers->get_password_by_userid($userid);
    
    //認証成功
    if(password_verify($password,$auth_password)){
        set_auth_session($userid);
        send_redirect('login_result.php');
        //die('ログイン成功');
    //認証失敗
    }else{
        $err_msgs = array('ログインに失敗しまいた');
        @session_start();
        $_SESSION['err_msgs'] = $err_msgs;
        send_redirect($_SERVER['REQUEST_URI']);
    }
}