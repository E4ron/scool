@extends('admin.index')

@section('title', 'Документы')

@section('content')
    <a href="{{route('admin.documents.createPage')}}" class="btn btn-success">Добавить документ</a>

    <div class="d-flex flex-wrap">
        @forelse($documents as $document)
            <div class="card me-2" style="width: 18rem;">
                <a href="{{$document->document}}" download><img width="50px" src="/storage/doc.png" alt="{{$document->name}}"></a>
                <div class="card-body">
                    <p class="card-text">{{$document->name}}</p>
                    <a href="{{route('admin.documents.updatePage', $document)}}" class="btn btn-primary">Редактировать</a>
                    <a href="{{route('admin.documents.delete', $document)}}" class="btn btn-danger">Удалить</a>
                </div>
            </div>
        @empty
            <div class="alert alert-primary" role="alert">
                Документов нет
            </div>
        @endforelse
    </div>
@endsection
