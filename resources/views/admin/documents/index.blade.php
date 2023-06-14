@extends('admin.index')

@section('title', 'Документы')

@section('content')
<div class="m-2">
    <a href="{{route('admin.documents.categories.index')}}" class="btn btn-success">Категории документов</a>
    <a href="{{route('admin.documents.create')}}" class="btn btn-success">Добавить документ</a>

    <div class="card-container">
        @forelse($documents as $document)
            <div class="card-document">
                <a href="{{asset($document->document)}}" download><img width="50px" src="{{asset('storage/img/doc.png')}}" alt="{{$document->name}}"></a>
                <div class="card-document-text">
                    <p >{{$document->name}}</p>
                </div>
                <a href="{{route('admin.documents.delete', $document->id)}}" class="btn btn-danger">Удалить</a>
            </div>
        @empty
            <div class="alert alert-primary" role="alert">
                Документов нет
            </div>
        @endforelse
    </div>
    {{$documents->links()}}
</div>
@endsection
