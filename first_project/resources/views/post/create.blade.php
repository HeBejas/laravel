@extends('layouts.main')
@section('content')
<div>this is create page</div>
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input id="title" type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea id="content" name="content" class="form-control" placeholder="Content"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input id ="image" name="image" type="text"  class="form-control" placeholder="Image">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
