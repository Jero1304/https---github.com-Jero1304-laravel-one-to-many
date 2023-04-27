@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h1>Title:
                    @if ($project->type)
                        <span class="badge bg-warning rounded-pill">{{ $project->type->name }}</span>

                    @else
                        <span class="badge bg-secondary rounded-pill">Nessuna Categoria</span>
                    @endif
                </h1>

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
