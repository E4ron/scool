@extends('admin.index')

@section('title', 'Редактирование контактов')

@section('content')
<div>
    <h2 class="mt-2">Редактирование контактов</h2>
    <form method="post" action="{{route('admin.contacts.edit', $contact)}}" enctype="multipart/form-data">
        @method('post')
        @csrf
        <div class="mb-3">
        <label class="form-label">Телефон</label>
        <input value="{{$contact->phone}}" required type="text" name="phone" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Почта</label>
        <input value="{{$contact->email}}" required type="text" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Факс</label>
        <input value="{{$contact->fax}}" required type="text" name="fax" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Адрес</label>
        <input value="{{$contact->address}}" required type="text" name="address" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Время работы</label>
        <input value="{{$contact->timejob}}" required type="text" name="timejob" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Длительность учебной недели</label>
        <input value="{{$contact->duration}}" required type="text" name="duration" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Приёмное время</label>
        <input value="{{$contact->reception}}" required type="text" name="reception" class="form-control">
    </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
</div>
@endsection
