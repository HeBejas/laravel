@extends('test.comments.main')
@section('content')
<div style="display:flex;flex-direction: column;align-items: center;">
    <h4>Коментарий пользователя</h4>
    <h4>{{$comment->author}}</h4>
    <h4>{{$comment->date}}</h4>
        <div class="m-2" style="display:flex;flex-direction: column; align-items: left">
            <div>{{$comment->content}}</div>
        </div>

        <a href="{{ route('comments.index') }}" class="btn btn-primary mt-5">На главную</a>
        <a href="{{ route('comments.edit', $comment->id) }}"  class="btn btn-primary mt-3">Редактировать</a>

        <form action="{{route('comments.destroy',$comment->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-outline-danger m-3" value="Удалить">
        </form>

</div>

@endsection
