<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Comments</title>
</head>
<body>
<h1 style="text-align:center;">Комменты</h1>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('comments.index')  }}">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('comments.about')  }}">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('comments.contacts') }}">Контакты</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    <div> @yield('write')</div>
</div>

</body>
</html>
