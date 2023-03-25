@extends('admin.index')

@section('title', 'Основные сведения')

@section('content')
    <a href="{{route('admin.intelligences.createPage')}}" class="btn btn-success">Создать сведения</a>
    <div class="d-flex flex-wrap">
        @forelse($intelligences as $intelligence)
            <div class="card me-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$intelligence->name}}</h5>
                    <p class="card-text">{{$intelligence->text}}</p>
                    
                    <a href="{{route('admin.intelligences.updatePage', $intelligence)}}" class="btn btn-primary">Редактировать</a>
                    <a href="{{route('admin.intelligences.delete', $intelligence)}}" class="btn btn-danger">Удалить</a>
                </div>
            </div>
        @empty
            <div class="alert alert-primary" role="alert">
                Сведений нет
            </div>
        @endforelse

    </div>
@endsection
