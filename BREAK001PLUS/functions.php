<?php
//入力値のチェック
function check_numeric(string $price, string $persons, string $mode):void{
    $error_msg = array();
    //入力値が数字でなければ
    if(!is_numeric($price) || !is_numeric($persons)){
      $error_msg[] = "数字が入力されていません";
    }
    //人数が数字でゼロであれば
    if(is_numeric($persons) && $persons <= 0){
      $error_msg[] = "人数にゼロが入力されています";
    }
    if($mode == ""){//計算モードが未選択
      $error_msg[] = "計算単位を選択してください。";
    }
    //エラーがあった時
    if(count($error_msg)>0){
      $_SESSION['error_msg'] = $error_msg;
      $_SESSION['price'] = $price;
      $_SESSION['persons'] = $persons;
      $_SESSION['mode'] = $mode;
      //入力画面に戻す
      header('location:./input.php');
      exit();
    }
}

//セッションの消去
function clear_session(array $session_elements):void{
  foreach($session_elements as $session_element){
    unset($_SESSION[$session_element]);
  }
}
