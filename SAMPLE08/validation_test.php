<?php
require_once('./Validation.php');

$title = "";
$author = "";
$publisher = "";
$price = 100;

$validate = new Validation($title, $author, $publisher, $price);
$error_array = $validate->validate();

var_dump($error_array);