<?php

//セッションを破棄
@session_start();
if(isset($_SESSION['auth_user'])){
    unset($_SESSION['auth_user']);
    header('location:login.php');
    exit();
}