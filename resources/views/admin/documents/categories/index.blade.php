@extends('admin.index')

@section('title', 'Категории')

@section('content')
<div class="m-2">
    <a href="{{route('admin.documents.categories.createPage')}}" class="btn btn-success">Добавить категорию документов</a>
<div class="card-container">
    @forelse($categorydocuments as $categorydocument)
    <div class="card-document">
        <div class="card-document-text">
            <p>{{$categorydocument->name}}</p>
        </div>
        <a href="{{route('admin.documents.categories.delete', $categorydocument)}}" class="btn btn-danger ml-4">Удалить</a>
    </div>
@empty
    <div class="alert alert-primary" role="alert">
        Категорий нет
    </div>
@endforelse
</div>

</div>
@endsection
