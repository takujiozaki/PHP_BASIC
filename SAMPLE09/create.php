<?php
session_start();//セッション開始
require_once('Message.php');//クラスファイルを読み込む

$name = "上田次郎";
$date = new DateTime();
$body = "次回ミーティングで新規事業についてのプレゼンをお願いします";

$message = new Message($name, $date, $body);//インスタンス化

/**
 * sessionに格納
 * serialize()が必要
 */
$_SESSION['message'] = serialize($message);

header('location: ./view.php');
exit();