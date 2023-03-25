@extends('admin.index')

@section('title', 'Создание')

@section('content')
<h2 class="mt-2">Создание новость</h2>

<form method="post" action="{{route('admin.posts.create')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Название</label>
        <input required type="text" name="title">
    </div>
    <div class="mb-3">
        <label class="form-label">Текст</label>
        <input required type="text" name="text">
    </div>
    <div class="mb-3">
        <h5 class="mb-2">Изображение</h5>
        <input required name="image" type="file" accept="image/jpeg,image/png,image/jpg,image/bpm" class="form-control" id="inputGroupFile02">
    </div>
    <button type="submit" class="btn btn-primary">Создать</button>
</form>
@endsection
