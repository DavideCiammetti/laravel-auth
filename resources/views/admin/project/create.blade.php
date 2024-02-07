@extends('layouts.admin')


@section('content')
    <div class="mt-3 mb-3">
        <h3 class="text-white">CREATE A PROJECT</h3>
    </div>
    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        {{-- title --}}
            <div class=" mb-3">
                <label for="inputEmail4" class="border rounded">Title</label>
                <input type="text" name="title" class="col-6 border-danger-b rounded @error('title') is-invalid @enderror" value="{{old('title')}}" placeholder="title" id="inputEmail4">
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{-- description --}}
            <div class="input-group mb-3">
                <label for="descTextArea">Description</label>
                <textarea class="border-danger-b rounded" rows="4" cols="65" name="description" placeholder="description" value="{{old('description')}}" id="descTextArea"></textarea>
            </div>

        <div class="d-flex row mb-3">
                {{-- staff --}}
            <div class="mb-3">
                <label for="staffInput" class="border rounded">Collaborators</label>
                <input type="text" name="staff" class="col-6 border-danger-b rounded" id="staffInput" value="{{old('staff')}}" placeholder="collaborators">
            </div>
            {{-- img --}}
            <div class="mb-1">
                <label for="imageInput" class="border rounded">Immage</label>
                <input type="text" name="img" class="p-1 pt-2 pb-2 col-6 border-danger-b rounded @error('img') is-invalid @enderror" value="{{old('img')}}" id="imageInput" placeholder="img">
            </div>
            @error('img')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <button type="submit" class="border-0 ps-2 pe-2 pb-1 pt-1 text-white button-create">Sign in</button>
        </div>
    </form>
@endsection


