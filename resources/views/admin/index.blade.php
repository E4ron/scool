<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Админ панель - @yield('title')</title>

    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../css/styles.css">
</head>
<body>
<div class="admin-container">
    <div class="admin-panel">
        <h2>Админ панель</h2><a href="{{route('logout')}}" class="btn">Выход</a>
        <div class="nav-admin">
            <a href="{{route('admin.posts.index')}}" class="">Новости</a>
            <a href="{{route('admin.contacts.index')}}" class="">Контакты</a>
            <a href="{{route('admin.documents.index')}}" class="">Документы</a>
            <a href="{{route('admin.teachers.index')}}" class="">Преподаватели</a>
            <a href="{{route('admin.organizationstructures.index')}}" class="">Структура и органы управления образовательной организацией</a>
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

<script src="../../../../js/jquery.min.js"></script>
<script src="../../../../js/bootstrap.min.js"></script>
@stack('scripts')
</body>
</html>
