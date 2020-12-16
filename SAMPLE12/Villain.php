<?php

class Villan {
    
    protected $name;

    public function __construct(string $name){
        $this->name = $name;
    }
    
    public function say_hello():string{//セリフA
        return '俺様は'.$this->name.'だ！';
    }

    public function say_dialogue():string{//セリフB
        return 'この世を支配してやる！';
    }

    public function say_goodbye():string{//セリフC
        return '今日はこの辺で勘弁してやる！';
    }

}

class BacteriaMan extends Villan{

    public function say_dialogue():string{//セリフBをオーバーライド
        return '来たなお邪魔虫！';
    }

    public function say_goodbye():string{//セリフCをオーバーライド
        return 'ハッヒッフッヘッホ〜';
    }
}

$heel = new Villan("悪の使者");
echo $heel->say_hello(),PHP_EOL;
echo $heel->say_dialogue(),PHP_EOL;
echo $heel->say_goodbye(),PHP_EOL;

$baikinman = new BacteriaMan('バイキンマン');
echo $baikinman->say_hello(),PHP_EOL;
echo $baikinman->say_dialogue(),PHP_EOL;
echo $baikinman->say_goodbye(),PHP_EOL;