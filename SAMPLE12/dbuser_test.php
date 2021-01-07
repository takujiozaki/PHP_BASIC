<?php

require_once('DBUsers.php');
require_once('functions.php');
$userid = get_login_user();
$dbuser = new DBUsers();
$username = $dbuser->get_username_by_id($userid);
var_dump($username);
exit();