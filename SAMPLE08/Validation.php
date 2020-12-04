<?php
class Validation
{

    private $title;
    private $author;
    private $publisher;
    private $price;
    private $error_array;

    public function __construct($title, $author, $publisher,$price){
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->price = $price;
        $this->error_array = array();
    }

    public function validate(){
        //内容をチェックする
        if(mb_strlen($this->title) == 0){
            array_push($this->error_array, "タイトルが空欄です");
        }
        if(mb_strlen($this->title) > 10){
            array_push($this->error_array, "タイトルは10文字以内です");
        }
        return $this->error_array;
    }
}