<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"--}}
{{--          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">--}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title')ъуъ</title>
</head>

<body>


<div class="container">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="{{ route('index') }}"
               class="navbar-brand me-auto">Главная</a>
            <form action="/search"
                  method="GET">
                <input name="query" id="query" class="form-control" placeholder="Поиск статьи">

            </form>
            @guest

                <a href="{{ route('register') }}"
                   class="nav-item nav-link">Регистрация</a>
                <a href="{{ route('login') }}"
                   class="nav-item nav-link">Вход</a>
            @endguest
            @auth
                <a href="{{ route('home') }}"
                   class="nav-item nav-link">Мои статьи</a>
                <form action="{{ route('logout') }}" method="POST"
                      class="form-inline">
                    @csrf
                    <input type="submit" class="btn btn-danger"
                           value="Выход">
                </form>
            @endauth

        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
