<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Task;

class ProjectTasksController extends Controller
{
    public function update(Task $task, Request $request)
    {
        //Different ways of doing things 

//        if($request->has('completed')){
//            $task->complete();
//        }else{
//            $task->incomplete();
//        }
//
//        $request->has('completed') ? $task->complete() : $task->incomplete();

        $method = $request->has('completed') ? 'complete' : 'incomplete';
        $task->$method;

        return back();
    }

    public function store(Project $project, Request $request)
    {
        $attributes = $request->validate(['description' => 'required']);
        $project->addTask($attributes);

        return back();
    }
}
