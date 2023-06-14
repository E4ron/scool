@extends('admin.index')

@section('title', 'Создание основные сведения')

@section('content')
<div class="m-2">
    <h2 class="mt-2">Создание</h2>

<form method="post" action="{{route('admin.intelligences.create')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Название</label>
            <input required  type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Текст</label>
            <input required type="text" name="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Категория товара</label>
            <select required name="categoryintelligences_id" class="form-select">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
</form>
</div>
@endsection
