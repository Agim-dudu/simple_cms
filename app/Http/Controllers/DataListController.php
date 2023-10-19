<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataListController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $tasks = Task::all();
        $users = User::all();

        return view('project.index', compact('projects', 'tasks', 'users'));
    }
}
