@extends('layouts.admin')


@section('content')
    <ul>
        @foreach ($project as $projects)
            <li>{{ $projects->title }}</li>
        @endforeach
    </ul>
@endsection