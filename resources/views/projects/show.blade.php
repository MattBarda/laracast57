@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>
    <h1 class="content">{{ $project->description }}</h1>
    <a href="/projects/{{ $project->id }}/edit">Edit</a>
@endsection