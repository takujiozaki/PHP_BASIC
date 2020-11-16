<?php
//星座を格納する配列
//運勢を適当に修正する
$sign_array = array(
    ['sign' => "牡羊座", 'content' => 'とにかくラッキー', 'item' => '財布', 'color' => 'オレンジ'],
    ['sign' => "牡牛座", 'content' => '嫌なことあるかも？', 'item' => '自転車', 'color' => 'グレー'],
    ['sign' => "双子座", 'content' => '最低', 'item' => 'カレーライス', 'color' => 'イエロー'],
    ['sign' => "蟹座", 'content' => 'めちゃくちゃ最低', 'item' => 'イタリアンレストラン', 'color' => 'スカイブルー'],
    ['sign' => "獅子座", 'content' => '良くも悪くもない', 'item' => '時計', 'color' => 'レッド'],
    ['sign' => "乙女座", 'content' => 'ただただ最悪', 'item' => '帽子', 'color' => 'ピンク'],
    ['sign' => "天秤座", 'content' => '最高！', 'item' => 'ペットボトル', 'color' => 'ホワイト'],
    ['sign' => "蠍座", 'content' => '超最高！', 'item' => '小説', 'color' => 'ベージュ'],
    ['sign' => "射手座", 'content' => '怪我に注意', 'item' => 'DVD', 'color' => 'カーキ'],
    ['sign' => "山羊座", 'content' => '車に注意', 'item' => '布マスク', 'color' => 'ブラック'],
    ['sign' => "水瓶座", 'content' => '食べ過ぎに注意', 'item' => 'アウター', 'color' => 'ブルー'],
    ['sign' => "魚座", 'content' => '金運アップ', 'item' => 'コーヒー', 'color' => 'ライトグリーン'],
);
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

    <title>12星座占い応用編</title>
  </head>
  <body>
    <div class="container">
        <h1>12星座占い応用編</h1>
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
            <ul>
                <li>選択した星座：</li>
                <li>今日の運勢：</li>
                <li>ラッキーカラー：</li>
                <li>ラッキーアイテム：</li>
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