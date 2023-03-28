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
</head>
<body>
<div class="admin-container">
    <div class="admin-panel">
        <h2>Админ панель</h2><a href="{{route('logout')}}" class="btn">Выход</a>
        <div class="nav-admin">
            <a href="{{route('admin.posts.index')}}" class="">Новости</a>
            <a href="{{route('admin.contacts.index')}}" class="">Контакты</a>
            <a href="{{route('admin.documents.index')}}" class="">Документы</a>
            <a href="{{route('admin.teachers.index')}}" class="">Преподователи</a>
            <div class="dropdown-admin">
                <a class="dropbtn-admin">Основные сведения</a>
                <div class="dropdown-content-admin">
                    <a href="{{route('admin.categories.index')}}" class="">Категория</a>
                    <a href="{{route('admin.intelligences.index')}}" class="">Основные сведения</a>
                </div>
              </div>
        </div>
    </div>
    @yield('content')
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@stack('scripts')
</body>
</html>
