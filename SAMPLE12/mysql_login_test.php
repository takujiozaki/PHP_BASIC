<?php

require_once('DBusers.php');

$dbuser = new DBUsers();
$password = $dbuser->get_password_by_userid('UID0000003');

var_dump($password);
exit();