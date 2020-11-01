# PHP基礎 07
## クラスとオブジェクト
### 連想配列を使用
下記の表を作成したい。  
データをひとまとめで扱う場合、連想配列を使用する  
|  番号  |  氏名  |  住所  |  性別  |
| ---- | ---- | ---- | ---- |
|   1  |  阿部　健一郎  |  大阪市  |  男性  |
|   2  |  石田　瞳  |  吹田市  |  女性  |
|   3  |  加藤　千賀子  |  奈良市  |  女性  |
|   4  |  島田　興蔵  |  高槻市  |  男性  |
```
<?php
$student_array = [
    ['num' => 1, 'name' => '阿部　健一郎', 'livein'=>'大阪市','gender'=>'男性'],
    ['num' => 2, 'name' => '石田　瞳', 'livein'=>'吹田市','gender'=>'女性'],
    ['num' => 3, 'name' => '加藤　千賀子', 'livein'=>'奈良市','gender'=>'女性'],
    ['num' => 4, 'name' => '島田　興蔵', 'livein'=>'高槻市','gender'=>'男性'],
];
```
*問題点：連想配列は構造が保証されていない。  
'livein'がない列なども自由に作れてしまう。  
https://github.com/takujiozaki/PHP_BASIC/tree/main/SAMPLE07   
### 構造体としてのオブジェクト
```
//オブジェクト化する
class Student{
    public $num;
    public $name;
    public $livein;
    public $gender;
}
```
### プロパティ
PHPではオブジェクト内で定義された変数をプロパティと呼ぶ。  
```
//インスタンス化する
$s1 = new Student();
```
クラスはオブジェクトの金型、クラスから生み出されたものをインスタンスと呼ぶ。  
### アクセス修飾子
|  アクセス修飾子  |  意味  |
| ---- | ---- |
|  public  |  クラスの外部から参照、呼び出しが可能  |
|  private  |  所属するクラスの内部からのみ参照、呼び出しが可能  |
|  protected  |  所属するクラスの内部、または所属クラスを継承したクラスの内側からのみ参照、呼び出しが可能  |

https://github.com/takujiozaki/PHP_BASIC/tree/main/SAMPLE08   

### メソッドとコンストラクタ
#### メソッド
クラスに属する関数をメソッドと呼ぶ  

### コンストラクタ
インスタンス化される時(new)一度だけ呼び出されるメソッド。  
インスタンスの初期設定に利用される。  

### $this
オブジェクト自身への参照には$thisが使用される

### アロー演算子
phpではオブジェクトのプロパティ、メソッドの呼び出しにアロー演算子を用いる  
```
$s1 = new Student();
echo $s1->name;
```

### オブジェクトと動的型付け
PHPなどの動的型付け言語では宣言していないプロパティも利用ができる  
```
$s1 = new Student();
$s1->belong = "情報セキュリティ";//オブジェクト内に$belongという変数が作られる
```
## STATIC
staticをつけて宣言されたプロパティやメソッドは静的プロパティ、静的メソッドとよばれ、インスタンスではなくオブジェクトに属します。
共にインスタンスされていなくても呼び出すことが可能です。


## オブジェクトの活用例
### DateTimeオブジェクト
```
<?php
//現在の日時を取得
$current = new DateTime();
$current_datetime = $current->format('Y-m-d H:i:s');

//任意の日付を取得
$assignment = new DateTime();
$assignment->setDate(2020,4,1);
$assignment->setTime(13,30,0);
$assignment_datetime = $assignment->format('Y-m-d H:i:s');
```
### インスタンスとセッション
セッション変数にインスタンスを格納する時はserialize()関数を用いる  
セッション変数からインスタンスを取得する時はunserialize()関数を用いる  
https://github.com/takujiozaki/PHP_BASIC/tree/main/SAMPLE09   

## 継承
### オーバーライド
### parent

## 抽象クラス
## インターフェイス
## マジックメソッド
## 名前空間
## 例外処理