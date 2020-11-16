<?php
session_start();

//日時の取得
$current_day = date('Y/m/d');

if(empty($_SESSION['horoscope_data'][$current_day])){
    //星占いデータのURL
    $horoscope_url = 'http://api.jugemkey.jp/api/horoscope/free/'.$current_day;

    //ファイルを取得
    $horoscope_json = file_get_contents($horoscope_url);

    //文字コードの変換
    $horoscope_json = mb_convert_encoding($horoscope_json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');

    //連想配列に変換
    $horoscope_array = json_decode($horoscope_json,true);

    //星座を格納する配列
    //運勢を適当に修正する
    $sign_array = $horoscope_array['horoscope'][$current_day];
    //セッションにデータを保管
    $_SESSION['horoscope_data'][$current_day] = $sign_array;
}else{
    $sign_array = $_SESSION['horoscope_data'][$current_day];
}

/**
 * 選択された星座を格納する変数
 * 空欄で初期化
*/
$selected_sign ='';
$content='';
$item = '';
$color = '';

//POSTでアクセスされたら
if($_SERVER['REQUEST_METHOD']=="POST"){
    $selected_sign = $_POST['sign'];
    foreach($sign_array  as $array){
        //in_array関数で配列内に要素が含まれているかを検査
        if(in_array($selected_sign,$array)){
            $content = $array['content'];
            $item = $array['item'];
            $color = $array['color'];
            break;
        }
    }
}

?>
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>12星座占いAPI編</title>
  </head>
  <body>
    <div class="container">
        <h1>12星座占いAPI編</h1>
        <form action="" method="post">
            <label for="">星座を選択</label>
            <select name="sign" id="">
                <?php foreach($sign_array as $array):?>
                <option value="<?=$array['sign']?>"><?=$array['sign']?></option>
                <?php endforeach ?>
            </select>
            <button type="submit" class="btn btn-primary">占う</button>
        </form>
        <div class="alert alert-primary">
        <h2><?=$current_day?></h2>
            <ul>
                <li>選択した星座：<?=$selected_sign?></li>
                <li>今日の運勢：<?=$content?></li>
                <li>ラッキーカラー：<?=$item?></li>
                <li>ラッキーアイテム：<?=$color?></li>
            </ul>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>