@extends('layouts.main')
@section('content')
<div>this is post page</div>
    <div>
        <div>
            <a class="btn btn-primary m-3" href="{{ route('post.create') }}">Create Post</a>
        </div>
        @foreach($posts as $post)
        <div><a href="{{ route('post.show', $post->id) }}">{{ $post->id }}. {{ $post->title }}</a></div>
        @endforeach
    </div>
@endsection
{{--@foreach($posts as $post)--}}
{{--    <p> {{ $post->title }} </p>--}}
{{--    <p> {{ $post->content }} </p>--}}
{{--    Лайки:--}}
{{--    <p> {{ $post->likes }} </p>--}}
{{--    Воу кутой пост--}}
{{--@endforeach--}}
