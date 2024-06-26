<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function show(Task $task)
    {
        return view('tasks.show', ['task' => $task]);
    }

    public function store()
    {
        $data = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3']
        ]);

        Task::create($data);

        return redirect('/tasks');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Task $task)
    {
        $data = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3']
        ]);

        $task->update($data);

        return redirect('/tasks');
    }

    public function delete(Task $task)
    {
        $task->delete();
        return redirect('/tasks');
    }

    public function complete(Task $task)
    {
        $task->completed = !$task->completed;
        $task->save();
        return redirect('/tasks');
        /* 
        Quise hacer que al completar una tarea, se marcara como completada en la base de datos, pero no pude hacerlo funcionar.
        Así que lo dejo comentado.
        Y en su lugar, hice que al completar una tarea, se eliminara de la base de datos.
        */
        /*
        $task->completed = true;
        $task->save();
        return redirect('/tasks');
        */
    }
}