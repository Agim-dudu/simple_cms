<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest; // Import request

class ProjectController extends Controller
{
    /**
     * Display a listing of the projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }


    public function create()
    {
        return view('project.tambah-project');
    }


    public function store(ProjectRequest $request)
    {
        Project::create($request->validated());
        return redirect()->route('project.create')->with('success', 'Project created successfully.');
    }


    public function show(Project $project)
    {
        return view('project.show', compact('project'));
    }


    public function edit(Project $project)
    {
        return view('project.edit-project', compact('project'));
    }


    public function update(ProjectRequest $request, Project $project)
    {
        $project->update($request->validated());
        return redirect()->route('dashboard')->with('success', 'Project updated successfully.');
    }


    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('dashboard')->with('success', 'Project deleted successfully.');
    }
}
