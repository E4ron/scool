@extends('admin.index')

@section('title', 'Создание')

@section('content')
<div class="m-2">
    <h2 class="mt-2">Создать</h2>
<form method="post" action="{{route('admin.organizationstructures.create')}}" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label class="form-label">Название</label>
            <input required  type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Руководитель</label>
            <input required type="text" name="branch_manager" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Электронная почта</label>
            <input required type="text" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Адрес</label>
            <input required type="text" name="address" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Телефон</label>
            <input required type="text" name="phone" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Сайт</label>
            <input required type="text" name="website" class="form-control">
        </div>
        <div class="mb-3">
            <h5 class="mb-2">Изображение</h5>
            <input required name="image" type="file" accept="image/jpeg,image/png,image/jpg,image/bpm" class="form-control" id="inputGroupFile02">
        </div>
    <button type="submit" class="btn btn-primary">Создать</button>
</form>
</div>
@endsection
