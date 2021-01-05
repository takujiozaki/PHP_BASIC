<?php


require_once("libs/Smarty.class.php");
$smarty = new Smarty();
// $smarty->template_dir = "templates/";
// $smarty->compile_dir = "templates_c/";

// 変数名"name"に"World"を格納する
$smarty->assign("title", "Smarty Test");

// テンプレートを表示する
$smarty->display("index.tpl");














