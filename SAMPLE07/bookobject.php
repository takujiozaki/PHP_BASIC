<?php

class Book
{
    public $title;
    public $author;
    public $publisher;
    public $price;
}

$b1 = new Book();
$b1->title = "AWS認定アソシエイト3資格対策";
$b1->author = '平山毅 他';
$b1->publisher = 'リックテレコム';
$b1->price = 2400;

$b2 = new Book();
$b2->title = "PHPフレームワーク Laravel入門 第2版";
$b2->author = '掌田津耶乃';
$b2->publisher = '秀和システム';
$b2->price = 3300;

$books = array($b1, $b2);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BOOK</h1>
    <ul>
        <?php foreach($books as $book):?>
        <li><?=$book->title?>(<?=$book->author?>) <?=$book->price?>円：<?=$book->publisher?></li>
        <?php endforeach?>
    </ul>
</body>
</html>