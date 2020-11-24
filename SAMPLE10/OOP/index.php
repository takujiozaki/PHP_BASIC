<?php
/**
 * FileManagerクラスに、設定ファイルを隠すことが出来る。
 * FileManagerクラスに、各処理をまとめることが出来る。
 * ファイルの取り扱いをFileManagerクラスに任せることが出来る。
 */ 

require_once('FileManager.php');

//instance
$fm = new FileManager();

if(isset($_GET['status'])){
    if($_GET['status'] == 'open'){//開店
        $fm->open();
    }else{//閉店
        $fm->close();
    }
}

//条件分岐
if($fm->getStatus()){//true
    $status =  "営業中";
}else{//false
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


