@extends('admin.index')

@section('title', 'Добавить')

@section('content')
<div>
    <h2 class="mt-2">Добавить документы</h2>

<form method="post" action="{{route('admin.documents.create')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Название</label>
        <input required type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Файл</label>
        <input type="file" name="document" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Добавить</button>
</form>
</div>
@endsection
