<?php

namespace App\Http\Controllers;

use App\Project;
use App\Services\Twitter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('auth')->only(['show']); apply only to show route
    }

    public function index()
    {
        Auth::id();// 1
        Auth::user();// User
        Auth::check();//bool
        Auth::guest();//bool
        $projects = Project::where('owner_id', auth()->id())->get();

        return view('projects.index', compact('projects'));
    }

    public function show(Project $project, Twitter $twitter)
    {
        //dump Twitter service
//        dd($twitter);
        return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
        ]);
        // request('title') - other way of accessing request attributes
        // request(['title', 'description']); - mass accessing request attributes
        $attributes['owner_id'] = auth()->id();
        Project::create($attributes);

        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
        ]);

        $project->update($attributes);

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}
