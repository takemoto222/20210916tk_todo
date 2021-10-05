<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

  </head>


  <body>
    <div class="background">

  <!--メインボックス-->
  <div class="inner">
    <h2>Todo List</h2>

    <!--追加-->
              @if ($errors->has('content'))

            {{$errors->first('content')}}

      @endif
    <form class="writespace-block" action="/" method="post">
    @csrf

      <input class="create-text" type="text" name="content">
      <input class="create-button" type="submit" value="追加">
    </form>
    <!--追加-->


    <!--タスク-->
<table>
  <tr class="tasc-title-tr">
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>



      @yield('content')




</body>
</html>