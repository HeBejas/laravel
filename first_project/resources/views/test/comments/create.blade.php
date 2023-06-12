@extends('test.comments.main')
@section('content')

    <form
        action="{{ route('comment.store') }}" method="post"
        style="display: flex; flex-direction: column; justify-content: center; align-items: center"
    >
        @csrf
        <h3 class="mt-5">Написать коментарий</h3>
        <div class="mb-3" style="width:400px">
            <label for="disabledTextInput" class="form-label">Автор</label>
            <input type="text" id="disabledTextInput" name="author" class="form-control" placeholder="Имя">
        </div>
        <div class="mb-3" style="width:400px">
            <label for="disabledTextInput" class="form-label">Сообщение</label>
            <textarea class="form-control" name="content" placeholder="Текст"></textarea>
        </div>
        <input style = "display: none" id='time' name="date"></input>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>

    <script>
        var date = new Date();
        var d = date.getDay();
        var m = date.getMonth();
        var y = date.getFullYear()
        document.getElementById('time').value =   y +'.'+ m + '.' + d  ;
    </script>
@endsection
