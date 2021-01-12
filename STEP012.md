# PHP基礎 12
## バリデーションライブラリ
バリデーションライブラリValitronを使用

### Composerをインストール
https://getcomposer.org/

### valitron インストール
```
composer require vlucas/valitron
```
### 使い方
|  RULES  |  意味  |  例  |
| ---- | ---- | ---- | 
|   required  |  必須項目  |  $v->rule('required', 'password');  |
|   requiredWith  |  指定項目が存在する場合、必須項目  |  $v->rule('requiredWith', 'password', 'username');  |
|   requiredWithout  |  指定項目が存在しない場合、必須項目  | $v->rule('requiredWithout', 'username', 'first_name’);  |
|   equals  |  指定した項目が一致  |  $v->rule('equals', 'password', 'password_confirm');  |
|   different  |  指定した項目が一致しない  |  $v->rule('different', 'username', 'password');  |
|   accepted  |  有効かどうか(checkboxやradio等)  |  $v->rule('accepted', 'hobbies');  |
|   numeric  |  数値かどうか  |  $v->rule('numeric', 'age');  |
|   integer  |  整数かどうか  |  $v->rule('integer', 'age');  |
|   boolean  |  真偽値かどうか  |  $v->rule('integer', 'result');  |
|   array  |  配列かどうか  |  $v->rule('array', 'users_info');  |
|   length  |  指定文字数  |  $v->rule('length', userid', 10);  |
|   lengthBetween  |  文字数範囲  |  $v->rule('lengthBetween', 'password', 8, 16);  |
|   lengthMin  |  文字数最小  |  $v->rule('lengthMin', 'password', 8);  |
|   lengthMax  |  文字数最大  |  $v->rule('lengthMax', 'password', 16);  |
|   min  |  最小値  |  $v->rule('min', 'age', 18);  |
|   max  |  最大値  |  $v->rule('max', 'age', 60);  |
|   in  |  値が含まれるか  |  $v->rule('in', 'majar', ['SEO','Programming','Network']);  |
|   notIn  |  値が含まれない  |  $v->rule('notIn', 'majar', ['SEO','Programming','Network']);  |
|   email  |  メールアドレス書式  |  $v->rule('email', 'email');  |
|   url  |  URL書式  |  $v->rule('url', 'url');  |
|   urlActive  |  URLが有効か  |  $v->rule('urlActive', 'url');  |
|   alpha  |  アルファベットのみ  |  $v->rule('alpha', 'userid');  |
|   alphaNum  |  アルファベットと数字のみ  |  $v->rule('alphaNum', 'userid');  |
|   regex  |  正規表現  |    |
|   date  |  日付  |  $v->rule('date', 'birthday');  |
|   dateFormat  |  有効な日付  |  $v->rule('dateFormat', 'birthday');  |
|   dateBefore  |  指定日以前  |  $v->rule('dateBefore', 'created', '2020-12-31');  |
|   dateAfter  |  指定日以降  |  $v->rule('dateAfter', 'updated', '2021-01-01');  |
https://github.com/vlucas/valitron

### USE
```
require 'vendor/autoload.php';
$v = new Valitron\Validator($data);
$v->labels([
    'userid' => 'ユーザーID',
    'password' => 'パスワード',
    'password_confirm' => 'パスワード確認用',
]);
$v->rule('required', ['userid', 'password', 'password_confirm'])->message('{field}は必須項目です'); // 必須項目
$v->rule('equals', 'password', 'password_confirm')->message('パスワードがパスワード確認と一致しません');
$v->rule('alphaNum', ['userid','password'])->message('{field}はアルファベットか数字で構成されている必要があります');
if($v->validate()) { // 検証
    echo "Yay! We're all good!";
} else {
    // Errors
    print_r($v->errors()); // エラー
}
exit();
```
