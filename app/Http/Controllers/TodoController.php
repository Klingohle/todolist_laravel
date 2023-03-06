<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        return view('/todos.index', compact('todos'));        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'todo' => 'required|min:3',
        ]);

        Todo::create($request->all());
      
        
        return redirect('/todos')->with('message', 'Todo erstellt!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $todo->done = ! $todo->done;
        $todo->save();

        return redirect('/todos')->with('message', 'Todo aktualisiert!');
    }

    /**
     * Remove the specified resource from storage.
     */
    /// todo: still needs to be implemented
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect('/todos')->with('message', 'Todo gelöscht!');
    }
}
