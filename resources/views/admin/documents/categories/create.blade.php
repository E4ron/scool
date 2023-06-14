@extends('admin.index')

@section('title', 'Создание категории')

@section('content')
<div class="m-2">
    <h2 class="mt-2">Создание категории</h2>

<form method="post" action="{{route('admin.documents.categories.create')}}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Название категории</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Создать</button>
</form>
</div>
@endsection
