@extends('admin.index')

@section('title', 'Создание категории')

@section('content')
<div>
    <h2 class="mt-2">Создание категории</h2>

<form method="post" action="{{route('admin.categories.create')}}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Название категории</label>
        <input type="text" name="title" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Создать</button>
</form>
</div>
@endsection
