@extends('admin.index')

@section('title', 'Редактирование товара')

@section('content')
    <form method="post" action="{{route('admin.posts.edit', $post)}}" enctype="multipart/form-data">
        @method('post')
        @csrf
        <div class="mb-3">
            <label class="form-label">Название</label>
            <input required value="{{$post->title}}" type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Текст</label>
            <input required value="{{$post->text}}" type="text" name="text" class="form-control">
        </div>
        <div class="mb-3">
            <h5 class="mb-2">Изображение</h5>
            <input required name="image" type="file" accept="image/jpeg,image/png,image/jpg,image/bpm" class="form-control" id="inputGroupFile02">
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
@endsection
