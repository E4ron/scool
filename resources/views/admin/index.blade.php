<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Админ панель - @yield('title')</title>

    <!-- Fonts -->

    <!-- Styles -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .change-font {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="container">
<div class="btn-group mt-3 w-100 ">
    <a href="{{route('admin.posts.index')}}" class="btn btn-outline-primary">Новости</a>
    <a href="{{route('admin.teachers.index')}}" class="btn btn-outline-primary">Преподователи</a>
    <a href="{{route('admin.contacts.index')}}" class="btn btn-outline-primary">Контакты</a>
    <a href="{{route('admin.documents.index')}}" class="btn btn-outline-primary">Документы</a>
    <a href="{{route('admin.categories.index')}}" class="btn btn-outline-primary">Категории Основные сведения</a>
    <a href="{{route('admin.intelligences.index')}}" class="btn btn-outline-primary">Основные сведения</a>
</div>
<a href="{{route('logout')}}" class="btn">Выход</a>
        @yield('content')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@stack('scripts')
</body>
</html>
