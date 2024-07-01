<html>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<div class="container">

    @extends('layouts.app')
    @section('title','アカウント表示画面')

    @section('body')
        <table class="table">
            <tr>
                <td>
                    ID
                </td>
                <td>
                    名前
                </td>
                <td>
                    パスワード
                </td>
                <td>
                    <form method="post" action="{{ route('accounts.delete') }}">
                        <input type="submit" value="削除">
                    </form>
                </td>
            </tr>


            @foreach($accounts as $account)
                <tr>
                    <td>
                        {{$account['id']}}
                    </td>
                    <td>
                        {{$account['name']}}
                    </td>
                    <td>
                        {{$account['password']}}
                    </td>
                </tr>
            @endforeach

        </table>

        <form action="{{route('accounts.create')}}">
            <input type="submit" value="新規登録">
        </form>
        <form action="{{route('accounts.index')}}">
            <div class="d-flex justify-content-center">
                <input class="btn btn-secondary" type="submit" value="戻る">
            </div>
        </form>
        <form action="{{route('accounts.delete')}}">
            <input type="submit" value="削除">
        </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
@endsection

</body>
</html>


