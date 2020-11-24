<?php
/**
 * status.txtが空ファイルまたは存在しない場合は「閉店中」と表示
 * 値が書き込まれていれば「営業中」と表示する
 */ 

require_once('functions.php');

//設定ファイル
$file = 'status.txt';

if(isset($_GET['status'])){
    if($_GET['status'] == 'open'){//開店
        write_file($file);
    }else{//閉店
        clear_file($file);
    }
}

$flg = read_file($file);

//条件分岐
if($flg){
    $status =  "営業中";
}else{
    $status = "閉店中";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>創造社cafe</title>
</head>
<body>
    <p><?=$status?></p>
    <ul>
        <li><a href="<?php echo $_SERVER['SCRIPT_NAME']?>?status=open">開店する</a></li>
        <li><a href="<?php echo $_SERVER['SCRIPT_NAME']?>?status=close">閉店する</a></li>
    </ul>
</body>
</html>


