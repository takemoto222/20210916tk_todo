@extends('layouts.default')
<style>
/*背景*/

body {
  background-color: #260d73;
}

/*メイン*/
.inner {
  width: 750px;
  border-radius: 12px;
  background-color: #fff;
  margin:15% auto;
  padding: 10px;
  box-shadow: #2f2f2e 2px 2px;
}

h2 {
  margin-left: 10px;
  padding: 10px;
}

/*追加*/
.writespace-block {
  height: 35px;
  border-radius: 5px;
  display: flex;
  justify-content: space-between;
  padding: 0 20px;
}
.create-text {
  width: 80%;
  height: 30px;
  border-radius: 5px;
  border: 1px solid rgb(195, 192, 192);
}

.create-button {
  border: 2px solid #df86f7;
  color: #df86f7;
  padding: 10px 15px;
  border-radius: 5px;
  font-size: 13px;
  font-weight: bold;
  margin-right: 20px;
  background-color: #fff;
}

.create-button:hover {
  background-color: #df86f7;
  color: #fff;
}
/*追加*/

/*タスク table*/
table {
  width: 100%;
  text-align: center;
  padding: 15px 20px;
}

td {
  padding: 13px 5px;
}

/*作成日　タスク名　削除　更新*/
th {
  padding: 10px 10px 15px;
}

.task-space {
  width: 85%;
  height: 25px;
  border-radius: 5px;
  border: 1px solid rgb(195, 192, 192);
}

/*更新*/
.update {
  border: 2px solid #f49c65;
  color: #f49c65;
  padding: 10px 15px;
  border-radius: 5px;
  font-size: 13px;
  font-weight: bold;
  background-color: #fff;
}

.update:hover {
  background-color: #f49c65;
  color: #fff;
}

/*削除*/
.delete {
  border: 2px solid #99f9ee;
  color: #99f9ee;
  padding: 10px 15px;
  border-radius: 5px;
  font-size: 13px;
  font-weight: bold;
  background-color: #fff;
}

.delete:hover {
  background-color: #99f9ee;
  color: #fff;
}
/*タスク table*/

</style>
@section('title', 'index.blade.php')


@section('content')


<table>
  @foreach ($items as $item)
  <tr>
    <!--日付-->
    <form action="/" method="get">
    @csrf
    <td></td>

<!--タスク入力結果-->

    <td><input class="task-space" type="text" name="content" value="{{$item->content}}"></td>

<!--更新ボタン-->

    <td><input class="update" type="submit" name="update" value="更新"> </td>

<!--削除ボタン-->

    <td><input class="delete" type="submit"  value="削除"></td>

  </tr>
@endforeach

</table>

    </form>
@endsection
    <!--タスク-->



