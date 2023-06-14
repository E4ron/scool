@extends('admin.index')

@section('title', 'Редактирование')

@section('content')
<div class="m-2">
    <h2 class="mt-2">Редактировать</h2>
    <form method="post" action="{{route('admin.organizationstructures.edit', $organizationstructure)}}" enctype="multipart/form-data">
        @method('post')
        @csrf
    <div class="mb-3">
        <label class="form-label">Название</label>
        <input required value="{{$organizationstructure->title}}"  type="text" name="title" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Руководитель</label>
        <input required value="{{$organizationstructure->branch_manager}}" type="text" name="branch_manager" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Электронная почта</label>
        <input required value="{{$organizationstructure->email}}" type="text" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Адрес</label>
        <input required value="{{$organizationstructure->address}}" type="text" name="address" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Телефон</label>
        <input required value="{{$organizationstructure->phone}}" type="text" name="phone" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Сайт</label>
        <input required value="{{$organizationstructure->website}}" type="text" name="website" class="form-control">
    </div>
        <div class="mb-3">
            <h5 class="mb-2">Изображение</h5>
            <input  name="image" type="file" accept="image/jpeg,image/png,image/jpg,image/bpm" class="form-control" id="inputGroupFile02">
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
</div>
@endsection
