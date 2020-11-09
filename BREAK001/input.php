<?php
session_start();
require_once('functions.php');
$price = '';
$persons = '';
$error_msg = array();

if(isset($_SESSION['error_msg']) && count($_SESSION['error_msg'])>0){
  $error_msg = $_SESSION['error_msg'];
  $price = $_SESSION['price'];
  $persons = $_SESSION['persons'];
  //消去
  clear_session(['error_msg','price','persons']);
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

    <title>割り勘計算機</title>
  </head>
  <body>
    <div class="container">
    <h1>割り勘計算機</h1>
    <?php if(count($error_msg)>0):?>
    <div class="alert alert-danger">
      <ul>
        <?php foreach($error_msg as $error):?>
        <li><?=$error?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php endif;?>
    <form action="result.php" method="post">
      <div>
        <label for="price">合計金額</label>
        <input type="text" name="price" id="price" value="<?=$price?>">
      </div>
      <div>
        <label for="persons">人数</label>
        <input type="text" name="persons" id="persons" value="<?=$persons?>">
      </div>
      <button type="submit" class="btn btn-primary">計算</button>
    </form>
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