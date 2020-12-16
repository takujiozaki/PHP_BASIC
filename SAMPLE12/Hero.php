<?PHP

//親Heroクラス
class Hero{
    protected $name; //名前
    protected $vehicle; //マシン
    protected $critical_hit; //必殺技

    public function  __construct(string $name, string $vehicle, string $critical_hit){
        $this->name = $name;
        $this->vehicle = $vehicle;
        $this->critical_hit = $critical_hit;
    }

    public function get_name():string{
        return $this->name;
    }

    public function get_vehicle():string{
        return $this->vehicle;
    }

    public function get_criticalHit():string{
        return $this->critical_hit;
    }
}

//継承したライダークラス
class MaskedRider extends Hero{

    private $dialogue;//決め台詞

    public function set_dialogue(string $dialogue):void{
        $this->dialogue = $dialogue;
    }

    public function get_dialogue():string{
        return $this->dialogue;
    }

}

class SentaiHero extends MaskedRider{

}

//インスタンス化
$hero = new Hero('アンパンマン','アンパンマン号','アンパンチ');
$riderW = new MaskedRider('仮面ライダーW','ハードボイルダー','マキシマムドライブ');
$riderW->set_dialogue('お前の罪を数えろ！');

//アンパンマン
echo '名前:'.$hero->get_name(),PHP_EOL;
echo '乗り物:'.$hero->get_vehicle(),PHP_EOL;
echo '必殺技:'.$hero->get_criticalHit(),PHP_EOL;

//ライダー
echo '名前:'.$riderW->get_name(),PHP_EOL;
echo '乗り物:'.$riderW->get_vehicle(),PHP_EOL;
echo '決め台詞:'.$riderW->get_dialogue(),PHP_EOL;
echo '必殺技:'.$riderW->get_criticalHit(),PHP_EOL;

//戦隊ヒーロー
$kirameijar = new SentaiHero('魔進戦隊キラメイジャー','キラメイ魔進','シャイニーブレイカー');
$kirameijar->set_dialogue('ひらめきスパークリング！');

echo '名前:'.$kirameijar->get_name(),PHP_EOL;
echo '乗り物:'.$kirameijar->get_vehicle(),PHP_EOL;
echo '決め台詞:'.$kirameijar->get_dialogue(),PHP_EOL;
echo '必殺技:'.$kirameijar->get_criticalHit(),PHP_EOL;