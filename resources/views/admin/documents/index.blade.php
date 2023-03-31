@extends('admin.index')

@section('title', 'Документы')

@section('content')
<div>
    <a href="{{route('admin.documents.create')}}" class="btn btn-primary">Добавить документ</a>

    <div class="card-container">
        @forelse($documents as $document)
            <div class="card">
                <a href="{{$document->document}}" download><img width="50px" src="/storage/doc.png" alt="{{$document->name}}"></a>
                <div class="card-text">
                    <p >{{$document->name}}</p>
                    <a href="{{route('admin.documents.delete', $document)}}" class="btn btn-danger">Удалить</a>
                </div>
            </div>
        @empty
            <div class="alert alert-primary" role="alert">
                Документов нет
            </div>
        @endforelse
    </div>
</div>
@endsection
