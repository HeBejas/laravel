@extends('layouts.main')
@section('content')
<div>this is post page</div>
    <div>
        <div>{{ $post->id }}. {{ $post->title }} </div>
        <div>{{ $post->content }}</div>
    </div>
    <nav style="display:flex;">
        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-outline-primary m-1">Edit</a>
        <div>
            <form action="{{ route('post.destroy', $post->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-outline-danger m-1" value="Delete">
            </form>
        </div>
        <a href="{{ route('post.index') }}" class="btn btn-outline-primary m-1">Back</a>
    </nav>

@endsection

