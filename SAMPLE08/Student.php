<?php
//クラス定義
class Student{
    public $number;
    public $name;
    public $livein;
    private $gender;//0は女性、1は男性

    //コンストラクタ
    public function __construct(int $number, string $name, string $livein, int $gender){
        $this->number = $number;
        $this->name = $name;
        $this->livein = $livein;
        if($gender > 1){
            $this->gender = 2;
        }else{
            $this->gender = $gender;
        }
    }

    public function getGender():string{
        $gender_array = array("男性","女性");
        return $gender_array[$this->gender];
    }
}