@extends('layouts.admin')


@section('content')
    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        {{-- title --}}
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" id="inputEmail4">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {{-- description --}}
        <div class="input-group">
            <textarea class="form-control" name="description" placeholder="description" value="{{old('description')}}" id="descTextArea"></textarea>
        </div>
          {{-- staff --}}
        <div class="col-12">
            <label for="staffInput" class="form-label">Collaborators</label>
            <input type="text" name="staff" class="form-control" id="staffInput" value="{{old('staff')}}" placeholder="collaborators">
        </div>
        {{-- img --}}
        <div class="col-12">
            <label for="imageInput" class="form-label">Immage</label>
            <input type="text" name="img" class="form-control @error('img') is-invalid @enderror" value="{{old('img')}}" id="imageInput" placeholder="immage jpg,jpeg,png">
        </div>
        @error('img')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
@endsection


