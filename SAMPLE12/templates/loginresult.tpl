{extends file="bootstrap.tpl"}
{block name=title}
    {{$title}}
{/block}
{block name=body}
    <div class="container">
    <h1>LOGIN</h1>
    <p>{{$username}}さん、ログインが成功しました。</p>
    <p><a href="main.php">メイン画面に進む</a></p>
    <p><a href="login.php">ログイン画面に戻る</a></p>
    </div>
{/block}