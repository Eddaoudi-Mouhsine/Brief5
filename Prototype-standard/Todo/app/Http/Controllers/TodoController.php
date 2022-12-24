<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
        // $this->middleware('auth')->only(['store','update','edit','create'])whatever;

    }

    public function index()
    {
        $tasks = Task::all();
        return view('todo', compact('tasks'));
    }

    public function store(Request $request)
    {


        $task = new Task();
        $task->name = $request->name;
        $task->save();
        return redirect('/todo');
    }
    public function testing()
    {
        return "middle index got passed";
    }
    // }
    public function contact()
    {
        return "middle contact got passed";
    }
}
