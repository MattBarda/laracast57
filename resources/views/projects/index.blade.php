@extends('layout')

@section('content')
    <h1>Projects list</h1>
    <ul>
        @foreach($projects as $project)
            <li>
                <a href="/projects/{{ $project->id }}">
                    {{ $project->title }}
                </a>
            </li>
        @endforeach
    </ul>
    <a class="button" href="/projects/create">Creeate a project</a>
@endsection
