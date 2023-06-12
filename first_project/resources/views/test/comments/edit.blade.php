@extends('test.comments.main')
@section('content')

    <form
        action="{{ route('comments.update', $comment->id) }}" method="post"
        style="display: flex; flex-direction: column; justify-content: center; align-items: center"
    >
        @csrf
        @method('patch')
        <h3 class="mt-5">Редактировать коментарий</h3>
        <div class="mb-3" style="width:400px">
            <label for="disabledTextInput" class="form-label">Автор</label>
            <input type="text" id="disabledTextInput" name="author" class="form-control" placeholder="Имя" value="{{ $comment->author }}">
        </div>
        <div class="mb-3" style="width:400px">
            <label for="disabledTextInput" class="form-label">Сообщение</label>
            <textarea class="form-control" name="content" placeholder="Текст">{{ $comment->content }}</textarea>
        </div>
        <input style = "display: none" id='time' name="date"></input>
        <button type="submit" class="btn btn-primary">Изменить</button>
        <a href="{{route('comments.show', $comment->id)}}" class="btn btn-primary mt-3">Назад</a>
    </form>

    <script>
        var date = new Date();
        var d = date.getDay();
        var m = date.getMonth();
        var y = date.getFullYear()
        document.getElementById('time').value =   y +'.'+ m + '.' + d  ;
    </script>
@endsection
