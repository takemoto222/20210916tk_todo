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
  <tr>
    <form action="/" method="get">
      @csrf
    <td><!--時刻を埋め込む--></td>
    </form>
    <form action="/" method="post">
      @csrf
    <td><!--タスク名--></td>
    </form>
    <form action="/edit" method="post">
      @csrf
    <td><!--更新--></td>
    </form>
    <form action="/delete/{{$item->id}}" method="post">
      @csrf
    <td><!--削除--></td>
    </form>
  </tr>


</table>
    <!--タスク-->
  </div>
    <!--メインボックスここまで-->
</div>



    </div>
</body>
</html>