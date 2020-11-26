<?php

require_once('FileObject.php');

$file = new FileObject();

//GETリクエストを受け取る
if(isset($_GET['mode'])){
    $mode = $_GET['mode'];
    if($mode == "open"){
        $file->write();//開店
    }else if($mode == "close"){
        $file->clear();//開店
    }
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
    <h1><?=$file->read()?></h1>
    <ul>
        <li><a href="<?php echo $_SERVER['SCRIPT_NAME']."?mode=open" ?>">開店中にする</a></li>
        <li><a href="<?php echo $_SERVER['SCRIPT_NAME']."?mode=close"?>">準備中にする</a></li>
    </ul>
</body>
</html>
