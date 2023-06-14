@extends('admin.index')

@section('title', 'Добавить')

@section('content')
<div class="m-2">
    <h2 class="mt-2">Добавить контакты</h2>

<form method="post" action="{{route('admin.contacts.create')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Телефон</label>
        <input required type="phone" name="phone" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Почта</label>
        <input required type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Адрес</label>
        <input required type="text" name="address" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Время работы</label>
        <input required type="text" name="timejob" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Длительность учебной недели</label>
        <input required type="text" name="duration" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Приёмное время</label>
        <input required type="text" name="reception" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Добавить</button>
</form>
</div>
@endsection
