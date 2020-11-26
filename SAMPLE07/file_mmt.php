<?php
//status.txt
//このファイルが空もしくは無かったら閉店中
//何か書いてあれば営業中

//ファイル
$file = "status.txt";

//GETリクエストを受け取る
if(isset($_GET['mode'])){
    $mode = $_GET['mode'];
    if($mode == "open"){
        write_file($file);
    }else if($mode == "close"){
        clear_file($file);
    }
}

$status = read_file($file);

$shop_status = "閉店中";
if($status!=""){
    $shop_status = "営業中";
}

function read_file($file){
    $fp = fopen($file,'r');
    $status = fread($fp,8192);
    fclose($fp);
    return $status;
}

function clear_file($file){
    $fp = fopen($file,'w');
    fwrite($fp,"");
    fclose($fp);
}

function write_file($file){
    $fp = fopen($file,'w');
    fwrite($fp,"1");
    fclose($fp);
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPカフェ</title>
</head>
<body>
    <h1><?=$shop_status?></h1>
    <ul>
        <li><a href="<?php echo $_SERVER['SCRIPT_NAME']."?mode=open" ?>">開店中にする</a></li>
        <li><a href="<?php echo $_SERVER['SCRIPT_NAME']."?mode=close"?>">準備中にする</a></li>
    </ul>
</body>
</html>
