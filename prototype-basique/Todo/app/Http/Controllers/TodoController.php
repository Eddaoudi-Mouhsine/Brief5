<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    //

    public function index()
    {
        $tasks = Task::all();
        return view('todo', compact('tasks'));
    }

        public function store(Request $request)
        {

            if (Auth::check()) {
                $task = new Task();
                $task->name = $request->name;
                $task->save();
                return redirect('/todo');
            } else {
                return redirect('/login');
            }
        }
    //     public function testing()
    //     {
    //         return "middle got passed on";
    //     }
    // }
}
