<?php
require_once('functions.php');
//セッションを破棄
@session_start();
remove_auth_session();
header('location:login.php');
exit();