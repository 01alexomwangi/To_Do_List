<?php


namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;



class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        $task = null;
        return view('tasks.create',compact('task'));
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');

        $task = new Task();
        $task->title = $title;
        $task->description = $description;
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function edit($id)
    {
        $task = Task::where('id', '=', $id)->first();
        return view('tasks.create', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $new_title = $request->input('title');
        $new_description = $request->input('description');

        $task = Task::where('id', '=', $id)->first();
        $task->title = $new_title;
        $task->description = $new_description;
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function delete($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index');
    }
}


