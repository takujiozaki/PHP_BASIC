<?php
require_once('DBusers.php');

$dbuser = new DBUsers();

$userid = 'xx0011111sss';
$password = password_hash('aaaabbbb', PASSWORD_DEFAULT);
$username = 'TAKAHASHI';

$user = array('userid'=>$userid, 'password'=>$password, 'user_name'=>$username);

var_dump($dbuser->store($user));