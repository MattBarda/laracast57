@extends('layouts.app')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>
    <div class="content">
        {{ $project->description }}
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </div>

    @if($project->tasks->count())
        <div class="box">
            @foreach($project->tasks as $task)
                <div>
                    <form method="POST" action="/completed-tasks/{{ $task->id  }}">
                        @if($task->completed)
                            @method('DELETE')
                        @endif
                        @csrf
                        <label for="completed" class="checkbox">
                            <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            {{ $task->description }}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif

    <form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
        @csrf
        <div class="field">
            <label class="label" for="description">New Task</label>
            <div class="control">
                <input type="text" class="input" name="description" placeholder="description">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create task</button>
            </div>
        </div>
    </form>
    @include('errors')

@endsection