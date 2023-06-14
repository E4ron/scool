@extends('admin.index')

@section('title', 'Создание')

@section('content')
<div class="m-2">
    <h2 class="mt-2">Создать новость</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('admin.posts.create')}}" enctype="multipart/form-data">
    @csrf
       <div class="mb-3">
            <label class="form-label">Название</label>
            <input required  type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Текст</label>
            <input required type="text" name="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Дата</label>
            <input required type="date" name="date" class="form-control">
        </div>
        <div class="mb-3">
            <h5 class="mb-2">Изображение</h5>
            <input required name="image" type="file" accept="image/jpeg,image/png,image/jpg,image/bpm" class="form-control" id="inputGroupFile02">
        </div>
    <button type="submit" class="btn btn-primary">Создать</button>
</form>
</div>
@endsection
