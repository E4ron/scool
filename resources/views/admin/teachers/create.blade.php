@extends('admin.index')

@section('title', 'Добавление')

@section('content')
<h2 class="mt-2">Добавление преподователя</h2>

<form method="post" action="{{route('admin.teachers.create')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Имя</label>
        <input required type="text" name="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Фамилия</label>
        <input required type="text" name="surname">
    </div>
    <div class="mb-3">
        <label class="form-label">Отчество</label>
        <input required type="text" name="patronymic">
    </div>
    <div class="mb-3">
        <label class="form-label">Должность</label>
        <input required type="text" name="position">
    </div>
    <div class="mb-3">
        <h5 class="mb-2">Изображение</h5>
        <input required name="image" type="file" accept="image/jpeg,image/png,image/jpg,image/bpm" class="form-control" id="inputGroupFile02">
    </div>
    <button type="submit" class="btn btn-primary">Создать</button>
</form>
@endsection
