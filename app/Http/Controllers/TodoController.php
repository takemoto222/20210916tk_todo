<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
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
        $todo = Todo::index($request->create);
        return view('edit', ['form' => $todo]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        unset($form['_token']);
        Todo::where('create', $request->create)->update($form);
        return redirect('/');
    }




    public function delete(Request $request)
    {
        $todo = todo::index($request->id);
        return view('delete', ['form' => $todo]);
    }
    public function remove(Request $request)
    {
        Todo::index($request->id)->delete();
        return redirect('/');
    }
}