@extends('layouts.main')
@section('content')
<div>this is create page</div>
    <div>
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input id="title" type="text" name="title" class="form-control" placeholder="Title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea id="content" name="content" class="form-control" placeholder="Content" >{{$post->content}}    </textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input id ="image" name="image" type="text"  class="form-control" placeholder="Image" value="{{$post->image}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
