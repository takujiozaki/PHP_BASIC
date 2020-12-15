<?php

//ジャンケンクラス
class Player
{
    protected $hand;
    private $rps_array;

    public function __construct(){
        //ジャンケン配列を初期化する
        $this->rps_array = array('グー','チョキ','パー');
    }

    public function showHand():string{
        return $this->rps_array[$this->hand];
    }

    public function getHand():int
    {
        return $this->hand;
    }
}

class MyPlayer extends Player
{
    public function __construct(int $hand){
        parent::__construct();
        $this->hand = $hand;
    }
}

class PCPlayer extends Player
{
    public function __construct(){
        parent::__construct();
        $this->hand = rand(0,2);
    }
}

class Judgement
{
    private $person;
    private $pc;

    public function __construct(Player $person, Player $pc)
    {
        $this->person = $person;
        $this->pc = $pc;
    }

    public function judge():string
    {
        $result_array = array('引き分け','負け','勝ち');
        $result = ($this->person->getHand() - $this->pc->getHand() + 3) % 3;
        return $result_array[$result];
    }
}

/**
 * 動作テスト
 */
// $player = new MyPlayer(1);
// echo $player->showHand(),PHP_EOL;

// $pc = new PCPlayer();
// echo $pc->showHand(),PHP_EOL;

// $judge = new Judgement($player, $pc);
// echo $judge->judge(),PHP_EOL;