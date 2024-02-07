@extends('layouts.admin')


@section('content')
    <ul>
        @foreach ($project as $projects)
            <li>{{ $projects->title }}</li>
            <a class="text-black nav-link "href="{{ route('admin.projects.edit',  $projects->id) }}">Update project</a>
        @endforeach
    </ul>
@endsection