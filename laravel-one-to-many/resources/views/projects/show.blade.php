@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h1>Title: {{ $project->title }}</h1>
                <p>Slug: {{ $project->slug }}</p>
            </div>
            <div class="d-flex">
                <a class="btn btn-sm btn-warning" href="{{ route('projects.edit', $project) }}">Edit</a>
                @if ($project->trashed())
                    <form action="{{ route('projects.restore', $project) }}" method="POST">
                        @csrf
                        <input class="btn btn-sn btn-success" type="submit" value="Ripristina">
                    </form>
                @endif
            </div>
        </div>

    </div>

    <div class="container">
        <p>Content: {{ $project->content }}</p>
    </div>
@endsection
