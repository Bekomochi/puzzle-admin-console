<html>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


<h1 class="text-center">ゲームの管理</h1>
<!-- <h1> { {$title} } </h1> <!- { {$変数名} }　で出力 -->
<div class="d-flex justify-content-center">
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <form action="{{url('Admin/item')}}">
            @csrf
            <input class="btn btn-danger" type="submit" value="アイテム一覧を表示">
        </form>

        <form action="{{url('Admin/player')}}">
            @csrf
            <input class="btn btn-warning" type="submit" value="プレイヤー一覧を表示">
        </form>

        <form action="{{url('Admin/having')}}">
            @csrf
            <input class="btn btn-success" type="submit" value="所持アイテム一覧を表示">
        </form>

        <form method="post" action="{{url('auth/dologout')}}">
            @csrf
            <input class="btn btn-secondary" type="submit" value="ログアウト">
        </form>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>
