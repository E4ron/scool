@extends('admin.index')

@section('title', 'Редактирование товара')

@section('content')
<div>
    <form method="post" action="{{route('admin.intelligences.edit', $intelligence)}}" enctype="multipart/form-data">
        @method('post')
        @csrf
        <div class="mb-3">
            <label class="form-label">Название</label>
            <input required value="{{$intelligence->name}}" type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Текст</label>
            <input required value="{{$intelligence->text}}" type="text" name="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Категория товара</label>
            <select required name="categoryintelligences_id" class="form-select" aria-label="Default select example">
                @foreach($categories as $category)
                    <option @if($category->id === $intelligence->categoryintelligences_id) selected @endif value="{{$сategoryintelligences->id}}">{{$сategoryintelligences->title}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
</div>
@endsection
