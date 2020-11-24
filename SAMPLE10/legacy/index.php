<?php
/**
 * status.txtが空ファイルまたは存在しない場合は「閉店中」と表示
 * 値が書き込まれていれば「営業中」と表示する
 */

//設定ファイル
$file = 'status.txt';

 //ファイルを開く
$fp = fopen($file,'a+');

//ファイルを読む
$flg = fread($fp, 8192);

//ファイルを閉じる
fclose($fp);

$status = "";

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
        <li><a href="./write_file.php">開店する</a></li>
        <li><a href="./clear_file.php">閉店する</a></li>
    </ul>
</body>
</html>


