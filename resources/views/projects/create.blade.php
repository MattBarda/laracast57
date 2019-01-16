@extends('layout')

@section('content')
<h1>Create a new Project</h1>

<form method="POST" action="/projects">
    @csrf
    <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" placeholder="title" value="{{ old('title') }}">
        </div>
    </div>
    <div class="field">
        <label class="label" for="description">Description</label>
        <div class="control">
            <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="title">{{ old('description') }}</textarea>
        </div>
    </div>
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Create project</button>
        </div>
    </div>
    @include('errors')

</form>
@endsection
