<?php
require_once('libs/Smarty.class.php');
require_once('functions.php');
require_once('DBUsers.php');
session_start();
//GET:User登録フォームを表示
if($_SERVER['REQUEST_METHOD'] === "GET"){
    $smarty = new Smarty();
    $smarty->assign('title','会員登録');
    if(isset($_SESSION['user_info'])){//確認画面
        $user_info = get_userinfo();
        //本来なら取得に失敗した時の制御が必要
        $smarty->assign('user_info',$user_info);
        $template_name = 'comfirm.tpl';
    }else{//登録画面
        //エラーを取得
        $err_msgs = get_error_msgs();
        $smarty->assign('err_msgs',$err_msgs);
        $template_name = 'form.tpl';
    }
    //表示
    $smarty->display($template_name);
    

//POST:USER登録
}else{
    if(!isset($_SESSION['user_info'])){//登録時のポスト処理
        //USERIDとPASSWORDを取得
        $userid = htmlspecialchars($_POST['userid']);
        $password = htmlspecialchars($_POST['password']);
        $password_confirm = htmlspecialchars($_POST['password_confirm']);
        $username = htmlspecialchars($_POST['username']);

        //validation
        $err_msgs = array();
        $dbusers = new DBUsers();
        if(empty($userid)){
            array_push($err_msgs,'ユーザーIDが空欄です');
        }elseif($dbusers->is_exist_user($userid)){//UserIDの重複チェック
            array_push($err_msgs,'そのユーザーIDは登録済みです');
        }
        if(empty($password)){
            array_push($err_msgs,'パスワードが空欄です');
        }
        
        if($password !== $password_confirm){
            array_push($err_msgs,'パスワードとパスワード(確認)が一致しません');
        }
        if(empty($username)){
            array_push($err_msgs,'お名前が空欄です');
        }
        
        if(count($err_msgs)){
            $_SESSION['err_msgs'] = $err_msgs;
            send_redirect($_SERVER['REQUEST_URI']);
        }
        
        //確認用セッションに登録
        $user_info = array(
            'userid'=>$userid,
            'username'=>$username,
            'password'=>password_hash($password, PASSWORD_DEFAULT),
        );
        $_SESSION['user_info'] = $user_info;
        send_redirect($_SERVER['REQUEST_URI']);
    }else{//確認時のポスト処理
        $dbusers = new DBUsers();
        $user_info = get_userinfo();
        //本来なら取得に失敗した時の制御が必要
        $result = $dbusers->store($user_info);
        unset($_SESSION['user_info']);//使用済みセッションを削除
        //結果を簡易表示
        if($result){
            die('登録成功');
        }else{
            die('登録失敗');
        }
    }
}
