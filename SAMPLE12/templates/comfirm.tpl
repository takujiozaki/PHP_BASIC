{extends file="bootstrap.tpl"}
{block name=title}
    {{$title}}
{/block}
{block name=body}
    <div class="container">
    <article class="col-6 mx-auto">
    <h1>ユーザー登録</h1>
        <form action="" method="post">
        <table class="table">
        <tr>
        <th>USER ID</th>
        <td>{{$user_info['userid']}}</td>
        </tr>
        <tr>
        <th>USER 名</th>
        <td>{{$user_info['username']}}</td>
        </tr>
        <tr>
        <th>PASSWORD</th>
        <td>非表示</td>
        </tr>
        </table>
        <button type="submit" class="btn btn-primary">確認</button>
        </form> 
        </article>
    </div>
{/block}