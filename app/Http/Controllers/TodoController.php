<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;



class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }

    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        Todo::create($form);
        return redirect('/');

    }


public function edit(Request $request)
{
    $todo = Todo::index($request->id);
    return view('edit', ['form' => $todo]);
}
public function update(Request $request)
{
    $this->validate($request, todo::$rules);
    $form = $request->all();
    unset($form['_token']);
    todo::where('id', $request->id)->update($form);
    return redirect('/');
}



public function delete(Request $request)
{
    $param = ['id' => $request->id];
    $item = DB::select('select * from todos where id = :id', $param);
    return view('delete', ['form' => $item[0]]);
}
public function remove(Request $request)
{
    $param = ['id' => $request->id];
    DB::delete('delete from todos where id = :id', $param);
    return redirect('/');
}
}