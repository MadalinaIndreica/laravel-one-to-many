@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>{{ $project->title }}</h2>
        <p>
           categoria: {{ $project->type ? $project->type->name : 'nessuna categoria' }}
        </p>
        <div class="mt-4">
            Data: {{ $project->created_at }}
        </div>

        <div class="mt-4">
            Slug: {{ $project->slug }}
        </div>

        <p class="mt-4">
            {{ $project->description }}
        </p>
    </div>
@endsection