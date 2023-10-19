<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest; // Import request

class TaskController extends Controller
{


    public function create()
    {
        $projects = Project::all(); // Ambil semua proyek dari database
        $users = User::all(); 
        // Tampilkan formulir pembuatan tugas
        return view('task.tambah-task', compact('projects', 'users'));
    }

    public function store(TaskRequest $request)
    {
        Task::create($request->validated());
        return redirect()->route('task.create')->with('success', 'Task created successfully.');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        $projects = Project::all(); // Ambil semua proyek dari database
        $users = User::all(); 
        return view('task.edit-task', compact('task','projects', 'users'));
    }

    public function update(TaskRequest $request, Task $task)
    {
        $task->update($request->validated());
        return redirect()->route('dashboard')->with('success', 'Task updated successfully.');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('dashboard')->with('success', 'Task deleted successfully.');
    }
}
