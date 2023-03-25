@extends('admin.index')

@section('title', 'Редактирование преподователя')

@section('content')
    <form method="post" action="{{route('admin.teachers.edit', $teacher)}}" enctype="multipart/form-data">
        @method('post')
        @csrf
        <div class="mb-3">
            <label class="form-label">Имя</label>
            <input required value="{{$teacher->name}}" type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Фамилия</label>
            <input required value="{{$teacher->surname}}" type="text" name="surname" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Отчество</label>
            <input required value="{{$teacher->patronymic}}" type="text" name="patronymic" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Должность</label>
            <input required value="{{$teacher->position}}" type="text" name="position" class="form-control">
        </div>
        <div class="mb-3">
            <h5 class="mb-2">Изображение</h5>
            <input required name="image" type="file" accept="image/jpeg,image/png,image/jpg,image/bpm" class="form-control" id="inputGroupFile02">
        </div>
        <button type="submit" class="btn btn-primary">Редактировать</button>
    </form>
@endsection
