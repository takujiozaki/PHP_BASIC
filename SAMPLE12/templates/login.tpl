{extends file="bootstrap.tpl"}
{block name=title}
    {{$title}}
{/block}
{block name=body}
    <div class="container">
    <article class="col-6 mx-auto">
    <h1>LOGIN</h1>
        {if $err_msgs}
        <ul>
        {foreach from=$err_msgs item=err_msg}
            <li>{{$err_msg}}</li>
        {/foreach}
        </ul>
        {/if}
        <form action="" method="post">
        <div>
        <label for="userid">ユーザーID</label>
        <input type="text" class="form-control" name="userid" id="userid">
        </div>
        <div>
        <label for="password">パスワード</label>
        <input type="password" name="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">ログイン</button>
        </form> 
        </article>
    </div>
{/block}
