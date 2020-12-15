# PHP基礎 10
## 継承
### 継承の基本
- コードの重複を省く
- 親子関係を伝える

```
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

```
### オーバーライド
小クラスで親クラスのメソッドを上書きする
```
class Villan {
    
    protected $name;

    public function __construct(string $name){
        $this->name = $name;
    }
    
    public function say_hello():string{//挨拶
        return '俺様は'.$this->name.'様だ！';
    }

    public function say_dialogue():string{
        return 'この世を支配してやる！';
    }

    public function say_goodbye():string{//捨て台詞
        return '今日はこの辺で勘弁してやる！';
    }

}

class BacteriaMan extends Villan{

    public function say_dialogue():string{
        return '来たなお邪魔虫！';
    }

    public function say_goodbye():string{
        return 'ハッヒッフッヘッホ〜';
    }
}

$baikinman = new BacteriaMan('バイキンマン');
echo $baikinman->say_hello(),PHP_EOL;
echo $baikinman->say_dialogue(),PHP_EOL;
echo $baikinman->say_goodbye(),PHP_EOL;
```

### parent
親クラスを指し示す
```
//親クラスのコンストラクタを実行
parent::__construct();
```

## トレイト
メソッドをクラスに追加する

## 抽象クラス

## インターフェイス

## マジックメソッド

## 名前空間

## 例外処理
