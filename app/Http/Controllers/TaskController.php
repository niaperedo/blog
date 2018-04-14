<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks =  Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function show($id)
    {
        $task = Task::find($id);

        return view('tasks.show', compact('task'));
    }

    /** Route Model Binding **/

    // public function show(Task $task)
    // {
    //     return view('tasks.show', compact('task'));
    // }
}