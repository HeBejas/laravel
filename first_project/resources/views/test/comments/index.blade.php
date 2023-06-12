@extends('test.comments.main')
@section('content')
<div style="display:flex;flex-direction: column;align-items: center;">
    <h4>Коментарии</h4>
    <a href="{{ route('comments.create') }}" class="btn btn-primary">Написать</a>
    @foreach($comments as $comment)
        <div class="m-2" style="display:flex;flex-direction: column; align-items:left";>
            <a href="{{ route('comments.show', $comment->id) }}">
            <div>{{$comment->date}}. Пользователь: {{$comment->author}} написал:</div>
            <div>{{$comment->content}}</div>
            </a>
        </div>
    @endforeach
</div>

@endsection
<style>
    .comment-a{
        text-decoration: none;
        color: #1a202c;
    }
    .comment-a:hover{
        transition: 0.6s;
        transform: scale(1.1);
        color: #0d6efd !important;
    }

</style>
