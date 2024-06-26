<html>
<body>

<h1>アカウントを削除しますか？</h1>

<form method="post" action="{{route('accounts.delete')}}">
    <input type="submit" value="はい">
</form>
<form method="post" action="{{route('accounts.index')}}">
    <input type="submit" value="戻る">
</form>

</body>
</html>
