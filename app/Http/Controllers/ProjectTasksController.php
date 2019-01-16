<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Task;

class ProjectTasksController extends Controller
{
    public function store(Project $project, Request $request)
    {
        $attributes = $request->validate(['description' => 'required']);
        $project->addTask($attributes);

        return back();
    }
}
