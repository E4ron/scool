@extends('admin.index')

@section('title', 'Редактирование товара')

@section('content')
<div class="m-2">
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
            <label class="form-label">Категория</label>
            <select class="form-control" name="categoryintelligences_id" aria-label="Default select example">
                @foreach($categories as $category)
                    <option @if($category->id !== $intelligence->categoryintelligences_id) selected @endif value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
</div>


{{-- <div class="container text-center">
    <h1>Основные сведения</h1>
    <div class="intelligences-container">
        @if($categories)
        @foreach($categories as $category)
        <div class="intelligences-card">
            <h2>{{$category->title}}</h5>
                <div class="intelligences">
                    @foreach($intelligences as $intelligence)
                    @if($category->id === $intelligence->categoryintelligences_id)
                    <div class="intelligences-text">
                        <div class="intelligences-text-margin">
                            <h6 class="intelligences-text-name">{{$intelligence->name}}</h6>
                        </div>
                        <div class="intelligences-text-margin">
                            <p class="intelligences-text-text">{{$intelligence->text}}</p>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
        </div>
        @endforeach
        @endif
    </div>
</div> --}}

@endsection
