@extends('admin.index')

@section('title', 'Редактирование контактов')

@section('content')
    <form method="post" action="{{route('admin.contacts.edit', $contact)}}" enctype="multipart/form-data">
        @method('post')
        @csrf
        <div class="mb-3">
        <label class="form-label">Телефон</label>
        <input value="{{$contact->phone}}" required type="text" name="phone">
    </div>
    <div class="mb-3">
        <label class="form-label">Почта</label>
        <input value="{{$contact->email}}" required type="text" name="email">
    </div>
    <div class="mb-3">
        <label class="form-label">Факс</label>
        <input value="{{$contact->fax}}" required type="text" name="fax">
    </div>
    <div class="mb-3">
        <label class="form-label">Адрес</label>
        <input value="{{$contact->address}}" required type="text" name="address">
    </div>
    <div class="mb-3">
        <label class="form-label">Время работы</label>
        <input value="{{$contact->timejob}}" required type="text" name="timejob">
    </div>
    <div class="mb-3">
        <label class="form-label">Длительность учебной недели</label>
        <input value="{{$contact->duration}}" required type="text" name="duration">
    </div>
    <div class="mb-3">
        <label class="form-label">Приёмное время</label>
        <input value="{{$contact->reception}}" required type="text" name="reception">
    </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
@endsection
