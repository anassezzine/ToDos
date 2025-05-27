<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTodoRequest;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoWebController extends Controller
{
    public function index()
    {
        $todos = Todo::where('user_id', Auth::id())->latest()->get();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }


    public function store(StoreTodoRequest $request)
    {
        Todo::create([
            'title' => $request->title,
            'user_id' => Auth::id(),
            'completed' => false,
        ]);

        return redirect()->route('todos.index')->with('success', 'Tâche ajoutée avec succès.');
    }


    public function destroy(Todo $todo)
    {
        abort_unless($todo->user_id === Auth::id(), 403);
        $todo->delete();

        return redirect()->route('todos.index')->with('success', 'Tâche supprimée.');
    }

}
